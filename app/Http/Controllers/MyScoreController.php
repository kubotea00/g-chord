<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MyScore;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class MyScoreController extends Controller
{
    public function index(User $user)
    {
        return view('MyScore.index')->with(['users' => $user->get()]);
    }
    public function input()
    {
        return view('MyScore.upload');
    }
    public function upload(Request $request)
    {        
        $this->validate($request, [
            'file' => [
                'required',
                'file',
                'image',
                'mimes:jpeg,png',
            'title' => 'required',
            ]
        ]);
        if ($request->file('file')->isValid([])) {
            $upload_info = Storage::disk('s3')->putFile('g-chord', $request->file('file'), 'public');
            $path = Storage::disk('s3')->url($upload_info);
            $user_id = Auth::id();
            $title = $request->input('title');
            $new_my_score_data = new MyScore();
            $new_my_score_data->user_id = $user_id;
            $new_my_score_data->path = $path;
            $new_my_score_data->title = $title;
            $new_my_score_data->save();
            
            return redirect('/myscore');
        }else{
            return redirect('/myscore/upload');
        }
    }
}
