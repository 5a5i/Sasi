<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class casts extends Model
{
  protected $fillable = [
    'id',
    'movie_id',
    'actor_id'
  ];
  
    public function movies()
    {
        return $this->hasMany('App\Models\movies');
    }
}
