<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{

    public function PermissionRole() {
        return $this->belongsTo(RolePermission::class, 'permissions_id', 'id');
    }
//    public function roles()
//    {
//        return $this->belongsToMany('App\Role');
//    }
}
