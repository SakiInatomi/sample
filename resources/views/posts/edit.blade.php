@extends('layouts.layouts')

@section('title', 'Simple Board')

@section('content')

<h1>Editing Post</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <form method="POST" action="/sample/posts/{{ $post->id }}">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PUT">
    <div class="form-group">
        <label for="exampleInputEmail1">Title</label>
            <input type="text" class="form-control" aria-describedby="emailHelp" name="title" value="{{ old('title') == '' ? $post->title : old('title') }}">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Age</label>
            <input type="text" class="form-control" aria-describedby="emailHelp" name="age" value="{{ old('age') == '' ? $post->title : old('title') }}">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Seibetu</label>
            <input type="text" class="form-control" aria-describedby="emailHelp" name="seibetu" value="{{ old('seibetu') == '' ? $post->title : old('title') }}">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Juusyo</label>
            <input type="text" class="form-control" aria-describedby="emailHelp" name="juusyo" value="{{ old('title') == '' ? $post->title : old('juusyo') }}">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Categoly</label>
            <input type="text" class="form-control" aria-describedby="emailHelp" name="categoly" value="{{ old('title') == '' ? $post->title : old('categly') }}">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Content</label>
            <textarea class="form-control" name="content">{{ old('content') == '' ? $post->content : old('content') }}</textarea>
    </div>
    <img src="{{ asset('storage/' . $user_image['file_name']) }}">
        <br>
    <button type="submit" class="btn btn-outline-primary">Submit</button>
</form> 

<a href="/sample/posts/{{ $post->id }}">Show</a> | 
<a href="/sample/posts">Back</a>

@endsection