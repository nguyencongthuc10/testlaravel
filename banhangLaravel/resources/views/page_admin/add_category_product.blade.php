@extends('page_admin.admin_layout')
@section('noidungadmin')

	<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                           Thêm danh mục sản phẩm
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" action="{{URL('/save-category-product')}}" method="post">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên danh mục</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" data-validation="length" data-validation-length="min2" data-validation-error-msg="Ký tự không nhỏ hơn 2" name="add_name_category" placeholder="Nhập tên danh mục...">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả danh mục</label>
                                    <textarea type="text" style="resize: none;" rows="8" class="form-control" name="add_desc_category" id="editor3" placeholder="Nhập mô tả danh mục"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Ẩn/Hiện</label>
                                    <select name="category_product_status" class="form-control input-sm m-bot15">
		                                <option value="0">Ẩn</option>
		                                <option value="1" >Hiện</option>
		                               
		                            </select>
                                  
                                </div>
                                
                                <button type="submit" name="add_btn_category" class="btn btn-info">Thêm danh mục</button>
                            </form>
                            </div>

                        </div>
                    </section>

            </div>
            
        </div>

@endsection