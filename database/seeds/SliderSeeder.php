<?php

use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sliders')->insert([
            'image' => 'slider_1.jpg'
        ]);

        DB::table('sliders')->insert([
            'image' => 'slider_2.jpg'
        ]);

        DB::table('sliders')->insert([
            'image' => 'slider_3.jpg'
        ]);
    }
}
