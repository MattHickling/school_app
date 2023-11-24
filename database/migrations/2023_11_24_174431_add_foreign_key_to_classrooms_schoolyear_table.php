<?php

// 2023_11_24_174431_add_foreign_key_to_classrooms_schoolyear_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToClassroomsSchoolyearTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('classroom', function (Blueprint $table) {
            $table->unsignedBigInteger('schoolyear_id');

            // Foreign key
            $table->foreign('schoolyear_id')->references('id')->on('school_years')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('classroom', function (Blueprint $table) {
            $table->dropForeign(['schoolyear_id']);
            $table->dropColumn('schoolyear_id');
        });
    }
}
