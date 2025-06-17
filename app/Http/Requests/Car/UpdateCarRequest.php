<?php

namespace App\Http\Requests\Car;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCarRequest extends FormRequest
{
    public function authorize(): bool
    {
        $car = $this->route('car');
        return $car && $car->seller_id === $this->user()->id;
    }

    public function rules(): array
    {
        $currentYear = date('Y');
        
        return [
            'title' => ['sometimes', 'string', 'max:255', 'min:10'],
            'price' => ['sometimes', 'numeric', 'min:100', 'max:999999999'],
            'year' => ['sometimes', 'integer', 'min:1950', 'max:' . ($currentYear + 1)],
            'mileage' => ['sometimes', 'integer', 'min:0', 'max:999999'],
            'fuel_type' => ['sometimes', 'string', 'in:gasoline,diesel,electric,hybrid,lpg'],
            'transmission' => ['sometimes', 'string', 'in:manual,automatic,cvt,semi-automatic'],
            'location' => ['sometimes', 'string', 'max:255'],
            'description' => ['sometimes', 'string', 'min:50', 'max:2000'],
            'contact_phone' => ['nullable', 'string', 'max:20'],
            'contact_email' => ['nullable', 'email'],
            'video_url' => ['nullable', 'url'],
            'is_active' => ['sometimes', 'boolean'],
        ];
    }

    public function messages(): array
    {
        return [
            'title.min' => 'Car title must be at least 10 characters',
            'price.min' => 'Price must be at least $100',
            'year.min' => 'Year must be 1950 or later',
            'year.max' => 'Year cannot be more than next year',
            'fuel_type.in' => 'Invalid fuel type selected',
            'transmission.in' => 'Invalid transmission type selected',
            'description.min' => 'Description must be at least 50 characters',
        ];
    }
}
