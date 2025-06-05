<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            CitySeeder::class,
            VehicleSeeder::class,
            RiderSeeder::class,
            RiderVehicleSeeder::class,
            RiderPerformanceReportSeeder::class,
            SubscriptionSeeder::class,
            ImportSeeder::class,
            AuditLogSeeder::class,
        ]);
    }

}
