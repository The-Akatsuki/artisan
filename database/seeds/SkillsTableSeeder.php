<?php

use Illuminate\Database\Seeder;

class SkillsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('skills')->delete();
        
        \DB::table('skills')->insert(array (
            0 => 
            array (
                'id' => '1',
                'skill' => 'Php',
                'description' => 'Php',
                'created_at' => '2016-07-09 07:01:30',
                'updated_at' => '2016-07-09 07:01:30',
            ),
            1 => 
            array (
                'id' => '2',
                'skill' => 'Management',
                'description' => 'Management',
                'created_at' => '2016-07-09 07:01:39',
                'updated_at' => '2016-07-09 07:01:39',
            ),
            2 => 
            array (
                'id' => '3',
                'skill' => 'HTML5',
                'description' => 'HTML5',
                'created_at' => '2016-07-09 07:01:51',
                'updated_at' => '2016-07-09 07:01:51',
            ),
        ));
        
        
    }
}
