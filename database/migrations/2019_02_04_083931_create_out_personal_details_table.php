<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOutPersonalDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('out_personal_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nim')->unique();
            $table->string('fullname');
            $table->string('gender');
            $table->string('nationality');
            $table->date('date_of_birth');
            $table->string('religion');
            $table->string('place_of_birth');
            $table->string('passport_number');
            $table->date('pssport_expired');

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
        Schema::dropIfExists('out_personal_details');
    }
}
