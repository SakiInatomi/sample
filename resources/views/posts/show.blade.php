@extends('layouts.layouts')

@section('title', 'Simple Board')

@section('content')

    @if (session('message'))
        {{ session('message') }}
    @endif

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            <p class="card-text">年齢 {{ $post->age }}</p>
            <p>性別
                @if ($post->seibetu === 0)
                    男性
                @elseif ($post->seibetu === 1)
                    女性
                @else
                    登録なし
                @endif
            </p>
            <p class="card-text">住所 {{ $post->juusyo }}</p>
            <p class="card-text">カテゴリ {{ $post->categoly }}</p>
            内容 <p class="card-text">{{ $post->content }}</p>

            <div class="d-flex" style="height: 36.4px;">
                <button class="btn btn-outline-primary">Show</button>
                <a href="/sample/posts/{{ $post->id }}/edit" class="btn btn-outline-primary">Edit</a>
                <form action="/sample/posts/{{ $post->id }}" method="POST" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit" class="btn btn-outline-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>

    <a href="/sample/posts/{{ $post->id }}/edit">Edit</a> | 
    <a href="/sample/posts">Back</a>

@endsection