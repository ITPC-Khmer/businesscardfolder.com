<?php

use Illuminate\Database\Seeder;

class MobileNetwork extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mobile_networks')->insert([
            'title' => 'MESSENGER',
            'company_name' => 'MESSENGER',
            'website' => 'MESSENGER',
            'prefix_account' => 'MESSENGER',
            'description' => 'MESSENGER'
        ]);
        DB::table('mobile_networks')->insert([
            'title' => 'LINE',
            'company_name' => 'LINE',
            'website' => 'LINE',
            'prefix_account' => 'LINE',
            'description' => 'LINE'
        ]);
        DB::table('mobile_networks')->insert([
            'title' => 'WHATSAPP',
            'company_name' => 'WHATSAPP',
            'website' => 'WHATSAPP',
            'prefix_account' => 'WHATSAPP',
            'description' => 'WHATSAPP'
        ]);
        DB::table('mobile_networks')->insert([
            'title' => 'WECHAT',
            'company_name' => 'WECHAT',
            'website' => 'WECHAT',
            'prefix_account' => 'WECHAT',
            'description' => 'WECHAT'
        ]);
        DB::table('mobile_networks')->insert([
            'title' => 'SKYPE',
            'company_name' => 'SKYPE',
            'website' => 'SKYPE',
            'prefix_account' => 'SKYPE',
            'description' => 'SKYPE'
        ]);
        DB::table('mobile_networks')->insert([
            'title' => 'VIBER',
            'company_name' => 'VIBER',
            'website' => 'VIBER',
            'prefix_account' => 'VIBER',
            'description' => 'VIBER'
        ]);
        DB::table('mobile_networks')->insert([
            'title' => 'QQ',
            'company_name' => 'QQ',
            'website' => 'QQ',
            'prefix_account' => 'QQ',
            'description' => 'QQ'
        ]);

    }
}
