<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamTotalQuestion extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "total_questions"
    ];
}
