<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
  public function usr()
    {
        return $this->hasMany('App\Usr','country');
    }
  protected $table = 'country';

}
