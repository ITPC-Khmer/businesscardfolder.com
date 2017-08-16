<?php

use Illuminate\Database\Seeder;

class TelephoneCompaniesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('telephone_companies')->delete();
        
        \DB::table('telephone_companies')->insert(array (
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
                'created_at' => '2017-08-16 11:30:56',
                'updated_at' => '2017-08-16 11:30:56',
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
                'created_at' => '2017-08-16 11:31:06',
                'updated_at' => '2017-08-16 11:31:06',
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
                'created_at' => '2017-08-16 11:31:16',
                'updated_at' => '2017-08-16 11:31:16',
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
                'created_at' => '2017-08-16 11:31:30',
                'updated_at' => '2017-08-16 11:31:30',
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
                'created_at' => '2017-08-16 11:31:41',
                'updated_at' => '2017-08-16 11:31:41',
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
                'created_at' => '2017-08-16 11:31:58',
                'updated_at' => '2017-08-16 11:31:58',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}