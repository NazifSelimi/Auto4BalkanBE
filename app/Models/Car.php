<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Builder;

class Car extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'price',
        'year',
        'mileage',
        'fuel_type',
        'transmission',
        'location',
        'description',
        'seller_id',
        'featured',
        'has_360_view',
        'video_url',
        'views',
        'is_active',
        'contact_phone',
        'contact_email',
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'year' => 'integer',
        'mileage' => 'integer',
        'featured' => 'boolean',
        'has_360_view' => 'boolean',
        'is_active' => 'boolean',
        'views' => 'integer',
    ];

    protected $with = ['images'];

    /**
     * Get the seller of the car
     */
    public function seller(): BelongsTo
    {
        return $this->belongsTo(User::class, 'seller_id');
    }

    /**
     * Get car images
     */
    public function images(): HasMany
    {
        return $this->hasMany(CarImage::class)->orderBy('sort_order');
    }

    /**
     * Get primary image
     */
    public function primaryImage(): HasOne
    {
        return $this->hasOne(CarImage::class)->where('is_primary', true);
    }

    /**
     * Get car specifications
     */
    public function specifications(): HasOne
    {
        return $this->hasOne(CarSpecification::class);
    }

    /**
     * Get car favorites
     */
    public function favorites(): HasMany
    {
        return $this->hasMany(Favorite::class);
    }

    /**
     * Users who favorited this car
     */
    public function favoritedBy(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'favorites')
            ->withTimestamps();
    }

    /**
     * Scope for active cars
     */
    public function scopeActive(Builder $query): Builder
    {
        return $query->where('is_active', true);
    }

    /**
     * Scope for featured cars
     */
    public function scopeFeatured(Builder $query): Builder
    {
        return $query->where('featured', true);
    }

    /**
     * Scope for search
     */
    public function scopeSearch(Builder $query, string $term): Builder
    {
        return $query->where(function ($q) use ($term) {
            $q->where('title', 'LIKE', "%{$term}%")
              ->orWhere('description', 'LIKE', "%{$term}%")
              ->orWhere('location', 'LIKE', "%{$term}%");
        });
    }

    /**
     * Scope for price range
     */
    public function scopePriceRange(Builder $query, ?float $minPrice, ?float $maxPrice): Builder
    {
        if ($minPrice !== null) {
            $query->where('price', '>=', $minPrice);
        }
        
        if ($maxPrice !== null) {
            $query->where('price', '<=', $maxPrice);
        }

        return $query;
    }

    /**
     * Scope for year range
     */
    public function scopeYearRange(Builder $query, ?int $minYear, ?int $maxYear): Builder
    {
        if ($minYear !== null) {
            $query->where('year', '>=', $minYear);
        }
        
        if ($maxYear !== null) {
            $query->where('year', '<=', $maxYear);
        }

        return $query;
    }

    /**
     * Get formatted price
     */
    public function getFormattedPriceAttribute(): string
    {
        return '$' . number_format($this->price, 0);
    }

    /**
     * Get formatted mileage
     */
    public function getFormattedMileageAttribute(): string
    {
        return number_format($this->mileage) . ' km';
    }

    /**
     * Get car age
     */
    public function getAgeAttribute(): int
    {
        return date('Y') - $this->year;
    }

    /**
     * Check if car is favorited by current user
     */
    public function getIsFavoritedAttribute(): bool
    {
        if (!auth()->check()) {
            return false;
        }

        return $this->favorites()
            ->where('user_id', auth()->id())
            ->exists();
    }

    /**
     * Get primary image URL
     */
    public function getPrimaryImageUrlAttribute(): ?string
    {
        $primaryImage = $this->images->where('is_primary', true)->first();
        return $primaryImage ? asset('storage/' . $primaryImage->image_path) : null;
    }
}
