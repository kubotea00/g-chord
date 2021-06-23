<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lyric extends Model
{
    public function artists()
    {
        return $this->belongsTo('App\SongTitle');
    }
}
