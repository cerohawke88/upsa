<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOutAcademicInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('out_academic_info', function (Blueprint $table) {
            $table->integer('nameOut_id')->unsigned();
            $table->string('department');
            $table->string('semester');
            $table->string('gpa');
            $table->string('english_score');
            $table->date('date_test_english');

            $table->timestamps();
        });

           Schema::table('out_academic_info', function (Blueprint $table) {
            $table->foreign('nameOut_id')->references('id')->on('out_personal_details');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('out_academic_info');
    }
}
