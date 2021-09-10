<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MyScoreTitle;
use App\MyScore;
use App\User;
use Illuminate\Support\Facades\Auth;

class MyScoreTitleController extends Controller
{
    public function index(User $user, MyScoreTitle $my_score_title)
    {
       $user_id = $user->id;
       $my_score_title = User::find($user_id)->myScoreTitles;
       return view('MyScoreTitle.index')->with(['my_score_title' => $my_score_title]);
    }
}
