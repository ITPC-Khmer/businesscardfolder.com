<?php

use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

        \DB::table('company_name_cards')->delete();
        \DB::table('companies')->delete();
        \DB::table('members')->delete();

        for($i=1;$i<50000;$i++) {

            $member_id = $i;
            $company_id = $i ;

            $_name = chr(rand(97,122)).chr(rand(97,122)).chr(rand(97,122)).chr(rand(97,122)).chr(rand(97,122)).chr(rand(97,122)).chr(rand(97,122)).chr(rand(97,122));


            \DB::table('members')->insert(array (
                0 =>
                    array (
                        'id' => $member_id,
                        'role_id' => 1,
                        'name' => $_name,
                        'username' => $_name.'@gmail.com',
                        'email' =>  $_name.'@gmail.com',
                        'phone' => $company_id,
                        'password' => '$2y$10$ogO4GTsRU4DpJ36gNqFX4udhQlfHbF4S.zBSRyrAqe9Hx45aAl4Uy',
                        'confirmed' => 0,
                        'confirmation_code' => NULL,
                        'photo' => 'uploads/'.rand(1,10).'.png',
                        'status' => 'ACTIVE',
                        'create_by' => 0,
                        'update_by' => 0,
                        'remember_token' => NULL,
                        'created_at' => '2017-09-01 08:32:45',
                        'updated_at' => '2017-09-01 08:32:45',
                        'deleted_at' => NULL,
                    ),
            ));


            \DB::table('companies')->insert(array(
                0 =>
                    array(
                        'id' => $company_id,
                        'member_id' => $member_id,
                        'business_type_json' => '{"1504229594402":{"business_category_id":"2","business_type_id":{"1504229594502":{"bt":"10","business_function_id":["3","6"],"business_intermediary_id":["4","3"]}}}}',
                        'business_category_id' => '{"2":"2"}',
                        'business_type_id' => '{"10":"10"}',
                        'business_function_id' => '{"3":"3","6":"6"}',
                        'business_intermediary_id' => '{"4":"4","3":"3"}',
                        'business_trade_form_id' => 0,
                        'business_trade_form_detail_id' => 0,
                        'official_name' => $_name,
                        'non_official_name' => NULL,
                        'moc_certificate' => NULL,
                        'moc_certificate_document' => NULL,
                        'moc_certificate_expiration_date' => NULL,
                        'vat_tin_number' => NULL,
                        'vat_tin_number_document' => NULL,
                        'vat_tin_number_expiration_date' => NULL,
                        'patent_license_number' => NULL,
                        'patent_license_document' => NULL,
                        'patent_license_number_expiration_date' => NULL,
                        'other_license_number' => NULL,
                        'other_license_document' => NULL,
                        'other_license_number_expiration_date' => NULL,
                        'country_id' => 1,
                        'province_id' => 12,
                        'district_id' => 1202,
                        'commune_id' => 120202,
                        'village_id' => NULL,
                        'street' => NULL,
                        'house_number' => NULL,
                        'zip_code' => NULL,
                        'address' => 'st.17 coco phnom penh',
                        'latitude' => NULL,
                        'longitude' => NULL,
                        'mobile_number' => '{"1":{"id":"1","key":"Smart","value":"010 73 03 37"},"2":{"id":"2","key":"Mobile","value":"012 258 963"},"3":{"id":"3","key":"Metfone","value":"097 854 2478"},"4":{"id":"4","key":"QB","value":null},"5":{"id":"5","key":"CooTel","value":null},"6":{"id":"6","key":"Seatel","value":null}}',
                        'telephone_number' => '{"1":{"id":"1","key":"Smart","value":"010 741 258"},"2":{"id":"2","key":"Mobile","value":"017 987 951"},"3":{"id":"3","key":"Metfone","value":null},"4":{"id":"4","key":"QB","value":null},"5":{"id":"5","key":"CooTel","value":null},"6":{"id":"6","key":"Seatel","value":null}}',
                        'email' => '{"1":{"id":"1","key":"Outlook","value":null},"2":{"id":"2","key":"Gmail","value":"abc@gmail.com"},"3":{"id":"3","key":"Yahoo","value":"xyz@yahoo.com"},"4":{"id":"4","key":"Hotmail","value":null}}',
                        'fax' => NULL,
                        'website' => 'http://furisode-search.heteml.net',
                        'social_media' => '{"1":{"id":"1","key":"Google+","value":"lion"},"2":{"id":"2","key":"Facebook","value":"0147852214"},"3":{"id":"3","key":"Instagram","value":null},"4":{"id":"4","key":"Pinterest","value":null},"5":{"id":"5","key":"Twitter","value":null},"6":{"id":"6","key":"LinkedIn","value":null}}',
                        'mobile_network' => '{"1":{"id":"1","key":"Skype","value":"sk.lion"},"2":{"id":"2","key":"WeChat","value":null},"3":{"id":"3","key":"Viber","value":null},"4":{"id":"4","key":"QQ","value":null},"5":{"id":"5","key":"SnapChat","value":null},"6":{"id":"6","key":"Whatsapp","value":null}}',
                        'logo_vertical' => 'uploads/'.rand(1,10).'.png',
                        'logo_horizontal' => 'uploads/'.rand(1,10).'.png',
                        'company_view' => 'uploads/'.rand(1,10).'.png',
                        'landmark' =>'uploads/'.rand(1,10).'.png',
                        'patent' =>'uploads/'.rand(1,10).'.png',
                        'vatin' =>'uploads/'.rand(1,10).'.png',
                        'working_room' => 'uploads/'.rand(1,10).'.png',
                        'meeting_room' => 'uploads/'.rand(1,10).'.png',
                        'working_hours' => '[{"key":"Monday","value":"07:00 - 17:30"},{"key":"Tuesday","value":"07:00 - 17:30"},{"key":"Wednesday","value":"07:00 - 17:30"},{"key":"Thursday","value":"07:00 - 17:30"},{"key":"Friday","value":"07:00 - 17:30"},{"key":"Saturday","value":"07:00 - 17:30"},{"key":"Sunday","value":"Closed"}]',
                        'status' => 'ACTIVE',
                        'created_at' => '2017-09-01 08:38:39',
                        'updated_at' => '2017-09-01 08:41:04',
                        'deleted_at' => NULL,
                    ),
            ));

            for($j=0;$j<50;$j++) {

                $name_card_id = rand(1, 100) . time();
                $id_number = rand(1, 100) . time();
                $passport_number = rand(1, 100) . time();

                $given_name = chr(rand(97,122)).chr(rand(97,122)).chr(rand(97,122)).chr(rand(97,122)).chr(rand(97,122)).chr(rand(97,122)).chr(rand(97,122)).chr(rand(97,122));
                $family_name = chr(rand(97,122)).chr(rand(97,122)).chr(rand(97,122)).chr(rand(97,122)).chr(rand(97,122)).chr(rand(97,122)).chr(rand(97,122)).chr(rand(97,122));

                \DB::table('company_name_cards')->insert(array(
                    0 =>
                        array(
                                                       'member_id' => $member_id,
                            'company_id' => $company_id,
                            'id_number' => $id_number.rand(1, 100) . time(),
                            'passport_number' => $passport_number.rand(1, 100) . time(),
                            'given_name' => $given_name.rand(1, 100) . time(),
                            'family_name' => $family_name.rand(1, 100) . time(),
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
                            'card_vertical' => 'uploads/'.rand(1,10).'.png',
                            'card_horizontal' => 'uploads/'.rand(1,10).'.png',
                            'id_image' => 'uploads/'.rand(1,10).'.png',
                            'passport_image' => 'uploads/'.rand(1,10).'.png',
                            'photo' => 'uploads/'.rand(1,10).'.png',
                            'status' => 'ACTIVE',
                            'created_at' => '2017-09-01 08:43:22',
                            'updated_at' => '2017-09-01 08:47:32',
                            'deleted_at' => NULL,
                        ),
                ));
            }


        }


    }
}