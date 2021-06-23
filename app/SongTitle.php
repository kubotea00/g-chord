<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\SongTitle;

class SongTitle extends Model
{
    public function artists()
    {
        return $this->belongsTo('App\Artist');
    }
    public function lyrics()
    {
        return $this->hasOne('App\Lyric');
    }
}
