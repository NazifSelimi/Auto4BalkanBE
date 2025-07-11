<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class CarSpecification
 *
 * @property int $id
 * @property int $car_id
 * @property string $engine
 * @property string $power
 * @property string $color
 * @property int $doors
 * @property int $seats
 * @property string $body_type
 * @property string $drive_type
 * @property-read Car $car
 */
class CarSpecification extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'car_id',
        'engine',
        'power',
        'color',
        'doors',
        'seats',
        'body_type',
        'drive_type',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'doors' => 'integer',
        'seats' => 'integer',
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Get the car that owns the specifications.
     */
    public function car(): BelongsTo
    {
        return $this->belongsTo(Car::class);
    }
}
