@extends('layouts.app')

@section('content')
    <h1>{{ $lyric->name }}</h1>
    <div class="lyric">
        <img src="{{ $lyric->url }}">
    </div>
    
    <h1>コメント</h1>
    <div class='posts'>
        @foreach ($posts as $post)
            <div class='post'>
                    <h2 class='title'>{{ $post->name }}</h2>
                    <p class='body'>>>{{ $post->content }}</p>
                    <form style="display: inline-block;" method="POST" action="/artists/{{ $artist_id }}/{{ $song_title_id }}/{{ $post->id }}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">削除する</button>
                    </form>
                </div>
        @endforeach
        <form action="/artists/{{ $artist_id }}/{{ $song_title_id }}" method="POST">
            @csrf
            <div class="name">
                <h2>ユーザーネーム</h2>
                <input type="text" name="post[name]" placeholder="ユーザー名"/>
            </div>
            <div class="content">
                <h2>内容</h2>
                <textarea name="post[content]" placeholder="コメント"></textarea>
            </div>
            <input type="submit" value="保存"/>
        </form>
    </div>
@endsection