<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
  protected $guarded = [];

  public function actor(){
    return $this->belongsToMany('App\Actor', 'actor_movie', 'movie_id', 'actor_id');
  }

  public function genre(){
    return $this->belongsTo('App\Genre', 'movie_id');
  }
}
