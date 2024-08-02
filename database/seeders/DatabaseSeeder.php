<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserSeeder::class);
        $this->call(ExamCategorySeeder::class);
        $this->call(ExamQuestionSeeder::class);
        $this->call(ProgramSeeder::class);
        $this->call(CompetencySeeder::class);
        $this->call(ExamTotalQuestionSeeder::class);
    }
}
