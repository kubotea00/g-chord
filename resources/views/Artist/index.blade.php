<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>アーティスト一覧</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>アーティスト一覧</h1>
        <div class='artists'>
            @foreach ($artists as $artist)
                <div class='artist'>
                    <a href="/artists/{{ $artist->id }}">{{ $artist->name }}</a>
                </div>
            @endforeach
        </div>
    </body>
</html>