<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    public function songTitles()
    {
        return $this->hasMany('App\SongTitle');
    }
}
