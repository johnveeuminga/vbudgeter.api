<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    //

    public function vegetables(){
    	return $this->hasMany('App\Vegetables');
    }

    public function orders(){
    	return $this->hasMany('App\Order');
    }

    public function seller(){
    	return $this->belongsTo('App\User');
    }
}
