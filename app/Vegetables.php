<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vegetables extends Model
{
    //

    public function store(){
    	return $this->belongsTo('App\Store');
    }

    public function orderItem(){
    	return $this->hasMany('App\OrderItem', 'id', 'vegetables_id');
    }
}
