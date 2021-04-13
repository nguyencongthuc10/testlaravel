<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'customer_name', 'customer_email', 'customer_pass','customer_phone'
    ];
    
    protected $primarykey = 'customer_id';
    protected $table = 'tbl_customer';
    public function order(){
    	return $this->hasMany('App\Order','customer_id');
    }
}
