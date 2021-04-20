<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use App\Product;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Session\Store;
session_start();
class ProductController extends Controller
{
     public function loadmore_product(Request $request){
        $data = $request->all();
        

        if($data['id'] >0){
            $all_product =  Product::select("*")->where('product_status','1')->where('product_id','<',$data['id'])->orderBy('product_id','DESC')->take(3)->get();
        }else{
           $all_product =  Product::select("*")->where('product_status','1')->orderBy('product_id','DESC')->take(3)->get(); 
        }
        $output = '';
        if(!$all_product->isEmpty()){
        foreach ($all_product as $key => $pro_product) {
            // lấy id cuối

            
            $last_id = $pro_product->product_id;
            $output.= '<div class="col-md-4  col-sm-12">
                    <div class="img_wrapper_grid">
                      <div class="itemsub">

                      </div>

                      <div class="imgXbanner8">
                       
                            <input type="hidden" value="'.$pro_product->product_id.'" class="cart_product_id_'.$pro_product->product_id.'">
                            <input type="hidden" value="'.$pro_product->product_name.'" class="cart_product_name_'.$pro_product->product_id.'">
                            <input type="hidden" value="'.$pro_product->product_img.'" class="cart_product_image_'.$pro_product->product_id.'">
                            <input type="hidden" value="'.$pro_product->product_price.'" class="cart_product_price_'.$pro_product->product_id.'">
                            <input type="hidden" value="1" class="cart_product_qty_'.$pro_product->product_id.'">

                            <img src="'.URL('public/updates/product/'.$pro_product->product_img).'"  class="img-rounded" width="100%" height="240" class="img-responsive">

                            <div class="short007">
                                <h3>'.$pro_product->product_name.'</h3>
                                <em>'.number_format($pro_product->product_price,0,',','.').'VNĐ</em>
                                <a href="'.URL('detail-product/'.$pro_product->product_id).'"><p>Chi tiết</p></a>
                               
                                
                            </div>
                       
                    </div>

                </div>
            </div>
            ';


        }
         $output .='
            <div id="load_more">
            <button type="button" name="load_more_product" class="btn btn-primary form-control" data-id="'.$last_id.'" id="load_more_product">
                Xem thêm sản phẩm
            </button>
            </div>';
        }else{
             $output .='
            <div id="load_more">
            <button type="button" name="load_more_product" class="btn btn-default form-control">
                Sản phẩm đã hết
            </button>
            </div>';
        }
        echo $output;
        
    }


	 public function Authlogin()
    {
        $admin_id = Session::get('admin_id');
        if ($admin_id) {
            return Redirect('/dashboard');
        }
        else
             return Redirect('/admin')->send();
    }
    public function add_product(){
    	 $this->Authlogin();
    	$category_id= DB::table('tbl_category_product')->orderby('id','DESC')->get();
    	$brand_id= DB::table('tbl_brandProduct')->orderby('brand_id','DESC')->get();
    	return view('page_admin.add_product')->with('category_id',$category_id)->with('brand_id',$brand_id);
    }

    public function all_product(){
    	 $this->Authlogin();
    	// lấy ra all sản phẩm
    	// join la giao nhau giua cac table tại product.category_id category.category_id
    	$all_product = DB::table('tbl_productP')
    	->join('tbl_category_product','tbl_productP.category_id', '=' , 'tbl_category_product.id')
    	->join('tbl_brandProduct','tbl_productP.brand_id', '=' , 'tbl_brandProduct.brand_id')
    	->orderby('tbl_productP.product_id','DESC')->get();
    	//trả về trang all-category với dữ liệu là all_category_product 
    	
    	return view('page_admin.all_product')->with('all_product',$all_product);
    }
   
     public function  save_product(Request $request){
     	 $this->Authlogin();
     	// tạo mảng 
     	$data = array();
     	// lấy dữ liệu từ request về mảng
     	$data['product_name'] = $request->add_name_product;
     	$data['product_desc'] = $request->add_desc_product;
     	$data['product_status'] = $request->product_status;
     	$data['product_content'] = $request->add_content_product;
        if(empty($data['product_content']))
        {
            $data['product_content'] = '';
        }
         if(empty($data['product_desc']))
        {
            $data['product_content'] = '';
        }
     	$data['brand_id'] = $request->brand_product;
     	$data['category_id'] = $request->category_product;
     	$data['product_price'] = $request->add_price_product;
     	$get_img = $request->file('add_img_product');
     	if ($get_img) {
     		// lay ten img gom cả đuôi vs .jpg .png
     		$get_img_name = $get_img->getClientOriginalName();
     		// cat chuoi tại . và lấy phần đàu
     		$name_img = current(explode('.', $get_img_name));
     		// noi chuổi 
     		$new_img = $name_img.rand(0,99).'.'.$get_img->getClientOriginalExtension();
     		// noi luu hinh anh 
     		$get_img->move('public/updates/product',$new_img);
     		$data['product_img'] = $new_img;

     		DB::table('tbl_productP')->insert($data);
	    	// tạo thông báo thêm thành công
	    	Session::put('messge_ctg','Thêm sản phẩm '. $request->add_name_product .' thành công.');
	    	return Redirect('/all-product');
     		
     	}
     	$data['product_img'] = '';
    	//insert vào database
    	DB::table('tbl_productP')->insert($data);
    	// tạo thông báo thêm thành công
    	Session::put('messge_ctg','Thêm sản phẩm '. $request->add_name_product .' thành công.');
    	return Redirect('/add-product');
    }
    
