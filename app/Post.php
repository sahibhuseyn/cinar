<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    public static function getPosts(){
        return Post::all();
    }

    public static function getPostBySlug($slug){
        return Post::where('slug', $slug)->first();
    }

}
