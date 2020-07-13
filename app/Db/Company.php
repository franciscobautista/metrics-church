<?php

namespace App\Db;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = ['legal_name','name','income_tax_id','type','logo','email'];
    public function company_addresses()
    {
    	return $this->hasMany(CompanyAddress::class,'company_id','id');
    }

    /*public function address()
    {
        //return $this->hasManyThrough('App\Db\Address', 'App\Db\CompanyAddress','address_id','id');
        return $this->hasOneThrough(Address::class, CompanyAddress::class,'address_id','id');
    }*/

    public function employees()
    {
        return $this->hasMany(Employee::class);
    }
    public function phones()
    {
        return $this->hasMany(CompanyPhone::class);
    }
    public function getLettersNameAttribute()
    {
        return strtoupper(substr($this->name,0,1) );
    }
    public function company_subcategories()
    {
        return $this->hasMany(CompanySubcategory::class);
    }
}
