<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(CountriesTableSeeder::class);
        $this->call(ClBusinessCategoriesTableSeeder::class);
        $this->call(ClBusinessTypesTableSeeder::class);
        $this->call(ProvincesTableSeeder::class);
        $this->call(DistrictsTableSeeder::class);
        $this->call(CommunesTableSeeder::class);
        $this->call(TelephoneCompaniesTableSeeder::class);
        $this->call(SocialMediaTableSeeder::class);
        $this->call(MobileNetworksTableSeeder::class);
        $this->call(MobileCompaniesTableSeeder::class);
        $this->call(EmailCompaniesTableSeeder::class);
        $this->call(HrDepartmentsTableSeeder::class);
        $this->call(HrPositionsTableSeeder::class);
        $this->call(ClBusinessIntermediariesTableSeeder::class);
        $this->call(ClBusinessFunctionsTableSeeder::class);
        $this->call(CompaniesTableSeeder::class);
       /* $this->call(CompanyNameCardsTableSeeder::class);
        $this->call(MembersTableSeeder::class);*/
    }
}
