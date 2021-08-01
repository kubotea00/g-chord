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
    public function search(Request $request)
    {
        $search = $request->input('search');
        $query = Artist::query();
        if (!empty($search)) {
            $query->where('name', 'LIKE', '%');
        }
        $artists_index = $query->get()->sortByDesc('created_at');
        return view('Artist.search')->with([ 'artists_index' => $artists_index]);
    }
}
