<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(Post $post)
    {
        return view('posts/index')->with(['posts' => $post->get()]);
    }
    
    public function login(Post $post)
    {
        return view('posts/login')->with(['post' => $post]);
    }
    
    public function new_login(Post $post)
    {
        return view('posts/new_login')->with(['post' => $post]);
    }
    
    public function welcome(Post $post)
    {
        return view('posts/welcome')->with(['posts' => $post->get()]);
    }
}
?>