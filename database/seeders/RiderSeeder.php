<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Rider;
use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RiderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cityIds = City::pluck('id');
        $vehicleIds = Vehicle::pluck('id');

        $riderUsers = User::where('type', 'rider')->get();

        foreach ($riderUsers as $user) {
            Rider::create([
                'user_id' => $user->id,
                'city_id' => $cityIds->random(),
                'vehicle_id' => $vehicleIds->random(),
                'batch_number' => rand(100, 999),
                'tga_status' => (bool)rand(0, 1),
            ]);
        }
    }
}
