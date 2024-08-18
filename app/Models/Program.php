<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    protected $searchableFields = ['*'];

    public function competencies()
    {
        return $this->hasMany(Competency::class);
    }

    public function exam_questions()
    {
        return $this->hasMany(ExamQuestion::class);
    }
}
