<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{

    public $fillable = [];

    public static function getExams(){
        return Exam::all();
    }

    public static function getExamBySlug($slug){

        return Exam::where('slug', $slug)->first();
    }

    public function category(){

        return $this->belongsTo(SubMenu::class);
    }


    public static function getExamByTypeId($exam){

        return Exam::where('sub_menu_id', $exam)->get();
    }

}
