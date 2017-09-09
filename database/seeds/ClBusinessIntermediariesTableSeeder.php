<?php

use Illuminate\Database\Seeder;

class ClBusinessIntermediariesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cl_business_intermediaries')->delete();
        
        \DB::table('cl_business_intermediaries')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'DISTRIBUTOR',
                'status' => 'ACTIVE',
                'created_at' => '2017-08-27 09:39:41',
                'updated_at' => '2017-08-27 09:39:41',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'WHOLESALER',
                'status' => 'ACTIVE',
                'created_at' => '2017-08-27 09:39:52',
                'updated_at' => '2017-08-27 09:39:52',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'RETAILER',
                'status' => 'ACTIVE',
                'created_at' => '2017-08-27 09:40:01',
                'updated_at' => '2017-08-27 09:40:01',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'AGENT',
                'status' => 'ACTIVE',
                'created_at' => '2017-08-27 09:40:10',
                'updated_at' => '2017-08-27 09:40:10',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'BROKER',
                'status' => 'ACTIVE',
                'created_at' => '2017-08-27 09:40:20',
                'updated_at' => '2017-08-27 09:40:20',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'title' => 'REFERRAL PARTNER',
                'status' => 'ACTIVE',
                'created_at' => '2017-08-27 09:40:32',
                'updated_at' => '2017-08-27 09:40:32',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}