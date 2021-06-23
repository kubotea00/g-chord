<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>曲一覧</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('CSS/g-chord.css') }}">
    </head>
    <body>
        <h1>{{ $lyric->name }}</h1>
            <div class="lyric">
                <img src="{{ asset($lyric->body) }}">
            </div>
    </body>
</html>