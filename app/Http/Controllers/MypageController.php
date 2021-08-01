<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artist;

class MypageController extends Controller
{
    public function index()
    {
        return view('Home.mypage');
    }
}
