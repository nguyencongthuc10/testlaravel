@extends('page_admin.admin_layout')
@section('noidungadmin')

	<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                           Thêm thương hiệu sản phẩm
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" action="{{URL('/save-brand-product')}}" method="post">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên thương hiệu</label>
                                    <input type="text" class="form-control" data-validation="length" data-validation-length="min2" data-validation-error-msg="Ký tự không nhỏ hơn 2" id="exampleInputEmail1" name="add_name_brand" placeholder="Nhập tên danh mục...">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả thương hiệu</label>
                                    <textarea type="text" style="resize: none;" rows="8" class="form-control" name="add_desc_brand" id="editor4" placeholder="Nhập mô tả thương hiệu"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Ẩn/Hiện</label>
                                    <select name="brand_product_status" class="form-control input-sm m-bot15">
		                                <option value="0">Ẩn</option>
		                                <option value="1" >Hiện</option>
		                               
		                            </select>
                                  
                                </div>
                                
                                <button type="submit" name="add_btn_brand" class="btn btn-info">Thêm thương hiệu</button>
                            </form>
                            </div>

                        </div>
                    </section>

            </div>
            
        </div>

@endsection