<?php

namespace App\Db;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'person_id','username', 'email', 'password', 'recovery_password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    function person()
    {
        return $this->belongsTo(Person::class);
    }
    
    function organizations()
    {
        return $this->hasMany(OrganizationUser::class);
    }

    function organization()
    {
        return $this->hasOne(OrganizationUser::class);
    }

    /**
     * Verifica si el usuario logueado cuenta con un rol
     *
     */
    public static function hasRole($role)
    {
        if(\Auth::user()->type==$role)
            return true;
        else
            return false;
    }

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = \Hash::make($value);
    }

    public function permissions()
    {
        return $this->belongsToMany(Permission::class)->withTimestamps();
    }
    public function permission()
    {
        return $this->permissions->flatten()->pluck('slug')->unique();
    }
    /*public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
    public function rol()
    {
        return $this->hasOne(RoleUser::class);
    }
    public function role()
    {
        return $this->roles->flatten()->pluck('name')->unique();
    }

    public function saveRole($role)
    {
                    //->attach
        $this->roles()->sync($role);
    }
    public function savePermission($permission)
    {
                          //->attach
        $this->permissions()->sync($permission, false);
    }*/
    /*
    public function hasPermission()
    {
        return $this->permissions->flatten()->pluck('name')->unique();
    } */
}
