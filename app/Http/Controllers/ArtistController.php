<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artist;

class ArtistController extends Controller
{
    public function index(Artist $artist)
    {
        return view('Artist.index')->with(['artists' => $artist->get()]);
    }
}
