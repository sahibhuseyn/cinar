<?php

namespace App\Http\Controllers\Admin;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
    public function show(){
        $posts = Post::getPosts();
        return view('admin.posts.posts', compact('posts'));
    }
    public function edit(Post $post){

        return view('admin.posts.single', compact('post'));
    }
    public function newPost(){

        return view('admin.posts.newPost');
    }
    public function add(Request $request){

    }
    public function update(Post $post, Request $request){

    }
    public function delete(Post $post){

        $post->delete();

        Session::flash('success', 'Successfully deleted');
        return back();
    }
}
