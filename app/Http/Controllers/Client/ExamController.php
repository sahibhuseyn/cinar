<?php

namespace App\Http\Controllers\Client;

use App\Exam;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ExamController extends Controller
{
     public function exams(){
         $exams = Exam::getExams();

         return view('client.exam.exam', compact('exams'));
     }
}
