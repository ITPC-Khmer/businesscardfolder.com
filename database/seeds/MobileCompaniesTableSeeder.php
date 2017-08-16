<?php

use Illuminate\Database\Seeder;

class MobileCompaniesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('mobile_companies')->delete();
        
        \DB::table('mobile_companies')->insert(array (
            0 => 
            array (
                'id' => 1,
                'country_id' => 1,
                'company_name' => 'Smart',
                'logo' => NULL,
                'website' => NULL,
                'prefix_number' => NULL,
                'description' => NULL,
                'status' => 'ACTIVE',
                'created_at' => '2017-08-16 10:30:23',
                'updated_at' => '2017-08-16 10:30:23',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'country_id' => 1,
                'company_name' => 'Mobile',
                'logo' => NULL,
                'website' => NULL,
                'prefix_number' => NULL,
                'description' => NULL,
                'status' => 'ACTIVE',
                'created_at' => '2017-08-16 10:31:08',
                'updated_at' => '2017-08-16 10:31:08',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'country_id' => 1,
                'company_name' => 'Metfone',
                'logo' => NULL,
                'website' => NULL,
                'prefix_number' => NULL,
                'description' => NULL,
                'status' => 'ACTIVE',
                'created_at' => '2017-08-16 10:31:24',
                'updated_at' => '2017-08-16 10:31:24',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'country_id' => 1,
                'company_name' => 'QB',
                'logo' => NULL,
                'website' => NULL,
                'prefix_number' => NULL,
                'description' => NULL,
                'status' => 'ACTIVE',
                'created_at' => '2017-08-16 11:29:45',
                'updated_at' => '2017-08-16 11:29:45',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'country_id' => 1,
                'company_name' => 'CooTel',
                'logo' => NULL,
                'website' => NULL,
                'prefix_number' => NULL,
                'description' => NULL,
                'status' => 'ACTIVE',
                'created_at' => '2017-08-16 11:29:57',
                'updated_at' => '2017-08-16 11:29:57',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'country_id' => 1,
                'company_name' => 'Seatel',
                'logo' => NULL,
                'website' => NULL,
                'prefix_number' => NULL,
                'description' => NULL,
                'status' => 'ACTIVE',
                'created_at' => '2017-08-16 11:30:08',
                'updated_at' => '2017-08-16 11:30:08',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}