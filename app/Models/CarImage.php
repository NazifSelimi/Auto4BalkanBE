<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class CarImage
 *
 * @property int $id
 * @property int $car_id
 * @property string $image_path
 * @property bool $is_primary
 * @property int $sort_order
 * @property-read Car $car
 */
class CarImage extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'car_id',
        'image_path',
        'is_primary',
        'sort_order',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'is_primary' => 'boolean',
        'sort_order' => 'integer',
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Get the car that owns the image.
     */
    public function car(): BelongsTo
    {
        return $this->belongsTo(Car::class);
    }

    // The following accessor should be moved to a resource or service for best practice
    // public function getImageUrlAttribute(): string { ... }

    /**
     * Boot the model.
     */
    protected static function boot()
    {
        parent::boot();

        // Ensure only one primary image per car
        static::saving(function ($image) {
            if ($image->is_primary) {
                static::where('car_id', $image->car_id)
                    ->where('id', '!=', $image->id)
                    ->update(['is_primary' => false]);
            }
        });
    }
}
