<?php

namespace App\Db;

use Illuminate\Database\Eloquent\Model;

class PermissionUser extends Model
{
    protected $fillable = ['permission_id','user_id'];
    protected $table = 'permission_user';
}
