<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vegetables extends Model
{
    //
	protected $fillable = ['name', 'price1', 'price2', 'price3', 'store_id', 'avail_stock'];
    public function store(){
    	return $this->belongsTo('App\Store');
    }

    public function orderItem(){
    	return $this->hasMany('App\OrderItem', 'id', 'vegetables_id');
    }
}
