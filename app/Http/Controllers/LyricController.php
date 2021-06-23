<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lyric;
use App\SongTitle;

class LyricController extends Controller
{
    public function show($song_title_id)
    {
        
        $lyric = SongTitle::find($song_title_id)->lyrics;
        
        return view('Lyric.show')->with(['lyric' => $lyric]);
    }
}
