<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seo extends Model
{
    public static function getSeo(){
        return Seo::all();
    }
}
