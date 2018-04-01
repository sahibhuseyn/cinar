<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = [];

    public static function getMenu(){

        return Menu::all();
    }

    public static function getMenuBySlug($slug){

        return Menu::where('slug', $slug)->first();

    }

    public function submenu()
    {
        return $this->hasMany(SubMenu::class);
    }

}
