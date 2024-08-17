<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('programs')->insert([
            [
                'name' => 'Medical Doctors' //1
            ],
            [
                'name' => 'Clinical Ophthalmic Officers'  //2
            ],
            [
                'name' => 'Optometrists'//3
            ],
            [
                'name' => 'Optometry Technologists'//4
            ],
            [
                'name' => 'Biomedical Scientific Officers'//5
            ],
            [
                'name' => 'Medical Laboratory Technologists'//6
            ],
            [
                'name' => 'Pharmacists'//7
            ],
            [
                'name' => 'Pharmacy Technologists'//8
            ],
            [
                'name' => 'Dental Surgeons'//9
            ],
            [
                'name' => 'Dental Therapists'//10
            ],
            [
                'name' => 'Dental Technologists'//11
            ],
            [
                'name' => 'Dental Assistants'//12
            ],
            [
                'name' => 'Radiographers'//13
            ],
            [
                'name' => 'Radiation Therapists'//14
            ],
            [
                'name' => 'Radiography Technologists'//15
            ],
            [
                'name' => 'Medical Licentiates'//16
            ],
            [
                'name' => 'Clinical Officers General'//17
            ],
            [
                'name' => 'Clinical Officers Psychiatry'//18
            ],
            [
                'name' => 'Clinical Anaesthettic Officers'//19
            ],
            [
                'name' => 'Advanced Paramedical Anaesthesia'//20
            ],
            [
                'name' => 'Environmental Health Officers'//21
            ],
            [
                'name' => 'Public Health Officers'//22
            ],
            [
                'name' => 'Environmental Health Technologists'//23
            ],
            [
                'name' => 'Community Health Assistants'//24
            ],
            [
                'name' => 'Physiotherapists'//25
            ],
            [
                'name' => 'Physiotherapy Technologists'//26
            ],
            [
                'name' => 'Nutritionists'//27
            ],
            [
                'name' => 'Nutrition Technologists'//28
            ],
            [
                'name' => 'Clinical Psychologists'//29
            ],
            [
                'name' => 'Clinical Technologists'//30
            ],
            [
                'name' => 'Orthopaedic Technologists'//31
            ],
            [
                'name' => 'Mental Health Officers'//32
            ],
            [
                'name' => 'Emergency Care Officers'//33
            ]
        ]);
    }
}
