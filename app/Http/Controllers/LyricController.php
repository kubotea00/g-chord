<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lyric;
use App\SongTitle;
use App\Post;

class LyricController extends Controller
{
    public function show($artist_id, $song_title_id)
    {
        $lyric = SongTitle::find($song_title_id)->lyrics;
        $posts = Post::all();
        return view('Lyric.show')->with(['lyric' => $lyric, 'posts' => $posts, 'artist_id' => $artist_id, 'song_title_id' => $song_title_id]);
    }
}
