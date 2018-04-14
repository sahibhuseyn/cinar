<?php

namespace App\Http\Controllers\Admin;

use App\EditionCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class EditionCategoryController extends Controller
{
    public function show(){

        $categories = EditionCategory::getCategories();

        return view('admin.edition-category.categories', compact('categories'));

    }

    public function edit($id){
        $category = EditionCategory::where('id', $id)->first();
        return view('admin.edition-category.single', compact('category'));
    }
    public function add(Request $request){

        $slug = str_slug($request->name);

        $exists = EditionCategory::where('slug', $slug)->first();

        if ($exists) {
            Session::flash('fail', 'Menu with the same name already exists');

            return back();
        }


        $category = new EditionCategory();
        $category->name = $request->name;
        $category->slug = $slug;
        $category->sub_menu_id = $request->submenu_id;

        if ($request->image) {

            $image = $request->file('image');
            $filename  = time() . '.' . $image->getClientOriginalExtension();

            $path = public_path('uploads/');

            $image->move($path, $filename);

            $category->image = $filename;

        }

        $category->save();


        Session::flash('success', 'Successfully added');

        return back();

    }
    public function update(Request $request, $id){

        $slug = str_slug($request->name);

        $exists = EditionCategory::getCategoriesBySlug($slug);

        $category = EditionCategory::find($id);

        if (!$exists) {
            $category->name = $request->name;
            $category->slug = $slug;
            $category->sub_menu_id = $request->submenu_id;

            if ($request->image) {

                $image = $request->file('image');
                $filename  = time() . '.' . $image->getClientOriginalExtension();

                $path = public_path('uploads/');

                $image->move($path, $filename);

                $category->image = $filename;
            }

            $category->update();

        } else {
            if ($exists->id == $category->id) {
                $category->name = $request->name;
                $category->slug = $slug;
                $category->sub_menu_id = $request->submenu_id;

                if ($request->image) {

                    $image = $request->file('image');
                    $filename  = time() . '.' . $image->getClientOriginalExtension();

                    $path = public_path('uploads/');

                    $image->move($path, $filename);

                    $category->image = $filename;
                }

                $category->update();

            } else if ($exists) {
                Session::flash('fail', 'Menu with the same name already exists');

                return back();
            }
        }

        Session::flash('success', 'Successfully updated');

        return back();

    }
    public function delete($id){

        $category = EditionCategory::find($id);
        $category->delete();

        Session::flash('success', 'Successfully deleted');

        return back();
    }

}
