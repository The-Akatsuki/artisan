<?php

use Illuminate\Database\Seeder;

class QualificationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('qualifications')->delete();
        
        \DB::table('qualifications')->insert(array (
            0 => 
            array (
                'id' => '1',
                'qualification' => 'Btech',
                'description' => 'Btech',
                'created_at' => '2016-07-09 06:59:14',
                'updated_at' => '2016-07-09 06:59:14',
            ),
            1 => 
            array (
                'id' => '2',
                'qualification' => 'MBA',
                'description' => 'MBA',
                'created_at' => '2016-07-09 06:59:24',
                'updated_at' => '2016-07-09 06:59:24',
            ),
            2 => 
            array (
                'id' => '3',
                'qualification' => 'MTECH',
                'description' => 'MTECH',
                'created_at' => '2016-07-09 06:59:32',
                'updated_at' => '2016-07-09 06:59:32',
            ),
        ));
        
        
    }
}
