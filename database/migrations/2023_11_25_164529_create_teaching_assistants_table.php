<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachingAssistantsTable extends Migration
{
    public function up()
    {
        Schema::create('teaching_assistants', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('first_name');
            $table->string('surname');
            $table->string('preference_of_year');
            $table->string('strength');
            $table->boolean('higher_ta');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('teaching_assistants');
    }
}
