<?php

namespace App\Http\Requests\Car;

use Illuminate\Foundation\Http\FormRequest;

class StoreCarRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $currentYear = date('Y');
        
        return [
            'title' => ['required', 'string', 'max:255', 'min:10'],
            'price' => ['required', 'numeric', 'min:100', 'max:999999999'],
            'year' => ['required', 'integer', 'min:1950', 'max:' . ($currentYear + 1)],
            'mileage' => ['required', 'integer', 'min:0', 'max:999999'],
            'fuel_type' => ['required', 'string', 'in:gasoline,diesel,electric,hybrid,lpg'],
            'transmission' => ['required', 'string', 'in:manual,automatic,cvt,semi-automatic'],
            'location' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'min:50', 'max:2000'],
            'images' => ['required', 'array', 'min:1', 'max:10'],
            'images.*' => [
                'required',
                'image',
                'mimes:jpeg,png,jpg,webp',
                'max:5120', // 5MB
                'dimensions:min_width=400,min_height=300'
            ],
            
            // Specifications
            'specifications' => ['required', 'array'],
            'specifications.engine' => ['required', 'string', 'max:100'],
            'specifications.power' => ['required', 'string', 'max:50'],
            'specifications.color' => ['required', 'string', 'max:50'],
            'specifications.doors' => ['required', 'integer', 'min:2', 'max:5'],
            'specifications.seats' => ['required', 'integer', 'min:2', 'max:9'],
            'specifications.body_type' => ['nullable', 'string', 'max:50'],
            'specifications.drive_type' => ['nullable', 'string', 'in:fwd,rwd,awd,4wd'],
            
            // Optional fields
            'video_url' => ['nullable', 'url'],
            'contact_phone' => ['nullable', 'string', 'max:20'],
            'contact_email' => ['nullable', 'email'],
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Car title is required',
            'title.min' => 'Car title must be at least 10 characters',
            'price.required' => 'Price is required',
            'price.min' => 'Price must be at least $100',
            'year.required' => 'Manufacturing year is required',
            'year.min' => 'Year must be 1950 or later',
            'year.max' => 'Year cannot be more than next year',
            'mileage.required' => 'Mileage is required',
            'fuel_type.required' => 'Fuel type is required',
            'fuel_type.in' => 'Invalid fuel type selected',
            'transmission.required' => 'Transmission type is required',
            'transmission.in' => 'Invalid transmission type selected',
            'location.required' => 'Location is required',
            'description.required' => 'Description is required',
            'description.min' => 'Description must be at least 50 characters',
            'images.required' => 'At least one image is required',
            'images.min' => 'At least one image is required',
            'images.max' => 'Maximum 10 images allowed',
            'images.*.image' => 'All files must be images',
            'images.*.mimes' => 'Images must be jpeg, png, jpg, or webp format',
            'images.*.max' => 'Each image must not exceed 5MB',
            'images.*.dimensions' => 'Images must be at least 400x300 pixels',
            'specifications.required' => 'Car specifications are required',
            'specifications.engine.required' => 'Engine specification is required',
            'specifications.power.required' => 'Power specification is required',
            'specifications.color.required' => 'Color is required',
            'specifications.doors.required' => 'Number of doors is required',
            'specifications.seats.required' => 'Number of seats is required',
        ];
    }
}
