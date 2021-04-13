<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_detail extends Model
{
   public $timestamps = false;
    protected $fillable = [
        'order_id', 'product_id', 'product_name','product_qty','product_price'
    ];
    
    protected $primarykey = 'order_detail_id';
    protected $table = 'tbl_order_detail';
    public function order_detail(){
    	return $this->belongsTo('App\Order_detail','order_id');
    }
}
