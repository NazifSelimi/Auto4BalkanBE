<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'avatar',
        'email_verified_at',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    /**
     * Get cars listed by this user
     */
    public function cars(): HasMany
    {
        return $this->hasMany(Car::class, 'seller_id');
    }

    /**
     * Get user's favorites
     */
    public function favorites(): HasMany
    {
        return $this->hasMany(Favorite::class);
    }

    /**
     * Get cars favorited by this user
     */
    public function favoriteCars(): BelongsToMany
    {
        return $this->belongsToMany(Car::class, 'favorites')
            ->withTimestamps();
    }

    /**
     * Check if user has favorited a car
     */
    public function hasFavorited(Car $car): bool
    {
        return $this->favorites()->where('car_id', $car->id)->exists();
    }

    /**
     * Get user's active listings count
     */
    public function getActiveListingsCountAttribute(): int
    {
        return $this->cars()->where('is_active', true)->count();
    }

    /**
     * Get user's total views count
     */
    public function getTotalViewsAttribute(): int
    {
        return $this->cars()->sum('views');
    }
}
