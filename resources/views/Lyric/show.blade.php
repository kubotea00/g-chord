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
                <h2 class='title'>{{ $post->title }}</h2>
                <p class='body'>{{ $post->body }}</p>
            </div>
        @endforeach
        <form action="/artists/{artist_id}/{song_title_id}" method="POST">
            @csrf
            <div class="title">
                <h2>Title</h2>
                <input type="text" name="post[title]" placeholder="タイトル"/>
            </div>
            <div class="body">
                <h2>Body</h2>
                <textarea name="post[body]" placeholder="今日も1日お疲れさまでした。"></textarea>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="back">[<a href="/">back</a>]</div>
    </div>
@endsection