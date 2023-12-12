<?php

namespace Database\Seeders;

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
        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@alma.com',
            'password' => Hash::make('alma15')
        ]);
        $admin -> assignRole('admin');

        $client = User::create([
            'name' => 'client',
            'email' => 'client@alma.com',
            'password' => Hash::make('alma15'),
        ]);
        $client -> assignRole('client');

    }
}
