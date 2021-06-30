@extends('layouts.app')

@section('content')
    <h1>曲一覧</h1>
    <div class='song_titles'>
        @foreach ($song_titles as $song_title)
            <div class='song_title'>
                <a href="/artists/{{ $song_title->artist_id }}/{{ $song_title->id }}">{{ $song_title->name }}</a>
            </div>
        @endforeach
    </div>
@endsection