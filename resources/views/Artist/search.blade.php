@extends('layouts.app')

@section('content')
   <h1>検索結果</h1>
   <table class="table">
      <tr>
         <th>アーティスト名</th>
       </tr>
      @foreach($artists_index as $artist)
         <tr>
            <td><a href="/artists/{{ $artist ->id }}">{{ $artist->name }}</a></td>
         </tr>
       @endforeach
@endsection