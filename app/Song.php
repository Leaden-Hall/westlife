<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $fillable = ['album_id', 'name', 'url'];

    public function album() {
      return $this->belongsTo(Album::class);
    }
}
