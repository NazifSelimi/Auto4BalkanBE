<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

// Public routes
Route::prefix('auth')->group(function () {
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/login', [AuthController::class, 'login']);
});

// Car routes (public)
Route::prefix('cars')->group(function () {
    Route::get('/', [CarController::class, 'index']);
    Route::get('/featured', [CarController::class, 'featured']);
    Route::get('/{car}', [CarController::class, 'show']);
    Route::post('/search', [CarController::class, 'search']);
});

// Protected routes
Route::middleware('auth:sanctum')->group(function () {
    // Auth routes
    Route::prefix('auth')->group(function () {
        Route::get('/user', [AuthController::class, 'user']);
        Route::post('/logout', [AuthController::class, 'logout']);
        Route::post('/logout-all', [AuthController::class, 'logoutAll']);
        Route::put('/profile', [AuthController::class, 'updateProfile']);
        Route::post('/avatar', [AuthController::class, 'uploadAvatar']);
        Route::get('/stats', [AuthController::class, 'stats']);
    });

    // Car management routes
    Route::prefix('cars')->group(function () {
        Route::post('/', [CarController::class, 'store']);
        Route::put('/{car}', [CarController::class, 'update']);
        Route::delete('/{car}', [CarController::class, 'destroy']);
        Route::post('/{car}/favorite', [CarController::class, 'toggleFavorite']);
    });

    // User routes
    Route::prefix('user')->group(function () {
        Route::get('/cars', [CarController::class, 'userListings']);
        Route::get('/favorites', [CarController::class, 'favorites']);
    });
});
