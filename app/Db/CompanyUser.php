<?php

namespace App\Db;

use Illuminate\Database\Eloquent\Model;

class CompanyUser extends Model
{
    protected $fillable = ['user_id','company_id'];
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
