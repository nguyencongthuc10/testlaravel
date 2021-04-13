<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'customer_id', 'shipping_id', 'payment_id','order_total','order_status'
    ];
    
    protected $primarykey = 'order_id';
    protected $table = 'tbl_order';
    public function order_detail(){
    	return $this->belongsTo('App\Order_detail','order_id');
    }
}
