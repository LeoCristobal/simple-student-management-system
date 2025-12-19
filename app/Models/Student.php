<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    /** @use HasFactory<\Database\Factories\StudentFactory> */
    use HasFactory;

    protected $fillable = [
        'section_id',
        'teacher_id',
        'first_name',
        'middle_initial',
        'last_name',
        'gender'
    ];

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
}
