<?php

namespace App\Db;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $fillable = ['first_name','last_name','mothers_last_name','photo','job_position_id'];
    public function emails()
    {
        return $this->hasMany(PersonEmail::class);
    }
    public function phones()
    {
        return $this->hasMany(PersonPhone::class);
    }
    function job_position()
    {
        return $this->hasOne(JobPosition::class,'id');   
    }
    public function getFullNameAttribute()
    {
        return $this->first_name." ".$this->last_name;
    }
    public function getLettersNameAttribute()
    {
        return strtoupper(substr($this->first_name,0,1).substr($this->last_name,0,1) );
    }
}
