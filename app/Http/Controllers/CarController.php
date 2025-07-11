<?php

namespace App\Http\Controllers;

use App\Http\Requests\Car\SearchCarRequest;
use App\Http\Requests\Car\StoreCarRequest;
use App\Http\Requests\Car\UpdateCarRequest;
use App\Http\Resources\CarResource;
use App\Models\Car;
use App\Services\CarService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Gate;

/**
 * Class CarController
 *
 * @package App\Http\Controllers
 */
class CarController extends Controller
{
    /**
     * CarController constructor.
     */
    public function __construct(
        private CarService $carService
    ) {}

    /**
     * Get all cars with pagination
     */
    public function index(Request $request): JsonResponse
    {
        try {
            $cars = $this->carService->getCars(
                $request->all(),
                $request->user()
            );

            return response()->json([
                'data' => CarResource::collection($cars->items()),
                'pagination' => [
                    'current_page' => $cars->currentPage(),
                    'last_page' => $cars->lastPage(),
                    'per_page' => $cars->perPage(),
                    'total' => $cars->total(),
                    'from' => $cars->firstItem(),
                    'to' => $cars->lastItem(),
                ],
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Failed to fetch cars',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Get featured cars
     */
    public function featured(Request $request): JsonResponse
    {
        try {
            $cars = $this->carService->getFeaturedCars($request->user());

            return response()->json([
                'data' => CarResource::collection($cars),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Failed to fetch featured cars',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Get single car details
     */
    public function show(Request $request, Car $car): JsonResponse
    {
        try {
            $carDetails = $this->carService->getCarById($car->id, $request->user());

            return response()->json([
                'data' => new CarResource($carDetails),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Failed to fetch car details',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Search cars
     */
    public function search(SearchCarRequest $request): JsonResponse
    {
        try {
            $cars = $this->carService->searchCars(
                $request->validated(),
                $request->user()
            );

            return response()->json([
                'data' => CarResource::collection($cars->items()),
                'pagination' => [
                    'current_page' => $cars->currentPage(),
                    'last_page' => $cars->lastPage(),
                    'per_page' => $cars->perPage(),
                    'total' => $cars->total(),
                    'from' => $cars->firstItem(),
                    'to' => $cars->lastItem(),
                ],
                'filters' => $request->validated(),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Search failed',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Store a new car listing
     */
    public function store(StoreCarRequest $request): JsonResponse
    {
        $car = $this->carService->createCar(
            $request->validated(),
            $request->user()
        );

        // Load all required relationships and prevent recursion
        $car->load([
            'images',
            'specifications',
            'seller:id,name,email,phone,avatar,email_verified_at,created_at,updated_at',
            'favorites' => fn ($q) => $q->where('user_id', $request->user()->id),
        ]);
        $car->loadCount('favorites');

        return response()->json([
            'message' => 'Car listed successfully',
            'car_id' => $car->id,
            'data' => new CarResource($car),
        ]);
    }



    /**
     * Update car listing
     */
    public function update(UpdateCarRequest $request, Car $car): JsonResponse
    {
        try {
            $updatedCar = $this->carService->updateCar($car, $request->validated());

            return response()->json([
                'message' => 'Car updated successfully',
                'data' => new CarResource($updatedCar),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Failed to update car',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Delete car listing
     */
    public function destroy(Request $request, Car $car): JsonResponse
    {
        // Use policy for authorization
        if (Gate::denies('delete', $car)) {
            return response()->json([
                'message' => 'Unauthorized to delete this car',
            ], 403);
        }

        try {
            $this->carService->deleteCar($car);

            return response()->json([
                'message' => 'Car deleted successfully',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Failed to delete car',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Toggle favorite status
     */
    public function toggleFavorite(Request $request, Car $car): JsonResponse
    {
        try {
            $result = $this->carService->toggleFavorite($car, $request->user());

            return response()->json([
                'message' => $result['is_favorited'] ? 'Added to favorites' : 'Removed from favorites',
                'data' => $result,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Failed to toggle favorite',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Get user's car listings
     */
    public function userListings(Request $request): JsonResponse
    {
        try {
            $cars = $this->carService->getUserListings(
                $request->user(),
                $request->all()
            );

            return response()->json([
                'data' => CarResource::collection($cars->items()),
                'pagination' => [
                    'current_page' => $cars->currentPage(),
                    'last_page' => $cars->lastPage(),
                    'per_page' => $cars->perPage(),
                    'total' => $cars->total(),
                    'from' => $cars->firstItem(),
                    'to' => $cars->lastItem(),
                ],
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Failed to fetch user listings',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Get user's favorite cars
     */
    public function favorites(Request $request): JsonResponse
    {
        try {
            $favorites = $this->carService->getUserFavorites($request->user());

            return response()->json([
                'data' => CarResource::collection($favorites),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Failed to fetch favorites',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}
