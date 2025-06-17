<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CarSpecification extends Model
{
    use HasFactory;

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

    protected $casts = [
        'doors' => 'integer',
        'seats' => 'integer',
    ];

    /**
     * Get the car that owns the specifications
     */
    public function car(): BelongsTo
    {
        return $this->belongsTo(Car::class);
    }
}
