<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\MyScoreLyric;

class MyScoreTitle extends Model
{
    public function users()
    {
        return $this->belongsTo('App\User');
    }
    public function myScoreLyrics()
    {
        return $this->hasOne('App\MyScoreLyric');
    }
    public function myScores()
    {
        return $this->belongsTo('App\MyScore');
    }
}
