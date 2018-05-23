<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'username', 'email', 'password',
    ];

    protected $table = 'users';

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function UserRole() {
      return $this->hasOne(UserRole::class, 'users_id', 'id');
    }

    public function Blogs() {
      return $this->hasMany(Blog::class, 'published_by', 'username');
    }

    public function isVerified() {
      if($this->verify === 1) {
        return true;
      }
      return false;
    }

    public function showVerification() {
      if($this->verify === 1) {
        echo 'Yes';
      }else {
        echo 'No';
      }
    }

    public function admin() {
      if($this->UserRole->Roles->first()->title === 'administrator') {
        return true;
      }
      return false;
    }
}
