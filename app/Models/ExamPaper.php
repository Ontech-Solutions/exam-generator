<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamPaper extends Model
{
    use HasFactory;

    protected $fillable = [
        "ref_number",
        "exam_category_id",
        "year",
        "month",
        "image",
        "question",
        "option_a",
        "option_b",
        "option_c",
        "option_d",
        "correct_answer",
        "user_id"
    ];
}
