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
}
