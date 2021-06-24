<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;

class HomeController extends Controller
{
    public function index(){
        $posts = Post::orderBy('created_at','desc')->get();
        return view('home', compact('posts'));
    }

    public function about(){
        return view('about');
    }

    public function contact(){
        return view('contact');
    }

    public function post($slug){
        $post = Post::where('slug','=',$slug)->firstOrFail();
        return view('post', compact('post'));
    }
}
