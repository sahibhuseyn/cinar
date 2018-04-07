<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Edition extends Model
{
    public static function getEdition(){

        return Edition::all();
    }

    public static function getEditionCat(){

        return Edition::distinct()->get(['category']);
    }

    public static function  editionBySlug($slug){

        return Edition::where('slug', $slug)->first();
    }

    public function category(){

        return $this->belongsTo(SubMenu::class);
    }

    public static function getEditionByTypeId($edition){

        return Edition::where('sub_menu_id', $edition)->get();
    }

}
