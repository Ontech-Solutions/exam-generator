<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('provinces')->insert([
            ['name' => 'Central', 'code' => 'CEN'],
            ['name' => 'Copperbelt', 'code' => 'CB'],
            ['name' => 'Eastern', 'code' => 'EAS'],
            ['name' => 'Luapula', 'code' => 'LUA'],
            ['name' => 'Lusaka', 'code' => 'LUS'],
            ['name' => 'Muchinga', 'code' => 'MUC'],
            ['name' => 'Northern', 'code' => 'NOR'],
            ['name' => 'North-Western', 'code' => 'NW'],
            ['name' => 'Southern', 'code' => 'SOU'],
            ['name' => 'Western', 'code' => 'WES']
        ]);
    }
}
