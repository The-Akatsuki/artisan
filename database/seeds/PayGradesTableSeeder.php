<?php

use Illuminate\Database\Seeder;

class PayGradesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pay_grades')->delete();
        
        \DB::table('pay_grades')->insert(array (
            0 => 
            array (
                'id' => '1',
                'pay_grade' => 'Management',
                'currency' => '2',
                'min_salary' => '10000',
                'max_salary' => '80000',
                'created_at' => '2016-07-02 06:27:54',
                'updated_at' => '2016-07-02 06:27:54',
            ),
        ));
        
        
    }
}
