<?php

namespace App\Http\Controllers\Client;

use App\Category;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function postList(){

        $posts = Post::getPosts();
        $latests = Post::getPostsDesc();
        $categories = Category::all();
        $tags = Tag::getTags();

        return view('client.posts.posts', compact('posts', 'latests', 'categories', 'tags'));
    }

    public function postSingle($slug){

        $post = Post::getPostBySlug($slug);

        $latests = Post::getPostsDesc();

        $categories = Category::all();

        $tags = Tag::getTags();



        $posts = Post::getPostsDesc();

        if(!$post){
            return back();
        }

        return view('client.posts.single', compact('post', 'posts', 'latests', 'categories', 'tags'));

    }

    public function tag(Tag $tag){

        $latests = Post::getPostsDesc();

        $posts = $tag->posts();

        $categories = Category::all();

        $tags = Tag::getTags();


        return view('client.posts.posts', compact('posts', 'latests', 'categories', 'tags'));

    }

    public function category(Category $category){

        $latests = Post::getPostsDesc();
        $posts = $category->posts();
        $tags = Tag::getTags();

        $categories = Category::all();

        return view('client.posts.posts', compact('posts', 'latests', 'categories', 'tags'));

    }
}
