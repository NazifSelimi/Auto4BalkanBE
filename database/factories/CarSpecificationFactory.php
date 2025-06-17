<?php

namespace Database\Factories;

use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarSpecificationFactory extends Factory
{
    public function definition(): array
    {
        $engines = ['1.6L I4', '2.0L I4', '2.5L V6', '3.0L V6', '4.0L V8', '1.8L Turbo', '2.0L Turbo'];
        $powers = ['150 HP', '200 HP', '250 HP', '300 HP', '350 HP', '180 HP', '220 HP'];
        $colors = ['Black', 'White', 'Silver', 'Red', 'Blue', 'Gray', 'Green', 'Yellow', 'Brown', 'Gold'];
        $bodyTypes = ['Sedan', 'SUV', 'Hatchback', 'Coupe', 'Convertible', 'Wagon', 'Pickup'];
        $driveTypes = ['fwd', 'rwd', 'awd', '4wd'];

        return [
            'car_id' => Car::factory(),
            'engine' => fake()->randomElement($engines),
            'power' => fake()->randomElement($powers),
            'color' => fake()->randomElement($colors),
            'doors' => fake()->randomElement([2, 3, 4, 5]),
            'seats' => fake()->randomElement([2, 4, 5, 7, 8]),
            'body_type' => fake()->randomElement($bodyTypes),
            'drive_type' => fake()->randomElement($driveTypes),
        ];
    }
}
