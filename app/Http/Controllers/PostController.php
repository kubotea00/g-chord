<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function store(Request $request, Post $post, $artist_id, $song_title_id)
    {
        $input = $request['post'];
        $post->fill($input)->save();
        return redirect('/artists/'.$artist_id.'/'.$song_title_id);
    }
}
