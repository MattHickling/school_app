<?php

namespace Database\Seeders;
use App\Models\Classroom; 
use Illuminate\Database\Seeder;

class ClassroomsTableSeeder extends Seeder
{
    public function run()
    {
        Classroom::factory()->count(5)->create();
    }
}

