<?php

namespace App\Http\Controllers\Admin;

use App\Post;
use App\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
    public function show(){
        $posts = Post::getPosts();
        return view('admin.posts.posts', compact('posts'));
    }

    public function edit($id){
        $post = Post::with('tags', 'categories')->where('id', $id)->first();

        return view('admin.posts.single', compact('post'));
    }

    public function newPost(){

        return view('admin.posts.newPost');
    }

    public function add(Request $request){


        $slug = str_slug($request->title);

        $exists = Post::where('slug', $slug)->first();

        if ($exists) {
            Session::flash('fail', 'Post with the same name already exists');

            return back();
        }

        $post = new Post;
        $post->slug = $slug;
        $post->title = $request->title;
        $post->sub_title = $request->sub_title;
        $post->body = $request->body;
        $post->author = $request->author;

        if ($request->image) {

            $image = $request->file('image');
            $filename  = time() . '.' . $image->getClientOriginalExtension();

            $path = public_path('uploads/');

            $image->move($path, $filename);

            $post->image = $filename;

        }


        $post->save();
        $post->tags()->sync($request->tags);
        $post->categories()->sync($request->categories);

        Session::flash('success', 'Successfully added');

        return back();

    }

    public function update( Request $request, $id){


        $slug = str_slug($request->title);
        $exists = Post::getPostBySlug($slug);

        $post = Post::find($id);

        if ($request->image) {

            $image = $request->file('image');
            $filename  = time() . '.' . $image->getClientOriginalExtension();

            $path = public_path('uploads/');

            $image->move($path, $filename);

            $post->image = $filename;
        }

        if (!$exists) {
            $post->title = $request->title;
            $post->slug = $slug;
            $post->sub_title = $request->sub_title;
            $post->author = $request->author;
            $post->body = $request->body;
            $post->tags()->sync($request->tags);
            $post->categories()->sync($request->categories);

            $post->update();

        } else {
            if ($exists->id == $post->id) {
                $post->title = $request->title;
                $post->slug = $slug;
                $post->sub_title = $request->sub_title;
                $post->author = $request->author;
                $post->body = $request->body;
                $post->tags()->sync($request->tags);
                $post->categories()->sync($request->categories);

                $post->update();

            } else if ($exists) {
                Session::flash('fail', 'Post with the same name already exists');

                return back();
            }
        }

        Session::flash('success', 'Successfully updated');
        return back();


    }
    public function delete(Post $post){

        $post->delete();

        Session::flash('success', 'Successfully deleted');
        return back();
    }
}
