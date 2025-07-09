<?php

namespace Database\Seeders;

use App\Models\Item;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userIds = User::pluck('id');

        for ($i = 1; $i <= 50; $i++) {
            $type = fake()->randomElement(['bike', 'car', 'boat']);

            $name = match ($type) {
                'car'  => fake()->randomElement(['Toyota Corolla', 'Honda Civic', 'Ford Mustang', 'Tesla Model 3']),
                'bike' => fake()->randomElement(['Yamaha R15', 'Royal Enfield Classic', 'Honda CB500', 'KTM Duke 390']),
                'boat' => fake()->randomElement(['Bayliner VR5', 'Yamaha 242X', 'Boston Whaler', 'Sea Ray SLX']),
            };

            Item::create([
                'user_id'     => $userIds->random(),
                'type'        => $type,
                'name'        => $name,
                'description' => fake()->sentence(),
                'social'      => fake()->randomElement(['yes', 'no']),
            ]);
        }
    }
}
