<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name'              => 'Super Admin',
            'email'             => 'superadmin@gmail.com',
            'role'              => 'Super Admin',
            'password'          => Hash::make('12345678'),
            'active_until'      => null,
        ]);
        
        User::create([
            'name'              => 'Admin',
            'email'             => 'admin@gmail.com',
            'role'              => 'Admin',
            'password'          => Hash::make('12345678'),
            'active_until'      => '2025-12-31',
        ]);

        User::create([
            'name'              => 'Admin Dua',
            'email'             => 'admindua@gmail.com',
            'role'              => 'Admin',
            'password'          => Hash::make('12345678'),
            'active_until'      => '2025-12-31',
        ]);

        User::create([
            'name'              => 'Admin Tiga',
            'email'             => 'admintiga@gmail.com',
            'role'              => 'Admin',
            'password'          => Hash::make('12345678'),
            'active_until'      => '2025-12-31',
        ]);
    }
}
