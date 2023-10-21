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
        Schema::create('teachers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('first_name');
            $table->string('surname');
            $table->string('preference_of_year');
            $table->string('strength');
            $table->boolean('ECT');
            $table->boolean('leadership');
            $table->unsignedBigInteger('assignment_id')->nullable();
            $table->date('assignment_date')->nullable();
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
