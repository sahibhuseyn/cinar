<?php

use Illuminate\Database\Seeder;

class ExamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('exams')->insert([
            'image' => 'sinif1.jpg',
            'pages' => 'test',
            'answer_jpg' => 'test',
            'answer_pdf' => 'test',
        ]);
        DB::table('exams')->insert([
            'image' => 'sinif2.jpg',
            'pages' => 'test',
            'answer_jpg' => 'test',
            'answer_pdf' => 'test',
        ]);
        DB::table('exams')->insert([
            'image' => 'sinif3.jpg',
            'pages' => 'test',
            'answer_jpg' => 'test',
            'answer_pdf' => 'test',
        ]);
        DB::table('exams')->insert([
            'image' => 'sinif4.jpg',
            'pages' => 'test',
            'answer_jpg' => 'test',
            'answer_pdf' => 'test',
        ]);
    }
}
