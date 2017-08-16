<?php

use Illuminate\Database\Seeder;

class MobileNetworksTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('mobile_networks')->delete();
        
        \DB::table('mobile_networks')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Skype',
                'company_name' => 'Skype',
                'logo' => NULL,
                'website' => NULL,
                'prefix_account' => NULL,
                'description' => NULL,
                'status' => 'ACTIVE',
                'created_at' => '2017-08-16 11:35:08',
                'updated_at' => '2017-08-16 11:35:08',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'WeChat',
                'company_name' => 'WeChat',
                'logo' => NULL,
                'website' => NULL,
                'prefix_account' => NULL,
                'description' => NULL,
                'status' => 'ACTIVE',
                'created_at' => '2017-08-16 11:35:17',
                'updated_at' => '2017-08-16 11:35:17',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Viber',
                'company_name' => 'Viber',
                'logo' => NULL,
                'website' => NULL,
                'prefix_account' => NULL,
                'description' => NULL,
                'status' => 'ACTIVE',
                'created_at' => '2017-08-16 11:35:30',
                'updated_at' => '2017-08-16 11:35:30',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'QQ',
                'company_name' => 'QQ',
                'logo' => NULL,
                'website' => NULL,
                'prefix_account' => NULL,
                'description' => NULL,
                'status' => 'ACTIVE',
                'created_at' => '2017-08-16 11:35:38',
                'updated_at' => '2017-08-16 11:35:38',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'SnapChat',
                'company_name' => 'SnapChat',
                'logo' => NULL,
                'website' => NULL,
                'prefix_account' => NULL,
                'description' => NULL,
                'status' => 'ACTIVE',
                'created_at' => '2017-08-16 11:35:47',
                'updated_at' => '2017-08-16 11:35:47',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'title' => 'Whatsapp',
                'company_name' => 'Whatsapp',
                'logo' => NULL,
                'website' => NULL,
                'prefix_account' => NULL,
                'description' => NULL,
                'status' => 'ACTIVE',
                'created_at' => '2017-08-16 11:35:57',
                'updated_at' => '2017-08-16 11:35:57',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}