<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Class CarSpecificationResource
 *
 * @property-read \App\Models\CarSpecification $resource
 */
class CarSpecificationResource extends JsonResource
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
            'engine' => $this->engine,
            'power' => $this->power,
            'color' => $this->color,
            'doors' => $this->doors,
            'seats' => $this->seats,
            'body_type' => $this->body_type,
            'drive_type' => $this->drive_type,
        ];
    }
}
