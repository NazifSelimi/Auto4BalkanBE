<?php

namespace App\Http\Requests\Car;

use Illuminate\Foundation\Http\FormRequest;

class SearchCarRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'query' => ['nullable', 'string', 'max:255'],
            'min_price' => ['nullable', 'numeric', 'min:0'],
            'max_price' => ['nullable', 'numeric', 'min:0', 'gte:min_price'],
            'min_year' => ['nullable', 'integer', 'min:1950'],
            'max_year' => ['nullable', 'integer', 'min:1950', 'gte:min_year'],
            'fuel_type' => ['nullable', 'string', 'in:gasoline,diesel,electric,hybrid,lpg,all'],
            'transmission' => ['nullable', 'string', 'in:manual,automatic,cvt,semi-automatic,all'],
            'location' => ['nullable', 'string', 'max:255'],
            'sort_by' => ['nullable', 'string', 'in:price_asc,price_desc,year_asc,year_desc,mileage_asc,mileage_desc,created_at_desc,created_at_asc'],
            'per_page' => ['nullable', 'integer', 'min:1', 'max:50'],
            'page' => ['nullable', 'integer', 'min:1'],
        ];
    }

    public function messages(): array
    {
        return [
            'max_price.gte' => 'Maximum price must be greater than or equal to minimum price',
            'max_year.gte' => 'Maximum year must be greater than or equal to minimum year',
            'per_page.max' => 'Maximum 50 items per page allowed',
        ];
    }
}
