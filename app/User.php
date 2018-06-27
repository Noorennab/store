<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Collection;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function stores()
    {
       return $this->hasMany(Store::class);
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function isAdmin(){
        return $this->role->name=='admin';
    }

    public function isStore(){
        return $this->role->name=='store';
    }
    public function products(){
       if ($this->stores->first()==null)return new Collection();
        return $this->stores->first()->products;
    }
}
