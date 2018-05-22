<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RolePermission extends Model
{
    protected $table = 'roles_permissions';

    protected $fillable = ['permissions_id', 'roles_id'];

    public function permissions() {
        return $this->hasMany(Permission::class, 'id', 'permissions_id');
    }

    public function Roles() {
        return $this->hasMany(Role::class, 'id', 'roles_id');
    }
}
