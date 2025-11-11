<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Create Admin User
        User::create([
            'name' => 'Administrator',
            'email' => 'admin@kostkon.test',
            'password' => Hash::make('password123'),
            'role' => 'admin',
        ]);

        // Create Regular User
        User::create([
            'name' => 'Budi Santoso',
            'email' => 'budi@kostkon.test',
            'password' => Hash::make('password123'),
            'role' => 'penyewa',
        ]);

        // Create more test users
        User::create([
            'name' => 'Siti Rahayu',
            'email' => 'siti@kostkon.test',
            'password' => Hash::make('password123'),
            'role' => 'penyewa',
        ]);
    }
}