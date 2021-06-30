@extends('Lyric.show')

@section('post')
    <h1>コメント</h1>
    <div class='posts'>
        @foreach ($posts as $post)
            <div class='post'>
                <h2 class='title'>{{ $post->title }}</h2>
                <p class='body'>{{ $post->body }}</p>
            </div>
        @endforeach
    </div>
@endsection