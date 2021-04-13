<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $table = 'tbl_productp';
    public $timestamps = false;
    protected $fillable = [
        'brand_id', 'category_id', 'product_name','product_name','product_desc','product_content','product_price','product_img','product_status'
    ];
    protected $primaryKey = 'product_id';
  
    // lien ket giua product vs brand vs khoa brand_id la khoa cua bang product vs brand-id la khoa chinh cua brand
    public function brand(){
    	return $this->belongsTo('App\Brand','brand_id','brand_id');
    }
    public function category(){
    	return $this->belongsTo('App\Category','category_id','id');
    }
}
