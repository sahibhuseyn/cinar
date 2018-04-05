<?php

use Illuminate\Database\Seeder;

class EditionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('editions')->insert([
            'category' => '1-ci sinif',
            'image' => 'sinif1.jpg',
            'pages' => 'test',
            'name' => '1-ci sinif',
            'slug' => '1-ci-sinif',
            'answer' => 'test',
            'isbn' => '978-9952-8340-00',
            'class' => '1-ci Sinif',
            'author' => 'Behram Oruclu',
            'press' => 'Cinar Yayimlari',
            'page_count' => '164',
        ]);
        DB::table('editions')->insert([
            'category' => '2-ci sinif',
            'image' => 'sinif2.jpg',
            'pages' => 'test',
            'answer' => 'test',
            'name' => '2-ci sinif',
            'slug' => '2-ci-sinif',
            'isbn' => '978-9952-8340-00',
            'class' => '2-ci Sinif',
            'author' => 'Behram Oruclu',
            'press' => 'Cinar Yayimlari',
            'page_count' => '164',
        ]);
        DB::table('editions')->insert([
            'category' => '3-cü sinif',
            'image' => 'sinif3.jpg',
            'pages' => 'test',
            'name' => '3-cü sinif',
            'slug' => '3-cu-sinif',
            'answer' => 'test',
            'isbn' => '978-9952-8340-00',
            'class' => '3-cv Sinif',
            'author' => 'Behram Oruclu',
            'press' => 'Cinar Yayimlari',
            'page_count' => '164',
        ]);
        DB::table('editions')->insert([
            'category' => '4-cü sinif',
            'image' => 'sinif4.jpg',
            'pages' => 'test',
            'name' => '4-cü sinif',
            'slug' => '4-cu-sinif',
            'answer' => 'test',
            'isbn' => '978-9952-8340-00',
            'class' => '4-cü Sinif',
            'author' => 'Behram Oruclu',
            'press' => 'Cinar Yayimlari',
            'page_count' => '164',
        ]);
    }
}
