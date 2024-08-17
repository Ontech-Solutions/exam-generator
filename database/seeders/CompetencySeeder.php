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
                'program_id' => 1, //Medical Doctors (Theory Exam)
                'name' => 'Biomedical scientific principles',
                'weight' => '10'
            ],
            [
                'program_id' => 1, //Medical Doctors (Theory Exam)
                'name' => 'Public health',
                'weight' => '5'
            ],
            [
                'program_id' => 1, //Medical Doctors (Theory Exam)
                'name' => 'Diagnostic',
                'weight' => '50'
            ],
            [
                'program_id' => 1, //Medical Doctors (Theory Exam)
                'name' => 'Management',
                'weight' => '20'
            ],
            [
                'program_id' => 1, //Medical Doctors (Theory Exam)
                'name' => 'Psychiatry, including ethics',
                'weight' => '20'
            ],
            [
                'program_id' => 1, //Medical Doctors (Practical Exam)
                'name' => 'History taking',
                'weight' => '30'
            ],
            [
                'program_id' => 1, //Medical Doctors (Practical Exam)
                'name' => 'Physical examination',
                'weight' => '30'
            ],
            [
                'program_id' => 1, //Medical Doctors (Practical Exam)
                'name' => 'Investigations',
                'weight' => '15'
            ],
            [
                'program_id' => 1, //Medical Doctors (Practical Exam)
                'name' => 'Management',
                'weight' => '15'
            ],
            [
                'program_id' => 1, //Medical Doctors (Practical Exam)
                'name' => 'Approach to patient',
                'weight' => '10'
            ],
            [
                'program_id' => 2, //Clinical Ophthalmic Officers
                'name' => 'Patient Care',
                'weight' => '60'
            ],
            [
                'program_id' => 2, //Clinical Ophthalmic Officers
                'name' => 'Ophthalmic Knowledge',
                'weight' => '20'
            ],
            [
                'program_id' => 2, //Clinical Ophthalmic Officers
                'name' => 'Practice-based Learning and Improvement',
                'weight' =>'5'
            ],
            [
                'program_id' => 2, //Clinical Ophthalmic Officers
                'name' => 'Communication Skills',
                'weight' =>' 10'
            ],
            [
                'program_id' => 2, //Clinical Ophthalmic Officers
                'name' => 'Professionalism',
                'weight' =>'5'
            ],
            [
                'program_id' => 3, //Optometrists
                'name' => 'Patient Care',
                'weight' =>' 60'
            ],
            [
                'program_id' => 3, //Optometrists
                'name' => 'Ophthalmic Knowledge',
                'weight' =>' 20'
            ],
            [
                'program_id' => 3, //Optometrists
                'name' => 'Practice-based Learning and Improvement',
                'weight' =>'5'
            ],
            [
                'program_id' => 3, //Optometrists
                'name' => 'Communication Skills',
                'weight' =>'5'
            ],
            [
                'program_id' => 3, //Optometrists
                'name' => 'Professionalism',
                'weight' =>'5'
            ],
            [
                'program_id' => 3, //Optometrists
                'name' => 'Systems-based Practice',
                'weight' =>'5'
            ],
            [
                'program_id' => 4, //Optometry Technologist
                'name' => 'Patient Care',
                'weight' =>' 60'
            ],
            [
                'program_id' => 4, //Optometry Technologist
                'name' => 'Ophthalmic Knowledge',
                'weight' =>' 20'
            ],
            [
                'program_id' => 4, //Optometry Technologist
                'name' => 'Practice-based Learning and Improvement',
                'weight' =>'5'
            ],
            [
                'program_id' => 4, //Optometry Technologist
                'name' => 'Communication Skills',
                'weight' =>'5'
            ],
            [
                'program_id' => 4, //Optometry Technologist
                'name' => 'Professionalism',
                'weight' =>'5'
            ],
            [
                'program_id' => 4, //Optometry Technologist
                'name' => 'Systems-based Practice',
                'weight' =>'5'
            ],
            [
                'program_id' => 5, //Biomedical Scientific Officers
                'name' => 'Application of knowledge in biomedical Sciences',
                'weight' =>'50'
            ],
            [
                'program_id' => 5, //Biomedical Scientific Officers
                'name' => 'Performance of quality and reliable diagnostic procedures and biomedical science techniques',
                'weight' =>'10'
            ],
            [
                'program_id' => 5, //Biomedical Scientific Officers
                'name' => 'Proficiency in the use of laboratory technology and apparatus',
                'weight' =>'10'
            ],
            [
                'program_id' => 5, //Biomedical Scientific Officers
                'name' => 'leadership and management skills',
                'weight' =>'15'
            ],
            [
                'program_id' => 5, //Biomedical Scientific Officers
                'name' => 'Professionalism, ethical conduct, adherence to good laboratory practice, safety and health guidelines',
                'weight' =>'15'
            ],
            [
                'program_id' => 6, //Medical Laboratory Technologists
                'name' => 'Medical Knowledge',
                'weight' =>'20'
            ],
            [
                'program_id' => 6, //Medical Laboratory Technologists
                'name' => 'Patient Care',
                'weight' =>'60'
            ],
            [
                'program_id' => 6, //Medical Laboratory Technologists
                'name' => 'Practice-based Learning and Improvement',
                'weight' =>'5'
            ],
            [
                'program_id' => 6, //Medical Laboratory Technologists
                'name' => 'Interpersonal & communication skill',
                'weight' =>'5'
            ],
            [
                'program_id' => 6, //Medical Laboratory Technologists
                'name' => 'Professionalism',
                'weight' =>'5'
            ],
            [
                'program_id' => 6, //Medical Laboratory Technologists
                'name' => 'System-based practice',
                'weight' =>'5'
            ],
            [
                'program_id' => 7, //Pharmacists
                'name' => 'Design active pharmaceutical ingredients',
                'weight' =>'10'
            ],
            [
                'program_id' => 7, //Pharmacists
                'name' => 'Manufacture, compound and manage the manufacturing/compounding of pharmaceutical',
                'weight' =>'15'
            ],
            [
                'program_id' => 7, //Pharmacists
                'name' => 'Design optimal drug dosage regimens and conduct drug therapeutic monitoring',
                'weight' =>'15'
            ],
            [
                'program_id' => 7, //Pharmacists
                'name' => 'Provide information and education on drugs and medicines (human and veterinary) including toxicity issues',
                'weight' =>'15'
            ],
            [
                'program_id' => 7, //Pharmacists
                'name' => 'Provide information and education natural sources of drugs and practice of alternative medicine in an ethical manner',
                'weight' =>'15'
            ],
            [
                'program_id' => 7, //Pharmacists
                'name' => 'Provide pharmaceutical care and initiates pharmacotherapy as part of multi-disciplinary team as well as diagnose and treat minor ailments in an ethical manner',
                'weight' =>'15'
            ],
            [
                'program_id' => 7, //Pharmacists
                'name' => 'Effectively Manage the dispensing process, pharmacy business, the pharmaceutical supply chain and provide professional guidance/service in different settings of practice in an ethical manner',
                'weight' =>'10'
            ],
            [
                'program_id' => 7, //Pharmacists
                'name' => 'Undertake pharmaceutical and integrated health research in an ethical manner',
                'weight' =>'5'
            ],
            [
                'program_id' => 8, //Pharmacy Technologists
                'name' => 'Participate in the design of active pharmaceutical ingredients',
                'weight' =>'20'
            ],
            [
                'program_id' => 8, //Pharmacy Technologists
                'name' => 'Participates in the Manufacture, compound and manage the manufacturing/compounding of pharmaceutical products',
                'weight' =>'20'
            ],
            [
                'program_id' => 8, //Pharmacy Technologists
                'name' => 'Provides information and education on drugs and medicines (human and veterinary)',
                'weight' =>'20'
            ],
            [
                'program_id' => 8, //Pharmacy Technologists
                'name' => 'Provide pharmaceutical information as well as diagnose and treat minor ailments in an ethical manner',
                'weight' =>'15'
            ],
            [
                'program_id' => 8, //Pharmacy Technologists
                'name' => 'Participates in the management of the dispensing process, pharmacy business, the pharmaceutical supply chain and provide professional guidance/service in different settings of practice in an ethical manner',
                'weight' =>'20'
            ],
            [
                'program_id' => 9, //Dental Surgeons
                'name' => 'Application of knowledgein Dental Sciences ',
                'weight' => '50'
            ],
            [
                'program_id' => 9, //Dental Surgeons
                'name' => 'Performance of quality and reliable Clinical techniques proficiently ',
                'weight' => '10'
            ],
            [
                'program_id' => 9, //Dental Surgeons
                'name' => 'To ascertain proficiency to monitor patient treatment outcomes',
                'weight' => '10'
            ],
            [
                'program_id' => 9, //Dental Surgeons
                'name' => 'Leadership and management skills',
                'weight' => '15'
            ],
            [
                'program_id' => 9, //Dental Surgeons
                'name' => 'Professionalism, Ethical Conduct including adherence to good dental practice, safety and health guidelines',
                'weight' => '15'
            ],
            [
                'program_id' => 10, //Dental Therapists
                'name' => 'Application of knowledge in Dental Sciences',
                'weight' =>'50'
            ],
            [
                'program_id' => 10, //Dental Therapists
                'name' => 'Performance of quality and reliable Clinical techniques proficiently',
                'weight' =>'10'
            ],
            [
                'program_id' => 10, //Dental Therapists
                'name' => 'Proficiency to monitor patient treatment outcomes',
                'weight' =>'10'
            ],
            [
                'program_id' => 10, //Dental Therapists
                'name' => 'Leadership and management skills',
                'weight' =>'15'
            ],
            [
                'program_id' => 10, //Dental Therapists
                'name' => 'Professionalism and demonstration of ethical conduct, including adherence to good Dental practice, safety and health guidelines.',
                'weight' =>'15'
            ],
            [
                'program_id' => 11, //Dental Technologists
                'name' => 'Application of knowledge in Dental Technology',
                'weight' => '20'
            ],
            [
                'program_id' => 11, //Dental Technologists
                'name' => 'Performance of quality and reliability in the dental laboratory',
                'weight' => '30'
            ],
            [
                'program_id' => 11, //Dental Technologists
                'name' => 'Proficiency in Techniques & Outcomes',
                'weight' => '30'
            ],
            [
                'program_id' => 11, //Dental Technologists
                'name' => 'Leadership and management skills ',
                'weight' => '10'
            ],
            [
                'program_id' => 11, //Dental Technologists
                'name' => 'Professionalism and demonstration of ethical conduct, including adherence to good Dental practice, safety and health guidelines.',
                'weight' => '10'
            ],
            [
                'program_id' => 12, //Dental Assistants
                'name' => 'Application of knowledge in Dental Technology',
                'weight' => '50'
            ],
            [
                'program_id' => 12, //Dental Assistants
                'name' => 'Performance of quality and reliable Clinical techniques proficiently',
                'weight' => '10'
            ],
            [
                'program_id' => 12, //Dental Assistants
                'name' => 'Proficiency to monitor patient treatment outcomes',
                'weight' => '10'
            ],
            [
                'program_id' => 12, //Dental Assistants
                'name' => 'Leadership and management skills ',
                'weight' => '15'
            ],
            [
                'program_id' => 12, //Dental Assistants
                'name' => 'Professionalism and demonstration of ethical conduct, including adherence to good Dental practice, safety and health guidelines.',
                'weight' => '15'
            ],
            [
                'program_id' => 13, //Radiographers
                'name' => 'Radiography techniques and rationale to the practice of the profession',
                'weight' => '5'
            ],
            [
                'program_id' => 13, //Radiographers
                'name' => 'Radiobiology, radiation protection and radiation physics to the Practice of the Profession',
                'weight' => '10'
            ],
            [
                'program_id' => 13, //Radiographers 
                'name' => 'Plain film and Contrast aided studies',
                'weight' => '10'
            ],
            [
                'program_id' => 13, //Radiographers
                'name' => 'Ultrasound',
                'weight' => '18'
            ],
            [
                'program_id' => 13, //Radiographers
                'name' => 'Advanced Imaging techniques',
                'weight' => '5'
            ],
            [
                'program_id' => 13, //Radiographers
                'name' => 'Patient Care',
                'weight' => '15'
            ],
            [
                'program_id' => 13, //Radiographers
                'name' => 'Quality Assurance',
                'weight' => '5'
            ],
            [
                'program_id' => 13, //Radiographers
                'name' => 'Management and Administration',
                'weight' => '5'
            ],
            [
                'program_id' => 13, //Radiographers
                'name' => 'professionalism, medico-legal and ethical principles in clinical practice',
                'weight' => '10'
            ],
            [
                'program_id' => 14, //Radiation Therapists
                'name' => 'Radiotherapy techniques and rationale to the practice of the profession',
                'weight' => '15'
            ],
            [
                'program_id' => 14, //Radiation Therapists
                'name' => 'Application of radiobiology',
                'weight' => '5'
            ],
            [
                'program_id' => 14, //Radiation Therapists
                'name' => 'Radiation physics and radiation protection',
                'weight' => '10'
            ],
            [
                'program_id' => 14, //Radiation Therapists
                'name' => 'Perform radiotherapy procedures',
                'weight' => '35'
            ],
            [
                'program_id' => 14, //Radiation Therapists
                'name' => 'Patient care',
                'weight' => '10'
            ],
            [
                'program_id' => 14, //Radiation Therapists
                'name' => 'Quality Assurance',
                'weight' => '5'
            ],
            [
                'program_id' => 14, //Radiation Therapists
                'name' => 'Management and entrepreneurship',
                'weight' => '5'
            ],
            [
                'program_id' => 14, //Radiation Therapists
                'name' => 'Research',
                'weight' => '10'
            ],
            [
                'program_id' => 14, //Radiation Therapists
                'name' => 'Professionalism, medico-legal and ethics',
                'weight' => '5'
            ],
            [
                'program_id' => 15, //Radiography Technologists
                'name' => 'Radiography techniques and rationale to the practice of the profession',
                'weight' => '8'
            ],
            [
                'program_id' => 15, //Radiography Technologists
                'name' => 'Radiobiology, radiation protection and radiation physics to the Practice of the Profession',
                'weight' => '20'
            ],
            [
                'program_id' => 15, //Radiography Technologists
                'name' => 'Plain film and Contrast aided studies',
                'weight' => '45'
            ],
            [
                'program_id' => 15, //Radiography Technologists
                'name' => 'Ultrasound',
                'weight' => '7'
            ],
            [
                'program_id' => 15, //Radiography Technologists
                'name' => 'Advanced Imaging techniques',
                'weight' => ''
            ],
            [
                'program_id' => 15, //Radiography Technologists
                'name' => 'Patient care',
                'weight' => '5'
            ],
            [
                'program_id' => 15, //Radiography Technologists
                'name' => 'Quality Assurance',
                'weight' => '5'
            ],
            [
                'program_id' => 15, //Radiography Technologists
                'name' => 'Management and Administration',
                'weight' => '5'
            ],
            [
                'program_id' => 15, //Radiography Technologists
                'name' => 'professionalism, medico-legal and ethical principles in clinical practice',
                'weight' => '5'
            ],
            [
                'program_id' => 16, //Medical Licentiates
                'name' => 'Medical knowledge',
                'weight' => '20'
            ],
            [
                'program_id' => 16, //Medical Licentiates
                'name' => 'Patient care',
                'weight' => '60'
            ],
            [
                'program_id' => 16, //Medical Licentiates
                'name' => 'Practice-based learning & improvement',
                'weight' => '5'
            ],
            [
                'program_id' => 16, //Medical Licentiates
                'name' => 'Interpersonal & communication skills',
                'weight' => '5'
            ],
            [
                'program_id' => 16, //Medical Licentiates
                'name' => 'Professionalism',
                'weight' => '5'
            ],
            [
                'program_id' => 16, //Medical Licentiates
                'name' => 'System-based practice',
                'weight' => '5'
            ],
            [
                'program_id' => 17, //Clinical Officers General
                'name' => 'Medical knowledge',
                'weight' => '20'
            ],
            [
                'program_id' => 17, //Clinical Officers General
                'name' => 'Patient care',
                'weight' => '60'
            ],
            [
                'program_id' => 17, //Clinical Officers General
                'name' => 'Practice-based learning & improvement',
                'weight' => '5'
            ],
            [
                'program_id' => 17, //Clinical Officers General
                'name' => 'Interpersonal & communication skills',
                'weight' => '5'
            ],
            [
                'program_id' => 17, //Clinical Officers General
                'name' => 'Professionalism',
                'weight' => '5'
            ],
            [
                'program_id' => 17, //Clinical Officers General
                'name' => 'System-Based Practice',
                'weight' => '5'
            ],
            [
                'program_id' => 18, //Clinical Officers Psychiatry
                'name' => 'Medical knowledge',
                'weight' => '25'
            ],
            [
                'program_id' => 18, //Clinical Officers Psychiatry
                'name' => 'Patient care',
                'weight' => '50'
            ],
            [
                'program_id' => 18, //Clinical Officers Psychiatry
                'name' => 'Practice-Based Learning & Improvement',
                'weight' => '5'
            ],
            [
                'program_id' => 18, //Clinical Officers Psychiatry
                'name' => 'Interpersonal & Communication Skills',
                'weight' => '5'
            ],
            [
                'program_id' => 18, //Clinical Officers Psychiatry
                'name' => 'Professionalism',
                'weight' => '5'
            ],
            [
                'program_id' => 18, //Clinical Officers Psychiatry
                'name' => 'System-Based Practice',
                'weight' => '10'
            ],
            [
                'program_id' => 19, //Clinical Anaesthettic Officers
                'name' => 'Medical Knowledge',
                'weight' => '20'
            ],
            [
                'program_id' => 19, //Clinical Anaesthettic Officers
                'name' => 'Patient Care',
                'weight' => '60'
            ],
            [
                'program_id' => 19, //Clinical Anaesthettic Officers
                'name' => 'Practice-based learning & improvement',
                'weight' => '5'
            ],
            [
                'program_id' => 19, //Clinical Anaesthettic Officers
                'name' => 'Interpersonal & Communication Skills',
                'weight' => '5'
            ],
            [
                'program_id' => 19, //Clinical Anaesthettic Officers
                'name' => 'Professionalism',
                'weight' => '5'
            ],
            [
                'program_id' => 19, //Clinical Anaesthettic Officers
                'name' => 'System-Based practice',
                'weight' => '5'
            ],
            [
                'program_id' => 20, //Advanced Paramedical Anaesthesia
                'name' => 'Patient Care',
                'weight' => '60'
            ],
            [
                'program_id' => 20, //Advanced Paramedical Anaesthesia
                'name' => 'Ophthalmic Knowledge',
                'weight' => '20'
            ],
            [
                'program_id' => 20, //Advanced Paramedical Anaesthesia
                'name' => 'Practice-based Learning and Improvement',
                'weight' => '5'
            ],
            [
                'program_id' => 20, //Advanced Paramedical Anaesthesia
                'name' => 'Communication Skills',
                'weight' => '5'
            ],
            [
                'program_id' => 20, //Advanced Paramedical Anaesthesia
                'name' => 'Professionalism',
                'weight' => '5'
            ],
            [
                'program_id' => 20, //Advanced Paramedical Anaesthesia
                'name' => 'Systems-based Practice',
                'weight' => '5'
            ],
            [
                'program_id' => 21, //Environmental Health Officers
                'name' => 'Built environmental',
                'weight' => '10'
            ],
            [
                'program_id' => 21, //Environmental Health Officers
                'name' => 'Community health',
                'weight' => '25'
            ],
            [
                'program_id' => 21, //Environmental Health Officers
                'name' => 'Environmental pollution control',
                'weight' => '20'
            ],
            [
                'program_id' => 21, //Environmental Health Officers
                'name' => 'Food safety and hygiene',
                'weight' => '20'
            ],
            [
                'program_id' => 21, //Environmental Health Officers
                'name' => 'Occupational health and safety',
                'weight' => '20'
            ],
            [
                'program_id' => 21, //Environmental Health Officers
                'name' => 'Overarching skills ',
                'weight' => '5'
            ],
            [
                'program_id' => 22, //Public Health Officers
                'name' => 'Public health knowledge',
                'weight' => '60'
            ],
            [
                'program_id' => 22, //Public Health Officers
                'name' => 'Public health practice',
                'weight' => '40'
            ],
            [
                'program_id' => 23, //Environmental Health Technologists
                'name' => 'Built environmental',
                'weight' => '10'
            ],
            [
                'program_id' => 23, //Environmental Health Technologists
                'name' => 'Community health',
                'weight' => '25'
            ],
            [
                'program_id' => 23, //Environmental Health Technologists
                'name' => 'Environmental pollution control',
                'weight' => '20'
            ],
            [
                'program_id' => 23, //Environmental Health Technologists
                'name' => 'Food safety and hygiene',
                'weight' => '20'
            ],
            [
                'program_id' => 23, //Environmental Health Technologists
                'name' => 'Occupational health and safety',
                'weight' => '20'
            ],
            [
                'program_id' => 23, //Environmental Health Technologists
                'name' => 'Overarching skills ',
                'weight' => '5'
            ],
            [
                'program_id' => 24, //Community Health Assistants
                'name' => 'Medical knowledge',
                'weight' => '40'
            ],
            [
                'program_id' => 24, //Community Health Assistants
                'name' => 'Patient care',
                'weight' => '40'
            ],
            [
                'program_id' => 24, //Community Health Assistants
                'name' => 'Interpersonal communication skills',
                'weight' => '5'
            ],
            [
                'program_id' => 24, //Community Health Assistants
                'name' => 'Professionalism',
                'weight' => '10'
            ],
            [
                'program_id' => 24, //Community Health Assistants
                'name' => 'System based practice',
                'weight' => '5'
            ],
            [
                'program_id' => 25, //Physiotherapists
                'name' => 'Basic Sciences',
                'weight' => '15'
            ],
            [
                'program_id' => 25, //Physiotherapists
                'name' => 'General/Internal Medicine',
                'weight' => '10'
            ],
            [
                'program_id' => 25, //Physiotherapists
                'name' => 'Paediatrics and Child Health',
                'weight' => '10'
            ],
            [
                'program_id' => 25, //Physiotherapists
                'name' => 'ICU and Obstetrics & Gynaecology',
                'weight' => '5'
            ],
            [
                'program_id' => 25, //Physiotherapists
                'name' => 'Orthopaedics/Trauma',
                'weight' => '10'
            ],
            [
                'program_id' => 25, //Physiotherapists
                'name' => 'Professionalism',
                'weight' => '5'
            ],
            [
                'program_id' => 25, //Physiotherapists
                'name' => 'Management/Leadership/Entrepreneurship',
                'weight' => '5'
            ],
            [
                'program_id' => 25, //Physiotherapists
                'name' => 'Collaboration',
                'weight' => '5'
            ],
            [
                'program_id' => 25, //Physiotherapists
                'name' => 'Communication Skills',
                'weight' => '20'
            ],
            [
                'program_id' => 25, //Physiotherapists
                'name' => 'Patient assessment procedures',
                'weight' => '20'
            ],
            [
                'program_id' => 25, //Physiotherapists
                'name' => 'Patient Treatment procedures',
                'weight' => '10'
            ],
            [
                'program_id' => 26, //Physiotherapy Technologists
                'name' => 'Patient assessment',
                'weight' => '50'
            ],
            [
                'program_id' => 26, //Physiotherapy Technologists
                'name' => 'Treatment Plan',
                'weight' => '5'
            ],
            [
                'program_id' => 26, //Physiotherapy Technologists
                'name' => 'Treatment application',
                'weight' => '15'
            ],
            [
                'program_id' => 26, //Physiotherapy Technologists
                'name' => 'Theoretical knowledge',
                'weight' => '10'
            ],
            [
                'program_id' => 26, //Physiotherapy Technologists
                'name' => 'Communication Skills',
                'weight' => '5'
            ],
            [
                'program_id' => 26, //Physiotherapy Technologists
                'name' => 'Precautions and Safety',
                'weight' => '5'
            ],
            [
                'program_id' => 26, //Physiotherapy Technologists
                'name' => 'Professional appearance & conduct',
                'weight' => '5'
            ],
            [
                'program_id' => 26, //Physiotherapy Technologists
                'name' => 'Documentation',
                'weight' => '5'
            ],
            [
                'program_id' => 27, //Nutritionists
                'name' => 'Nutrition (Food, food systems, human nutrition and dietetics)',
                'weight' => '20'
            ],
            [
                'program_id' => 27, //Nutritionists
                'name' => 'Communication',
                'weight' => '10'
            ],
            [
                'program_id' => 27, //Nutritionists
                'name' => 'Management (business management, food service management, marketing, resource management)',
                'weight' => '5'
            ],
            [
                'program_id' => 27, //Nutritionists
                'name' => 'Research',
                'weight' => '5'
            ],
            [
                'program_id' => 27, //Nutritionists
                'name' => 'Physical, chemical and biological sciences',
                'weight' => '4'
            ],
            [
                'program_id' => 27, //Nutritionists
                'name' => 'Social sciences (sociology, psychology, economics)',
                'weight' => '4'
            ],
            [
                'program_id' => 27, //Nutritionists
                'name' => 'Professionalism issues',
                'weight' => '2'
            ],
            [
                'program_id' => 27, //Nutritionists
                'name' => 'Nutrition (Integration of food, food systems, human nutrition and dietetics in practice)',
                'weight' => '30'
            ],
            [
                'program_id' => 27, //Nutritionists
                'name' => 'Communication practice',
                'weight' => '10'
            ],
            [
                'program_id' => 27, //Nutritionists
                'name' => 'Management',
                'weight' => '5'
            ],
            [
                'program_id' => 27, //Nutritionists
                'name' => 'Professionalism issues or research',
                'weight' => '5'
            ],
            [
                'program_id' => 28, //Nutrition Technologists
                'name' => 'Nutrition (Food, food systems, human nutrition and dietetics)',
                'weight' => '20'
            ],
            [
                'program_id' => 28, //Nutrition Technologists
                'name' => 'Communication',
                'weight' => '10'
            ],[
                'program_id' => 28, //Nutrition Technologists
                'name' => 'Management (business management, food service management, marketing, resource management)',
                'weight' => '5'
            ],[
                'program_id' => 28, //Nutrition Technologists
                'name' => 'Research',
                'weight' => '5'
            ],[
                'program_id' => 28, //Nutrition Technologists
                'name' => 'Physical, chemical and biological sciences',
                'weight' => '4'
            ],[
                'program_id' => 28, //Nutrition Technologists
                'name' => 'Social sciences (sociology, psychology, economics)',
                'weight' => '4'
            ],[
                'program_id' => 28, //Nutrition Technologists
                'name' => 'Professionalism issues',
                'weight' => '2'
            ],
            [
                'program_id' => 28, //Nutrition Technologists
                'name' => 'Nutrition (Integration of food, food systems, human nutrition and dietetics in practice)',
                'weight' => '30'
            ],
            [
                'program_id' => 28, //Nutrition Technologists
                'name' => 'Communication practice',
                'weight' => '10'
            ],
            [
                'program_id' => 29, //Clinical Psychologists
                'name' => 'Management',
                'weight' => '10'
            ],
            [
                'program_id' => 30, //Clinical Technologists
                'name' => '',
                'weight' => '10'
            ],
            [
                'program_id' => 31, //Orthopaedic Technologists
                'name' => '',
                'weight' => '5'
            ],
            [
                'program_id' => 32, //Mental Health Officers
                'name' => '',
                'weight' => '5'
            ],
            [
                'program_id' => 33, //Emergency Care Officers
                'name' => '',
                'weight' => '5'
            ]
        ]);
    }
}
