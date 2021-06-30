<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lyric;
use App\SongTitle;
use App\Post;

class LyricController extends Controller
{
    public function show($song_title_id)
    {
        
        $lyric = SongTitle::find($song_title_id)->lyrics;
        $posts = \DB::table('posts')->get();
        return view('Lyric.show')->with(['lyric' => $lyric, 'posts' => $posts]);
    }
}
