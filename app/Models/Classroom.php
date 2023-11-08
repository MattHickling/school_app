<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    use HasFactory;

    protected $table = 'classroom';

    protected $fillable = ['age_of_children', 'number_of_pupils'];

    public function schoolYear()
{
    return $this->belongsTo(SchoolYear::class);
}

}
