<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    public static function getPosts(){

        return Post::paginate(10);

    }

    public static function getPostBySlug($slug){

        return Post::where('slug', $slug)->first();

    }

    public static function getPostsDesc(){

        return Post::orderBy('updated_at', 'DESC')->limit(4)->get();

    }

    public function tags(){

        return $this->belongsToMany('App\Tag', 'post_tags');
    }

    public function categories(){

        return $this->belongsToMany('App\Category', 'post_categories');
    }

    public function getRouteKeyName(){
        return 'slug';
    }

}
