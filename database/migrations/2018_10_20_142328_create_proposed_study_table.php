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
            $table->increments('id');
            $table->string('semester');
            $table->integer('academic_year');
            $table->string('faculty');
            $table->string('department');
            $table->string('study_period');
            $table->date('start_date');
            $table->date('end_date');
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
        Schema::dropIfExists('proposed_study');
    }
}
