<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * Class User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string|null $phone
 * @property string|null $avatar
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property-read \Illuminate\Database\Eloquent\Collection|Car[] $cars
 * @property-read \Illuminate\Database\Eloquent\Collection|Favorite[] $favorites
 * @property-read \Illuminate\Database\Eloquent\Collection|Car[] $favoriteCars
 * @property-read int $active_listings_count
 * @property-read int $total_views
 */
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'avatar',
        'email_verified_at',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    /**
     * Get cars listed by this user.
     */
    public function cars(): HasMany
    {
        return $this->hasMany(Car::class, 'seller_id');
    }

    /**
     * Get user's favorites.
     */
    public function favorites(): HasMany
    {
        return $this->hasMany(Favorite::class);
    }

    /**
     * Get cars favorited by this user.
     */
    public function favoriteCars(): BelongsToMany
    {
        return $this->belongsToMany(Car::class, 'favorites')
            ->withTimestamps();
    }

    /**
     * Check if user has favorited a car.
     */
    public function hasFavorited(Car $car): bool
    {
        return $this->favorites()->where('car_id', $car->id)->exists();
    }

    /**
     * Get user's active listings count.
     */
    public function getActiveListingsCountAttribute(): int
    {
        return $this->cars()->where('is_active', true)->count();
    }

    /**
     * Get user's total views count.
     */
    public function getTotalViewsAttribute(): int
    {
        return $this->cars()->sum('views');
    }
}
