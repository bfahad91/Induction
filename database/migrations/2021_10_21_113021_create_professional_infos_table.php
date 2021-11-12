<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfessionalInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professional_infos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('application_id'); // FK application model
            $table->string('courseName');
            $table->string('instituteName');
            $table->date('to_prof_inst');
            $table->date('from_prof_inst');
            $table->string('description');
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
        Schema::dropIfExists('professional_infos');
    }
}
