<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'image' => 'post_02.jpg',
            'slug' => 'test',
            'title' => 'Lorem ipsum dolor sit amet',
            'sub_title' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus unde dolorum perferendis quas quasi magni iure, a odit laudantium deleniti animi, quibusdam facere optio, explicabo, ullam similique aspernatur temporibus voluptatem.',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus unde dolorum perferendis quas quasi magni iure, a odit laudantium deleniti animi, quibusdam facere optio, explicabo, ullam similique aspernatur temporibus voluptatem.',
            'author' => 'Çinar Yayımları'
        ]);

        DB::table('posts')->insert([
            'image' => 'post_03.jpg',
            'slug' => 'test1',
            'title' => 'Lorem ipsum dolor sit amet',
            'sub_title' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus unde dolorum perferendis quas quasi magni iure, a odit laudantium deleniti animi, quibusdam facere optio, explicabo, ullam similique aspernatur temporibus voluptatem.',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus unde dolorum perferendis quas quasi magni iure, a odit laudantium deleniti animi, quibusdam facere optio, explicabo, ullam similique aspernatur temporibus voluptatem.',
            'author' => 'Çinar Yayımları'
        ]);

        DB::table('posts')->insert([
            'image' => 'post_04.jpg',
            'slug' => 'test2',
            'title' => 'Lorem ipsum dolor sit amet',
            'sub_title' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus unde dolorum perferendis quas quasi magni iure, a odit laudantium deleniti animi, quibusdam facere optio, explicabo, ullam similique aspernatur temporibus voluptatem.',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus unde dolorum perferendis quas quasi magni iure, a odit laudantium deleniti animi, quibusdam facere optio, explicabo, ullam similique aspernatur temporibus voluptatem.',
            'author' => 'Çinar Yayımları'
        ]);
    }
}
