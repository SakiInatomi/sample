<form method="POST" action="/sample/posts/kids">
    {{ csrf_field() }}

    <div class="form-group">
        <label for="exampleInputEmail1">名前</label>
            <input type="text" class="form-control" aria-describedby="emailHelp" name="username" value="{{old('username')}}">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">子供の年齢</label>
        <select name="kidsage">
        <option value="0">0歳0ヶ月</option>
 　     <option value="1">0歳1ヶ月〜2ヶ月</option>
        <option value="2">0歳3ヶ月〜5ヶ月</option>
        <option value="3">0歳6ヶ月〜11ヶ月</option>
        <option value="4">1歳</option>
        <option value="5">2歳</option>
        <option value="6">3歳〜6歳</option>
        <option value="7">7歳以上</option>
</select>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">電話番号</label>
            <input type="text" class="form-control" aria-describedby="emailHelp" name="tell" value="{{old('tell')}}">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">カテゴリ</label>
            <input type="text" class="form-control" aria-describedby="emailHelp" name="useraddress" value="{{old('useraddress')}}">
    </div>
<!--    <input type="text" name="username">
    <input type="text" name="userage">
    <input type="text" name="tell">
    <input type="text" name="useraddress">
    -->
    <input type="submit">
</form>