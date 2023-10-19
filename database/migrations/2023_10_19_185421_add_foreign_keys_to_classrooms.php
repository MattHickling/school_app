<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToClassrooms extends Migration
{
    public function up()
    {
        Schema::table('classrooms', function (Blueprint $table) {
            $table->unsignedBigInteger('teacher_id')->default(0);
            $table->unsignedBigInteger('teaching_assistant_id')->default(0);

            $table->foreign('teacher_id')->references('id')->on('teachers');
            $table->foreign('teaching_assistant_id')->references('id')->on('teaching_assistants');
        });
    }

    public function down()
    {
        Schema::table('classrooms', function (Blueprint $table) {
            $table->dropForeign(['teacher_id']);
            $table->dropForeign(['teaching_assistant_id']);

            $table->dropColumn('teacher_id');
            $table->dropColumn('teaching_assistant_id');
        });
    }
}
