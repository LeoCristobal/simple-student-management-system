<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    /** @use HasFactory<\Database\Factories\TeacherFactory> */
    use HasFactory;

    public function section()
    {
        return $this->belongsTo(Section::class);
    }

    public function students()
    {
        return $this->hasMany(Student::class);
    }
}
