@extends('page_admin.admin_layout')
@section('noidungadmin')
        <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                          Cập nhật thương hiệu sản phẩm
                        </header>
                        <div class="panel-body">
                           
                            <div class="position-center">
                                <form role="form" action="{{URL('/update-brand-product/'.$edit_brand_product->brand_id)}}" method="post">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên thương hiệu</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" data-validation="length" data-validation-length="min2" data-validation-error-msg="Ký tự không nhỏ hơn 2" name="update_name_brand" value="{{$edit_brand_product ->brand_name}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả thương hiệu</label>
                                    <textarea type="text" style="resize: none;" rows="8" class="form-control" name="update_desc_brand" id="editor8" >{{$edit_brand_product->brand_desc}}</textarea>
                                </div>
                                
                                
                                <button type="submit" name="edit_btn_brand" class="btn btn-info">Cập nhật thương hiệu</button>
                            </form>
                            </div>
                           
                        </div>
                    </section>

            </div>
            
        </div>
        
@endsection