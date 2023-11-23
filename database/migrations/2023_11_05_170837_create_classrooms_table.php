<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassroomsTable extends Migration
{
        public function up()
    {
        Schema::create('classroom', function (Blueprint $table) {
            $table->id();
            $table->string('age_of_children');
            $table->integer('number_of_pupils');
            $table->string('class_name'); // Change the data type to string
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('classroom');
    }
}