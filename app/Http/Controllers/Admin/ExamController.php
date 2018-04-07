<?php

namespace App\Http\Controllers\Admin;

use App\Exam;
use App\SubMenu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class ExamController extends Controller
{
    public function show(){

        $categories = SubMenu::getSubMenu();

        $exams = Exam::getExams();

        $category = SubMenu::all()->load('exam');


        return view('admin.exams.exam', compact('exams', 'categories', 'category'));

    }

    public function edit(Exam $exam){

        $categories = SubMenu::getSubMenu();

        return view('admin.exams.single', compact('exam', 'categories'));
    }

    public function newExam(){

        return view('admin.exams.newExam');
    }

    public function add(Request $request){


        $slug = str_slug($request->name);

        $exists = Exam::where('slug', $slug)->first();

        if ($exists){

            Session::flash('fail', 'Exam with the same name already exists');

            return back();
        }

        $exam = new Exam();

        $exam->name = $request->name;

        if ($request->categories != '-'){

            $exam->sub_menu_id = $request->categories;

        }else{

            Session::flash('fail', 'Please select main menu');

            return back();
        }

        $exam->slug = $slug;

        if ($request->image) {


            $image = $request->file('image');

            $imagename  = time()  . $image->getClientOriginalName();

            $imagepath = public_path('uploads/');

            $image->move($imagepath, $imagename);

            $exam->image = $imagename;

        }

        if ($request->answer_jpg) {

            $answer_jpg = $request->file('image');
            $answer_name  = time() . $answer_jpg->getClientOriginalName();

            $answer_path = public_path('uploads/');

            $answer_jpg->move($answer_path, $answer_name);

            $exam->answer_jpg = $answer_name;

        }
        if ($request->answer_pdf) {

            $answer_pdf = $request->file('pdf');
            $filename  = time() . $answer_pdf->getClientOriginalName();

            $path = public_path('uploads/');

            $answer_pdf->move($path, $filename);

            $exam->answer_pdf = $filename;

        }



        $exam->save();

        Session::flash('success', 'Successfully added');

        return back();

    }

    public function update(Exam $exam, Request $request){

        $slug = str_slug($request->name);

        $exists = Exam::getExamBySlug($slug);




        if (!$exists) {
            $exam->name = $request->name;
            $exam->slug = $slug;

            if ($request->categories != '-'){

                $exam->sub_menu_id = $request->categories;

            }else{

                Session::flash('fail', 'Please select main menu');

                return back();
            }

            if ($request->image) {


                $image = $request->file('image');

                $imagename  = time()  . $image->getClientOriginalName();

                $imagepath = public_path('uploads/');

                $image->move($imagepath, $imagename);

                $exam->image = $imagename;

            }

            if ($request->answer_jpg) {

                $answer_jpg = $request->file('image');
                $answer_name  = time() . $answer_jpg->getClientOriginalName();

                $answer_path = public_path('uploads/');

                $answer_jpg->move($answer_path, $answer_name);

                $exam->answer_jpg = $answer_name;

            }
            if ($request->answer_pdf) {

                $answer_pdf = $request->file('pdf');
                $filename  = time() . $answer_pdf->getClientOriginalName();

                $path = public_path('uploads/');

                $answer_pdf->move($path, $filename);

                $exam->answer_pdf = $filename;

            }


            $exam->update();

        } else {
            if ($exists->id == $exam->id) {
                $exam->name = $request->name;
                $exam->slug = $slug;

                if ($request->categories != '-'){

                    $exam->sub_menu_id = $request->categories;

                }else{

                    Session::flash('fail', 'Please select main menu');

                    return back();
                }

                if ($request->image) {


                    $image = $request->file('image');

                    $imagename  = time()  . $image->getClientOriginalName();

                    $imagepath = public_path('uploads/');

                    $image->move($imagepath, $imagename);

                    $exam->image = $imagename;

                }

                if ($request->answer_jpg) {

                    $answer_jpg = $request->file('image');
                    $answer_name  = time() . $answer_jpg->getClientOriginalName();

                    $answer_path = public_path('uploads/');

                    $answer_jpg->move($answer_path, $answer_name);

                    $exam->answer_jpg = $answer_name;

                }
                if ($request->answer_pdf) {

                    $answer_pdf = $request->file('pdf');
                    $filename  = time() . $answer_pdf->getClientOriginalName();

                    $path = public_path('uploads/');

                    $answer_pdf->move($path, $filename);

                    $exam->answer_pdf = $filename;

                }


                $exam->update();

            } else if ($exists) {
                Session::flash('fail', 'Menu with the same name already exists');

                return back();
            }
        }

        Session::flash('success', 'Successfully updated');

        return back();


    }

    public function delete(Exam $exam){

        $exam->delete();

        Session::flash('Success', 'Successfully deleted');

        return back();

    }

}
