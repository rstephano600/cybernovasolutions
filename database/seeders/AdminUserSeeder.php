<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create Admin if not exists
        User::firstOrCreate(
            ['email' => 'admin@cybernova.com'], 
            [
                'name' => 'Nuru Robert',
                'email' => 'admin@cybernova.com',
                'phone' => '0657856790',
                'password' => Hash::make('cns600!2025'),
                'role' => 'admin',
                'status' => 'active',
            ]
        );
    }
}
