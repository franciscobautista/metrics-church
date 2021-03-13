<?php

namespace App\Db;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    protected $fillable = ['name','logo','email'];

    public function getLettersNameAttribute()
    {
        return strtoupper(substr($this->name,0,1) );
    }
    public function organization_subcategories()
    {
        return $this->hasMany(OrganizationSubcategory::class);
    }
}
