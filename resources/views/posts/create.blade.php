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
        <select name="age">
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
        <select name="juusyo">
        <option value="北海道">北海道</option>
            <option value="青森県">青森県</option>
            <option value="岩手県">岩手県</option>
            <option value="宮城県">宮城県</option>
            <option value="東京都">東京都</option>
            <option value="大阪府">大阪府</option>
            <option value="福岡県">福岡県</option>
            <option value="佐賀県">佐賀県</option>
            <option value="長崎県">長崎県</option>
            <option value="熊本県">熊本県</option>
            <option value="大分県">大分県</option>
            <option value="宮崎県">宮崎県</option>
            <option value="鹿児島県">鹿児島県</option>
            <option value="沖縄県">沖縄県</option>
    </select>
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
        <label for="exampleInputEmail1">時間</label>
    <select name="reservtime">
        <option value="9:00">9:00</option>
        <option value="9:30">9:30</option>
        <option value="10:00">10:00</option>
        <option value="10:30">10:30</option>
        <option value="11:00">11:00</option>
        <option value="11:30">11:30</option>
        <option value="12:00">12:00</option>
        <option value="12:30">12:30</option>
        <option value="13:00">13:00</option>
        <option value="13:30">13:30</option>
        <option value="14:00">14:00</option>
        <option value="14:30">14:30</option>
        <option value="15:00">15:00</option>
        <option value="15:30">15:30</option>
        <option value="16:00">16:00</option>
        <option value="16:30">16:30</option>
        <option value="17:00">17:00</option>
        <option value="17:30">17:30</option>
        <option value="18:00">18:00</option>
        <option value="19:00">19:00</option>
        <option value="19:30">19:30</option>
        <option value="20:00">20:00</option>
        <option value="20:30">20:30</option>
        <option value="21:00">21:00</option>
        <option value="21:30">21:30</option>
        <option value="22:00">22:00</option>
        <option value="22:30">22:30</option>
    </select>
    </div>

    <label for="photo">イメージ画像</label>
    <input type="file" class="form-control" name="image">
    <br>
    <button type="submit" class="btn btn-outline-primary">Submit</button>
</form>

<a href="/sample/posts">Back</a>

@endsection