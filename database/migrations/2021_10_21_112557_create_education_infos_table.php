<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education_infos', function (Blueprint $table) {
            $table->id();
            $table->string('degreeName');
            $table->string('institute');
            $table->string('to_institute');
            $table->string('from_institute');
            $table->string('passingYear');
            $table->string('marksObtained');
            $table->string('totalMarks');
            $table->string('GPA_or_grade');
            $table->string('remarks');
            $table->timestamps();

            $table->foreignId('application_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('education_infos');
    }
}
