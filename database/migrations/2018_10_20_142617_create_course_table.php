<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course', function (Blueprint $table) {
            $table->integer('name_id')->unsigned();
            $table->string('course_title')->nullable();
            $table->integer('credit')->nullable();
            $table->timestamps();
            // $table->foreign('no')->references('id')->on('proposed_study');
        });

        Schema::table('course', function (Blueprint $table) {
            $table->foreign('name_id')->references('id')->on('personal_details')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course');
    }
}
