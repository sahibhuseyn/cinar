<?php

namespace App\Http\Controllers\Client;

use App\Exam;
use App\SubMenu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ExamController extends Controller
{
     public function exams(SubMenu $subMenu){
         $exams = $subMenu->exam;

         return view('client.exam.exam', compact('exams'));
     }
}
