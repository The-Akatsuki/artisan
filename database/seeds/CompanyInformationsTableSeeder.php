<?php

use Illuminate\Database\Seeder;

class CompanyInformationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('company_informations')->delete();
        
        \DB::table('company_informations')->insert(array (
            0 => 
            array (
                'id' => '1',
                'company_name' => 'test',
                'registration_no' => 'WEAEWA',
                'company_type' => 'IJ',
                'company_description' => 'ILJ',
                'contact_person' => 'LKJ',
                'contact_person_designation' => 'KL',
                'landline_number' => 'K',
                'mobile_number' => '0',
                'other_numbers' => '',
                'contact_email' => '',
                'website' => '',
                'adress' => '',
                'city' => '1221',
                'state' => '500',
                'country' => '100',
                'pincode' => '0',
                'timezone' => '0',
                'created_at' => '2016-07-02 08:15:38',
                'updated_at' => '2016-07-02 08:15:38',
            ),
            1 => 
            array (
                'id' => '3',
                'company_name' => 'test3',
                'registration_no' => 'sdfsdfdsf',
                'company_type' => '',
                'company_description' => '',
                'contact_person' => '',
                'contact_person_designation' => '',
                'landline_number' => '',
                'mobile_number' => '0',
                'other_numbers' => '',
                'contact_email' => '',
                'website' => '',
                'adress' => '',
                'city' => '1055',
                'state' => '500',
                'country' => '100',
                'pincode' => '0',
                'timezone' => '0',
                'created_at' => '2016-07-02 08:25:55',
                'updated_at' => '2016-07-02 08:25:55',
            ),
        ));
        
        
    }
}
