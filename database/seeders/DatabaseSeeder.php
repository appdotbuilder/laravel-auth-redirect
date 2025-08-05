<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create test users for each role
        User::factory()->create([
            'name' => 'Dr. Administrator',
            'email' => 'admin@klinik.com',
            'role' => 'admin',
        ]);

        User::factory()->create([
            'name' => 'Dr. Budi Santoso',
            'email' => 'dokter@klinik.com',
            'role' => 'dokter',
        ]);

        User::factory()->create([
            'name' => 'Siti Nurhaliza',
            'email' => 'resepsionis@klinik.com',
            'role' => 'resepsionis',
        ]);
    }
}
