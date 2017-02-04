<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schoolyear extends Model
{
  protected $table = 'schoolyears';

  public function students()
  {
    return $this->hasMany('App\Student');
  }
}
