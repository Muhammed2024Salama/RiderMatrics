<?php

namespace Database\Seeders;

use App\Enums\UserType;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            [
                'name' => 'Admin User',
                'email' => 'admin@example.com',
                'phone' => '0500000001',
                'password' => Hash::make('password'),
                'type' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Rider One',
                'email' => 'rider1@example.com',
                'phone' => '0500000002',
                'password' => Hash::make('password'),
                'type' => 'rider',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
