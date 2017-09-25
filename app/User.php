<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'name', 'username', 'password', 'address', 'contact_info', 'usertype_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function usertype(){
        return $this->belongsTo('App\Usertype');
    }

    public function orders(){
        return $this->hasMany('App\Order');
    }

    public function store(){
        return $this->hasOne('App\Store');
    }

    public function findForPassport($username) {
        return $this->where('username', $username)->first();
    }


}
