<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExamCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('exam_categories')->insert([
            [
                'name' => 'Medical Doctors',
        
            ],
            [
                'name' => 'Clinical Ophthalmic Officers'
            ],
            [
                'name' => 'Optometrists'
            ],
            [
                'name' => 'Optometry Technologists'
            ],
            [
                'name' => 'Biomedical Scientific Officers'
            ],
            [
                'name' => 'Medical Laboratory Technologists'
            ],
            [
                'name' => 'Pharmacists'
            ],
            [
                'name' => 'Pharmacy Technologists'
            ],
            [
                'name' => 'Dental Surgeons'
            ],
            [
                'name' => 'Dental Therapists'
            ],
            [
                'name' => 'Dental Technologists'
            ],
            [
                'name' => 'Dental Assistants'
            ],
            [
                'name' => 'Radiographers'
            ],
            [
                'name' => 'Radiation Therapists'
            ],
            [
                'name' => 'Radiography Technologists'
            ],
            [
                'name' => 'Medical Licentiates'
            ],
            [
                'name' => 'Mental Health Officers'
            ],
            [
                'name' => 'Clinical Officers General'
            ],
            [
                'name' => 'Clinical Officers Psychiatry'
            ],
            [
                'name' => 'Clinical Anaesthettic Officers'
            ],
            [
                'name' => 'Advanced Paramedical Anaesthesia'
            ],
            [
                'name' => 'Emergency Care Officers'
            ],
            [
                'name' => 'Environmental Health Officers'
            ],
            [
                'name' => 'Public Health Officers'
            ],
            [
                'name' => 'Environmental Health Technologists'
            ],
            [
                'name' => 'Community Health Assistants'
            ],
            [
                'name' => 'Physiotherapists'
            ],
            [
                'name' => 'Physiotherapy Technologists'
            ],
            [
                'name' => 'Nutritionists'
            ],
            [
                'name' => 'Nutrition Technologists'
            ],
            [
                'name' => 'Clinical Psychologists'
            ],
            [
                'name' => 'Clinical Technologists'
            ],
            [
                'name' => 'Orthopaedic Technologists'
            ]
        ]);
        
    }
}
