<?php

use Illuminate\Database\Seeder;

class SocialMediaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('social_media')->delete();
        
        \DB::table('social_media')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Google+',
                'company_name' => 'Google+',
                'logo' => NULL,
                'website' => NULL,
                'prefix_account' => NULL,
                'description' => NULL,
                'status' => 'ACTIVE',
                'created_at' => '2017-08-16 11:33:52',
                'updated_at' => '2017-08-16 11:33:52',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Facebook',
                'company_name' => 'Facebook',
                'logo' => NULL,
                'website' => NULL,
                'prefix_account' => NULL,
                'description' => NULL,
                'status' => 'ACTIVE',
                'created_at' => '2017-08-16 11:34:01',
                'updated_at' => '2017-08-16 11:34:01',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Instagram',
                'company_name' => 'Instagram',
                'logo' => NULL,
                'website' => NULL,
                'prefix_account' => NULL,
                'description' => NULL,
                'status' => 'ACTIVE',
                'created_at' => '2017-08-16 11:34:09',
                'updated_at' => '2017-08-16 11:34:09',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'Pinterest',
                'company_name' => 'Pinterest',
                'logo' => NULL,
                'website' => NULL,
                'prefix_account' => NULL,
                'description' => NULL,
                'status' => 'ACTIVE',
                'created_at' => '2017-08-16 11:34:19',
                'updated_at' => '2017-08-16 11:34:19',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'Twitter',
                'company_name' => 'Twitter',
                'logo' => NULL,
                'website' => NULL,
                'prefix_account' => NULL,
                'description' => NULL,
                'status' => 'ACTIVE',
                'created_at' => '2017-08-16 11:34:29',
                'updated_at' => '2017-08-16 11:34:29',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'title' => 'LinkedIn',
                'company_name' => 'LinkedIn',
                'logo' => NULL,
                'website' => NULL,
                'prefix_account' => NULL,
                'description' => NULL,
                'status' => 'ACTIVE',
                'created_at' => '2017-08-16 11:34:40',
                'updated_at' => '2017-08-16 11:34:40',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}