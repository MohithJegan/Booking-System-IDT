<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 50; $i++) {
            Service::create([
                'name' => "Service $i",
                'description' => "This is the description for Service $i.",
                'price' => rand(50, 500),
            ]);
        }
    }
}
