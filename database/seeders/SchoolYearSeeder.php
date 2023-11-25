<?php

// database/factories/SchoolYearFactory.php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SchoolYear;

class SchoolYearSeeder extends Seeder
{
    public function run()
    {
        SchoolYear::factory(5)->create();
    }
}


