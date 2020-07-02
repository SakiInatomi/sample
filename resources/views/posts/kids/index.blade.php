<h1>Posts</h1>

<a href="/sample/posts/kids/create">New Post</a>


@foreach($posts as $post)
<a href="/posts/{{ $post->id }}">{{ $post->username }}</a>
<!--
<a href="/posts/{{ $post->id }}">{{ $post->userage }}</a>
<a href="/posts/{{ $post->id }}">{{ $post->tell }}</a>
<a href="/posts/{{ $post->id }}">{{ $post->useraddress }}</a>
-->
<a href="/posts/{{ $post->id }}/edit">Edit</a>

    <form action="/sample/posts/kids/{{ $post->id }}" method="POST" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <button type="submit">Delete</button>
    </form>
@endforeach

<a href="/sample/posts/kids/create">New Post</a> 