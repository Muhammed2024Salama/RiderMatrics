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
        $vehicles = ['Bike', 'Car', 'Scooter'];

        foreach ($vehicles as $vehicle) {
            Vehicle::create(['name' => $vehicle]);
        }
    }
}
