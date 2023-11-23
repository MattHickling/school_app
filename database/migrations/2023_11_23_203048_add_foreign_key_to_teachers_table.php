<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToTeachersTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('teachers', function (Blueprint $table) {
            $table->unsignedBigInteger('teaching_assistant_id')->nullable();
            $table->foreign('teaching_assistant_id')->references('id')->on('teaching_assistants')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('teachers', function (Blueprint $table) {
            $table->dropForeign(['teaching_assistant_id']);
            $table->dropColumn('teaching_assistant_id');
        });
    }
}
