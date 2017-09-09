<?php

use Illuminate\Database\Seeder;

class MembersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('members')->delete();
        
        \DB::table('members')->insert(array (
            0 => 
            array (
                'id' => 1,
                'role_id' => 1,
                'name' => 'Son Sothea',
                'username' => 'ksmart.lion@gmail.com',
                'email' => 'ksmart.lion@gmail.com',
                'phone' => '69600400',
                'password' => '$2y$10$ogO4GTsRU4DpJ36gNqFX4udhQlfHbF4S.zBSRyrAqe9Hx45aAl4Uy',
                'confirmed' => 0,
                'confirmation_code' => NULL,
                'photo' => 'uploads/64554_1504229565_3784.png',
                'status' => 'ACTIVE',
                'create_by' => 0,
                'update_by' => 0,
                'remember_token' => NULL,
                'created_at' => '2017-09-01 08:32:45',
                'updated_at' => '2017-09-01 08:32:45',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}