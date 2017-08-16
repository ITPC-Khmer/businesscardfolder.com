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
                'id' => 1,
                'code' => '855',
                'title' => 'Cambodia',
                'status' => 'ACTIVE',
                'created_at' => '2017-07-08 02:58:02',
                'updated_at' => '2017-07-08 02:58:02',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}