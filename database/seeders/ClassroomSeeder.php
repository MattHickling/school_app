<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Classroom;

class ClassroomSeeder extends Seeder
{
    public function run()
    {
        \App\Models\Classroom::factory(20)->create();
    }
    
    public function teachers()
    {
        return $this->hasMany(Teacher::class);
    }

}

