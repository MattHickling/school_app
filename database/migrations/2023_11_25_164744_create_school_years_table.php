<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolYearsTable extends Migration
{
    public function up()
    {
        Schema::create('school_years', function (Blueprint $table) {
            $table->id();
            $table->integer('number_of_years');
            $table->integer('classes_per_year');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('school_years');
    }
}

