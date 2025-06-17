<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CarResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'price' => $this->price,
            'year' => $this->year,
            'mileage' => $this->mileage,
            'fuel_type' => $this->fuel_type,
            'transmission' => $this->transmission,
            'location' => $this->location,
            'description' => $this->description,
            'featured' => $this->featured,
            'has_360_view' => $this->has_360_view,
            'video_url' => $this->video_url,
            'views' => $this->views,
            'is_active' => $this->is_active,
            'contact_phone' => $this->contact_phone,
            'contact_email' => $this->contact_email,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            
            // Relationships
            'seller' => new UserResource($this->whenLoaded('seller')),
            'images' => CarImageResource::collection($this->whenLoaded('images')),
            'specifications' => new CarSpecificationResource($this->whenLoaded('specifications')),
            
            // Computed attributes
            'favorites_count' => $this->favorites_count ?? 0,
            'is_favorited' => $this->when(
                auth()->check(),
                function () {
                    return $this->favorites->where('user_id', auth()->id())->isNotEmpty();
                },
                false
            ),
            'primary_image' => $this->when(
                $this->relationLoaded('images'),
                function () {
                    $primaryImage = $this->images->where('is_primary', true)->first();
                    return $primaryImage ? asset('storage/' . $primaryImage->image_path) : null;
                }
            ),
        ];
    }
}
