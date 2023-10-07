<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Classroom extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'age_of_children',
        'number_of_pupils',
    ];

    public static function boot()
    {
        parent::boot();

        static::saving(function ($model) {
            $validator = Validator::make($model->attributes, [
                'name' => 'required',
                'age_of_children' => 'required',
                'number_of_pupils' => 'required',
            ], [
                'name.required' => 'The name of the class is required.',
                'age_of_children.required' => 'The age of children is required.',
                'number_of_pupils.required' => 'The number_of_pupils field is required.',
            ]);

            if ($validator->fails()) {
                throw new \Exception('Validation failed: ' . implode('; ', $validator->errors()->all()));
            }
        });
    }
}

