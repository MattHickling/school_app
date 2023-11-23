<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToTeachersTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('teachers', function (Blueprint $table) {
            $table->string('title');
            $table->string('first_name');
            $table->string('surname');
            $table->string('preference_of_year');
            $table->string('strength');
            $table->boolean('higher_ta');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('teachers', function (Blueprint $table) {
            $table->dropColumn('title');
            $table->dropColumn('first_name');
            $table->dropColumn('surname');
            $table->dropColumn('preference_of_year');
            $table->dropColumn('strength');
            $table->dropColumn('higher_ta');
        });
    }
}