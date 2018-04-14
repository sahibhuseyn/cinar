<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EditionCategory extends Model
{

    public function category(){

        return $this->belongsTo(SubMenu::class);
    }

    public static function getEditionByTypeId($edition){

        return Edition::where('sub_menu_id', $edition)->get();
    }


    public static function getCategories(){

        return EditionCategory::all();
    }

    public static function getCategoriesBySlug($slug){

        return EditionCategory::where('slug', $slug)->first();
    }

    public function edition(){

        return $this->hasMany(Edition::class);
    }

    public function getRouteKeyName(){
        return 'slug';
    }
}
