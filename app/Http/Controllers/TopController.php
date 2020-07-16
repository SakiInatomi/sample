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


    public function serch(Request $request)
    {
        $posts = DB::table('posts') ->whereColumn([ ['reservdate', '=', $request->reservdate], ['juusyo', '=', $request->juusyo]
                        ])->get();

        return view('kids.result',compact('posts'));
        
    }

}
