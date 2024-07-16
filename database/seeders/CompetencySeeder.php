<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompetencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('competencies')->insert([
            [
                'program_id' => 1,  //Medical Doctors
                'competency' => '',
                'weighting' => ''
            ],
            
            [
                'program_id' => 2, //Clinical Ophthalmic Officers
                'name' => 'Patient Care',
                'weight' => '60%'
            ],
            [
                'program_id' => 2, //Clinical Ophthalmic Officers
                'name' => 'Ophthalmic Knowledge',
                'weight' => '20%'
            ],
            [
                'program_id' => 2, //Clinical Ophthalmic Officers
                'name' => 'Practice-based Learning and Improvement',
                'weight' =>' 5%' 
            ],
            [
                'program_id' => 2, //Clinical Ophthalmic Officers
                'name' => 'Communication Skills',
                'weight' =>' 5%' 
            ],
            [
                'program_id' => 2, //Clinical Ophthalmic Officers
                'name' => 'Professionalism',
                'weight' =>' 5%' 
            ],
            [
                'program_id' => 3, //Optometrists 
                'name' => 'Systems-based Practice',
                'weight' =>' 5%' 
            ],
            [
                'program_id' => 4, //Optometry Technologists
                'name' => 'Pa',
                'weight' =>' 5%'  
            ],
            [
                'program_id' => 5, //Biomedical Scientific Officers
                'name' => 'Pa',
                'weight' =>' 5%'  
            ],
            [
                'program_id' => 6, //Medical Laboratory Technologists
                'name' => 'Pa',
                'weight' =>' 5%'  
            ],
            [
                'program_id' => 7, //Pharmacists
                'name' => 'Pa',
                'weight' =>' 5%'  
            ],
            [
                'program_id' => 8, //Pharmacy Technologists
                'name' => 'Pa',
                'weight' =>' 5%'  
            ],
            [
                'program_id' => 9, //Dental Surgeons
                'name' => 'Application of knowledgein Dental Sciences ',
                'weight' => '60%'
            ],
            [
                'program_id' => 9, //Dental Surgeons
                'name' => 'Performance of quality and reliable Clinical techniques proficiently ',
                'weight' => '10%'
            ],
            [
                'program_id' => 9, //Dental Surgeons
                'name' => 'Proficiency',
                'weight' => '10%'
            ],
            [
                'program_id' => 9, //Dental Surgeons
                'name' => 'Leadership and management skills',
                'weight' => '15%'
            ],
            [
                'program_id' => 9, //Dental Surgeons
                'name' => 'Professionalism, Ethical Conduct including adherence to good dental practice, safety and health guidelines',
                'weight' => '15%'
            ],
            [
                'program_id' => 10, //Dental Therapists
                'name' => 'Pa',
                'weight' =>' 5%'  
            ],
            [
                'program_id' => 11, //Dental Technologists
                'name' => 'Application of knowledge in Dental Technology',
                'weight' => '20%'
            ],
            [
                'program_id' => 11, //Dental Technologists
                'name' => 'Performance of quality and reliability in the dental laboratory',
                'weight' => '30%'
            ],
            [
                'program_id' => 11, //Dental Technologists
                'name' => 'Proficiency in Techniques & Technology',
                'weight' => '30%'
            ],
            [
                'program_id' => 11, //Dental Technologists
                'name' => 'Leadership and management skills ',
                'weight' => '10%'
            ],
            [
                'program_id' => 11, //Dental Technologists
                'name' => 'Professionalism, Ethical Conduct including adherence to good dental practice, safety and health guidelines',
                'weight' => '10%'
            ],
            [
                'program_id' => 12, //Dental Assistants
                'name' => 'Application of knowledge in Dental Technology',
                'weight' => '50%'
            ],
            [
                'program_id' => 12, //Dental Assistants
                'name' => 'Performance of quality and reliability in the dental laboratory',
                'weight' => '20%'
            ],
            [
                'program_id' => 12, //Dental Assistants
                'name' => 'Leadership and management skills ',
                'weight' => '15%'
            ],
            [
                'program_id' => 12, //Dental Assistants
                'name' => 'Professionalism, Ethical Conduct including adherence to good dental practice, safety and health guidelines',
                'weight' => '15%'
            ],
            [
                'program_id' => 13, //Radiographers
                'name' => 'Pa',
                'weight' =>' 5%'  
            ],
            [
                'program_id' => 14, //Radiation Therapists
                'name' => 'Pa',
                'weight' =>' 5%'  
            ],
            [
                'program_id' => 14, //Radiation Therapists
                'name' => 'Pa',
                'weight' =>' 5%'  
            ],
            [
                'program_id' => 14, //Radiation Therapists
                'name' => 'Pa',
                'weight' =>' 5%'  
            ],
            [
                'program_id' => 14, //Radiation Therapists
                'name' => 'Pa',
                'weight' =>' 5%'  
            ],
            [
                'program_id' => 15, //Radiography Technologists
                'name' => 'Pa',
                'weight' =>' 5%'  
            ],
            [
                'program_id' => 16, //Medical Licentiates
                'name' => 'Pa',
                'weight' =>' 5%'  
            ],
            [
                'program_id' => 17, //Mental Health Officers
                'name' => 'Pa',
                'weight' =>' 5%'  
            ],
            [
                'program_id' => 18, //Clinical Officers General
                'name' => 'Pa',
                'weight' =>' 5%'  
            ],
            [
                'program_id' => 19, //Clinical Officers Psychiatry
                'name' => 'Pa',
                'weight' =>' 5%'  
            ],
            [
                'program_id' => 20, //Clinical Anaesthettic Officers
                'name' => 'Medical Knowledge',
                'weight' => '20%'
            ],
            [
                'program_id' => 20, //Clinical Anaesthettic Officers
                'name' => 'Patient Care',
                'weight' => '60%'
            ],
            [
                'program_id' => 20, //Clinical Anaesthettic Officers
                'name' => 'Practice-based Learning & Improvement',
                'weight' =>' 5%'
            ],
            [
                'program_id' => 20, //Clinical Anaesthettic Officers
                'name' => 'Interpersonal & Communication Kills',
                'weight' =>' 5%'
            ],
            [
                'program_id' => 20, //Clinical Anaesthettic Officers
                'name' => 'Professionalism',
                'weight' =>' 5%'
            ],
            [
                'program_id' => 20, //Clinical Anaesthettic Officers
                'name' => 'System-based Practice',
                'weight' =>' 5%'
            ],
            [
                'program_id' => 21,  //Advanced Paramedical Anaesthesia
                'name' => 'Pa' 
            ],
            [
                'program_id' => 22, //Emergency Care Officers
                'name' => 'Pa' 
            ],
            [
                'program_id' => 23, //Environmental Health Officers
                'name' => 'Pa' 
            ],
            [
                'program_id' => 24, //Public Health Officers
                'name' => 'Pa' 
            ],
            [
                'program_id' => 25, //Environmental Health Technologists
                'name' => 'Pa' 
            ],
            [
                'program_id' => 26, //Community Health Assistants
                'name' => 'Pa' 
            ],
            [
                'program_id' => 27, //Physiotherapists
                'name' => 'Pa' 
            ],
            
            [
                'program_id' => 28, //Physiotherapy Technologists
                'name' => 'Pa' 
            ],
            [
                'program_id' => 29, //Nutritionists
                'name' => 'Pa' 
            ],
            [
                'program_id' => 30, //Nutrition Technologists
                'name' => 'Pa' 
            ],
            [
                'program_id' => 31, //Clinical Psychologists
                'name' => 'Pa' 
            ],
            [
                'program_id' => 32, //Clinical Technologists
                'name' => 'Pa' 
            ],
            [
                'program_id' => 33, //Orthopaedic Technologists
                'name' => 'Pa' 
            ],
        ]);
    }
}