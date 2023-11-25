<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TeachingAssistant;

class TeachingAssistantSeeder extends Seeder
{
    public function run()
    {
        \App\Models\TeachingAssistant::factory(10)->create();
    }
}

