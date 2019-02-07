<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOutMotivationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('out_motivation', function (Blueprint $table) {
            $table->integer('nameOut_id')->unsigned();
            $table->string('text');
            $table->timestamps();
        });

        Schema::table('out_motivation', function (Blueprint $table) {
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
        Schema::dropIfExists('out_motivation');
    }
}
