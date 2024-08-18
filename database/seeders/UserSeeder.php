<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Wezi Munthali',
                'email' => 'wezi@ontech.co.zm',
                'password' => Hash::make('Admin.1234'),
                'user_id' => 1,
                'role_id' => 1,
                'branch_id' => 2
            ],
            [
                'name' => 'Prisca Mwanza',
                'email' => 'prisca@ontech.co.zm',
                'password' => Hash::make('Admin.1234'),
                'user_id' => 2,
                'role_id' => 2,
                'branch_id' => 1
            ],
            [
                'name' => 'Dennis Zitha',
                'email' => 'dennis@ontech.co.zm',
                'password' => Hash::make('Admin.1234'),
                'user_id' => 3,
                'role_id' => 3,
                'branch_id' => 2
            ],
            [
                'name' => 'Blessmore Mulenga',
                'email' => 'blessmore@ontech.co.zm',
                'password' => Hash::make('Admin.1234'),
                'user_id' => 4,
                'role_id' => 4,
                'branch_id' => 1
            ]
        ]);
    }
}
