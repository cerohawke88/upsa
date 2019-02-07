<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOutOrganizationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('out_organization', function (Blueprint $table) {
            $table->integer('nameOut_id')->unsigned();
            $table->string('name_org')->nullable();
            $table->integer('year_org')->nullable();
            $table->timestamps();
        });

        Schema::table('out_organization', function (Blueprint $table) {
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
        Schema::dropIfExists('out_organization');
    }
}
