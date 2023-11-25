<?php
// database/factories/TeachingAssistantFactory.php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\TeachingAssistant;

class TeachingAssistantFactory extends Factory
{
    protected $model = TeachingAssistant::class;

    public function definition()
    {
        return [
            'title' => $this->faker->title,
            'first_name' => $this->faker->firstName,
            'surname' => $this->faker->lastName,
            'preference_of_year' => $this->faker->word,
            'strength' => $this->faker->word,
            'higher_ta' => $this->faker->boolean,
            'teacher_id' => \App\Models\Teacher::factory(),
        ];
    }
}
