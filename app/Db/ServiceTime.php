<?php

namespace App\Db;
use App\Db\ServiceType;
use App\Db\Organization;
use Illuminate\Database\Eloquent\Model;

class ServiceTime extends Model
{
    public $timestamps = false;
    protected $fillable = ['name','day','hour','service_type_id','organization_id'];
    protected $table = "service_times";

    public function service_type()
    {
        return $this->hasOne(ServiceType::class,'id','service_type_id');
    }  
    public function organization()
    {
        return $this->hasOne(organization::class,'id','organization_id');
    }     
}
