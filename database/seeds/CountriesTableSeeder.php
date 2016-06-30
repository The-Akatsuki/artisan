<?php

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('countries')->delete();
        
        \DB::table('countries')->insert(array (
            0 => 
            array (
                'id' => '1',
                'country_name' => 'Aruba',
                'country_code' => 'AW',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            1 => 
            array (
                'id' => '2',
                'country_name' => 'Afghanistan',
                'country_code' => 'AF',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            2 => 
            array (
                'id' => '3',
                'country_name' => 'Angola',
                'country_code' => 'AO',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            3 => 
            array (
                'id' => '4',
                'country_name' => 'Anguilla',
                'country_code' => 'AI',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            4 => 
            array (
                'id' => '5',
                'country_name' => 'Albania',
                'country_code' => 'AL',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            5 => 
            array (
                'id' => '6',
                'country_name' => 'Andorra',
                'country_code' => 'AD',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            6 => 
            array (
                'id' => '7',
                'country_name' => 'Netherlands Antilles',
                'country_code' => 'AN',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            7 => 
            array (
                'id' => '8',
                'country_name' => 'United Arab Emirates',
                'country_code' => 'AE',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            8 => 
            array (
                'id' => '9',
                'country_name' => 'Argentina',
                'country_code' => 'AR',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            9 => 
            array (
                'id' => '10',
                'country_name' => 'Armenia',
                'country_code' => 'AM',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            10 => 
            array (
                'id' => '11',
                'country_name' => 'American Samoa',
                'country_code' => 'AS',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            11 => 
            array (
                'id' => '12',
                'country_name' => 'Antarctica',
                'country_code' => 'AQ',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            12 => 
            array (
                'id' => '13',
                'country_name' => 'French Southern territories',
                'country_code' => 'TF',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            13 => 
            array (
                'id' => '14',
                'country_name' => 'Antigua and Barbuda',
                'country_code' => 'AG',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            14 => 
            array (
                'id' => '15',
                'country_name' => 'Australia',
                'country_code' => 'AU',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            15 => 
            array (
                'id' => '16',
                'country_name' => 'Austria',
                'country_code' => 'AT',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            16 => 
            array (
                'id' => '17',
                'country_name' => 'Azerbaijan',
                'country_code' => 'AZ',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            17 => 
            array (
                'id' => '18',
                'country_name' => 'Burundi',
                'country_code' => 'BI',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            18 => 
            array (
                'id' => '19',
                'country_name' => 'Belgium',
                'country_code' => 'BE',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            19 => 
            array (
                'id' => '20',
                'country_name' => 'Benin',
                'country_code' => 'BJ',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            20 => 
            array (
                'id' => '21',
                'country_name' => 'Burkina Faso',
                'country_code' => 'BF',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            21 => 
            array (
                'id' => '22',
                'country_name' => 'Bangladesh',
                'country_code' => 'BD',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            22 => 
            array (
                'id' => '23',
                'country_name' => 'Bulgaria',
                'country_code' => 'BG',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            23 => 
            array (
                'id' => '24',
                'country_name' => 'Bahrain',
                'country_code' => 'BH',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            24 => 
            array (
                'id' => '25',
                'country_name' => 'Bahamas',
                'country_code' => 'BS',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            25 => 
            array (
                'id' => '26',
                'country_name' => 'Bosnia and Herzegovina',
                'country_code' => 'BA',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            26 => 
            array (
                'id' => '27',
                'country_name' => 'Belarus',
                'country_code' => 'BY',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            27 => 
            array (
                'id' => '28',
                'country_name' => 'Belize',
                'country_code' => 'BZ',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            28 => 
            array (
                'id' => '29',
                'country_name' => 'Bermuda',
                'country_code' => 'BM',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            29 => 
            array (
                'id' => '30',
                'country_name' => 'Bolivia',
                'country_code' => 'BO',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            30 => 
            array (
                'id' => '31',
                'country_name' => 'Brazil',
                'country_code' => 'BR',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            31 => 
            array (
                'id' => '32',
                'country_name' => 'Barbados',
                'country_code' => 'BB',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            32 => 
            array (
                'id' => '33',
                'country_name' => 'Brunei',
                'country_code' => 'BN',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            33 => 
            array (
                'id' => '34',
                'country_name' => 'Bhutan',
                'country_code' => 'BT',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            34 => 
            array (
                'id' => '35',
                'country_name' => 'Bouvet Island',
                'country_code' => 'BV',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            35 => 
            array (
                'id' => '36',
                'country_name' => 'Botswana',
                'country_code' => 'BW',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            36 => 
            array (
                'id' => '37',
                'country_name' => 'Central African Republic',
                'country_code' => 'CF',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            37 => 
            array (
                'id' => '38',
                'country_name' => 'Canada',
                'country_code' => 'CA',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            38 => 
            array (
                'id' => '39',
            'country_name' => 'Cocos (Keeling) Islands',
                'country_code' => 'CC',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            39 => 
            array (
                'id' => '40',
                'country_name' => 'Switzerland',
                'country_code' => 'CH',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            40 => 
            array (
                'id' => '41',
                'country_name' => 'Chile',
                'country_code' => 'CL',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            41 => 
            array (
                'id' => '42',
                'country_name' => 'China',
                'country_code' => 'CN',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            42 => 
            array (
                'id' => '43',
                'country_name' => 'CÃ´te dâ€™Ivoire',
                'country_code' => 'CI',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            43 => 
            array (
                'id' => '44',
                'country_name' => 'Cameroon',
                'country_code' => 'CM',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            44 => 
            array (
                'id' => '45',
                'country_name' => 'Congo, The Democratic Republic of the',
                'country_code' => 'CD',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            45 => 
            array (
                'id' => '46',
                'country_name' => 'Congo',
                'country_code' => 'CG',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            46 => 
            array (
                'id' => '47',
                'country_name' => 'Cook Islands',
                'country_code' => 'CK',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            47 => 
            array (
                'id' => '48',
                'country_name' => 'Columbia',
                'country_code' => 'CO',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            48 => 
            array (
                'id' => '49',
                'country_name' => 'Comoros',
                'country_code' => 'KM',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            49 => 
            array (
                'id' => '50',
                'country_name' => 'Cape Verde',
                'country_code' => 'CV',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            50 => 
            array (
                'id' => '51',
                'country_name' => 'Costa Rica',
                'country_code' => 'CR',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            51 => 
            array (
                'id' => '52',
                'country_name' => 'Cuba',
                'country_code' => 'CU',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            52 => 
            array (
                'id' => '53',
                'country_name' => 'Christmas Island',
                'country_code' => 'CX',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            53 => 
            array (
                'id' => '54',
                'country_name' => 'Cayman Islands',
                'country_code' => 'KY',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            54 => 
            array (
                'id' => '55',
                'country_name' => 'Cyprus',
                'country_code' => 'CY',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            55 => 
            array (
                'id' => '56',
                'country_name' => 'Czech Republic',
                'country_code' => 'CZ',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            56 => 
            array (
                'id' => '57',
                'country_name' => 'Germany',
                'country_code' => 'DE',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            57 => 
            array (
                'id' => '58',
                'country_name' => 'Djibouti',
                'country_code' => 'DJ',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            58 => 
            array (
                'id' => '59',
                'country_name' => 'Dominica',
                'country_code' => 'DM',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            59 => 
            array (
                'id' => '60',
                'country_name' => 'Denmark',
                'country_code' => 'DK',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            60 => 
            array (
                'id' => '61',
                'country_name' => 'Dominican Republic',
                'country_code' => 'DO',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            61 => 
            array (
                'id' => '62',
                'country_name' => 'Algeria',
                'country_code' => 'DZ',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            62 => 
            array (
                'id' => '63',
                'country_name' => 'Ecuador',
                'country_code' => 'EC',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            63 => 
            array (
                'id' => '64',
                'country_name' => 'Egypt',
                'country_code' => 'EG',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            64 => 
            array (
                'id' => '65',
                'country_name' => 'Eritrea',
                'country_code' => 'ER',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            65 => 
            array (
                'id' => '66',
                'country_name' => 'Western Sahara',
                'country_code' => 'EH',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            66 => 
            array (
                'id' => '67',
                'country_name' => 'Spain',
                'country_code' => 'ES',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            67 => 
            array (
                'id' => '68',
                'country_name' => 'Estonia',
                'country_code' => 'EE',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            68 => 
            array (
                'id' => '69',
                'country_name' => 'Ethiopia',
                'country_code' => 'ET',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            69 => 
            array (
                'id' => '70',
                'country_name' => 'Finland',
                'country_code' => 'FI',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            70 => 
            array (
                'id' => '71',
                'country_name' => 'Fiji Islands',
                'country_code' => 'FJ',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            71 => 
            array (
                'id' => '72',
                'country_name' => 'Falkland Islands',
                'country_code' => 'FK',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            72 => 
            array (
                'id' => '73',
                'country_name' => 'France',
                'country_code' => 'FR',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            73 => 
            array (
                'id' => '74',
                'country_name' => 'Faroe Islands',
                'country_code' => 'FO',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            74 => 
            array (
                'id' => '75',
                'country_name' => 'Micronesia, Federated States of',
                'country_code' => 'FM',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            75 => 
            array (
                'id' => '76',
                'country_name' => 'Gabon',
                'country_code' => 'GA',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            76 => 
            array (
                'id' => '77',
                'country_name' => 'United Kingdom',
                'country_code' => 'GB',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            77 => 
            array (
                'id' => '78',
                'country_name' => 'Georgia',
                'country_code' => 'GE',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            78 => 
            array (
                'id' => '79',
                'country_name' => 'Ghana',
                'country_code' => 'GH',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            79 => 
            array (
                'id' => '80',
                'country_name' => 'Gibraltar',
                'country_code' => 'GI',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            80 => 
            array (
                'id' => '81',
                'country_name' => 'Guinea',
                'country_code' => 'GN',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            81 => 
            array (
                'id' => '82',
                'country_name' => 'Guadeloupe',
                'country_code' => 'GP',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            82 => 
            array (
                'id' => '83',
                'country_name' => 'Gambia',
                'country_code' => 'GM',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            83 => 
            array (
                'id' => '84',
                'country_name' => 'Guinea-Bissau',
                'country_code' => 'GW',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            84 => 
            array (
                'id' => '85',
                'country_name' => 'Equatorial Guinea',
                'country_code' => 'GQ',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            85 => 
            array (
                'id' => '86',
                'country_name' => 'Greece',
                'country_code' => 'GR',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            86 => 
            array (
                'id' => '87',
                'country_name' => 'Grenada',
                'country_code' => 'GD',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            87 => 
            array (
                'id' => '88',
                'country_name' => 'Greenland',
                'country_code' => 'GL',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            88 => 
            array (
                'id' => '89',
                'country_name' => 'Guatemala',
                'country_code' => 'GT',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            89 => 
            array (
                'id' => '90',
                'country_name' => 'French Guiana',
                'country_code' => 'GF',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            90 => 
            array (
                'id' => '91',
                'country_name' => 'Guam',
                'country_code' => 'GU',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            91 => 
            array (
                'id' => '92',
                'country_name' => 'Guyana',
                'country_code' => 'GY',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            92 => 
            array (
                'id' => '93',
                'country_name' => 'Hong Kong',
                'country_code' => 'HK',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            93 => 
            array (
                'id' => '94',
                'country_name' => 'Heard Island and McDonald Islands',
                'country_code' => 'HM',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            94 => 
            array (
                'id' => '95',
                'country_name' => 'Honduras',
                'country_code' => 'HN',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            95 => 
            array (
                'id' => '96',
                'country_name' => 'Croatia',
                'country_code' => 'HR',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            96 => 
            array (
                'id' => '97',
                'country_name' => 'Haiti',
                'country_code' => 'HT',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            97 => 
            array (
                'id' => '98',
                'country_name' => 'Hungary',
                'country_code' => 'HU',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            98 => 
            array (
                'id' => '99',
                'country_name' => 'Indonesia',
                'country_code' => 'ID',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            99 => 
            array (
                'id' => '100',
                'country_name' => 'India',
                'country_code' => 'IN',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            100 => 
            array (
                'id' => '101',
                'country_name' => 'British Indian Ocean Territory',
                'country_code' => 'IO',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            101 => 
            array (
                'id' => '102',
                'country_name' => 'Ireland',
                'country_code' => 'IE',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            102 => 
            array (
                'id' => '103',
                'country_name' => 'Iran',
                'country_code' => 'IR',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            103 => 
            array (
                'id' => '104',
                'country_name' => 'Iraq',
                'country_code' => 'IQ',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            104 => 
            array (
                'id' => '105',
                'country_name' => 'Iceland',
                'country_code' => 'IS',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            105 => 
            array (
                'id' => '106',
                'country_name' => 'Israel',
                'country_code' => 'IL',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            106 => 
            array (
                'id' => '107',
                'country_name' => 'Italy',
                'country_code' => 'IT',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            107 => 
            array (
                'id' => '108',
                'country_name' => 'Jamaica',
                'country_code' => 'JM',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            108 => 
            array (
                'id' => '109',
                'country_name' => 'Jordan',
                'country_code' => 'JO',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            109 => 
            array (
                'id' => '110',
                'country_name' => 'Japan',
                'country_code' => 'JP',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            110 => 
            array (
                'id' => '111',
                'country_name' => 'Kazakstan',
                'country_code' => 'KZ',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            111 => 
            array (
                'id' => '112',
                'country_name' => 'Kenya',
                'country_code' => 'KE',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            112 => 
            array (
                'id' => '113',
                'country_name' => 'Kyrgyzstan',
                'country_code' => 'KG',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            113 => 
            array (
                'id' => '114',
                'country_name' => 'Cambodia',
                'country_code' => 'KH',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            114 => 
            array (
                'id' => '115',
                'country_name' => 'Kiribati',
                'country_code' => 'KI',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            115 => 
            array (
                'id' => '116',
                'country_name' => 'Saint Kitts and Nevis',
                'country_code' => 'KN',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            116 => 
            array (
                'id' => '117',
                'country_name' => 'South Korea',
                'country_code' => 'KR',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            117 => 
            array (
                'id' => '118',
                'country_name' => 'Kuwait',
                'country_code' => 'KW',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            118 => 
            array (
                'id' => '119',
                'country_name' => 'Laos',
                'country_code' => 'LA',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            119 => 
            array (
                'id' => '120',
                'country_name' => 'Lebanon',
                'country_code' => 'LB',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            120 => 
            array (
                'id' => '121',
                'country_name' => 'Liberia',
                'country_code' => 'LR',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            121 => 
            array (
                'id' => '122',
                'country_name' => 'Libyan Arab Jamahiriya',
                'country_code' => 'LY',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            122 => 
            array (
                'id' => '123',
                'country_name' => 'Saint Lucia',
                'country_code' => 'LC',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            123 => 
            array (
                'id' => '124',
                'country_name' => 'Liechtenstein',
                'country_code' => 'LI',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            124 => 
            array (
                'id' => '125',
                'country_name' => 'Sri Lanka',
                'country_code' => 'LK',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            125 => 
            array (
                'id' => '126',
                'country_name' => 'Lesotho',
                'country_code' => 'LS',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            126 => 
            array (
                'id' => '127',
                'country_name' => 'Lithuania',
                'country_code' => 'LT',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            127 => 
            array (
                'id' => '128',
                'country_name' => 'Luxembourg',
                'country_code' => 'LU',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            128 => 
            array (
                'id' => '129',
                'country_name' => 'Latvia',
                'country_code' => 'LV',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            129 => 
            array (
                'id' => '130',
                'country_name' => 'Macao',
                'country_code' => 'MO',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            130 => 
            array (
                'id' => '131',
                'country_name' => 'Morocco',
                'country_code' => 'MA',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            131 => 
            array (
                'id' => '132',
                'country_name' => 'Monaco',
                'country_code' => 'MC',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            132 => 
            array (
                'id' => '133',
                'country_name' => 'Moldova',
                'country_code' => 'MD',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            133 => 
            array (
                'id' => '134',
                'country_name' => 'Madagascar',
                'country_code' => 'MG',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            134 => 
            array (
                'id' => '135',
                'country_name' => 'Maldives',
                'country_code' => 'MV',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            135 => 
            array (
                'id' => '136',
                'country_name' => 'Mexico',
                'country_code' => 'MX',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            136 => 
            array (
                'id' => '137',
                'country_name' => 'Marshall Islands',
                'country_code' => 'MH',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            137 => 
            array (
                'id' => '138',
                'country_name' => 'Macedonia',
                'country_code' => 'MK',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            138 => 
            array (
                'id' => '139',
                'country_name' => 'Mali',
                'country_code' => 'ML',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            139 => 
            array (
                'id' => '140',
                'country_name' => 'Malta',
                'country_code' => 'MT',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            140 => 
            array (
                'id' => '141',
                'country_name' => 'Myanmar',
                'country_code' => 'MM',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            141 => 
            array (
                'id' => '142',
                'country_name' => 'Mongolia',
                'country_code' => 'MN',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            142 => 
            array (
                'id' => '143',
                'country_name' => 'Northern Mariana Islands',
                'country_code' => 'MP',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            143 => 
            array (
                'id' => '144',
                'country_name' => 'Mozambique',
                'country_code' => 'MZ',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            144 => 
            array (
                'id' => '145',
                'country_name' => 'Mauritania',
                'country_code' => 'MR',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            145 => 
            array (
                'id' => '146',
                'country_name' => 'Montserrat',
                'country_code' => 'MS',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            146 => 
            array (
                'id' => '147',
                'country_name' => 'Martinique',
                'country_code' => 'MQ',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            147 => 
            array (
                'id' => '148',
                'country_name' => 'Mauritius',
                'country_code' => 'MU',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            148 => 
            array (
                'id' => '149',
                'country_name' => 'Malawi',
                'country_code' => 'MW',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            149 => 
            array (
                'id' => '150',
                'country_name' => 'Malaysia',
                'country_code' => 'MY',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            150 => 
            array (
                'id' => '151',
                'country_name' => 'Mayotte',
                'country_code' => 'YT',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            151 => 
            array (
                'id' => '152',
                'country_name' => 'Namibia',
                'country_code' => 'NA',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            152 => 
            array (
                'id' => '153',
                'country_name' => 'New Caledonia',
                'country_code' => 'NC',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            153 => 
            array (
                'id' => '154',
                'country_name' => 'Niger',
                'country_code' => 'NE',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            154 => 
            array (
                'id' => '155',
                'country_name' => 'Norfolk Island',
                'country_code' => 'NF',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            155 => 
            array (
                'id' => '156',
                'country_name' => 'Nigeria',
                'country_code' => 'NG',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            156 => 
            array (
                'id' => '157',
                'country_name' => 'Nicaragua',
                'country_code' => 'NI',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            157 => 
            array (
                'id' => '158',
                'country_name' => 'Niue',
                'country_code' => 'NU',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            158 => 
            array (
                'id' => '159',
                'country_name' => 'Netherlands',
                'country_code' => 'NL',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            159 => 
            array (
                'id' => '160',
                'country_name' => 'Norway',
                'country_code' => 'NO',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            160 => 
            array (
                'id' => '161',
                'country_name' => 'Nepal',
                'country_code' => 'NP',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            161 => 
            array (
                'id' => '162',
                'country_name' => 'Nauru',
                'country_code' => 'NR',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            162 => 
            array (
                'id' => '163',
                'country_name' => 'New Zealand',
                'country_code' => 'NZ',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            163 => 
            array (
                'id' => '164',
                'country_name' => 'Oman',
                'country_code' => 'OM',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            164 => 
            array (
                'id' => '165',
                'country_name' => 'Pakistan',
                'country_code' => 'PK',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            165 => 
            array (
                'id' => '166',
                'country_name' => 'Panama',
                'country_code' => 'PA',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            166 => 
            array (
                'id' => '167',
                'country_name' => 'Pitcairn',
                'country_code' => 'PN',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            167 => 
            array (
                'id' => '168',
                'country_name' => 'Peru',
                'country_code' => 'PE',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            168 => 
            array (
                'id' => '169',
                'country_name' => 'Philippines',
                'country_code' => 'PH',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            169 => 
            array (
                'id' => '170',
                'country_name' => 'Palau',
                'country_code' => 'PW',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            170 => 
            array (
                'id' => '171',
                'country_name' => 'Papua New Guinea',
                'country_code' => 'PG',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            171 => 
            array (
                'id' => '172',
                'country_name' => 'Poland',
                'country_code' => 'PL',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            172 => 
            array (
                'id' => '173',
                'country_name' => 'Puerto Rico',
                'country_code' => 'PR',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            173 => 
            array (
                'id' => '174',
                'country_name' => 'North Korea',
                'country_code' => 'KP',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            174 => 
            array (
                'id' => '175',
                'country_name' => 'Portugal',
                'country_code' => 'PT',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            175 => 
            array (
                'id' => '176',
                'country_name' => 'Paraguay',
                'country_code' => 'PY',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            176 => 
            array (
                'id' => '177',
                'country_name' => 'Palestine',
                'country_code' => 'PS',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            177 => 
            array (
                'id' => '178',
                'country_name' => 'French Polynesia',
                'country_code' => 'PF',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            178 => 
            array (
                'id' => '179',
                'country_name' => 'Qatar',
                'country_code' => 'QA',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            179 => 
            array (
                'id' => '180',
                'country_name' => 'RÃ©union',
                'country_code' => 'RE',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            180 => 
            array (
                'id' => '181',
                'country_name' => 'Romania',
                'country_code' => 'RO',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            181 => 
            array (
                'id' => '182',
                'country_name' => 'Russian Federation',
                'country_code' => 'RU',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            182 => 
            array (
                'id' => '183',
                'country_name' => 'Rwanda',
                'country_code' => 'RW',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            183 => 
            array (
                'id' => '184',
                'country_name' => 'Saudi Arabia',
                'country_code' => 'SA',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            184 => 
            array (
                'id' => '185',
                'country_name' => 'Sudan',
                'country_code' => 'SD',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            185 => 
            array (
                'id' => '186',
                'country_name' => 'Senegal',
                'country_code' => 'SN',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            186 => 
            array (
                'id' => '187',
                'country_name' => 'Singapore',
                'country_code' => 'SG',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            187 => 
            array (
                'id' => '188',
                'country_name' => 'South Georgia and the South Sandwich Islands',
                'country_code' => 'GS',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            188 => 
            array (
                'id' => '189',
                'country_name' => 'Saint Helena',
                'country_code' => 'SH',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            189 => 
            array (
                'id' => '190',
                'country_name' => 'Svalbard and Jan Mayen',
                'country_code' => 'SJ',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            190 => 
            array (
                'id' => '191',
                'country_name' => 'Solomon Islands',
                'country_code' => 'SB',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            191 => 
            array (
                'id' => '192',
                'country_name' => 'Sierra Leone',
                'country_code' => 'SL',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            192 => 
            array (
                'id' => '193',
                'country_name' => 'El Salvador',
                'country_code' => 'SV',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            193 => 
            array (
                'id' => '194',
                'country_name' => 'San Marino',
                'country_code' => 'SM',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            194 => 
            array (
                'id' => '195',
                'country_name' => 'Somalia',
                'country_code' => 'SO',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            195 => 
            array (
                'id' => '196',
                'country_name' => 'Saint Pierre and Miquelon',
                'country_code' => 'PM',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            196 => 
            array (
                'id' => '197',
                'country_name' => 'Sao Tome and Principe',
                'country_code' => 'ST',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            197 => 
            array (
                'id' => '198',
                'country_name' => 'Suriname',
                'country_code' => 'SR',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            198 => 
            array (
                'id' => '199',
                'country_name' => 'Slovakia',
                'country_code' => 'SK',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            199 => 
            array (
                'id' => '200',
                'country_name' => 'Slovenia',
                'country_code' => 'SI',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            200 => 
            array (
                'id' => '201',
                'country_name' => 'Sweden',
                'country_code' => 'SE',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            201 => 
            array (
                'id' => '202',
                'country_name' => 'Swaziland',
                'country_code' => 'SZ',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            202 => 
            array (
                'id' => '203',
                'country_name' => 'Seychelles',
                'country_code' => 'SC',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            203 => 
            array (
                'id' => '204',
                'country_name' => 'Syria',
                'country_code' => 'SY',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            204 => 
            array (
                'id' => '205',
                'country_name' => 'Turks and Caicos Islands',
                'country_code' => 'TC',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            205 => 
            array (
                'id' => '206',
                'country_name' => 'Chad',
                'country_code' => 'TD',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            206 => 
            array (
                'id' => '207',
                'country_name' => 'Togo',
                'country_code' => 'TG',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            207 => 
            array (
                'id' => '208',
                'country_name' => 'Thailand',
                'country_code' => 'TH',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            208 => 
            array (
                'id' => '209',
                'country_name' => 'Tajikistan',
                'country_code' => 'TJ',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            209 => 
            array (
                'id' => '210',
                'country_name' => 'Tokelau',
                'country_code' => 'TK',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            210 => 
            array (
                'id' => '211',
                'country_name' => 'Turkmenistan',
                'country_code' => 'TM',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            211 => 
            array (
                'id' => '212',
                'country_name' => 'East Timor',
                'country_code' => 'TP',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            212 => 
            array (
                'id' => '213',
                'country_name' => 'Tonga',
                'country_code' => 'TO',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            213 => 
            array (
                'id' => '214',
                'country_name' => 'Trinidad and Tobago',
                'country_code' => 'TT',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            214 => 
            array (
                'id' => '215',
                'country_name' => 'Tunisia',
                'country_code' => 'TN',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            215 => 
            array (
                'id' => '216',
                'country_name' => 'Turkey',
                'country_code' => 'TR',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            216 => 
            array (
                'id' => '217',
                'country_name' => 'Tuvalu',
                'country_code' => 'TV',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            217 => 
            array (
                'id' => '218',
                'country_name' => 'Taiwan',
                'country_code' => 'TW',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            218 => 
            array (
                'id' => '219',
                'country_name' => 'Tanzania',
                'country_code' => 'TZ',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            219 => 
            array (
                'id' => '220',
                'country_name' => 'Uganda',
                'country_code' => 'UG',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            220 => 
            array (
                'id' => '221',
                'country_name' => 'Ukraine',
                'country_code' => 'UA',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            221 => 
            array (
                'id' => '222',
                'country_name' => 'United States Minor Outlying Islands',
                'country_code' => 'UM',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            222 => 
            array (
                'id' => '223',
                'country_name' => 'Uruguay',
                'country_code' => 'UY',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            223 => 
            array (
                'id' => '224',
                'country_name' => 'United States',
                'country_code' => 'US',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            224 => 
            array (
                'id' => '225',
                'country_name' => 'Uzbekistan',
                'country_code' => 'UZ',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            225 => 
            array (
                'id' => '226',
            'country_name' => 'Holy See (Vatican City State)',
                'country_code' => 'VA',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            226 => 
            array (
                'id' => '227',
                'country_name' => 'Saint Vincent and the Grenadines',
                'country_code' => 'VC',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            227 => 
            array (
                'id' => '228',
                'country_name' => 'Venezuela',
                'country_code' => 'VE',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            228 => 
            array (
                'id' => '229',
                'country_name' => 'Virgin Islands, British',
                'country_code' => 'VG',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            229 => 
            array (
                'id' => '230',
                'country_name' => 'Virgin Islands, U.S.',
                'country_code' => 'VI',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            230 => 
            array (
                'id' => '231',
                'country_name' => 'Vietnam',
                'country_code' => 'VN',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            231 => 
            array (
                'id' => '232',
                'country_name' => 'Vanuatu',
                'country_code' => 'VU',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            232 => 
            array (
                'id' => '233',
                'country_name' => 'Wallis and Futuna',
                'country_code' => 'WF',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            233 => 
            array (
                'id' => '234',
                'country_name' => 'Samoa',
                'country_code' => 'WS',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            234 => 
            array (
                'id' => '235',
                'country_name' => 'Yemen',
                'country_code' => 'YE',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            235 => 
            array (
                'id' => '236',
                'country_name' => 'Yugoslavia',
                'country_code' => 'YU',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            236 => 
            array (
                'id' => '237',
                'country_name' => 'South Africa',
                'country_code' => 'ZA',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            237 => 
            array (
                'id' => '238',
                'country_name' => 'Zambia',
                'country_code' => 'ZM',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
            238 => 
            array (
                'id' => '239',
                'country_name' => 'Zimbabwe',
                'country_code' => 'ZW',
                'status' => 'active',
                'created_at' => '2012-08-23 12:38:04',
                'updated_at' => '2012-08-23 12:38:04',
            ),
        ));
        
        
    }
}
