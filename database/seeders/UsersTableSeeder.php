<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'username' => 'testuser1',
                'email' => 'testuser1@example.com',
                'password' => Hash::make('password123'), // Default password
                'type' => 'admin', // Or any other role you want
                'created_at' => now(),
            ],
            [
                'username' => 'testuser2',
                'email' => 'testuser2@example.com',
                'password' => Hash::make('password123'), // Default password
                'type' => 'user', // Or any other role you want
                'created_at' => now(),
            ],
        ]);
    }
}
