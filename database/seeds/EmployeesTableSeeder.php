<?php

use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('employees')->delete();
        
        \DB::table('employees')->insert(array (
            0 => 
            array (
                'id' => '1',
                'employee_name' => 'Test Employee',
                'employee_code' => 'Test 2',
                'company_id' => '1',
                'department_id' => '1',
                'nationality' => '1',
                'date_of_birth' => '2016-07-06',
                'gender' => '',
                'marital_status' => '',
                'mobile_number' => '0',
                'landline' => '0',
                'email' => '',
                'address' => '',
                'city' => '1055',
                'state' => '500',
                'country' => '100',
                'pincode' => '123010',
                'job_type' => '2',
                'job_title' => '2',
                'pay_grade' => '1',
                'joining_date' => '0000-00-00',
                'termination_date' => '0000-00-00',
                'supevisor' => '0',
                'notes' => '',
                'created_at' => '2016-07-02 06:28:45',
                'updated_at' => '2016-07-02 06:31:56',
            ),
        ));
        
        
    }
}
