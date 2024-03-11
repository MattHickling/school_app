<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('teaching_assistants', function (Blueprint $table) {
            $table->integer('days_work_per_week')->nullable();
            $table->string('additional_qualifications')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('teaching_assistants', function (Blueprint $table) {
            $table->dropColumn('days_work_per_week');
            $table->dropColumn('additional_qualifications');
        });
    }
};
