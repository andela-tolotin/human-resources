<?php

namespace HumanResources;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public functtion role()
    {
        return $this->hasOne('HumanResources\Role')
    }

    public functtion skills()
    {
        return $this->hasMany('HumanResources\Skill')
    }

    public functtion otherinfo()
    {
        return $this->hasOne('HumanResources\Otherinfo')
    }

    public functtion academics()
    {
        return $this->hasMany('HumanResources\Academic')
    }
}
