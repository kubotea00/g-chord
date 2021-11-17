<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lyric extends Model
{
    public function likeUsers()
    {
        return $this->belongsTo('App\User');
    }
    public function likes()
    {
        return $this->hasMany('App\Like');
    }
}
