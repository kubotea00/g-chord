<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MyScoreLyric;
use App\User;
use App\MyScoreTitle;
use App\MyScoreComment;

class MyScoreLyricController extends Controller
{
    public function show($user_id, $my_score_title_id)
    {
        $my_score_lyric = MyScoreTitle::find($my_score_title_id)->myScoreLyrics;
        $my_score_comments = MyScoreComment::all();
        return view('MyScoreLyric.show')->with(['my_score_lyric' => $my_score_lyric, 'my_score_comments' => $my_score_comments, 'user_id' => $user_id, 'my_score_title_id' => $my_score_title_id]);
    }
}
