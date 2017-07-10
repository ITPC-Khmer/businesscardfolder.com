<?php

use Illuminate\Database\Seeder;

class SocialMedia extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('social_media')->insert([
            'title' => 'FACEBOOK',
            'company_name' => 'FACEBOOK',
            'website' => 'FACEBOOK',
            'prefix_account' => 'FACEBOOK',
            'description' => 'FACEBOOK'
        ]);
        DB::table('social_media')->insert([
            'title' => 'INSTAGRAM',
            'company_name' => 'INSTAGRAM',
            'website' => 'INSTAGRAM',
            'prefix_account' => 'INSTAGRAM',
            'description' => 'INSTAGRAM'
        ]);
        DB::table('social_media')->insert([
            'title' => 'PINTEREST',
            'company_name' => 'PINTEREST',
            'website' => 'PINTEREST',
            'prefix_account' => 'PINTEREST',
            'description' => 'PINTEREST'
        ]);
        DB::table('social_media')->insert([
            'title' => 'TWITTER',
            'company_name' => 'TWITTER',
            'website' => 'TWITTER',
            'prefix_account' => 'TWITTER',
            'description' => 'TWITTER'
        ]);
        DB::table('social_media')->insert([
            'title' => 'LINKEDIN',
            'company_name' => 'LINKEDIN',
            'website' => 'LINKEDIN',
            'prefix_account' => 'LINKEDIN',
            'description' => 'LINKEDIN'
        ]);
        DB::table('social_media')->insert([
            'title' => 'YOUTUBE',
            'company_name' => 'YOUTUBE',
            'website' => 'YOUTUBE',
            'prefix_account' => 'YOUTUBE',
            'description' => 'YOUTUBE'
        ]);
        DB::table('social_media')->insert([
            'title' => 'VINE',
            'company_name' => 'VINE',
            'website' => 'VINE',
            'prefix_account' => 'VINE',
            'description' => 'VINE'
        ]);
    }
}
