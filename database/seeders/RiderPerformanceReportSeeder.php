<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Rider;
use App\Models\RiderPerformanceReport;
use App\Models\Vehicle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RiderPerformanceReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rider = Rider::inRandomOrder()->first();
        $city = City::inRandomOrder()->first();
        $vehicle = Vehicle::inRandomOrder()->first();

        RiderPerformanceReport::create([
            'rider_id' => $rider->id,
            'report_date' => now()->subDays(1)->toDateString(),
            'city_id' => $city->id,
            'vehicle_id' => $vehicle->id,
            'batch_number' => 5,
            'tga_status' => true,
            'error_codes' => '0',

            'shifts_count' => 2,
            'working_days' => 1,
            'planned_working_hours' => 8,
            'actual_working_hours' => 7,
            'avg_working_hours_per_day' => 7,
            'attendance_rate' => 90,
            'break_hours' => 1,
            'lost_hours' => 1,

            'acceptance_rate' => 85,
            'contact_rate' => 95,
            'no_shows' => 0,
            'no_show_percentage' => 0,
            'notified_deliveries' => 15,
            'completed_deliveries' => 14,
            'accepted_deliveries' => 14,
            'not_accepted_deliveries' => 1,
            'stacked_deliveries' => 3,
            'declined_deliveries' => 0,
            'cancelled_deliveries' => 1,

            'import_id' => 1,
        ]);
    }
}
