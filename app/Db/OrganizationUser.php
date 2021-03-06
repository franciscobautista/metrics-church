<?php

namespace App\Db;

use Illuminate\Database\Eloquent\Model;

class OrganizationUser extends Model
{
    protected $fillable = ['user_id','organization_id','rol_id'];
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function rol()
    {
        return $this->belongsTo(Role::class,'rol_id');
    }
}
