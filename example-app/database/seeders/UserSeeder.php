<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'phong',
            'email' => 'admin@admin.com',
            'password' => Hash::make('123123'),
            'phone' => '0924250637',
            'avatar' => '1729779430.png',
            'role' => 'admin',
        ]);
        
        for ($i = 0; $i < 10; $i++) {
            DB::table('users')->insert([
                'name' => 'User ' . ($i + 1),
                'email' => 'user' . ($i + 1) . '@gmail.com',
                'password' => Hash::make('password'),
                'phone' => '0912345678' . ($i + 1),
                'avatar' => '1729779430.jpg',
                'role' => 'user',
            ]);

        }
    }
}
