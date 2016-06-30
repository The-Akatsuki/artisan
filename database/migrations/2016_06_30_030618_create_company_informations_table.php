<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCompanyInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_informations', function(Blueprint $table) {
            $table->increments('id');
            $table->string('company_name');
            $table->string('registration_no');
            $table->string('company_type');
            $table->text('company_description');
            $table->string('contact_person');
            $table->string('contact_person_designation');
            $table->string('landline_number');
            $table->integer('mobile_number');
            $table->string('other_numbers');
            $table->string('contact_email');
            $table->string('website');
            $table->text('adress');
            $table->integer('city')->unsigned();
            $table->integer('state')->unsigned();
            $table->integer('country')->unsigned();
            $table->integer('pincode');
            $table->integer('timezone');
            $table->timestamps();
            
            $table->foreign('city')->references('id')->on('cities');
            $table->foreign('state')->references('id')->on('states');
            $table->foreign('country')->references('id')->on('countries');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('company_informations');
    }
}
