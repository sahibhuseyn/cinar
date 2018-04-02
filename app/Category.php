<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public static function getCategories(){

        return Category::all();
    }

    public static function getCategoriesBySlug($slug){

        return Category::where('slug', $slug)->first();
    }

    public function posts(){

        return $this->belongsToMany('App\Post', 'post_categories')->orderBy('updated_at', 'DESC')->paginate(10);
    }

    public function getRouteKeyName(){
        return 'slug';
    }
}
