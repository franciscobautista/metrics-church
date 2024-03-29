<?php

namespace App\Db;
 
use Illuminate\Database\Eloquent\Model;

class ServiceType extends Model
{
    public $timestamps = false;
    protected $fillable = ['name','description','hour','organization_id'];
    protected $table = "service_types";

    public function organization()
    {
        return $this->hasOne(organization::class,'id','organization_id');
    }  
}
