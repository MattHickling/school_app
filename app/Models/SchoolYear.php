<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SchoolYear extends Model
{
    protected $table = 'school_years'; // Set the table name

    protected $fillable = ['years', 'number_of_classes'];
}
