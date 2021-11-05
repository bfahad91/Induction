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
            $table->foreignId('application_id'); // FK application model
            $table->string('employerName');
            $table->string('to_employer');
            $table->string('from_employer');
            $table->string('position');
            $table->string('responsibilities');
            $table->integer('is_recent')->nullable();
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
        Schema::dropIfExists('employment_infos');
    }
}
