<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{

    public static function getExams(){
        return Exam::all();
    }

}
