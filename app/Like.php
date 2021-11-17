<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $fillable = ['song_title_id','user_id'];

  public function lyric()
  {
    return $this->belongsTo('App\Lyric');
  }

  public function user()
  {
    return $this->belongsTo('App\User');
  }
  public function songTitle()
  {
    return $this->belongsTo('App\SongTitle');
  }
}
