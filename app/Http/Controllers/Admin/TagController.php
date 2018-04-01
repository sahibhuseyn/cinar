<?php

namespace App\Http\Controllers\Admin;

use App\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class TagController extends Controller
{
    public function show(){

        $tags = Tag::getTags();
        return view('admin.tags.tags', compact('tags'));
    }
    public function edit(Tag $tag){
        return view('admin.tags.single', compact('tag'));
    }
    public function add(Request $request){
        $slug = str_slug($request->name);

        $exists = Tag::where('slug', $slug)->first();

        if ($exists) {
            Session::flash('fail', 'Menu with the same name already exists');

            return back();
        }


        $tag = new Tag;
        $tag->name = $request->name;
        $tag->slug = $slug;

        $tag->save();

        Session::flash('success', 'Successfully added');

        return back();

    }
    public function update(Tag $tag, Request $request){

        $slug = str_slug($request->name);

        $exists = Tag::getTagBySlug($slug);

        if (!$exists) {
            $tag->name = $request->name;
            $tag->slug = $slug;
            $tag->update();

        } else {
            if ($exists->id == $tag->id) {
                $tag->name = $request->name;
                $tag->slug = $slug;
                $tag->update();

            } else if ($exists) {
                Session::flash('fail', 'Menu with the same name already exists');

                return back();
            }
        }

        Session::flash('success', 'Successfully updated');

        return back();

    }
    public function delete(Tag $tag){
        $tag->delete();

        Session::flash('success', 'Successfully deleted');

        return back();
    }
}
