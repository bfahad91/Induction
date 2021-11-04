<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmploymentInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employment_infos', function (Blueprint $table) {
            $table->id();
            $table->string('employerName');
            $table->string('to');
            $table->string('from');
            $table->string('position');
            $table->string('responsibilities');
            $table->integer('is_recent')->nullable();
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
        Schema::dropIfExists('employment_infos');
    }
}
