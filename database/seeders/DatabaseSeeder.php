<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Property;
use App\Models\Room;
use App\Models\Booking;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Create Admin User - BINTANG
        User::create([
            'name' => 'Administrator',
            'email' => 'admin@kostkon.test',
            'password' => Hash::make('password123'),
            'role' => 'admin',
        ]);

        // Create Regular User - BINTANG
        User::create([
            'name' => 'Budi Santoso',
            'email' => 'budi@kostkon.test',
            'password' => Hash::make('password123'),
            'role' => 'penyewa',
        ]);

        // Create more test users - BINTANG
        User::create([
            'name' => 'Siti Rahayu',
            'email' => 'siti@kostkon.test',
            'password' => Hash::make('password123'),
            'role' => 'penyewa',
        ]);

        // Add sample properties - IMAM
        Property::create([
            'name' => 'Kost Merdeka',
            'address' => 'Jl. Merdeka No. 123, Jakarta Pusat',
            'description' => 'Kost strategis di pusat kota dengan fasilitas lengkap',
            'price_range_start' => 1500000,
            'price_range_end' => 2500000,
            'contact_phone' => '081234567890',
            'contact_email' => 'kostmerdeka@example.com',
            'status' => 'active',
        ]);

        Property::create([
            'name' => 'Kost Sejahtera',
            'address' => 'Jl. Sejahtera No. 45, Jakarta Selatan',
            'description' => 'Kost nyaman dengan lingkungan yang asri dan tenang',
            'price_range_start' => 1200000,
            'price_range_end' => 1800000,
            'contact_phone' => '081298765432',
            'contact_email' => 'kostsejahtera@example.com',
            'status' => 'active',
        ]);

        Property::create([
            'name' => 'Kost Pelangi',
            'address' => 'Jl. Pelangi No. 78, Jakarta Timur',
            'description' => 'Kost modern dengan desain minimalis dan fasilitas terbaru',
            'price_range_start' => 1800000,
            'price_range_end' => 3000000,
            'contact_phone' => '081311223344',
            'contact_email' => 'kostpelangi@example.com',
            'status' => 'active',
        ]);

        // Add sample rooms - WAHYU
        Room::create([
            'room_number' => 'A-101',
            'room_type' => 'standard',
            'price_per_month' => 1500000,
            'facilities' => ['AC', 'Kamar Mandi Dalam', 'WiFi'],
            'capacity' => 1,
            'status' => 'available',
            'description' => 'Kamar standard dengan AC dan kamar mandi dalam'
        ]);

        Room::create([
            'room_number' => 'A-102',
            'room_type' => 'deluxe',
            'price_per_month' => 2000000,
            'facilities' => ['AC', 'Kamar Mandi Dalam', 'WiFi', 'TV', 'Lemari'],
            'capacity' => 2,
            'status' => 'available',
            'description' => 'Kamar deluxe untuk 2 orang dengan fasilitas lengkap'
        ]);

        Room::create([
            'room_number' => 'B-201',
            'room_type' => 'executive',
            'price_per_month' => 3000000,
            'facilities' => ['AC', 'Kamar Mandi Dalam', 'WiFi', 'TV', 'Lemari', 'Meja Belajar'],
            'capacity' => 2,
            'status' => 'occupied',
            'description' => 'Kamar executive mewah dengan semua fasilitas premium'
        ]);

        Room::create([
            'room_number' => 'B-202',
            'room_type' => 'standard',
            'price_per_month' => 1200000,
            'facilities' => ['Kamar Mandi Dalam', 'WiFi'],
            'capacity' => 1,
            'status' => 'maintenance',
            'description' => 'Kamar standard dalam perbaikan'
        ]);

        Room::create([
            'room_number' => 'C-301',
            'room_type' => 'deluxe',
            'price_per_month' => 2200000,
            'facilities' => ['AC', 'Kamar Mandi Dalam', 'WiFi', 'TV', 'Lemari', 'Kulkas'],
            'capacity' => 2,
            'status' => 'available',
            'description' => 'Kamar deluxe dengan kulkas untuk penyimpanan makanan'
        ]);

        Room::create([
            'room_number' => 'C-302',
            'room_type' => 'standard',
            'price_per_month' => 1300000,
            'facilities' => ['Kipas Angin', 'Kamar Mandi Dalam', 'WiFi'],
            'capacity' => 1,
            'status' => 'available',
            'description' => 'Kamar standard ekonomis dengan kipas angin'
        ]);

        // Add sample bookings - WAHYU
        Booking::create([
            'customer_name' => 'Andi Wijaya',
            'customer_phone' => '081234567890',
            'customer_email' => 'andi@example.com',
            'room_number' => 'B-201',
            'check_in_date' => '2024-02-01',
            'check_out_date' => '2024-05-01',
            'duration_months' => 3,
            'total_price' => 9000000,
            'status' => 'checked_in',
            'notes' => 'Customer sudah check-in dan membayar DP'
        ]);

        Booking::create([
            'customer_name' => 'Sari Dewi',
            'customer_phone' => '081298765432',
            'customer_email' => 'sari@example.com',
            'room_number' => 'A-101',
            'check_in_date' => '2024-03-01',
            'check_out_date' => '2024-04-01',
            'duration_months' => 1,
            'total_price' => 1500000,
            'status' => 'pending',
            'notes' => 'Menunggu konfirmasi pembayaran'
        ]);

        Booking::create([
            'customer_name' => 'Rizki Pratama',
            'customer_phone' => '081355667788',
            'customer_email' => 'rizki@example.com',
            'room_number' => 'C-301',
            'check_in_date' => '2024-03-15',
            'check_out_date' => '2024-06-15',
            'duration_months' => 3,
            'total_price' => 6600000,
            'status' => 'confirmed',
            'notes' => 'Sudah konfirmasi via transfer bank'
        ]);

        Booking::create([
            'customer_name' => 'Dewi Lestari',
            'customer_phone' => '081244556677',
            'customer_email' => 'dewi@example.com',
            'room_number' => 'A-102',
            'check_in_date' => '2024-01-10',
            'check_out_date' => '2024-02-10',
            'duration_months' => 1,
            'total_price' => 2000000,
            'status' => 'checked_out',
            'notes' => 'Sudah check-out dan kamar dalam proses cleaning'
        ]);

        Booking::create([
            'customer_name' => 'Fajar Nugroho',
            'customer_phone' => '081266778899',
            'customer_email' => 'fajar@example.com',
            'room_number' => 'B-202',
            'check_in_date' => '2024-03-20',
            'check_out_date' => '2024-04-20',
            'duration_months' => 1,
            'total_price' => 1200000,
            'status' => 'cancelled',
            'notes' => 'Dibatalkan karena perubahan rencana'
        ]);
    }
}