    public function active_product($id_product){
    	 $this->Authlogin();
    	DB::table('tbl_productP')->where('product_id',$id_product)->update(['product_status'=>0]);
    	return Redirect('/all-product');
    }

    public function unactive_product($id_product){
    	 $this->Authlogin();
    	DB::table('tbl_productP')->where('product_id',$id_product)->update(['product_status'=>1]);
       	 return Redirect('/all-product');
    }

    public function edit_product($id_product){
    	 $this->Authlogin();
    	$edit_product = DB::table('tbl_productP')->where('product_id',$id_product)->get();
    	$category_id= DB::table('tbl_category_product')->orderby('id','DESC')->get();
    	$brand_id= DB::table('tbl_brandProduct')->orderby('brand_id','DESC')->get();
    	return view('page_admin.edit_product')->with('edit_product',$edit_product)->with('category_id',$category_id)->with('brand_id',$brand_id);
    }

    public function del_product($id_product){
    	 $this->Authlogin();
    	DB::table('tbl_productP')->where('product_id',$id_product)->delete();
    	Session::put('messge_xoasp','Xóa sản phẩm thành công.');
    	return Redirect('/all-product');
    }


    public function update_product(Request $request, $id_product){
    	 $this->Authlogin();
        $data = array();
        $data['product_name'] = $request->edit_name_product;
     	$data['product_desc'] = $request->edit_desc_product;
     	$data['product_content'] = $request->edit_content_product;
     	$data['brand_id'] = $request->edit_brand_product;
     	$data['category_id'] = $request->edit_category_product;
     	$data['product_price'] = $request->edit_price_product;

     	$get_img = $request->file('edit_img_product');
     	if ($get_img) {
     		// lay ten img gom cả đuôi vs .jpg .png
     		$get_img_name = $get_img->getClientOriginalName();
     		// cat chuoi tại . và lấy phần đàu
     		$name_img = current(explode('.', $get_img_name));
     		// noi chuổi 
     		$new_img = $name_img.rand(0,99).'.'.$get_img->getClientOriginalExtension();
     		// noi luu hinh anh 
     		$get_img->move('public/updates/product',$new_img);
     		$data['product_img'] = $new_img;

     		 DB::table('tbl_productP')->where('product_id',$id_product)->update($data);
	    	// tạo thông báo thêm thành công
	    	Session::put('messge_ctg','Cập nhật sản phẩm '. $request->add_name_product .' thành công.');
	    	return Redirect('/all-product');
     		
     	}
        DB::table('tbl_productP')->where('product_id',$id_product)->update($data);
        Session::put('messge_ctg','Cập nhật sản phẩm '. $request->add_name_product .' thành công.');
        return Redirect('/all-product');
    }
    // end-admin
     public function show_detail_product($product_id){
        $category_product= DB::table('tbl_category_product')->where('category_status','1')->orderby('id','DESC')->get();
        $brand_product= DB::table('tbl_brandproduct')->where('brand_status','1')->orderby('brand_id','DESC')->get();
        $deltail_product = DB::table('tbl_productP')
        ->join('tbl_category_product','tbl_productP.category_id', '=' , 'tbl_category_product.id')
        ->join('tbl_brandProduct','tbl_productP.brand_id', '=' , 'tbl_brandProduct.brand_id')
        ->where('tbl_productP.product_id',$product_id)->get();
        foreach ($deltail_product as $key => $value) {
             $category_id = $value->category_id;
        }

       
        
        $related_product=DB::table('tbl_productP')
        ->join('tbl_category_product','tbl_productP.category_id', '=' , 'tbl_category_product.id')
        ->join('tbl_brandProduct','tbl_productP.brand_id', '=' , 'tbl_brandProduct.brand_id')
        ->where('tbl_category_product.id',$category_id)->whereNotIn('tbl_productP.product_id',[$product_id])->get();
       
        return view('page.show_detail')->with('category_product',$category_product)->with('brand_product',$brand_product)->with('deltail_product',$deltail_product)->with('related_product',$related_product);
    }

}
