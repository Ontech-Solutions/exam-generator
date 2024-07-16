<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AudtitTrail extends Model
{
    use HasFactory;

    protected $fillable = [
        "user_id",
        "module",
        "activity",
        "ip_address"
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
