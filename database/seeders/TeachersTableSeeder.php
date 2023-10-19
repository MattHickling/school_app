<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeachersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('teachers')->insert([
            'title' => 'Mr',
            'first_name' => 'John',
            'surname' => 'Doe',
            'preference_of_year' => '3',
            'strength' => 'Math',
            'ECT' => 1,
            'leadership' => 1,
        ]);
    
        DB::table('teachers')->insert([
            'title' => 'Ms',
            'first_name' => 'Alice',
            'surname' => 'Johnson',
            'preference_of_year' => '5',
            'strength' => 'Science',
            'ECT' => 0,
            'leadership' => 0,
        ]);
    
        DB::table('teachers')->insert([
            'title' => 'Mr',
            'first_name' => 'Robert',
            'surname' => 'Smith',
            'preference_of_year' => '4',
            'strength' => 'English',
            'ECT' => 1,
            'leadership' => 1,
        ]);
    
        DB::table('teachers')->insert([
            'title' => 'Ms',
            'first_name' => 'Sarah',
            'surname' => 'Williams',
            'preference_of_year' => '2',
            'strength' => 'History',
            'ECT' => 0,
            'leadership' => 1,
        ]);
    
        DB::table('teachers')->insert([
            'title' => 'Mr',
            'first_name' => 'Michael',
            'surname' => 'Brown',
            'preference_of_year' => '6',
            'strength' => 'Geography',
            'ECT' => 1,
            'leadership' => 0,
        ]);
    }
}
