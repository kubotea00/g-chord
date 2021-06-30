@extends('layouts.app')

@section('content')
    <h1>アーティスト一覧</h1>
    <div class='artists'>
        @foreach ($artists as $artist)
            <div class='artist'>
                <a href="/artists/{{ $artist->id }}">{{ $artist->name }}</a>
            </div>
        @endforeach
    </div>
@endsection
   