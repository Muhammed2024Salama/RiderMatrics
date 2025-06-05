<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        City::insert([
            [
                'name' => 'Riyadh',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Jeddah',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Dammam',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
