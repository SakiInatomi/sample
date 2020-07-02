<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class KidsPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();

        return view('kids.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kids.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post();
        $post->username = $request->input('username');
        $post->userage = $request->input('userage');
        $post->tell = $request->input('tell');
        $post->useraddress = $request->input('useraddress');
        $post->save();

        return redirect()->route('kids.show', ['id' => $post->id])->with('message', 'Post was successfully created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('kids.show', compact('post'));    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('kids.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $post->username = $request->input('username');
        $post->userage = $request->input('userage');
        $post->tell = $request->input('tell');
        $post->useraddress = $request->input('useraddress');
        $post->save();

        return redirect()->route('kids.show', ['id' => $post->id])->with('message', 'Post was successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('kids.index');
    }
}
