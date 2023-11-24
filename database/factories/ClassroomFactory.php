<?php

namespace Database\Factories;

use App\Models\Classroom;
use App\Models\SchoolYear;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClassroomFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Classroom::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // Retrieve a random SchoolYear ID from the existing records
        $schoolYearId = SchoolYear::inRandomOrder()->value('id');

        return [
            'age_of_children' => $this->faker->word,
            'number_of_pupils' => $this->faker->numberBetween(10, 30),
            'class_name' => $this->faker->word,
            'schoolyear_id' => $schoolYearId,
            // Add other columns if any
        ];
    }
}
