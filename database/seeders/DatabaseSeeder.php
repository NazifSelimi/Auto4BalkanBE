<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\CarSpecification;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Create test users
        $testUser = User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('password'),
        ]);

        $adminUser = User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
        ]);

        // Create additional users
        $users = User::factory(10)->create();
        $allUsers = collect([$testUser, $adminUser])->merge($users);

        // Create cars with specifications
        $allUsers->each(function ($user) {
            $carCount = rand(1, 5);
            
            Car::factory($carCount)
                ->for($user, 'seller')
                ->has(CarSpecification::factory(), 'specifications')
                ->create();
        });

        // Create some featured cars
        Car::factory(5)
            ->featured()
            ->for($allUsers->random(), 'seller')
            ->has(CarSpecification::factory(), 'specifications')
            ->create();

        $this->command->info('Database seeded successfully!');
        $this->command->info('Test credentials:');
        $this->command->info('Email: test@example.com');
        $this->command->info('Password: password');
        $this->command->info('');
        $this->command->info('Admin credentials:');
        $this->command->info('Email: admin@example.com');
        $this->command->info('Password: password');
    }
}
