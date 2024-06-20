<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    use HasFactory;

    protected $fillable = ['age_of_children', 'number_of_pupils', 'class_name', 'school_year_id', 'number_of_sen'];

    public function schoolYear()
    {
        return $this->belongsTo(SchoolYear::class);
    }

    public function teachers()
    {
        return $this->hasMany(Teacher::class);
    }

}
