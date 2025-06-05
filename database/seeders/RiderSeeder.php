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
        Rider::create([
            'user_id' => 2, // Rider One
            'external_rider_id' => 1001,
            'nationality' => 'Saudi',
            'city_id' => 1,
            'mobile_number' => '0551234567',
            'iqama_number' => '9876543210',
            'iqama_expiry_date' => '2025-12-31',
            'health_insurance_company' => 'Tawuniya',
            'health_insurance_expiry' => '2025-06-30',
            'email' => 'rider1@example.com',
        ]);
    }
}
