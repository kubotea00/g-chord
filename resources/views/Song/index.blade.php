@extends('layouts.app')
@inject('song_title_controller', 'App\Http\Controllers\SongTitleController')
@section('content')
    <h1>曲一覧</h1>
    <div class='song_titles'>
        <table class="table">
            <tr>
                <th>曲名</th>
            </tr>
                @foreach ($song_titles as $song_title)
                    <div class='song_title'>
                        <tr>
                            <th><a href="/artists/{{ $song_title->artist_id }}/{{ $song_title->id }}">{{ $song_title->name }}</a></th>
                        </tr>
                    </div>
                @endforeach    
        </table>
    </div>
@endsection