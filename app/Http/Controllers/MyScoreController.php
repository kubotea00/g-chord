<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MyScore;
use App\User;

class MyScoreController extends Controller
{
    public function index(User $user)
    {
        return view('MyScore.index')->with(['users' => $user->get()]);
    }
}
