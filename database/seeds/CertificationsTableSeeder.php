<?php

use Illuminate\Database\Seeder;

class CertificationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('certifications')->delete();
        
        \DB::table('certifications')->insert(array (
            0 => 
            array (
                'id' => '1',
                'certification' => 'C++',
                'description' => 'C++',
                'created_at' => '2016-07-09 06:59:59',
                'updated_at' => '2016-07-09 06:59:59',
            ),
            1 => 
            array (
                'id' => '3',
                'certification' => 'WEB development Laravel',
                'description' => 'WEB development',
                'created_at' => '2016-07-09 07:00:34',
                'updated_at' => '2016-07-09 07:00:34',
            ),
            2 => 
            array (
                'id' => '4',
                'certification' => 'J2ee',
                'description' => 'J2ee',
                'created_at' => '2016-07-09 07:00:48',
                'updated_at' => '2016-07-09 07:00:48',
            ),
            3 => 
            array (
                'id' => '5',
                'certification' => 'J2SE',
                'description' => 'J2SE',
                'created_at' => '2016-07-09 07:00:55',
                'updated_at' => '2016-07-09 07:00:55',
            ),
        ));
        
        
    }
}
