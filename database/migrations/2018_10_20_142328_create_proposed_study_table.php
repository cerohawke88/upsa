<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProposedStudyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proposed_study', function (Blueprint $table) {
            $table->integer('name_id')->unsigned();
            $table->string('semester');
            $table->string('academic_year');
            $table->string('faculty');
            $table->string('department');
            $table->string('study_period');
            $table->date('start_date');
            $table->date('end_date');
            $table->timestamps();
        });

        Schema::table('proposed_study', function (Blueprint $table) {
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
        Schema::dropIfExists('proposed_study');
    }
}
