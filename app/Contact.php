<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contacts';

    protected $fillable = ['name', 'email', 'url', 'message', 'status'];

    public function status() {
      if($this->status == 1) {
        return 'answered';
      }
      return 'pending';

    }
}
