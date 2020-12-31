<?php

namespace App\Db;

use Illuminate\Database\Eloquent\Model;

class OrganizationUser extends Model
{
    protected $fillable = ['user_id','organization_id'];
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
