<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public static function getTags(){
        return Tag::all();
    }

    public static function getTagBySlug($slug){

        return Tag::where('slug', $slug)->first();

    }

    public function posts(){
        return $this->belongsToMany('App\Post', 'post_tags');
    }

}
