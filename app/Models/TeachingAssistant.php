<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class TeachingAssistant extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'first_name',
        'surname',
        'preference_of_year',
        'strength',
        'higher_ta',
        'teacher_id',
    ];

    public static function boot()
    {
        parent::boot();

        static::saving(function ($model) {
            $validator = Validator::make($model->attributes, [
                'title' => 'required',
                'first_name' => 'required',
                'surname' => 'required',
                'preference_of_year' => 'required',
                'strength' => 'required',
                'higher_ta' => 'required|boolean',
            ], [
                'title.required' => 'The title field is required.',
                'first_name.required' => 'The first name field is required.',
                'surname.required' => 'The surname field is required.',
                'preference_of_year.required' => 'The preference of year field is required.',
                'strength.required' => 'The strength field is required.',
                'higher_ta.required' => 'The higher TA field is required.',
                'higher_ta.boolean' => 'The higher TA field must be a boolean value.',
            ]);

            if ($validator->fails()) {
                throw new \Exception('Validation failed: ' . implode('; ', $validator->errors()->all()));
            }
        });
    }
    public function teacher()
    {
        return $this->hasOne(Teacher::class);
    }
}
