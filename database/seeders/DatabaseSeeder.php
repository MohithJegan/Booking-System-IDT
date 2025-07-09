<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'john@test.com',
            'phone_number' => '1234567890',
            'address' => '123 Main St',
            'city' => 'Toronto',
            'province' => 'Ontario',
            'postal_code' => 'M1A1A1',
            'subscribe' => 'no',
            'password' => Hash::make('john123'), 
            'role' => 'user',
        ]);

        $this->call([
            UserSeeder::class,
            AdminSeeder::class,
            ServiceSeeder::class,
            ItemSeeder::class
        ]);
    }
}
