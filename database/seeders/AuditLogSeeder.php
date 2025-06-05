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
        AuditLog::create([
            'user_id' => 1,
            'action' => 'create',
            'model_type' => 'App\Models\Rider',
            'model_id' => 1,
            'description' => 'Created new rider record',
            'ip_address' => '127.0.0.1',
            'user_agent' => 'PostmanRuntime/7.32.0',
        ]);
    }
}
