<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class postController extends Controller
{
    //     public function showPost() {
    //     $posts = Post::paginate(50);
    //     return view('post', compact('posts'));
    //     // return view('post', compact('post'));
    // }

    public function index()
    {
        return view('berita',[
            "berita" => Post::all()
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "post" => $post
        ]);
    }

}