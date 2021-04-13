@extends('page_admin.admin_layout')
@section('noidungadmin')

	<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                           Thêm sản phẩm
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" action="{{URL('/save-product')}}" enctype="multipart/form-data" method="post" id="productform">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên sản phẩm</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="add_name_product"  data-validation="length" data-validation-length="min2" data-validation-error-msg="Ký tự không nhỏ hơn 2" placeholder="Nhập tên danh mục...">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Danh mục sản phẩm</label>
                                    <select name="category_product" class="form-control input-sm m-bot15">
                                    	@foreach ($category_id as $key => $cate_id)
		                                <option value="{{$cate_id->id}}">{{$cate_id->category_name}}</option>
		                           
		                               @endforeach
		                            </select>
                                  
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputFile">Thương hiệu sản phẩm</label>
                                    <select name="brand_product" class="form-control input-sm m-bot15">
                                    	@foreach ($brand_id as $key => $brand_id)
		                                <option value="{{$brand_id->brand_id}}">{{$brand_id->brand_name}}</option>
		                               
		                               	@endforeach
		                            </select>
                                  
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Hình ảnh sản phẩm</label>
                                    <input type="file" class="form-control" id="exampleInputEmail1" name="add_img_product"  placeholder="Nhập tên danh mục...">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Giá sản phẩm</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" data-validation-error-msg="Vui lòng nhập số và không nhỏ hơn 1"  data-validation="number" data-validation-min="1"  name="add_price_product" placeholder="Nhập tên danh mục...">
                                 
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả sản phẩm</label>
                                    <textarea type="text" style="resize: none;" rows="8"   data-validation-error-msg="Vui lòng không để trống"  data-validation="required " class="form-control" data-validation-length="min1"  name="add_desc_product"  id="editor2" 
                                    placeholder="Nhập mô tả sản phẩm..."></textarea>
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputPassword1">Nội dung sản phẩm</label>
                                    <textarea type="text" style="resize: none;" rows="8"  data-validation-error-msg="Vui lòng không để trống"  data-validation="length" data-validation-length="min1"  class="form-control" name="add_content_product" id="editor1" placeholder="Nhập Nội dung sản phẩm..."></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputFile">Ẩn/Hiện</label>
                                    <select name="product_status" class="form-control input-sm m-bot15">
		                                <option value="0">Ẩn</option>
		                                <option value="1" >Hiện</option>
		                               
		                            </select>
                                  
                                </div>
                                
                                <button type="submit" name="add_btn_category" class="btn btn-info">Thêm sản phẩm</button>
                            </form>
                            </div>

                        </div>
                    </section>

            </div>
            
        </div>

@endsection