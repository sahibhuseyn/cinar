<?php

namespace App\Http\Controllers\Admin;

use App\Edition;
use App\SubMenu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class EditionController extends Controller
{

    public function show(){

        $editions = Edition::getEdition();
        $category = SubMenu::all()->load('edition');

        return view('admin.editions.edition', compact('editions', 'category'));

    }


    public function edit(Edition $edition){

        $categories = SubMenu::getSubMenu();

        return view('admin.editions.single', compact('edition', 'categories'));
    }

    public function newEdition(){

        return view('admin.editions.new');
    }

    public function add(Request $request){


        $slug = str_slug($request->name);

        $exists = Edition::where('slug', $slug)->first();

        if ($exists){

            Session::flash('fail', 'Edition with the same name already exists');

            return back();
        }

        $edition= new Edition();

        $edition->name = $request->name;

        if ($request->categories != '-'){

            $edition->sub_menu_id = $request->categories;

        }else{

            Session::flash('fail', 'Please select main menu');

            return back();
        }

        $edition->slug = $slug;

        if ($request->image) {


            $image = $request->file('image');

            $imagename  = time()  . $image->getClientOriginalName();

            $imagepath = public_path('uploads/');

            $image->move($imagepath, $imagename);

            $edition->image = $imagename;

        }


        $edition->category = $request->category;
        $edition->pages = $request->pages;
        $edition->answer = $request->answer;
        $edition->press = $request->press;
        $edition->page_count = $request->page_count;
        $edition->isbn = $request->isbn;
        $edition->class = $request->class;
        $edition->author = $request->author;




        $edition->save();

        Session::flash('success', 'Successfully added');

        return back();

    }

    public function update(Edition $edition, Request $request){

        $slug = str_slug($request->name);

        $exists = Edition::editionBySlug($slug);




        if (!$exists) {
            $edition->name = $request->name;
            $edition->slug = $slug;
            $edition->category = $request->category;
            $edition->pages = $request->pages;
            $edition->answer = $request->answer;
            $edition->press = $request->press;
            $edition->page_count = $request->page_count;
            $edition->isbn = $request->isbn;
            $edition->class = $request->class;
            $edition->author = $request->author;

            if ($request->categories != '-'){

                $edition->sub_menu_id = $request->categories;

            }else{

                Session::flash('fail', 'Please select main menu');

                return back();
            }

            if ($request->image) {


                $image = $request->file('image');

                $imagename  = time()  . $image->getClientOriginalName();

                $imagepath = public_path('uploads/');

                $image->move($imagepath, $imagename);

                $edition->image = $imagename;

            }

            $edition->update();

        } else {
            if ($exists->id == $edition->id) {
                $edition->name = $request->name;
                $edition->slug = $slug;
                $edition->category = $request->category;
                $edition->pages = $request->pages;
                $edition->answer = $request->answer;
                $edition->press = $request->press;
                $edition->page_count = $request->page_count;
                $edition->isbn = $request->isbn;
                $edition->class = $request->class;
                $edition->author = $request->author;


                if ($request->categories != '-'){

                    $edition->sub_menu_id = $request->categories;

                }else{

                    Session::flash('fail', 'Please select main menu');

                    return back();
                }

                if ($request->image) {


                    $image = $request->file('image');

                    $imagename  = time()  . $image->getClientOriginalName();

                    $imagepath = public_path('uploads/');

                    $image->move($imagepath, $imagename);

                    $edition->image = $imagename;

                }

                $edition->update();

            } else if ($exists) {
                Session::flash('fail', 'Menu with the same name already exists');

                return back();
            }
        }

        Session::flash('success', 'Successfully updated');

        return back();


    }

    public function delete(Edition $edition){

        $edition->delete();

        Session::flash('Success', 'Successfully deleted');

        return back();

    }


}
