<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('advertisement_id'); // FK advertisement model
            $table->string('fullName');
            $table->string('picture');
            $table->string('cv')->nullable();
            $table->string('fatherName');
            $table->date('dob');
            $table->string('age');
            $table->string('birthPlace');
            $table->string('maritalStatus');
            $table->string('religion');
            $table->string('nationality');
            $table->bigInteger('cnic');
            $table->string('domicile');
            $table->string('permanentAddress');
            $table->string('presentAddress');
            $table->string('pec_No')->nullable();
            $table->bigInteger('office')->nullable();
            $table->bigInteger('residence')->nullable();
            $table->bigInteger('cell');
            $table->string('email')->nullable();
            $table->string('postQualificationExperience')->nullable();
            $table->string('grossMonthlySalary')->nullable();
            $table->text('professionalAchievements');
            $table->string('name_ad_newspaper')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applications');
    }
}
