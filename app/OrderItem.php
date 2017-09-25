<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    //
    protected $fillable = ['order_id', 'price', 'vegetables_id'];

    public function order(){
    	return $this->belongsTo('App\Order');
    }

    public function vegetable(){
    	return $this->belongsTo('App\Vegetables', 'vegetables_id', 'id');
    }
}
