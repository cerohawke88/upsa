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
            $table->increments('id');
            $table->string('name');
            $table->string('address');
            $table->unsignedInteger('phone');
            $table->string('email')->unique();
            $table->string('website');
            $table->string('faculty_dep');
            $table->integer('start_year');
            $table->string('gpa');
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
        Schema::dropIfExists('home_institution');
    }
}
