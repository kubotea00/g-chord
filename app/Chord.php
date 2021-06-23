<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chord extends Model
{
    return $this->hasOne('App\Song');
}
