@if (session('message'))
        {{ session('message') }}
@endif

    {{ $post->username }}
    {{ $post->userage }}
    {{ $post->tell }}
    {{ $post->useraddress }} 

    <a href="/sample/posts/kids/{{ $post->id }}/edit">Edit</a>
