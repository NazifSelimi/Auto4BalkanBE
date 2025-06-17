<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CarSpecificationResource extends JsonResource
{
    public function toArray(Request $request): array
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
