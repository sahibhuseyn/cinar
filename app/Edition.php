<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Edition extends Model
{
    public static function getEdition(){

        return Edition::all();
    }

    public static function  editionBySlug($slug){

        return Edition::where('slug', $slug)->first();
    }



    public function categories(){

        return $this->belongsTo(EditionCategory::class);
    }

    public function getRouteKeyName(){
        return 'slug';
    }

}
