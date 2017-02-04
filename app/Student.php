<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{

  public function gender()
  {
    return $this->belongsTo('App\Gender');
  }

  public function schoolyear()
  {
    return $this->belongsTo('App\Schoolyear');
  }

}
