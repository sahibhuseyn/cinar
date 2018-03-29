<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    public static function getFacility(){

        return Facility::all();
    }
}
