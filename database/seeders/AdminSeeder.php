<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'first_name' => 'Admin1',
                'last_name' => 'Owner',
                'email' => 'admin1@test.com',
                'phone_number' => '1234567890',
                'address' => '903 Main St',
                'city' => 'Toronto',
                'province' => 'Ontario',
                'postal_code' => 'M1C1D1',
                'subscribe' => 'no',
                'password' => Hash::make('admin123'), 
                'role' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'first_name' => 'Admin2',
                'last_name' => 'Owner',
                'email' => 'admin2@test.com',
                'phone_number' => '1234567890',
                'address' => '913 Main St',
                'city' => 'Toronto',
                'province' => 'Ontario',
                'postal_code' => 'M1W1T1',
                'subscribe' => 'no',
                'password' => Hash::make('admin123'), 
                'role' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }

}
