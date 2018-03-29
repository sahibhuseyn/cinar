<?php

use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_settings')->insert([
            'phone' => '055 224-56-26',
            'work_hours' => '9:00-19:00',
            'address' => 'Azerbaijan, Baku',
            'facebook' => 'https://www.facebook.com/cinaryayimlari/',
            'instagram' => 'https://www.instagram.com/cinar_yayimlari/',
            'youtube' => 'https://www.youtube.com/channel/UCqheAmOGIkEcfmcaQXsHxCw'
        ]);
    }
}
