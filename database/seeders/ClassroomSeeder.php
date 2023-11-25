<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Classroom;

class ClassroomSeeder extends Seeder
{
    public function run()
    {
        \App\Models\Classroom::factory(10)->create();
    }
}

