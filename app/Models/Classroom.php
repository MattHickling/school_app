<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Classroom extends Model
{
    use HasFactory;

    protected $fillable = [
        'age_of_children',
        'number_of_pupils',
    ];

    public function teacher()
    {
        // return $this->belongsTo(Teacher::class, 'teacher_id');
    }

    public function teachingAssistant()
    {
        // return $this->belongsTo(TeachingAssistant::class, 'teaching_assistant_id');
    }

    public static function boot()
    {
        // parent::boot();

    }
}
