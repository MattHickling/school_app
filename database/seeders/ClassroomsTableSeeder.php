<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassroomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('classrooms')->insert([
            'name' => 'Class A',
            'age_of_children' => 6,
            'number_of_pupils' => 25,
            'teacher_id' => 1,
            'teaching_assistant_id' => 1,
        ]);
        
        DB::table('classrooms')->insert([
            'name' => 'Class B',
            'age_of_children' => 5,
            'number_of_pupils' => 30,
            'teacher_id' => 2,
            'teaching_assistant_id' => 2,
        ]);
        
        DB::table('classrooms')->insert([
            'name' => 'Class C',
            'age_of_children' => 4,
            'number_of_pupils' => 28,
            'teacher_id' => 3,
            'teaching_assistant_id' => 3,
        ]);
        
        DB::table('classrooms')->insert([
            'name' => 'Class D',
            'age_of_children' => 5,
            'number_of_pupils' => 32,
            'teacher_id' => 4,
            'teaching_assistant_id' => 4,
        ]);
        
        DB::table('classrooms')->insert([
            'name' => 'Class E',
            'age_of_children' => 6,
            'number_of_pupils' => 27,
            'teacher_id' => 5,
            'teaching_assistant_id' => 5,
        ]);
    
       
    }
}
