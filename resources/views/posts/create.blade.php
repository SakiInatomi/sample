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

<form method="POST" action="/sample/posts" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="exampleInputEmail1">題名</label>
            <input type="text" class="form-control" aria-describedby="emailHelp" name="title" value="{{old('title')}}">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">年齢</label>
        <select name="kidsage">
  <option value="0">18以下</option>
  <option value="1">19～30</option>
  <option value="2">30以上</option>
</select>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="seibetu" id="exampleRadios1" value="0" checked>
        <label class="form-check-label" for="exampleRadios1">
        男性
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="seibetu" id="exampleRadios2" value="1">
        <label class="form-check-label" for="exampleRadios2">
        女性
        </label>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">住所</label>
            <input type="text" class="form-control" aria-describedby="emailHelp" name="juusyo" value="{{old('juusyo')}}">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">カテゴリ</label>
            <input type="text" class="form-control" aria-describedby="emailHelp" name="categoly" value="{{old('categoly')}}">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">一言</label>
            <textarea class="form-control" name="content">{{old('content')}}</textarea>
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">日程</label>
            <input type="text" class="form-control" aria-describedby="emailHelp" name="reservdate" id="flatpickr" value="{{old('categoly')}}">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">年齢</label>
    <select name="reservtime">
        <option value="9:00">9:00</option>
        <option value="9:30">9:30</option>
        <option value="10:00">10:00</option>
    </select>

    <label for="photo">イメージ画像</label>
    <input type="file" class="form-control" name="image">
    <br>
    <button type="submit" class="btn btn-outline-primary">Submit</button>
</form>

<a href="/posts">Back</a>

@endsection