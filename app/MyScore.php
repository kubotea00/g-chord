<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyScore extends Model
{
    public function myScoreTitles()
    {
        return $this->hasOne('App\MyScoreTitle');
    }
    public function users()
    {
        return $this->belongsTo('App\User');
    }
    public function myScoreLyrics()
    {
        return $this->hasOne('App\MyScoreLyric');
    }
}
