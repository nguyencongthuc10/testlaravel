<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
  	public $timestamps = false;
    protected $fillable = [
        'payment_method', 'payment_status'
    ];
    
    protected $primarykey = 'payment_id';
    protected $table = 'tbl_payment';
    
}
