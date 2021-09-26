@extends('layouts.app')

@section('content')
    <h1>曲一覧</h1>
    <div class='my_score_titles'>
        <div class="my_score_title">
            <table class='table'>
                <tr>
                    <th>楽譜一覧</th>
                </tr>
                @foreach ($my_score_titles as $my_score_title)
                        <tr>
                            <th><a href="/myscore/{{ $my_score_title->user_id }}/{{ $my_score_title->id }}">{{ $my_score_title->title }}</a></th>
                        </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection