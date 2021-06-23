<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SongTitle;
use App\Artist;

class SongTitleController extends Controller
{
    public function index(SongTitle $song_title, Artist $artist)
    {
       $artist_id = $artist->id;  
       $song_title = Artist::find($artist_id)->songTitles;
       return view('Song.index')->with(['song_titles' => $song_title]);
    }
}
