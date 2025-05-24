<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Admin Masta',
            'username' => 'admin',
            'email' => 'admin@mastavape.com',
            'password' => Hash::make('password123'),
        ]);
    }
}