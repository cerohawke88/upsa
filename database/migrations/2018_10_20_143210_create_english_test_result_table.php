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
            $table->increments('id');
            $table->string('test');
            $table->integer('score');
            $table->string('test_center');
            $table->date('date_tested');
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
        Schema::dropIfExists('english_test_result');
    }
}
