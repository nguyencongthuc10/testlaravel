<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Product;
use App\Brand;
use App\Category;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Session\Store;
session_start();
class BrandProduct extends Controller
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
     public function add_brand_product(){
     	$this->Authlogin();
    	return view('page_admin.add_brand_product');
    }

    public function all_brand_product(){
    	// lấy ra all sản phẩm
    	$this->Authlogin();
       $all_brand_product = Brand::all();
    	// $all_brand_product = DB::table('tbl_brandProduct')->get();
    	//trả về trang all-category với dữ liệu là all_category_product 
    	return view('page_admin.all_brand_product')->with('all_brand_product',$all_brand_product);
    }
   
     public function  save_brand_product(Request $request){
     	$this->Authlogin();
     	// tạo mảng 
     	// $data = array();
     	// // lấy dữ liệu từ request về mảng
     	// $data['brand_name'] = $request->add_name_brand;
     	// $data['brand_desc'] = $request->add_desc_brand;
     	// $data['brand_status'] = $request->brand_product_status;
        $data = $request->all();
        $save_brand = new Brand();
        $save_brand->brand_name = $data['add_name_brand'];
        $save_brand->brand_desc = $data['add_desc_brand'];
        $save_brand->brand_status = $data['brand_product_status'];
    	//insert vào database
    	// DB::table('tbl_brandProduct')->insert($data);
        $save_brand->save();
    	// tạo thông báo thêm thành công
    	Session::put('messge_ctg','Thêm thương hiệu '. $request->add_name_brand .' thành công.');
    	return Redirect('/all-brand-product');
    }
    
    public function active_brand_product($id_brand_product){
    	$this->Authlogin();
    	// DB::table('tbl_brandProduct')->where('brand_id',$id_brand_product)->update(['brand_status'=>0]);
        $update_active =  Brand::find($id_brand_product);
        $update_active->brand_status = "0";
        $update_active->save();
    	return Redirect('/all-brand-product');
    }

    public function unactive_brand_product($id_brand_product){
    	$this->Authlogin();
    	// DB::table('tbl_brandProduct')->where('brand_id',$id_brand_product)->update(['brand_status'=>1]);
     //    DB::table('tbl_brandProduct')->where('brand_id',$id_brand_product)->update(['brand_status'=>0]);
        $update_unactive =  Brand::find($id_brand_product);
        $update_unactive->brand_status = "1";
        $update_unactive->save();
       	 return Redirect('/all-brand-product');
    }

    public function edit_brand_product($id_brand_product){
    	$this->Authlogin();
    	// $edit_brand_product = DB::table('tbl_brandProduct')->where('brand_id',$id_brand_product)->get();
        $edit_brand_product = Brand::find($id_brand_product);
    	return view('page_admin.edit_brand_product')->with('edit_brand_product',$edit_brand_product);
    }

    public function del_brand_product($id_brand_product){
    	$this->Authlogin();
    	// $edit_brand_product = DB::table('tbl_brandProduct')->where('brand_id',$id_brand_product)->delete();
        $dell_brand = Brand::find($id_brand_product);
        $dell_brand->delete();
    	Session::put('messge_xoath','Xóa thương hiệu thành công.');
    	return Redirect('/all-brand-product');
    }

    public function update_brand_product(Request $request, $id_brand_product){
    	$this->Authlogin();
        $data = array();
        $data['brand_name'] = $request->update_name_brand;
        $data['brand_desc'] = $request->update_desc_brand;
        DB::table('tbl_brandProduct')->where('brand_id',$id_brand_product)->update($data);
        
        return Redirect('/all-brand-product');
    }
    //end-admin
    public function show_brand_product($brand_id){
        $category_product= DB::table('tbl_category_product')->where('category_status','1')->orderby('id','DESC')->get();
        $brand_product= DB::table('tbl_brandproduct')->where('brand_status','1')->orderby('brand_id','DESC')->get();
        $bra_product = DB::table('tbl_productP')
        ->join('tbl_brandproduct','tbl_productP.brand_id', '=' , 'tbl_brandproduct.brand_id')
        ->where('tbl_productP.brand_id',$brand_id)->get();
         $brand_name = DB::table('tbl_brandproduct')->where('brand_id',$brand_id)->limit(1)->get();
        return view('page.show_brand')->with('category_product',$category_product)->with('brand_product',$brand_product)->with('bra_product',$bra_product)->with('brand_name',$brand_name);
    }
}
