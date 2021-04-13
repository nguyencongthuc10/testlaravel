<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  	 public $timestamps = false;
  	 //nhung cot trong table
    protected $fillable = [
        'category_name', 'category_desc', 'category_status'
    ];
    
    // ten table
    protected $table = 'tbl_category_product';
    // moi quan he 1 prodcut thi chi thuoc 1 category . theo category_id
    public function product(){
    	return $this->hasMany('App\Prodcut','category_id');
    }
}
