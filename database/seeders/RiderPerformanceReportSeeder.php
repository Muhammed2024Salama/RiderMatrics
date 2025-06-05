<?php

namespace Database\Seeders;

use App\Models\RiderPerformanceReport;
use Illuminate\Database\Seeder;

class RiderPerformanceReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RiderPerformanceReport::create([
            'rider_id' => 1,
            'city_id' => 1,
            'vehicle_id' => 1,
            'report_date' => now()->toDateString(),

            'batch_number' => 1,
            'tga_status' => 1,
            'error_codes' => 'None',
            'shifts_count' => 5,
            'working_days' => 5,
            'planned_working_hours' => 40.00,
            'actual_working_hours' => 38.50,
            'avg_working_hours_per_day' => 7.70,
            'attendance_rate' => '96%',
            'break_hours' => 2.00,
            'lost_hours' => 1.50,
            'acceptance_rate' => '95%',
            'contact_rate' => '90%',
            'no_shows' => 1,
            'no_show_percent' => '2%',
            'notified_deliveries' => 100,
            'completed_deliveries' => 95,
            'accepted_deliveries' => 98,
            'not_accepted_deliveries' => 2,
            'stacked_deliveries' => 5,
            'declined_deliveries' => 3,
            'cancelled_deliveries' => 2,
        ]);
    }
}
