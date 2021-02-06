<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;

    protected $guarded =['id', 'created_at', 'updated_at'];

    public function skill()
    {
        return $this->belongsTo(Skill::class);
    }

    public function question()
    {
        return $this->hasMany(questions::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }


}
