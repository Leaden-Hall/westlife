<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Comment;

class Blog extends Model
{
  protected $fillable = ['title', 'summary', 'logo', 'content', 'published_by'];

  function comments() {
      return $this->hasMany(Comment::class);
  }
}
