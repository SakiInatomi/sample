@if (session('message'))
        {{ session('message') }}
@endif

    {{ $post->username }}
    {{ $post->userage }}
    {{ $post->tell }}
    {{ $post->useraddress }} 

    <a href="/sample/kids/{{ $post->id }}/edit">Edit</a>
