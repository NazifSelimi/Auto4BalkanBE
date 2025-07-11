<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Favorite extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'car_id',
    ];
    protected $with = []; // make sure it's not eager loading by default
    protected $hidden = ['user', 'car'];


    /**
     * Get the user that owns the favorite
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the car that is favorited
     */
    public function car(): BelongsTo
    {
        return $this->belongsTo(Car::class);
    }
}
