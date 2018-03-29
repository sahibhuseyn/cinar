<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    public static function getSlider(){

        return Slider::orderBy('created_at', 'DESC')->get();
    }
}
