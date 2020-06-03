@extends('layouts.layouts')

@section('title', 'Simple Board')

@section('content')

<h1>New Post</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="/sample/posts">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="exampleInputEmail1">Title</label>
            <input type="text" class="form-control" aria-describedby="emailHelp" name="title" value="{{old('title')}}">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Age</label>
            <input type="text" class="form-control" aria-describedby="emailHelp" name="age" value="{{old('age')}}">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Seibetu</label>
            <input type="text" class="form-control" aria-describedby="emailHelp" name="seibetu" value="{{old('seibetu')}}">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Juusyo</label>
            <input type="text" class="form-control" aria-describedby="emailHelp" name="juusyo" value="{{old('juusyo')}}">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Categoly</label>
            <input type="text" class="form-control" aria-describedby="emailHelp" name="categoly" value="{{old('categoly')}}">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Content</label>
            <textarea class="form-control" name="content">{{old('content')}}</textarea>
    </div>
    
    <label for="photo">Image</label>
    <input type="file" class="form-control" name="image">
    <br>
    <button type="submit" class="btn btn-outline-primary">Submit</button>
</form>

<a href="/posts">Back</a>

@endsection