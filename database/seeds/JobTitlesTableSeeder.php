<?php

use Illuminate\Database\Seeder;

class JobTitlesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('job_titles')->delete();
        
        \DB::table('job_titles')->insert(array (
            0 => 
            array (
                'id' => '1',
                'job_title' => 'Web Designer',
                'description' => '',
                'created_at' => '2016-07-02 06:28:03',
                'updated_at' => '2016-07-02 06:28:03',
            ),
            1 => 
            array (
                'id' => '2',
                'job_title' => 'Developer',
                'description' => '',
                'created_at' => '2016-07-02 06:28:07',
                'updated_at' => '2016-07-02 06:28:07',
            ),
        ));
        
        
    }
}
