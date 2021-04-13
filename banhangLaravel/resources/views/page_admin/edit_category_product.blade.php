@extends('page_admin.admin_layout')
@section('noidungadmin')
        <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                          Cập nhật danh mục sản phẩm
                        </header>
                        <div class="panel-body">
                            @foreach ($edit_category_product as $key => $edit_value) 
                            <div class="position-center">
                                <form role="form" action="{{URL('/update-category-product/'.$edit_value->id)}}" method="post">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên danh mục</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" data-validation="length" data-validation-length="min2" data-validation-error-msg="Ký tự không nhỏ hơn 2" name="update_name_category" value="{{$edit_value ->category_name}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả danh mục</label>
                                    <textarea type="text" style="resize: none;" rows="8" class="form-control" name="update_desc_category" id="editor7" >{{$edit_value->category_desc}}</textarea>
                                </div>
                                
                                
                                <button type="submit" name="update_btn_category" class="btn btn-info">Cập nhật danh mục</button>
                            </form>
                            </div>
                            @endforeach
                        </div>
                    </section>

            </div>
            
        </div>
        
@endsection