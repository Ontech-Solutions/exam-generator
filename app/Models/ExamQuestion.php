<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamQuestion extends Model
{
    use HasFactory;

    protected $fillable = [
        "program_id",
        "competency_id",
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
    public function program()
    {
        return $this->belongsTo(Program::class);
    }
}
