<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccomodationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accomodation', function (Blueprint $table) {
            $table->integer('name_id')->unsigned();
            $table->string('accomodation_help');
            $table->string('address')->nullable();
            $table->string('contact_person')->nullable();
            $table->timestamps();
        });

        Schema::table('accomodation', function (Blueprint $table) {
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
        Schema::dropIfExists('accomodation');
    }
}
