<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = ['title', 'logo', 'summary', 'released'];

  public function getDates()
  {
    return array('created_at', 'updated_at', 'released');
  }

  public function songs() {
    return $this->hasMany(Song::class);
  }
}
