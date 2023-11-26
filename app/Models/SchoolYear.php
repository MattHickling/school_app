<?php

namespace App\Models;
use App\Models\Classroom;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SchoolYear extends Model
{
    use HasFactory;

    protected $factory = SchoolYearFactory::class;

    protected $fillable = ['number_of_years', 'classes_per_year', 'school_name'];

    public function classrooms()
    {
        return $this->hasMany(Classroom::class);
    }
}


