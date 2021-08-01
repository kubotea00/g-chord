@extends('layouts.app')

@section('content')
    <h1>アーティスト一覧</h1>
    <div class='artists'>
            <div class='artist'>
                <table class='table'>
                    <tr>
                        <th>アーティスト名</th>
                    </tr>
                    @foreach ($artists as $artist)
                        <tr>
                            <th><a href="/artists/{{ $artist->id }}">{{ $artist->name }}</a></th>
                        </tr>
                    @endforeach
                </table>
            </div>
     </div>
@endsection
   