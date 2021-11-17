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
    public function likeUsers()
    {
        return $this->belongsTo('App\User');
    }
    public function likes()
    {
        return $this->hasMany('App\Like');
    }
}
