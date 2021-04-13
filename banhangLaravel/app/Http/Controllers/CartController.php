<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Session\Store;
use Gloudemans\Shoppingcart\Facades\Cart;
class CartController extends Controller
{
	
	public function cart_save(Request $request){
		$product_id = $request->productid_hidden;
		$qty = $request->qty;
		$product_info= DB::table('tbl_productP')->where('product_id',$product_id)->first();

		$data['id'] = $product_id;
		$data['qty'] = $qty;
		$data['name'] = $product_info->product_name;
		$data['price'] = $product_info->product_price;
		$data['weight'] = $product_info->product_price;
		$data['options']['image'] = $product_info->product_img;
		Cart::add($data);
    	// Cart::destroy();
		return Redirect('show-cart');
	}
	public function show_cart_ajax(){
		$category_product= DB::table('tbl_category_product')->where('category_status','1')->orderby('id','DESC')->get();
		$brand_product= DB::table('tbl_brandproduct')->where('brand_status','1')->orderby('brand_id','DESC')->get();
		return view('page.cart_ajax')->with('category_product',$category_product)->with('brand_product',$brand_product);
	}
	public function show_cart(){
		$category_product= DB::table('tbl_category_product')->where('category_status','1')->orderby('id','DESC')->get();
		$brand_product= DB::table('tbl_brandproduct')->where('brand_status','1')->orderby('brand_id','DESC')->get();
		return view('page.cart')->with('category_product',$category_product)->with('brand_product',$brand_product);
	}
	public function delete_cart($rowId){
		Cart::update($rowId, 0);
		return Redirect('show-cart');

	}

	public function update_qty(Request $request){
		$rowId = $request->rowid_cart;

		$qty_cart = $request->quantity_cart;
		Cart::update($rowId, $qty_cart);
		return Redirect('show-cart');
	}


	public function add_cart_ajax(Request $request){
		$data = $request->all();
		$session_id = substr(md5(microtime()),rand(0,26),5);
		$cart = Session::get('cart');
		if($cart==true){
			$is_avaiable = 0;
			foreach($cart as $key => $val){
				if($val['product_id']==$data['cart_product_id']){
                    $is_avaiable++;
                   	 $cart[$key] = array(
                    'product_name' => $val['product_name'],
                    'product_id' => $val['product_id'],
                    'product_image' => $val['product_image'],
                    
                    'product_qty' => $val['product_qty']+ $data['cart_product_qty'],
                    'product_price' => $val['product_price'],
                    );
                    Session::put('cart',$cart);
                   
                }
			}
			if($is_avaiable == 0){
				$cart[] = array(
					'session_id' => $session_id,
					'product_name' => $data['cart_product_name'],
					'product_id' => $data['cart_product_id'],
					'product_image' => $data['cart_product_image'],
					'product_qty' => $data['cart_product_qty'],
					'product_price' => $data['cart_product_price'],
				);
				Session::put('cart',$cart);
			}
		}else{
			$cart[] = array(
				'session_id' => $session_id,
				'product_name' => $data['cart_product_name'],
				'product_id' => $data['cart_product_id'],
				'product_image' => $data['cart_product_image'],
				'product_qty' => $data['cart_product_qty'],
				'product_price' => $data['cart_product_price'],

			);
			Session::put('cart',$cart);
		}

		Session::save();
	}
}
