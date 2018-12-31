<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomeInstitutionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_institution', function (Blueprint $table) {
            $table->integer('name_id')->unsigned();
            $table->string('name');
            $table->string('address');
            $table->unsignedBigInteger('phone');
            $table->string('email');
            $table->string('website');
            $table->string('faculty_dep');
            $table->integer('start_year');
            $table->string('gpa');
            $table->timestamps();
        });

        Schema::table('home_institution', function (Blueprint $table) {
            $table->foreign('name_id')->references('id')->on('personal_details');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('home_institution');
    }
}
