<?php

use Illuminate\Database\Seeder;

class DistrictsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('districts')->delete();
        
        \DB::table('districts')->insert(array (
            0 => 
            array (
                'id' => 1201,
                'province_id' => 12,
                'code' => '1201',
                'title' => 'Chamkar Mon',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 1202,
                'province_id' => 12,
                'code' => '1202',
                'title' => 'Doun Penh',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 1203,
                'province_id' => 12,
                'code' => '1203',
                'title' => 'Prampir Meakkakra',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 1204,
                'province_id' => 12,
                'code' => '1204',
                'title' => 'Tuol Kouk',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 1205,
                'province_id' => 12,
                'code' => '1205',
                'title' => 'Dangkao',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 1206,
                'province_id' => 12,
                'code' => '1206',
                'title' => 'Mean Chey',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 1207,
                'province_id' => 12,
                'code' => '1207',
                'title' => 'Russey Keo',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 1208,
                'province_id' => 12,
                'code' => '1208',
                'title' => 'Saensokh',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 1209,
                'province_id' => 12,
                'code' => '1209',
                'title' => 'Pur SenChey',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 1210,
                'province_id' => 12,
                'code' => '1210',
                'title' => 'Chraoy Chongvar',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 1211,
                'province_id' => 12,
                'code' => '1211',
                'title' => 'Praek Pnov',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 1212,
                'province_id' => 12,
                'code' => '1212',
                'title' => 'Chbar Ampov',
                'status' => 'ACTIVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}