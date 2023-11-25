<?php

// database/factories/SchoolYearFactory.php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\SchoolYear;

class SchoolYearFactory extends Factory
{
    protected $model = SchoolYear::class;

    public function definition()
    {
        return [
            'number_of_years' => $this->faker->numberBetween(1, 10),
            'classes_per_year' => $this->faker->numberBetween(5, 20),
        ];
    }
}


