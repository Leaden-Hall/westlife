<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';

    public function RoleUser() {
      return $this->belongsTo(UserRole::class, 'roles_id', 'id');
    }

    public function PermissonRole() {
        return $this->belongsTo(RolePermission::class, 'roles_id', 'id');
    }

//    public function permissions() {
//        //return $this->hasMany(Permission::class, 'permissions_id', 'id');
//        return $this->belongsToMany('App\Permission');
//    }
}
