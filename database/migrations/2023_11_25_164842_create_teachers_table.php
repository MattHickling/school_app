<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('first_name');
            $table->string('surname');
            $table->string('preference_of_year');
            $table->string('strength');
            $table->string('ECT')->nullable();
            $table->boolean('leadership');
            $table->unsignedBigInteger('teaching_assistant_id')->nullable();
            $table->foreign('teaching_assistant_id')->references('id')->on('teaching_assistants')->onDelete('set null');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::table('teachers', function (Blueprint $table) {
            $table->dropForeign(['teaching_assistant_id']);
        });

        Schema::dropIfExists('teachers');
    }
}
