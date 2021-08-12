<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Artist;
use App\SongTitle;
use App\Lyric;

class PostController extends Controller
{
    public function store(Request $request, $artist_id, $song_title_id, Post $post)
    {
        
        $input = $request['post'];
        $post->fill($input)->save();
        return redirect('/artists/'.$artist_id.'/'.$song_title_id);
    }
    
    public function destroy($artist_id, $song_title_id, $post_id)
    {
        Post::find($post_id)->delete();
        return redirect('/artists/'.$artist_id.'/'.$song_title_id);
    }
}
