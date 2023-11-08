<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SchoolYear extends Model
{
    protected $fillable = ['number_of_years', 'classes_per_year'];

    public function classrooms()
{
    return $this->hasMany(Classroom::class);
}


}

