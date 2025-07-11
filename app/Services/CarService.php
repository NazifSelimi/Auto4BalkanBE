<?php

namespace App\Services;

use App\Models\Car;
use App\Models\CarImage;
use App\Models\CarSpecification;
use App\Models\Favorite;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\UploadedFile;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CarService
{
    /**
     * Get paginated cars with filters
     */
    public function getCars(array $filters = [], ?User $user = null): LengthAwarePaginator
    {
        $query = Car::with(['images', 'seller:id,name,avatar', 'specifications'])
            ->withCount('favorites')
            ->where('is_active', true);

        // Add user's favorite status if authenticated
        if ($user) {
            $query->with(['favorites' => function ($q) use ($user) {
                $q->where('user_id', $user->id);
            }]);
        }

        $query = $this->applyFilters($query, $filters);
        $query = $this->applySorting($query, $filters['sort_by'] ?? 'created_at_desc');

        $perPage = min($filters['per_page'] ?? 20, 50);

        return $query->paginate($perPage);
    }

    /**
     * Get featured cars
     */
    public function getFeaturedCars(?User $user = null): \Illuminate\Database\Eloquent\Collection
    {
        $query = Car::with([
            'images',
            // ✅ Ensure all fields needed by UserResource are loaded
            'seller:id,name,email,phone,avatar,email_verified_at,created_at,updated_at',
        ])
            ->where('featured', true)
            ->where('is_active', true)
            ->latest();

        if ($user) {
            $query->with([
                'favorites' => function ($q) use ($user) {
                    $q->where('user_id', $user->id);
                }
            ]);
        }

        return $query->get();
    }


    /**
     * Get single car with details
     */
    public function getCarById(int $id, ?User $user = null): Car
    {
        $query = Car::with(['images', 'seller:id,name,avatar,phone', 'specifications'])
            ->withCount('favorites');

        if ($user) {
            $query->with(['favorites' => function ($q) use ($user) {
                $q->where('user_id', $user->id);
            }]);
        }

        $car = $query->findOrFail($id);

        // Increment view count
        $car->increment('views');

        return $car;
    }

    /**
     * Search cars
     */
    public function searchCars(array $searchData, ?User $user = null): LengthAwarePaginator
    {
        return $this->getCars($searchData, $user);
    }

    /**
     * Create new car listing
     */
    public function createCar(array $data, User $seller): Car
    {
        return DB::transaction(function () use ($data, $seller) {
            // Create car
            $car = Car::create([
                'title' => $data['title'],
                'price' => $data['price'],
                'year' => $data['year'],
                'mileage' => $data['mileage'],
                'fuel_type' => $data['fuel_type'],
                'transmission' => $data['transmission'],
                'location' => $data['location'],
                'description' => $data['description'],
                'seller_id' => $seller->id,
                'video_url' => $data['video_url'] ?? null,
                'contact_phone' => $data['contact_phone'] ?? $seller->phone,
                'contact_email' => $data['contact_email'] ?? $seller->email,
                'is_active' => true,
                'featured' => false,
                'has_360_view' => false,
                'views' => 0,
            ]);

            // Create specifications
            CarSpecification::create([
                'car_id' => $car->id,
                'engine' => $data['specifications']['engine'],
                'power' => $data['specifications']['power'],
                'color' => $data['specifications']['color'],
                'doors' => $data['specifications']['doors'],
                'seats' => $data['specifications']['seats'],
                'body_type' => $data['specifications']['body_type'] ?? null,
                'drive_type' => $data['specifications']['drive_type'] ?? null,
            ]);

            // Handle image uploads
            if (isset($data['images'])) {
                $this->uploadCarImages($car, $data['images']);
            }

            return $car->load([
                'images',
                'specifications',
                'seller:id,name,email,phone,avatar,email_verified_at,created_at,updated_at',
                'favorites' => fn ($q) => $q->where('user_id', $seller->id),
            ])->loadCount('favorites');

        });
    }

    /**
     * Update car listing
     */
    public function updateCar(Car $car, array $data): Car
    {
        $car->update(array_filter($data, function ($value) {
            return $value !== null;
        }));

        return $car->fresh(['images', 'specifications', 'seller']);
    }

    /**
     * Delete car listing
     */
    public function deleteCar(Car $car): bool
    {
        return DB::transaction(function () use ($car) {
            // Delete images from storage
            foreach ($car->images as $image) {
                Storage::disk('public')->delete($image->image_path);
            }

            // Soft delete the car (this will cascade to related models)
            return $car->delete();
        });
    }

    /**
     * Toggle favorite status
     */
    public function toggleFavorite(Car $car, User $user): array
    {
        $favorite = Favorite::where('user_id', $user->id)
            ->where('car_id', $car->id)
            ->first();

        if ($favorite) {
            $favorite->delete();
            $isFavorited = false;
        } else {
            Favorite::create([
                'user_id' => $user->id,
                'car_id' => $car->id,
            ]);
            $isFavorited = true;
        }

        return [
            'is_favorited' => $isFavorited,
            'favorites_count' => $car->favorites()->count(),
        ];
    }

    /**
     * Get user's favorite cars
     */
    public function getUserFavorites(User $user): \Illuminate\Database\Eloquent\Collection
    {
        return Car::with(['images', 'seller:id,name,avatar'])
            ->whereHas('favorites', function ($query) use ($user) {
                $query->where('user_id', $user->id);
            })
            ->withCount('favorites')
            ->latest()
            ->get()
            ->map(function ($car) {
                $car->is_favorited = true;
                return $car;
            });
    }

    /**
     * Get user's car listings
     */
    public function getUserListings(User $user, array $filters = []): LengthAwarePaginator
    {
        $query = Car::with(['images'])
            ->where('seller_id', $user->id)
            ->withCount('favorites');

        if (isset($filters['status'])) {
            if ($filters['status'] === 'active') {
                $query->where('is_active', true);
            } elseif ($filters['status'] === 'inactive') {
                $query->where('is_active', false);
            }
        }

        $query = $this->applySorting($query, $filters['sort_by'] ?? 'created_at_desc');

        return $query->paginate($filters['per_page'] ?? 20);
    }

    /**
     * Upload car images
     */
    private function uploadCarImages(Car $car, array $images): void
    {
        foreach ($images as $index => $image) {
            if ($image instanceof UploadedFile) {
                $path = $image->store('cars', 'public');

                CarImage::create([
                    'car_id' => $car->id,
                    'image_path' => $path,
                    'is_primary' => $index === 0,
                    'sort_order' => $index,
                ]);
            }
        }
    }

    /**
     * Apply filters to query
     */
    private function applyFilters(Builder $query, array $filters): Builder
    {
        // Search query
        if (!empty($filters['query'])) {
            $searchTerm = $filters['query'];
            $query->where(function ($q) use ($searchTerm) {
                $q->where('title', 'LIKE', "%{$searchTerm}%")
                  ->orWhere('description', 'LIKE', "%{$searchTerm}%")
                  ->orWhere('location', 'LIKE', "%{$searchTerm}%");
            });
        }

        // Price range
        if (!empty($filters['min_price'])) {
            $query->where('price', '>=', $filters['min_price']);
        }
        if (!empty($filters['max_price'])) {
            $query->where('price', '<=', $filters['max_price']);
        }

        // Year range
        if (!empty($filters['min_year'])) {
            $query->where('year', '>=', $filters['min_year']);
        }
        if (!empty($filters['max_year'])) {
            $query->where('year', '<=', $filters['max_year']);
        }

        // Fuel type
        if (!empty($filters['fuel_type']) && $filters['fuel_type'] !== 'all') {
            $query->where('fuel_type', $filters['fuel_type']);
        }

        // Transmission
        if (!empty($filters['transmission']) && $filters['transmission'] !== 'all') {
            $query->where('transmission', $filters['transmission']);
        }

        // Location
        if (!empty($filters['location'])) {
            $query->where('location', 'LIKE', "%{$filters['location']}%");
        }

        return $query;
    }

    /**
     * Apply sorting to query
     */
    private function applySorting(Builder $query, string $sortBy): Builder
    {
        switch ($sortBy) {
            case 'price_asc':
                return $query->orderBy('price', 'asc');
            case 'price_desc':
                return $query->orderBy('price', 'desc');
            case 'year_asc':
                return $query->orderBy('year', 'asc');
            case 'year_desc':
                return $query->orderBy('year', 'desc');
            case 'mileage_asc':
                return $query->orderBy('mileage', 'asc');
            case 'mileage_desc':
                return $query->orderBy('mileage', 'desc');
            case 'created_at_asc':
                return $query->orderBy('created_at', 'asc');
            case 'created_at_desc':
            default:
                return $query->orderBy('created_at', 'desc');
        }
    }
}
