<?php

namespace Database\Seeders;

use App\Models\Import;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Import::create([
            'file_name' => 'report_june.xlsx',
            'imported_by' => 1, // admin ID
        ]);
    }
}
