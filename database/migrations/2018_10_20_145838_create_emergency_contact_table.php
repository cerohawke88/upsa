<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmergencyContactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emergency_contact', function (Blueprint $table) {
            $table->integer('name_id')->unsigned();
            $table->string('fullname');
            $table->string('relationship');
            $table->string('address');
            $table->string('phone');
            $table->string('mobile');
            $table->string('email');
            $table->timestamps();
        });

        Schema::table('emergency_contact', function (Blueprint $table) {
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
        Schema::dropIfExists('emergency_contact');
    }
}
