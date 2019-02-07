<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOutApplicationDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('out_application_details', function (Blueprint $table) {
            $table->integer('nameOut_id')->unsigned();
            $table->string('type_program');
            $table->string('program_period');
            $table->string('host_univ');
            $table->timestamps();
        });

        Schema::table('out_application_details', function (Blueprint $table) {
            $table->foreign('nameOut_id')->references('id')->on('out_personal_details')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('out_application_details');
    }
}
