<?php

use Illuminate\Database\Seeder;

class CompanyNameCardsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('company_name_cards')->delete();
        
        \DB::table('company_name_cards')->insert(array (
            0 => 
            array (
                'id' => 1,
                'member_id' => 1,
                'company_id' => 1,
                'id_number' => '741852',
                'passport_number' => '0145555555',
                'given_name' => 'Sok',
                'family_name' => 'Dara',
                'married_status' => 'Single',
                'sex' => 'Male',
                'department_id' => 2,
                'position_id' => 11,
                'mobile_number' => '{"1":{"id":"1","key":"Smart","value":"+85569600400"},"2":{"id":"2","key":"Mobile","value":"087711142"},"3":{"id":"3","key":"Metfone","value":null},"4":{"id":"4","key":"QB","value":null},"5":{"id":"5","key":"CooTel","value":null},"6":{"id":"6","key":"Seatel","value":null}}',
                'telephone_number' => '{"1":{"id":"1","key":"Smart","value":"+85569600400"},"2":{"id":"2","key":"Mobile","value":"087711142"},"3":{"id":"3","key":"Metfone","value":null},"4":{"id":"4","key":"QB","value":null},"5":{"id":"5","key":"CooTel","value":null},"6":{"id":"6","key":"Seatel","value":null}}',
                'email' => '{"1":{"id":"1","key":"Outlook","value":"ksmart.lion@gmail.com"},"2":{"id":"2","key":"Gmail","value":"phannyphon8@gmail.com"},"3":{"id":"3","key":"Yahoo","value":null},"4":{"id":"4","key":"Hotmail","value":null}}',
                'fax' => NULL,
                'website' => 'http://furisode-search.heteml.net',
                'social_media' => '{"1":{"id":"1","key":"Google+","value":"lion@gmail.com"},"2":{"id":"2","key":"Facebook","value":"14785255"},"3":{"id":"3","key":"Instagram","value":null},"4":{"id":"4","key":"Pinterest","value":null},"5":{"id":"5","key":"Twitter","value":null},"6":{"id":"6","key":"LinkedIn","value":null}}',
                'mobile_network' => '{"1":{"id":"1","key":"Skype","value":"sk.abc"},"2":{"id":"2","key":"WeChat","value":null},"3":{"id":"3","key":"Viber","value":null},"4":{"id":"4","key":"QQ","value":null},"5":{"id":"5","key":"SnapChat","value":null},"6":{"id":"6","key":"Whatsapp","value":null}}',
                'card_vertical' => 'uploads/18820_1504230201_4753.png',
                'card_horizontal' => 'uploads/75669_1504230202_4348.png',
                'id_image' => 'uploads/32415_1504230202_3411.png',
                'passport_image' => 'uploads/57506_1504230247_3313.png',
                'photo' => 'uploads/54449_1504230247_2980.png',
                'status' => 'ACTIVE',
                'created_at' => '2017-09-01 08:43:22',
                'updated_at' => '2017-09-01 08:47:32',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}