<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Classroom;

class ClassroomFactory extends Factory
{
    protected $model = Classroom::class;

    public function definition()
    {
        return [
            'age_of_children' => $this->faker->word,
            'number_of_pupils' => $this->faker->numberBetween(20, 40),
            'class_name' => $this->faker->word,
            'school_year_id' => \App\Models\SchoolYear::factory()->create()->id,
            'school_id' => \App\Models\SchoolYear::factory()->create()->id,
        ];
    }

}
