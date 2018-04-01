<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
     public function show(){
         $categories = Category::getCategories();
         return view('admin.post-category.categories', compact('categories'));
     }
     
     public function edit(Category $category){
         return view('admin.post-category.single', compact('category'));
     }
     public function add(Request $request){

         $slug = str_slug($request->name);

         $exists = Category::where('slug', $slug)->first();

         if ($exists) {
             Session::flash('fail', 'Menu with the same name already exists');

             return back();
         }


         $category = new Category();
         $category->name = $request->name;
         $category->slug = $slug;

         $category->save();

         Session::flash('success', 'Successfully added');

         return back();
         
     }
     public function update(Category $category, Request $request){

         $slug = str_slug($request->name);

         $exists = Category::getCategoriesBySlug($slug);

         if (!$exists) {
             $category->name = $request->name;
             $category->slug = $slug;
             $category->update();

         } else {
             if ($exists->id == $category->id) {
                 $category->name = $request->name;
                 $category->slug = $slug;
                 $category->update();

             } else if ($exists) {
                 Session::flash('fail', 'Menu with the same name already exists');

                 return back();
             }
         }

         Session::flash('success', 'Successfully updated');

         return back();
         
     }
     public function delete(Category $category){
         
         $category->delete();
         
         Session::flash('success', 'Successfully deleted');
         
         return back();
     }
}
