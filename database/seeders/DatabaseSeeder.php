<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Add sample properties
\App\Models\Property::create([
    'name' => 'Kost Merdeka',
    'address' => 'Jl. Merdeka No. 123, Jakarta Pusat',
    'description' => 'Kost strategis di pusat kota dengan fasilitas lengkap',
    'price_range_start' => 1500000,
    'price_range_end' => 2500000,
    'contact_phone' => '081234567890',
    'contact_email' => 'kostmerdeka@example.com',
    'status' => 'active',
]);

\App\Models\Property::create([
    'name' => 'Kost Sejahtera',
    'address' => 'Jl. Sejahtera No. 45, Jakarta Selatan',
    'description' => 'Kost nyaman dengan lingkungan yang asri dan tenang',
    'price_range_start' => 1200000,
    'price_range_end' => 1800000,
    'contact_phone' => '081298765432',
    'contact_email' => 'kostsejahtera@example.com',
    'status' => 'active',
]);
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