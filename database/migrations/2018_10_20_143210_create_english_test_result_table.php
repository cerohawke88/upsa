<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnglishTestResultTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('english_test_result', function (Blueprint $table) {
            $table->integer('name_id')->unsigned();
            $table->string('test')->nullable();
            $table->string('score')->nullable();
            $table->string('test_center')->nullable();
            $table->date('date_tested')->nullable();
            $table->timestamps();
        });

        Schema::table('english_test_result', function (Blueprint $table) {
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
        Schema::dropIfExists('english_test_result');
    }
}
