<?php

use Illuminate\Database\Seeder;

class JobTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('job_types')->delete();
        
        \DB::table('job_types')->insert(array (
            0 => 
            array (
                'id' => '1',
                'job_type' => 'Permanent',
                'description' => '',
                'created_at' => '2016-07-02 06:28:13',
                'updated_at' => '2016-07-02 06:28:13',
            ),
            1 => 
            array (
                'id' => '2',
                'job_type' => 'Contractual',
                'description' => '',
                'created_at' => '2016-07-02 06:28:16',
                'updated_at' => '2016-07-02 06:28:16',
            ),
        ));
        
        
    }
}
