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
        User::create([
            'name' => 'Muhammed Salama Admin',
            'email' => 'devmuhammedsalama@gmail.com',
            'password' => Hash::make('password'),
            'type' => UserType::ADMIN,
        ]);

        User::factory()->count(10)->create([
            'type' => 'rider',
        ]);
    }
}
