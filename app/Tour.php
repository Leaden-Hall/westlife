<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    protected $fillable = ['name', 'summary', 'start', 'end'];

  public function getDates()
  {
    return array('created_at', 'updated_at', 'start', 'end');
  }

}
