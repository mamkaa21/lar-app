<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function index()
    {
//        $articles = Post::latest()->paginate(15);
//        return view('frontend.blog',compact('articles'));
    }

}
