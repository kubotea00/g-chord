@extends('layouts.app')

@section('content')
    <h1>{{ $my_score_lyric->title }}</h1>
    <div class="lyric">
        <img src={{ $my_score_lyric->path }}>
    </div>
    
    <h1>コメント</h1>
    <div class='posts'>
        @foreach ($my_score_comments as $my_score_comment)
            <div class='post'>
                <table class="table">
                    <th></th><h2 class='title'>{{ $my_score_comment->name }}</h2>
                    <p class='body'>>>{{ $my_score_comment->content }}</p></th>
                    <form style="display: inline-block;" method="POST" action="/myscore/{{ $user_id }}/{{ $my_score_id }}/{{ $my_score_comment->id }}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">削除する</button>
                    </form>
                </table>
            </div>
        @endforeach
        <form action="/myscore/{{ $user_id }}/{{ $my_score_id }}" method="POST">
            @csrf
            <div class="name">
                <h2>ユーザーネーム</h2>
                <input type="text" name="my_score_comment[name]" placeholder="タイトル"/>
            </div>
            <div class="content">
                <h2>内容</h2>
                <textarea name="my_score_comment[content]" placeholder="コメント"></textarea>
            </div>
            <input type="submit" value="保存"/>
        </form>
    </div>
@endsection