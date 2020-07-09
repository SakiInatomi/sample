@extends('layouts.layouts')

@section('title', 'Simple Board')

@section('content')

    @if (session('message'))
        {{ session('message') }}
    @endif

    <h1>Posts</h1>

    <section id="why-us" class="why-us section-bg">
      <div class="container">
        <div class="row">
        @foreach($posts as $post)
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          
            <div class="card">
              <img src="{{ asset('public/storage') }}/{{ $post->id }}/{{ $post->image }}" class="card-img-top card" alt="...">
              <div class="card-icon">
                <i class="bx bx-book-reader"></i>
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">{{ $post->title }}</a></h5>
                <p class="card-text">
                <p>年齢 {{ $post->age }}</p>
                <p>
                性別
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
                <p class="card-text">日程 {{ $post->reservdate }}</p>
                <p class="card-text">時間 {{ $post->reservtime }}</p>
                内容 <p class="card-text">{{ $post->content }}</p> 
                </p>
              </div>
            </div>
          </div> 
          @endforeach  
        </div>
      </div>
    </section>


    <a href="/sample/posts/create">New Post</a>
@endsection