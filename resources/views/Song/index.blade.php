<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>曲一覧</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>曲一覧</h1>
            <div class='song_titles'>
                @foreach ($song_titles as $song_title)
                    <div class='song_title'>
                        <a href="/artists/{{ $song_title->artist_id }}/{{ $song_title->id }}">{{ $song_title->name }}</a>
                    </div>
                @endforeach
            </div>
    </body>
</html