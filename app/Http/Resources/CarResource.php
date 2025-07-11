<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Class CarResource
 *
 * @property-read \App\Models\Car $resource
 */
class CarResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array<string, mixed>
     */
    public function toArray($request): array
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

            // Seller info (null-safe)
            'seller' => $this->when(
                $this->relationLoaded('seller') && $this->seller,
                fn () => [
                    'id' => $this->seller?->id,
                    'name' => $this->seller?->name,
                    'email' => $this->seller?->email,
                    'phone' => $this->seller?->phone,
                    'avatar' => $this->seller?->avatar ? asset('storage/' . $this->seller->avatar) : null,
                    'email_verified_at' => $this->seller?->email_verified_at,
                    'created_at' => $this->seller?->created_at,
                    'updated_at' => $this->seller?->updated_at,
                ]
            ),

            // Images as resources
            'images' => $this->when(
                $this->relationLoaded('images'),
                fn () => CarImageResource::collection($this->images)
            ),

            // Specifications as resource
            'specifications' => $this->when(
                $this->relationLoaded('specifications') && $this->specifications,
                fn () => new CarSpecificationResource($this->specifications)
            ),

            // Computed attributes
            'favorites_count' => $this->favorites_count ?? 0,
            'is_favorited' => $this->when(
                auth()->check() && $this->relationLoaded('favorites'),
                fn () => $this->favorites->where('user_id', auth()->id())->isNotEmpty(),
                false
            ),

            // Primary image (null-safe)
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
