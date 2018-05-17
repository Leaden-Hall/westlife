<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{

  protected $table = 'users_roles';

  protected $fillable = ['users_id', 'roles_id'];

  public function User() {
    return $this->hasOne(User::class, 'id', 'users_id');
  }

  public function Roles() {
    return $this->hasMany(Role::class, 'id', 'roles_id');
  }
}
