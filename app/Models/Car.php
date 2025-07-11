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

/**
 * Class Car
 *
 * @property int $id
 * @property string $title
 * @property float $price
 * @property int $year
 * @property int $mileage
 * @property string $fuel_type
 * @property string $transmission
 * @property string $location
 * @property string $description
 * @property int $seller_id
 * @property bool $featured
 * @property bool $has_360_view
 * @property string|null $video_url
 * @property int $views
 * @property bool $is_active
 * @property string $contact_phone
 * @property string $contact_email
 * @property-read User $seller
 * @property-read \Illuminate\Database\Eloquent\Collection|CarImage[] $images
 * @property-read CarImage|null $primaryImage
 * @property-read CarSpecification|null $specifications
 * @property-read \Illuminate\Database\Eloquent\Collection|Favorite[] $favorites
 * @property-read \Illuminate\Database\Eloquent\Collection|User[] $favoritedBy
 * @property-read string $formatted_price
 * @property-read string $formatted_mileage
 * @property-read int $age
 */
class Car extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
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

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'price' => 'decimal:2',
        'year' => 'integer',
        'mileage' => 'integer',
        'featured' => 'boolean',
        'has_360_view' => 'boolean',
        'is_active' => 'boolean',
        'views' => 'integer',
    ];

    /**
     * The relations to eager load on every query.
     *
     * @var array<int, string>
     */
    protected $with = ['images'];

    // Relationships

    /**
     * Get the seller of the car.
     */
    public function seller(): BelongsTo
    {
        return $this->belongsTo(User::class, 'seller_id');
    }

    /**
     * Get car images.
     */
    public function images(): HasMany
    {
        return $this->hasMany(CarImage::class)->orderBy('sort_order');
    }

    /**
     * Get primary image.
     */
    public function primaryImage(): HasOne
    {
        return $this->hasOne(CarImage::class)->where('is_primary', true);
    }

    /**
     * Get car specifications.
     */
    public function specifications(): HasOne
    {
        return $this->hasOne(CarSpecification::class);
    }

    /**
     * Get car favorites.
     */
    public function favorites(): HasMany
    {
        return $this->hasMany(Favorite::class);
    }

    /**
     * Users who favorited this car.
     */
    public function favoritedBy(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'favorites')
            ->withTimestamps();
    }

    // Scopes

    /**
     * Scope for active cars.
     */
    public function scopeActive(Builder $query): Builder
    {
        return $query->where('is_active', true);
    }

    /**
     * Scope for featured cars.
     */
    public function scopeFeatured(Builder $query): Builder
    {
        return $query->where('featured', true);
    }

    /**
     * Scope for search.
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
     * Scope for price range.
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
     * Scope for year range.
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

    // Accessors

    /**
     * Get formatted price.
     */
    public function getFormattedPriceAttribute(): string
    {
        return '$' . number_format($this->price, 0);
    }

    /**
     * Get formatted mileage.
     */
    public function getFormattedMileageAttribute(): string
    {
        return number_format($this->mileage) . ' km';
    }

    /**
     * Get car age.
     */
    public function getAgeAttribute(): int
    {
        return date('Y') - $this->year;
    }

    // The following accessors should be moved to a resource or service for best practice
    // public function getIsFavoritedComputedAttribute(): bool { ... }
    // public function getPrimaryImageUrlAttribute(): ?string { ... }
}
