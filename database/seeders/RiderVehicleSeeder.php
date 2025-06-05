<?php

namespace Database\Seeders;

use App\Models\RiderVehicle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RiderVehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RiderVehicle::create([
            'rider_id' => 1,
            'vehicle_type' => 'Bike',
            'vehicle_brand' => 'Yamaha',
            'plate_number' => 'ABC123',
            'manufacture_year' => 2020,
            'operation_card_number' => 'OP123456',
            'vehicle_insurance_company' => 'Tawuniya',
            'vehicle_insurance_expiry' => '2025-12-31',
        ]);
    }
}
