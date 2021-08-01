@extends('layouts.app')

@section('content')
    <h1>{{ $lyric->name }}</h1>
    <div class="lyric">
        <img src="{{ asset($lyric->body) }}">
    </div>
    
    <h1>コメント</h1>
    <div class='posts'>
        @foreach ($posts as $post)
            <div class='post'>
                <h2 class='title'>{{ $post->name }}</h2>
                <p class='body'>{{ $post->content }}</p>
            </div>
        @endforeach
        <form action="/artists/{{ $artist_id }}/{{ $song_title_id }}" method="POST">
            @csrf
            <div class="name">
                <h2>Title</h2>
                <input type="text" name="post[name]" placeholder="タイトル"/>
            </div>
            <div class="content">
                <h2>Body</h2>
                <textarea name="post[content]" placeholder="今日も1日お疲れさまでした。"></textarea>
            </div>
            <input type="submit" value="保存"/>
        </form>
    </div>
@endsection