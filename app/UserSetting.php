<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserSetting extends Model
{
    public static function getSettings(){

        return UserSetting::all();
    }
}
