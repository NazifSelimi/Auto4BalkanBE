<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{
    public function definition(): array
    {
        $fuelTypes = ['gasoline', 'diesel', 'electric', 'hybrid', 'lpg'];
        $transmissions = ['manual', 'automatic', 'cvt', 'semi-automatic'];
        $colors = ['Black', 'White', 'Silver', 'Red', 'Blue', 'Gray', 'Green', 'Yellow'];
        $bodyTypes = ['Sedan', 'SUV', 'Hatchback', 'Coupe', 'Convertible', 'Wagon', 'Pickup'];
        $driveTypes = ['fwd', 'rwd', 'awd', '4wd'];

        return [
            'title' => fake()->randomElement([
                'BMW 3 Series',
                'Mercedes C-Class',
                'Audi A4',
                'Toyota Camry',
                'Honda Accord',
                'Volkswagen Passat',
                'Ford Focus',
                'Nissan Altima',
                'Hyundai Elantra',
                'Mazda 6'
            ]) . ' ' . fake()->year(),
            'price' => fake()->numberBetween(5000, 80000),
            'year' => fake()->numberBetween(2010, 2024),
            'mileage' => fake()->numberBetween(0, 200000),
            'fuel_type' => fake()->randomElement($fuelTypes),
            'transmission' => fake()->randomElement($transmissions),
            'location' => fake()->city() . ', ' . fake()->state(),
            'description' => fake()->paragraphs(3, true),
            'seller_id' => User::factory(),
            'featured' => fake()->boolean(20), // 20% chance of being featured
            'has_360_view' => fake()->boolean(30),
            'is_active' => fake()->boolean(95), // 95% chance of being active
            'video_url' => fake()->boolean(40) ? fake()->url() : null,
            'contact_phone' => fake()->phoneNumber(),
            'contact_email' => fake()->safeEmail(),
            'views' => fake()->numberBetween(0, 1000),
        ];
    }

    public function featured(): static
    {
        return $this->state(fn (array $attributes) => [
            'featured' => true,
        ]);
    }

    public function inactive(): static
    {
        return $this->state(fn (array $attributes) => [
            'is_active' => false,
        ]);
    }
}
