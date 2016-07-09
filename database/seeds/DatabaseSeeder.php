<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $this->call('CountriesTableSeeder');
        $this->call('StatesTableSeeder');
        $this->call('CitiesTableSeeder');
        $this->call('CurrenciesTableSeeder');
        $this->call('rolesandpermission');
        $this->call('JobTypesTableSeeder');
        $this->call('JobTitlesTableSeeder');
        $this->call('PayGradesTableSeeder');
        $this->call('EmployeesTableSeeder');
        $this->call('CompanyInformationsTableSeeder');
        $this->call('DepartmentsTableSeeder');
        $this->call('QualificationsTableSeeder');
        $this->call('CertificationsTableSeeder');
        $this->call('SkillsTableSeeder');
    }

}
