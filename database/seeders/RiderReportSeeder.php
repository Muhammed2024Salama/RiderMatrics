<?php

namespace Database\Seeders;

use App\Models\Rider;
use App\Models\RiderReport;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RiderReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $riders = Rider::all();

        foreach ($riders as $rider) {
            RiderReport::create([
                'rider_id' => $rider->id,
                'report_date' => now()->subDays(rand(0, 30)),
                'total_deliveries' => rand(5, 20),
                'delivered_on_time' => rand(0, 5),
                'customer_rating' => rand(30, 50) / 10,
                'remarks' => 'Test report.',
            ]);
        }
    }
}
