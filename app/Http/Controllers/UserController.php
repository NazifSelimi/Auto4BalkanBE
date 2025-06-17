<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Favorite;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Get user's favorite cars
     */
    public function favorites(Request $request)
    {
        $favorites = Car::with(['images', 'seller'])
            ->whereHas('favorites', function ($query) use ($request) {
                $query->where('user_id', $request->user()->id);
            })
            ->withCount('favorites')
            ->latest()
            ->get();

        // Add is_favorited flag
        $favorites->each(function ($car) {
            $car->is_favorited = true;
        });

        return response()->json($favorites);
    }

    /**
     * Get user statistics
     */
    public function stats(Request $request)
    {
        $user = $request->user();

        $totalListings = Car::where('seller_id', $user->id)->count();
        $totalFavorites = Favorite::where('user_id', $user->id)->count();
        $totalViews = Car::where('seller_id', $user->id)->sum('views');
        
        // Mock messages count for now
        $totalMessages = rand(5, 25);

        return response()->json([
            'total_listings' => $totalListings,
            'total_favorites' => $totalFavorites,
            'total_views' => $totalViews,
            'total_messages' => $totalMessages,
        ]);
    }

    /**
     * Get user's recent searches
     */
    public function recentSearches(Request $request)
    {
        // This would typically be stored in a separate table
        // For now, return empty array
        return response()->json([]);
    }

    /**
     * Save search query
     */
    public function saveSearch(Request $request)
    {
        $request->validate([
            'query' => 'required|string|max:255'
        ]);

        // This would typically save to a user_searches table
        // For now, just return success
        return response()->json([
            'message' => 'Search saved successfully'
        ]);
    }
}
