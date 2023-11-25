<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Teacher;

class TeacherFactory extends Factory
{
    protected $model = Teacher::class;

    public function definition()
    {
        return [
            'title' => $this->faker->title,
            'first_name' => $this->faker->firstName,
            'surname' => $this->faker->lastName,
            'preference_of_year' => $this->faker->word,
            'strength' => $this->faker->word,
            'ECT' => $this->faker->word,
            'leadership' => $this->faker->boolean,
            'teaching_assistant_id' => \App\Models\TeachingAssistant::factory(),
        ];
    }
}

