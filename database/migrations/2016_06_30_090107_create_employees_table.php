<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function(Blueprint $table) {
            $table->increments('id');
            $table->string('employee_name');
            $table->string('employee_code');
            $table->integer('company_id');
            $table->integer('department_id');
            $table->integer('nationality');
            $table->date('date_of_birth');
            $table->string('gender');
            $table->string('marital_status');
            $table->integer('mobile_number');
            $table->integer('landline');
            $table->string('email');
            $table->text('address');
            $table->integer('city');
            $table->integer('state');
            $table->integer('country');
            $table->integer('pincode');
            $table->integer('employment_type');
            $table->integer('job_title');
            $table->integer('pay_grade');
            $table->date('joining_date');
            $table->date('termination_date');
            $table->integer('supevisor');
            $table->text('notes');
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
        Schema::drop('employees');
    }
}
