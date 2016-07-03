<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmployeeCertificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_certifications', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('employee_id');
            $table->integer('certification_id');
            $table->string('institute');
            $table->date('granted_on');
            $table->date('valid_upto');
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
        Schema::drop('employee_certifications');
    }
}
