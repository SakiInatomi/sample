<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class TopController extends Controller
{
    //

    public function index()
    {
        $posts = Post::all();

        return view('index', compact('posts'));
    }


}
