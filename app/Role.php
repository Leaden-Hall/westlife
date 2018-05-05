<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';

    public function RoleUser() {
      return $this->belongsTo(UserRole::class, 'roles_id', 'id');
    }
}
