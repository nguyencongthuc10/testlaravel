<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
   public $timestamps = false;
    protected $fillable = [
        'shipping_name', 'shipping_email','shipping_phone','shipping_address'
    ];
    
    protected $primarykey = 'shipping_id';
    protected $table = 'tbl_shipping';
}
