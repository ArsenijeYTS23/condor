<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usr extends Model
{
  public function country()
    {
        return $this->belongsTo('App\Country');
    }
  protected $table = 'users';
}
