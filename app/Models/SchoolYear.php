<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SchoolYear extends Model
{
    protected $fillable = ['age_of_children', 'number_of_pupils', 'class_name'];

    public function classrooms()
{
    return $this->hasMany(Classroom::class);
}


}

