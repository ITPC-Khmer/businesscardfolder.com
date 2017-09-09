<?php

use Illuminate\Database\Seeder;

class ClBusinessFunctionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cl_business_functions')->delete();
        
        \DB::table('cl_business_functions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'MANUFACTURER',
                'status' => 'ACTIVE',
                'created_at' => '2017-08-27 09:36:41',
                'updated_at' => '2017-08-27 09:36:41',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'EXPORTER',
                'status' => 'ACTIVE',
                'created_at' => '2017-08-27 09:36:59',
                'updated_at' => '2017-08-27 09:36:59',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'EXCLUSIVE IMPORTER',
                'status' => 'ACTIVE',
                'created_at' => '2017-08-27 09:37:16',
                'updated_at' => '2017-08-27 09:37:16',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'INCLUSIVE IMPORTER',
                'status' => 'ACTIVE',
                'created_at' => '2017-08-27 09:37:34',
                'updated_at' => '2017-08-27 09:37:34',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'SOLE DISTRIBUTOR',
                'status' => 'ACTIVE',
                'created_at' => '2017-08-27 09:37:53',
                'updated_at' => '2017-08-27 09:37:53',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'title' => 'APPOINTED PARTNER',
                'status' => 'ACTIVE',
                'created_at' => '2017-08-27 09:38:09',
                'updated_at' => '2017-08-27 09:38:09',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'title' => 'SUBSIDIARY',
                'status' => 'ACTIVE',
                'created_at' => '2017-08-27 09:38:19',
                'updated_at' => '2017-08-27 09:38:19',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}