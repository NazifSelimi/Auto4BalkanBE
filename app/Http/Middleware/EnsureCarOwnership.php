<?php

namespace App\Http\Middleware;

use App\Models\Car;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureCarOwnership
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        $carId = $request->route('car');
        
        if ($carId instanceof Car) {
            $car = $carId;
        } else {
            $car = Car::find($carId);
        }

        if (!$car || $car->seller_id !== $request->user()->id) {
            return response()->json([
                'message' => 'Unauthorized to access this car',
            ], 403);
        }

        return $next($request);
    }
}
