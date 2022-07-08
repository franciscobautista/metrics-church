<?php

namespace App\Db;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    //use SoftDeletes;
    public $timestamps = false;
    protected $fillable = ['name','organization_id'];
    
    public function subcategories()
    {
        return $this->hasMany(Subcategory::class);
    }
    
}
