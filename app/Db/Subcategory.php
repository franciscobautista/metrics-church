<?php

namespace App\Db;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subcategory extends Model
{
    use SoftDeletes;
    public $timestamps = false;
    protected $fillable = ['name','format','category_id','organization_id'];
    
}
