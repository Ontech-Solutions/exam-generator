<?php

namespace Database\Seeders;

use App\Models\ExamQuestion;
use Filament\Tables\Columns\Summarizers\Range;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Nette\Utils\Random;

class ExamQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ExamQuestion::factory()->count(1500)->create();
    }
}
