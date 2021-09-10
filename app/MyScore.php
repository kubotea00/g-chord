<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyScore extends Model
{
    public function myscoreTitles()
    {
        return $this->hasMany('App\MyScoreTitle');
    }
}
