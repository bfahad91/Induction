<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToApplications extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('applications', function (Blueprint $table) {
            $table->string('gender')->after('cnic');
            $table->string('caste')->after('dob');
            $table->string('age_relaxation')->after('age');
            $table->string('sect')->nullable()->after('religion');
            $table->string('domicile_district')->nullable()->after('religion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('applications', function (Blueprint $table) {
            $table->dropColumn('gender');
            $table->dropColumn('cast');
            $table->dropColumn('age_relaxation');
            $table->dropColumn('sect');
            $table->dropColumn('domicile_district');
        });
    }
}
