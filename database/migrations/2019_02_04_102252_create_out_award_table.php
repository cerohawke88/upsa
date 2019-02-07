<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOutAwardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('out_award', function (Blueprint $table) {
            $table->integer('nameOut_id')->unsigned();
            $table->string('name_award');
            $table->string('name_institution');
            $table->string('year_award');
            $table->timestamps();
        });

        Schema::table('out_award', function (Blueprint $table) {
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
        Schema::dropIfExists('out_award');
    }
}
