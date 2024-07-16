<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExamVenueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('exam_venues')->insert([
            [
                'district' => 'Lusaka',
                'center' => 'Levy Mwanawasa Medical University (LMMU)'
               
            ],
            [
                'district' => 'Lusaka',
                'center' => 'University of Lusaka (UNILUS)'
               
            ],
            [
                'district' => 'Lusaka',
                'center' => 'Cavendish University'
               
            ],
            [
                'district' => 'Lusaka',
                'center' => 'University of Zambia (UNZA)'
               
            ],
            [
                'district' => 'Lusaka',
                'center' => 'Cancer Diseases Hospital (CDH)'
               
            ],
            [
                'district' => 'Lusaka',
                'center' => 'National Heart Diseases Hospital (NHDH)'
               
            ],
            [
                'district' => 'Lusaka',
                'center' => 'National Institute of Public Administration (NIPA)'
               
            ],
            [
                'district' => 'Lusaka',
                'center' => 'Zambia Institute of Advanced Legal Education (ZIALE)'
               
            ],
            [
                'district' => 'Lusaka',
                'center' => 'Evelyn Hone College of Applied Sciences'
               
            ],
            [
                'district' => 'Lusaka',
                'center' => 'Dental Training School'
               
            ],
            [
                'district' => 'Ndola',
                'center' => 'Copperbelt University- Ndola Campus (CBU-SOM)'
               
            ],
            [
                'district' => 'Ndola',
                'center' => 'Ndola Teaching Hospital (NTH)'
               
            ],
            [
                'district' => 'Lusaka',
                'center' => 'Ndola College of Biomedical Sciences (NCBS)'
               
            ],
            [
                'district' => 'Ndola',
                'center' => 'Ndola Community Health Assistants Training School (NCHATS)'
               
            ],
            [
                'district' => 'Ndola',
                'center' => 'Zambia University College of Technology (ZUCT)'
               
            ]
        ]);
    }
}
