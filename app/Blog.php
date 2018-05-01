<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Comment;

class Blog extends Model
{
    function comments() {
        return $this->hasMany(Comment::class);
    }
}
