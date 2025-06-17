<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;

class AuthService
{
    /**
     * Register a new user
     */
    public function register(array $data): array
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'phone' => $data['phone'] ?? null,
        ]);

        $token = $user->createToken('auth_token', ['*'], now()->addDays(30))->plainTextToken;

        return [
            'user' => $user,
            'token' => $token,
        ];
    }

    /**
     * Login user
     */
    public function login(array $credentials, bool $remember = false): array
    {
        if (!Auth::attempt($credentials, $remember)) {
            throw new AuthenticationException('Invalid credentials');
        }

        $user = Auth::user();
        
        // Revoke existing tokens if needed
        $user->tokens()->delete();
        
        $tokenExpiry = $remember ? now()->addDays(30) : now()->addHours(24);
        $token = $user->createToken('auth_token', ['*'], $tokenExpiry)->plainTextToken;

        return [
            'user' => $user,
            'token' => $token,
        ];
    }

    /**
     * Logout user
     */
    public function logout(User $user): void
    {
        $user->currentAccessToken()->delete();
    }

    /**
     * Logout from all devices
     */
    public function logoutFromAllDevices(User $user): void
    {
        $user->tokens()->delete();
    }

    /**
     * Update user profile
     */
    public function updateProfile(User $user, array $data): User
    {
        $user->update(array_filter($data));
        
        return $user->fresh();
    }

    /**
     * Upload user avatar
     */
    public function uploadAvatar(User $user, UploadedFile $file): string
    {
        // Delete old avatar if exists
        if ($user->avatar) {
            Storage::disk('public')->delete($user->avatar);
        }

        // Store new avatar
        $path = $file->store('avatars', 'public');
        
        $user->update(['avatar' => $path]);

        return Storage::disk('public')->url($path);
    }

    /**
     * Change user password
     */
    public function changePassword(User $user, string $currentPassword, string $newPassword): bool
    {
        if (!Hash::check($currentPassword, $user->password)) {
            return false;
        }

        $user->update([
            'password' => Hash::make($newPassword)
        ]);

        // Revoke all tokens to force re-login
        $user->tokens()->delete();

        return true;
    }

    /**
     * Get user statistics
     */
    public function getUserStats(User $user): array
    {
        return [
            'total_listings' => $user->cars()->count(),
            'active_listings' => $user->cars()->where('is_active', true)->count(),
            'total_favorites' => $user->favorites()->count(),
            'total_views' => $user->cars()->sum('views'),
            'total_inquiries' => 0, // Placeholder for future messaging system
        ];
    }
}
