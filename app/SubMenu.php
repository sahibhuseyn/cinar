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

    public function exam(){

        return $this->hasMany(Exam::class);
    }

    public function editionCats(){

        return $this->hasMany(EditionCategory::class);
    }

    public function getRouteKeyName(){
        return 'slug';
    }
}
