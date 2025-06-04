<?php

namespace Database\Seeders;

use App\Models\AuditLog;
use App\Models\RiderPerformanceReport;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuditLogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $report = RiderPerformanceReport::first();

        AuditLog::create([
            'report_id' => $report->id,
            'action' => 'create',
            'changes' => json_encode(['completed_deliveries' => 14]),
            'performed_by' => 1,    // Admin
            'performed_at' => now(),
        ]);
    }
}
