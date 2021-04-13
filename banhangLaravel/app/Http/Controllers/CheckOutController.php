<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Session\Store;
use Gloudemans\Shoppingcart\Facades\Cart;

class CheckOutController extends Controller
{

	public function Authlogin()
	{
		$admin_id = Session::get('admin_id');
		if ($admin_id) {
			return Redirect('/dashboard');
		}
		else
			return Redirect('/admin')->send();
	}
	public function login_checkout(){
		$category_product= DB::table('tbl_category_product')->where('category_status','1')->orderby('id','DESC')->get();
		$brand_product= DB::table('tbl_brandproduct')->where('brand_status','1')->orderby('brand_id','DESC')->get();
		return view('page.login_checkout')->with('category_product',$category_product)->with('brand_product',$brand_product);
	}

	public function add_customer(Request $request){
		$data = array();
		$data['customer_name'] = $request->customer_name;
		$data['customer_email'] = $request->customer_email;
		$data['customer_pass'] = md5($request->customer_pass);
		$data['customer_phone'] = $request->customer_phone;

		$customer_id = DB::table('tbl_customer')->insertGetId($data);
		Session::put('customer_id',$customer_id);
		Session::put('customer_name', $request->customer_name);
		return Redirect('/check-out-cart');


	}

	public function checkout(){
		$category_product= DB::table('tbl_category_product')->where('category_status','1')->orderby('id','DESC')->get();
		$brand_product= DB::table('tbl_brandproduct')->where('brand_status','1')->orderby('brand_id','DESC')->get();
		return view('page.check_out')->with('category_product',$category_product)->with('brand_product',$brand_product);
	}

	public function  save_checkout_customer(Request $request){
		$data = array();
		$data['shipping_name'] = $request->shipping_name;
		$data['shipping_email'] = $request->shipping_email;

		$data['shipping_phone'] = $request->shipping_phone;
		$data['shipping_address'] = $request->shipping_address;
		$data['shipping_note'] = $request->shipping_note;
		$shipping_id = DB::table('tbl_shipping')->insertGetId($data);
		Session::put('shipping_id',$shipping_id);

		return Redirect('/payment');


	}

	public function payment(){
		$category_product= DB::table('tbl_category_product')->where('category_status','1')->orderby('id','DESC')->get();
		$brand_product= DB::table('tbl_brandproduct')->where('brand_status','1')->orderby('brand_id','DESC')->get();
		return view('page.payment')->with('category_product',$category_product)->with('brand_product',$brand_product);
	}

	public function logout_check_out_cart(){
		Session::forget('customer_id');
		return Redirect('/login-check-out-cart');

	}
	public function  login_customer(Request $request){
		$customer_email = $request->customer_email_dn;
		$customer_pass = md5($request->customer_pass_dn);
		$result =  DB::table('tbl_customer')->where('customer_email',$customer_email)->where('customer_pass',$customer_pass)->first();

		if($result){
			Session::put('customer_id',$result->customer_id);
			return Redirect('/check-out-cart');

		}
		else{

			return Redirect('/login-check-out-cart');
		}


	}

	public function hinhthucthanhtoan(Request $request){
		$category_product= DB::table('tbl_category_product')->where('category_status','1')->orderby('id','DESC')->get();
		$brand_product= DB::table('tbl_brandproduct')->where('brand_status','1')->orderby('brand_id','DESC')->get();
		$content = Cart::content();
    	// insert hinh thuc thanh toan
		$data = array();
		$data['payment_method'] = $request->payment_option;
		$data['payment_status'] = "Đang chờ xử lý";
		$payment_id = DB::table('tbl_payment')->insertGetId($data);

    	// insert order 
		$data_order = array();
		$data_order['shipping_id'] = Session::get('shipping_id');
		$data_order['payment_id'] = $payment_id;
		$data_order['customer_id'] = Session::get('customer_id');
		$data_order['order_total'] = Cart::total();
		$data_order['order_status'] = "Đang chờ xử lý";
		$order_id = DB::table('tbl_order')->insertGetId($data_order);

    	// insert order_detail 

		$data_ordeD = array();
		foreach ($content as $value) {
			$data_ordeD['order_id'] = $order_id;
			$data_ordeD['product_id'] = $value->id;
			$data_ordeD['product_name'] = $value->name;
			$data_ordeD['product_price'] = $value->price;
			$data_ordeD['product_qty'] = $value->qty;
			$payment_id = DB::table('tbl_order_detail')->insert($data_ordeD);
		}

		if($data['payment_method'] ==1){
			echo ('ATM');
		}else{

			Cart::destroy();
			return view('page.handcash')->with('category_product',$category_product)->with('brand_product',$brand_product);
		}
	}

	public function manage_order(){
		$this->Authlogin();

		$order_all = DB::table('tbl_order')
		->join('tbl_customer','tbl_order.customer_id', '=' , 'tbl_customer.customer_id')

		->select('tbl_order.*','tbl_customer.customer_name')
		->orderby('tbl_order.order_id','DESC')->get();
		return view('page_admin.manage')->with('order_all',$order_all);
	}
	public function view_order($order_id){
		$this->Authlogin();
		$order_shipping_custom_all = DB::table('tbl_order')
		->join('tbl_customer','tbl_order.customer_id', '=' , 'tbl_customer.customer_id')
		->join('tbl_shipping','tbl_shipping.shipping_id', '=' , 'tbl_order.shipping_id')
		->where('tbl_order.order_id',$order_id)
		->get();


		$order_detail_all = DB::table('tbl_order')
		->join('tbl_customer','tbl_order.customer_id', '=' , 'tbl_customer.customer_id')
		->join('tbl_shipping','tbl_shipping.shipping_id', '=' , 'tbl_order.shipping_id')
		->join('tbl_order_detail','tbl_order_detail.order_id', '=' , 'tbl_order.order_id')
		->where('tbl_order.order_id',$order_id)
		->get();
		return view('page_admin.view_order')->with('order_detail_all',$order_detail_all)->with('order_shipping_custom_all',$order_shipping_custom_all);
	}
	// public function del_order($order_id){
	// 	$this->Authlogin();

	// 	$order_all = DB::table('tbl_order')
	// 	->join('tbl_customer','tbl_order.customer_id', '=' , 'tbl_customer.customer_id')

	// 	->select('tbl_order.*','tbl_customer.customer_name')
	// 	->orderby('tbl_order.order_id','DESC')->get();
	// 	return view('page_admin.manage')->with('order_all',$order_all);
	// }
}
