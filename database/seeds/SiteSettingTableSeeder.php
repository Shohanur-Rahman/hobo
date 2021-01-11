<?php

use Illuminate\Database\Seeder;

class SiteSettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('site_settings')->insert([
            'name'=>'name',
            'email'=>'email@email.com',
            'phone'=>'01XXX-XXXXXX',
            'address'=>'Address 1',
            'logo_url'=>'user/assets/images/logos/logo-blue.png',
            'description'=>'Description Here',
            "created_at" => \Carbon\Carbon::now()->toDateTimeLocalString(),
        ]);


    }
}
