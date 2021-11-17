<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lyric;
use App\SongTitle;
use App\Post;
use App\Like;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\DB;

class LyricController extends Controller
{
    public function show(SongTitle $song_title, $artist_id, $song_title_id)
    {
        $lyric = SongTitle::find($song_title_id)->lyrics;
        $posts = Post::all();
        $like = Like::where('artist_id', $artist_id)->where('song_title_id', $song_title_id)->where('user_id', auth()->user()->id)->first();
        $like_count = Like::where('artist_id', $artist_id)->where('song_title_id', $song_title_id)->count();
        return view('Lyric.show')->with(['lyric' => $lyric, 'posts' => $posts, 'song_title' => $song_title, 'like' => $like, 'like_count' => $like_count, 'artist_id' => $artist_id, 'song_title_id' => $song_title_id]);
    }
    public function like(SongTitle $song_title, Request $request, $artist_id, $song_title_id)
    {
        $user_id = Auth::id();
        $like = new Like();
        $like->artist_id = $artist_id;
        $like->song_title_id = $song_title_id;
        $like->user_id = $user_id;
        $like->save();
        return back();
    }
    public function unlike(SongTitle $song_title, Request $request, $artist_id, $song_title_id)
    {
        $user = Auth::user()->id;
        $like = Like::where('artist_id', $artist_id)->where('song_title_id', $song_title_id)->where('user_id', $user)->first();
        $like->delete();
        return back();
    }
    
}
