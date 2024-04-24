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
        DB::table("exam_categories")->insert([
            [
                "name" => "Pharmacology"
            ],
            [
                "name" => "Medical-Surgical Nursing"
            ],
            [
                "name" => "Basic Nursing Skills"
            ],
            [
                "name" => "Anatomy and Physiology"
            ],
        ]);
    }
}
