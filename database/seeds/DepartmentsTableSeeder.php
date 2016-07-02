<?php

use Illuminate\Database\Seeder;

class DepartmentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('departments')->delete();
        
        \DB::table('departments')->insert(array (
            0 => 
            array (
                'id' => '1',
                'department_name' => 'test',
                'description' => 'klj',
                'company_id' => '1',
                'department_head' => '0',
                'parent_department' => '0',
                'sequence_order' => '0',
                'created_at' => '2016-07-02 08:25:27',
                'updated_at' => '2016-07-02 08:25:27',
            ),
            1 => 
            array (
                'id' => '2',
                'department_name' => 'test2',
                'description' => '',
                'company_id' => '1',
                'department_head' => '0',
                'parent_department' => '0',
                'sequence_order' => '0',
                'created_at' => '2016-07-02 08:25:34',
                'updated_at' => '2016-07-02 08:25:34',
            ),
        ));
        
        
    }
}
