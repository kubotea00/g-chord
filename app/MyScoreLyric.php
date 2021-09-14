<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\MyScoreTitle;

class MyScoreLyric extends Model
{
    public function users()
    {
        return $this->belongsTo('App\MyScoreTitle');
    }
    public function myScores()
    {
        return $this->belongsTo('App\MyScore');
    }
    public function myScoreTitles()
    {
        return $this->belongsTo('App\MyScoreTitle');
    }
}
