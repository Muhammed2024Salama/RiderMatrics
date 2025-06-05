<?php

namespace Database\Seeders;

use App\Models\Vehicle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Vehicle::insert([
            [
                'name' => 'Bike',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Car',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Scooter',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
