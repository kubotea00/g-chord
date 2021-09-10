<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MyScoreComment;
use App\User;
use App\MyScoreTitle;
use App\MyScoreLyric;

class MyScoreCommentController extends Controller
{
    public function store(Request $request, $user_id, $my_score_title_id, MyScoreComment $my_score_comment)
    {
        
        $input = $request['my_score_comment'];
        $my_score_comment->fill($input)->save();
        return redirect('/myscore/'.$user_id.'/'.$my_score_title_id);
    }
    
    public function destroy($user_id, $my_score_title_id, $my_score_comment_id)
    {
        MyScoreComment::find($my_score_comment_id)->delete();
        return redirect('/myscore/'.$user_id.'/'.$my_score_title_id);
    }
}
