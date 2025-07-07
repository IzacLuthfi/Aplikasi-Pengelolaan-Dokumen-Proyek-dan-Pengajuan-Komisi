<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'email' => 'admin@example.com',
                'password' => Hash::make('password'),
                'role_id' => 1,
            ],
            [
                'name' => 'Project Manager 1',
                'email' => 'pm1@example.com',
                'password' => Hash::make('password'),
                'role_id' => 2,
            ],
            [
                'name' => 'Dokumentator 1',
                'email' => 'doc1@example.com',
                'password' => Hash::make('password'),
                'role_id' => 3,
            ],
        ]);
    }
}
