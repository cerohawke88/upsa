<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOutGuardianContactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('out_guardian_contact', function (Blueprint $table) {
            $table->integer('nameOut_id')->unsigned();
            $table->string('fullname');
            $table->string('relationship');
            $table->string('address');
            $table->string('phone');
            $table->string('mobile');
            $table->string('email');

            $table->timestamps();
        });

        Schema::table('out_guardian_contact', function (Blueprint $table) {
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
        Schema::dropIfExists('out_guardian_contact');
    }
}
