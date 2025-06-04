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
        $riders = User::where('type', 'rider')->get();

        foreach ($riders as $index => $user) {
            Rider::create([
                'user_id' => $user->id,
                'external_rider_id' => 1000 + $index,
            ]);
        }
    }
}
