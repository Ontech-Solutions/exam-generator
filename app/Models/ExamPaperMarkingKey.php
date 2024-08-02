<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamPaperMarkingKey extends Model
{
    use HasFactory;

    protected $fillable = [
        "ref_number",
        "competency_id",
        "program_id",
        "exam_sitting_date",
        "year",
        "month",
        "image",
        "question",
        "option_a",
        "option_b",
        "option_c",
        "option_d",
        "option_e",
        "correct_answer",
        "user_id"
    ];
}
