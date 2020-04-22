<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_information', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('admin_id')->nullable();
            $table->foreign('admin_id')->references('id')->on('admins')->onDelete('cascade');
            $table->string('gender')->nullable();
            $table->integer('gender')->nullable();
            $table->string('birth_date')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('facebook_link')->nullable();
            $table->string('twitter_link')->nullable();
            $table->string('skype_link')->nullable();
            $table->string('website_link')->nullable();
            $table->string('present_address')->nullable();
            $table->string('present_additional_address')->nullable();
            $table->string('present_city')->nullable();
            $table->string('present_postcode')->nullable();
            $table->string('present_state')->nullable();
            $table->string('present_country')->nullable();
            $table->string('parmanent_address')->nullable();
            $table->string('parmanent_additional_address')->nullable();
            $table->string('parmanent_city')->nullable();
            $table->string('parmanent_postcode')->nullable();
            $table->string('parmanent_state')->nullable();
            $table->string('parmanent_country')->nullable();
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
        Schema::dropIfExists('admin_information');
    }
}
