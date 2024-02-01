<?php

namespace Database\Seeders;
use App\Models\Classroom; 
use App\Models\SchoolYear;
use App\Models\Teacher;
use App\Models\TeachingAssistant;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            SchoolYearSeeder::class,
            ClassroomSeeder::class,
            TeacherSeeder::class,
            TeachingAssistantSeeder::class,
        ]);
    }
}
