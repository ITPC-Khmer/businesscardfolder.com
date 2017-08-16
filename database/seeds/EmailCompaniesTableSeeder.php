<?php

use Illuminate\Database\Seeder;

class EmailCompaniesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('email_companies')->delete();
        
        \DB::table('email_companies')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Outlook',
                'company_name' => 'Outlook',
                'logo' => NULL,
                'website' => NULL,
                'prefix_account' => NULL,
                'description' => NULL,
                'status' => 'ACTIVE',
                'created_at' => '2017-08-16 11:32:51',
                'updated_at' => '2017-08-16 11:32:51',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Gmail',
                'company_name' => 'Gmail',
                'logo' => NULL,
                'website' => NULL,
                'prefix_account' => NULL,
                'description' => NULL,
                'status' => 'ACTIVE',
                'created_at' => '2017-08-16 11:33:02',
                'updated_at' => '2017-08-16 11:33:02',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Yahoo',
                'company_name' => 'Yahoo',
                'logo' => NULL,
                'website' => NULL,
                'prefix_account' => NULL,
                'description' => NULL,
                'status' => 'ACTIVE',
                'created_at' => '2017-08-16 11:33:12',
                'updated_at' => '2017-08-16 11:33:12',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'Hotmail',
                'company_name' => 'Hotmail',
                'logo' => NULL,
                'website' => NULL,
                'prefix_account' => NULL,
                'description' => NULL,
                'status' => 'ACTIVE',
                'created_at' => '2017-08-16 11:33:22',
                'updated_at' => '2017-08-16 11:33:22',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}