<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubMenu extends Model
{

    protected $fillable =[];

    public static function getSubMenu(){

        return SubMenu::all();
    }

    public static function getSubMenuBySlug($slug){

        return SubMenu::where('slug', $slug)->first();
    }

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
}
