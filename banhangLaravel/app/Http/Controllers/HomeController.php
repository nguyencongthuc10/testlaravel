<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use DB;
use App\Product;
use App\Brand;
use App\Category;
use App\Http\Requests;
use Session;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Session\Store;
use Gloudemans\Shoppingcart\Facades\Cart;
class HomeController extends Controller
{
	// public function __construct()
 //    {
 //        $this->middleware('auth');
 //    }
    public function index(Request $request){
    	// SEO 
    	// $meta_des = "Chuyên bán sản phẩm điện tử, đồ gia dụng";
    	// $meta_title = "Sãn phẩm điện tử"
    	// $meta_keyword = "Laptop, dồ gia dụng";

    	// $dd = Product::find(12)->category->toArray();
    	// var_dump($dd);
    	// exit();
    	// $meta_url = $request->url();
    	// Truy van thuong
    	// $category_product= DB::table('tbl_category_product')->where('category_status','1')->orderby('id','DESC')->get();
    	// $brand_product= DB::table('tbl_brandproduct')->where('brand_status','1')->orderby('brand_id','DESC')->get();
    	// $pro_product = DB::table('tbl_productp')->where('product_status','1')->orderby('product_id','DESC')->get();
    	// truy van theo model
    	$brand_product = Brand::select("*")->where('brand_status','1')->orderBy('brand_id','DESC')->get();
    	$category_product = Category::select("*")->where('category_status','1')->orderBy('id','DESC')->get();
    	$pro_product = Product::select("*")->where('product_status','1')->orderBy('product_id','DESC')->get();
    	return view('page.home')->with('category_product',$category_product)->with('brand_product',$brand_product)->with('pro_product',$pro_product);
    	// cách ghi 2
    	// return view('page.home')->with(compact('category_product','brand_product','pro_product'));
    }
   
    public function search_custom(Request $request){
    	$keyword =  $request->keywordsearchcustomer;
    	$brand_product = Brand::select("*")->where('brand_status','1')->orderBy('brand_id','DESC')->get();
    	$category_product = Category::select("*")->where('category_status','1')->orderBy('id','DESC')->get();
    	$search_customer_product = Product::select("*")->where('product_name','like','%'.$keyword.'%')->orderBy('product_id','DESC')->get();
    	// $category_product= DB::table('tbl_category_product')->where('category_status','1')->orderby('id','DESC')->get();
     	// $brand_product= DB::table('tbl_brandproduct')->where('brand_status','1')->orderby('brand_id','DESC')->get();
        // $search_customer_product = DB::table('tbl_productP')->where('product_name','like','%'.$keyword.'%')->get();

    	return view('page.search_customer')->with('category_product',$category_product)->with('brand_product',$brand_product)->with('search_customer_product',$search_customer_product);
    }
}
