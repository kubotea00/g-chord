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
}
