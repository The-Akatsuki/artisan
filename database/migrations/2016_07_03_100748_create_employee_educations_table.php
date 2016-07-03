<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmployeeEducationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_educations', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('employee_id');
            $table->integer('qualification_id');
            $table->string('institute');
            $table->date('start_date');
            $table->date('completed_on');
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
        Schema::drop('employee_educations');
    }
}
