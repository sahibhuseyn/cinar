<?php

use Illuminate\Database\Seeder;

class FacilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('facilities')->insert([
            'icon' => 'flaticon-book',
            'name' => 'Uşaq Ədəbiyyatı',
            'body' => 'Distinctively enhance empowered and alignments without leveraged architectures professionly.',
            'link' => 'test'
        ]);
        DB::table('facilities')->insert([
            'icon' => 'flaticon-house-outline',
            'name' => 'Məktəbəqədər',
            'body' => 'Distinctively enhance empowered and alignments without leveraged architectures professionly.',
            'link' => 'test'
        ]);
        DB::table('facilities')->insert([
            'icon' => 'flaticon-people',
            'name' => 'İbtidai Sinif',
            'body' => 'Distinctively enhance empowered and alignments without leveraged architectures professionly.',
            'link' => 'test'
        ]);
        DB::table('facilities')->insert([
            'icon' => 'flaticon-student',
            'name' => 'Orta Sinif',
            'body' => 'Distinctively enhance empowered and alignments without leveraged architectures professionly.',
            'link' => 'test'
        ]);
    }
}
