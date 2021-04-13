@extends('page_admin.admin_layout')
@section('noidungadmin')

	<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                           Cập nhật sản phẩm
                        </header>
                        <div class="panel-body">
                        	 @foreach ($edit_product as $key => $edit_pro) 
                            <div class="position-center">
                                <form role="form" action="{{URL('/update-product/'.$edit_pro->product_id)}}" enctype="multipart/form-data" method="post">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên sản phẩm</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" data-validation="length" data-validation-length="min2" data-validation-error-msg="Ký tự không nhỏ hơn 2" value="{{$edit_pro ->product_name}}" name="edit_name_product" placeholder="Nhập tên danh mục...">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Danh mục sản phẩm</label>
                                    <select name="edit_category_product" class="form-control input-sm m-bot15">
                                    	@foreach ($category_id as $key => $cate_id)

		                                <!-- <option value="{{$cate_id->id}}">{{$cate_id->category_name}}</option> -->
		                           		@if($cate_id->id == $edit_pro->category_id)
		                                <option selected value="{{$cate_id->id}}">{{$cate_id->category_name}}</option>
		                           		@else
		                           		 <option value="{{$cate_id->id}}">{{$cate_id->category_name}}</option>
		                           		@endif
		                               @endforeach
		                            </select>
                                  
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputFile">Thương hiệu sản phẩm</label>
                                    <select name="edit_brand_product" class="form-control input-sm m-bot15">
                                    	@foreach ($brand_id as $key => $brand_id)
		                                
		                               	@if($brand_id->brand_id == $edit_pro->brand_id)
		                                <option selected value="{{$brand_id->brand_id}}">{{$brand_id->brand_name}}</option>
		                           		@else
		                           		<option value="{{$brand_id->brand_id}}">{{$brand_id->brand_name}}</option>
		                           		@endif
		                               	@endforeach
		                            </select>
                                  
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Hình ảnh sản phẩm</label>
                                    <input type="file" class="form-control" id="exampleInputEmail1" name="edit_img_product" placeholder="Nhập tên danh mục...">
                                    <img src="{{URL('public/updates/product/'.$edit_pro->product_img)}}" height="100px" width="100px">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Giá sản phẩm</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" data-validation-error-msg="Vui lòng nhập số và không nhỏ hơn 1"  data-validation="number" data-validation-min="1" name="edit_price_product" value="{{$edit_pro ->product_price}}" placeholder="Nhập tên danh mục...">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả sản phẩm</label>
                                    <textarea type="text" style="resize: none;" rows="8" class="form-control"  name="edit_desc_product" id="editor5" placeholder="Nhập mô tả sản phẩm...">{{$edit_pro ->product_desc}}</textarea>
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputPassword1">Nội dung sản phẩm</label>
                                    <textarea type="text" style="resize: none;" rows="8" class="form-control"name="edit_content_product" id="editor6" placeholder="Nhập Nội dung sản phẩm...">{{$edit_pro ->product_content}}</textarea>
                                </div>
                              
                                
                                <button type="submit" name="btn-product" class="btn btn-info">Cập nhật sản phẫm</button>
                            </form>
                            </div>
                            @endforeach
                        </div>
                    </section>

            </div>
            
        </div>

@endsection