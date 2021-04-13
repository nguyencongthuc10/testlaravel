<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Session\Store;
session_start();
class CategoryProduct extends Controller
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
    public function add_category_product(){
        $this->Authlogin();
    	return view('page_admin.add_category_product');
    }

    public function all_category_product(){
        $this->Authlogin();
    	// lấy ra all sản phẩm
    	$all_category_product = DB::table('tbl_category_product')->get();
    	//trả về trang all-category với dữ liệu là all_category_product 
    	return view('page_admin.all_category_product')->with('all_category_product',$all_category_product);
    }
   
     public function  save_category_product(Request $request){
        $this->Authlogin();
     	// tạo mảng 
     	$data = array();
     	// lấy dữ liệu từ request về mảng
     	$data['category_name'] = $request->add_name_category;
     	$data['category_desc'] = $request->add_desc_category;
     	$data['category_status'] = $request->category_product_status;

    	//insert vào database
    	DB::table('tbl_category_product')->insert($data);
    	// tạo thông báo thêm thành công
    	Session::put('messge_ctg','Thêm danh mục '. $request->add_name_category .' thành công.');
    	return Redirect('/all-category-product');
    }
    
    public function active_category_product($id_category_product){
        $this->Authlogin();
    	DB::table('tbl_category_product')->where('id',$id_category_product)->update(['category_status'=>0]);
    	return Redirect('/all-category-product');
    }

    public function unactive_category_product($id_category_product){
        $this->Authlogin();
    	DB::table('tbl_category_product')->where('id',$id_category_product)->update(['category_status'=>1]);
       	 return Redirect('/all-category-product');
    }

    public function edit_category_product($id_category_product){
        $this->Authlogin();
    	$edit_category_product = DB::table('tbl_category_product')->where('id',$id_category_product)->get();

    	return view('page_admin.edit_category_product')->with('edit_category_product',$edit_category_product);
    }

    public function del_category_product($id_category_product){
        $this->Authlogin();
    	$edit_category_product = DB::table('tbl_category_product')->where('id',$id_category_product)->delete();
    	Session::put('messge_xoadm','Xóa danh mục thành công.');
    	return Redirect('/all-category-product');
    }
    public function update_category_product(Request $request, $id_category_product){
        $this->Authlogin();
        $data = array();
        $data['category_name'] = $request->update_name_category;
        $data['category_desc'] = $request->update_desc_category;
        DB::table('tbl_category_product')->where('id',$id_category_product)->update($data);
        
        return Redirect('/all-category-product');
    }

    // end-admin

    public function show_category_product($category_id){
        $category_product= DB::table('tbl_category_product')->where('category_status','1')->orderby('id','DESC')->get();
        $brand_product= DB::table('tbl_brandproduct')->where('brand_status','1')->orderby('brand_id','DESC')->get();
        $cate_product = DB::table('tbl_productP')
        ->join('tbl_category_product','tbl_productP.category_id', '=' , 'tbl_category_product.id')
        ->where('tbl_productP.category_id',$category_id)->get();
        $cate_name = DB::table('tbl_category_product')->where('id',$category_id)->limit(1)->get();

        return view('page.show_category')->with('category_product',$category_product)->with('brand_product',$brand_product)->with('cate_product',$cate_product)->with('cate_name',$cate_name);
    }

}
