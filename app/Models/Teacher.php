<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'first_name',
        'surname',
        'preference_of_year',
        'strength',
        'ECT',
        'leadership',
        'teaching_assistant_id',
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
                'ECT',
                'leadership' => 'required|boolean',
            ], [
                'title.required' => 'The title field is required.',
                'first_name.required' => 'The first name field is required.',
                'surname.required' => 'The surname field is required.',
                'preference_of_year.required' => 'The preference of year field is required.',
                'strength.required' => 'The strength field is required.',
                'leadership' => 'The leadership field is required.',
            ]);

            if ($validator->fails()) {
                throw new \Exception('Validation failed: ' . implode('; ', $validator->errors()->all()));
            }
        });
    }
    
    public function teachingAssistant()
    {
        return $this->belongsTo(TeachingAssistant::class);
    }
}
