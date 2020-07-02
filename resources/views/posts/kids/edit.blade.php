<form method="POST" action="/sample/posts/kids/{{ $post->id }}">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PUT">
        <input type="text" name="username" value="{{ $post->username }}">
        <input type="text" name="userage" value="{{ $post->userage }}">
        <input type="text" name="tell" value="{{ $post->tell }}">
        <input type="text" name="useraddress" value="{{ $post->useraddress }}">
        <input type="submit">
        </form> 