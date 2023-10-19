<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeachingAssistantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('teaching_assistants')->insert([
            'title' => 'Miss',
            'first_name' => 'Jane',
            'surname' => 'Smith',
            'preference_of_year' => '2',
            'strength' => 'Art',
            'higher_ta' => 1,
        ]);
    
        DB::table('teaching_assistants')->insert([
            'title' => 'Mr',
            'first_name' => 'David',
            'surname' => 'Wilson',
            'preference_of_year' => '4',
            'strength' => 'Music',
            'higher_ta' => 0,
        ]);
    
        DB::table('teaching_assistants')->insert([
            'title' => 'Miss',
            'first_name' => 'Emily',
            'surname' => 'Johnson',
            'preference_of_year' => '1',
            'strength' => 'Physical Education',
            'higher_ta' => 1,
        ]);
    
        DB::table('teaching_assistants')->insert([
            'title' => 'Mr',
            'first_name' => 'Daniel',
            'surname' => 'Harris',
            'preference_of_year' => '3',
            'strength' => 'Drama',
            'higher_ta' => 0,
        ]);
    
        DB::table('teaching_assistants')->insert([
            'title' => 'Miss',
            'first_name' => 'Sophia',
            'surname' => 'Davis',
            'preference_of_year' => '5',
            'strength' => 'Computing',
            'higher_ta' => 1,
        ]);
        }
}
