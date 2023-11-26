<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSchoolNameToSchoolYearsTable extends Migration
{
    public function up()
    {
        Schema::table('school_years', function (Blueprint $table) {
            $table->string('school_name')->nullable()->after('classes_per_year');
        });
    }

    public function down()
    {
        Schema::table('school_years', function (Blueprint $table) {
            $table->dropColumn('school_name');
        });
    }
}
