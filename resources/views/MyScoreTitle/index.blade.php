@extends('layouts.app')

@section('content')
    <h1>曲一覧</h1>
    <div class='my_score_titles'>
        @foreach ($my_score_title as $my_score_title)
            <div class='my_score_title'>
                <a href="/myscore/{{ $my_score_title->user_id }}/{{ $my_score_title->id }}">{{ $my_score_title->name }}</a>
            </div>
        @endforeach
    </div>
@endsection