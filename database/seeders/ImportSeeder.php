<?php

namespace Database\Seeders;

use App\Models\Import;
use Illuminate\Database\Seeder;

class ImportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Import::create([
            'file_name' => 'riders_data.xlsx',
            'imported_by' => 1,
            'import_type' => 'riders',
            'status' => 'success',
            'total_rows' => 100,
            'success_rows' => 95,
            'failed_rows' => 5,
            'started_at' => now()->subMinutes(10),
            'finished_at' => now()
        ]);
    }
}
