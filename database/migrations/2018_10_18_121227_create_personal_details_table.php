<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fullname');
            $table->string('date_of_birth');
            $table->unsignedInteger('passport_number');
            $table->string('issuing_country');
            $table->date('date_of_issue');
            $table->date('date_of_expiry');
            $table->string('blood_type');
            $table->string('marital_status');
            $table->string('address');
            $table->string('city');
            $table->unsignedInteger('postal_code');
            $table->string('province');
            $table->string('country');
            $table->unsignedInteger('phone');
            $table->unsignedInteger('mobile');
            $table->string('email')->unique();
            $table->string('address2')->nullable();
            $table->string('city2')->nullable();
            $table->unsignedInteger('postal_code2')->nullable();
            $table->string('province2')->nullable();
            $table->string('country2')->nullable();
            $table->unsignedInteger('phone2')->nullable();
            $table->string('contact_name')->nullable();
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
        Schema::dropIfExists('personal_details');
    }
}
