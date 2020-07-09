@extends('layouts.layouts')

@section('title', 'Simple Board')

@section('content')

    @if (session('message'))
        {{ session('message') }}
    @endif

    <h1>Posts</h1>


<a href="/sample/kids/create">New Post</a>


@foreach($posts as $post)


<div class="card">
            <div class="card-body">
                <h5 class="card-text">{{ $post->username }}</h5>
                <p class="card-text">年齢 {{ $post->userage }}</p>
                <p class="card-text">連絡先 {{ $post->tell }}</p>
                <p class="card-text">住所 {{ $post->useraddress }}</p>
                    <a href="/sample/kids/{{ $post->id }}" class="btn btn-outline-primary">Show</a>
                    <a href="/sample/kids/{{ $post->id }}/edit" class="btn btn-outline-primary">Edit</a>
                    <form action="/sample/kids/{{ $post->id }}" method="POST" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="submit" class="btn btn-outline-danger">Delete</button>
                    </form>
            </div>
</div>
@endforeach

<a href="/sample/kids/create">New Post</a> 
@endsection