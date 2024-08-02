<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competency extends Model
{
    use HasFactory;

    protected $fillable = ['program_id','name', 'weight'];

    protected $searchableFields = ['*'];

    public function program()
    {
        return $this->belongsTo(Program::class);
    }

    public function ExamCategory()
    {
        return $this->belongsTo(ExamCategory::class);
    }
}
