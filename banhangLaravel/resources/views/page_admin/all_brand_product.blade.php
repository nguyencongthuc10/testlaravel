@extends('page_admin.admin_layout')
@section('noidungadmin')

			<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Danh sách thương hiệu
      <br>
	
    </div>
    <?php 
			$messge_ctg = Session::get('messge_ctg');
			if($messge_ctg)
			{
				echo '<span class="alert-text" style=" float: right; text-transform: uppercase; color:green !important">'.$messge_ctg.'</span>';
				Session::put('messge_ctg',null);
			}
		?>
    <?php 
      $messge_xoath = Session::get('messge_xoath');
      if($messge_xoath)
      {
        echo '<span class="alert-text" style=" float: right; text-transform: uppercase; color:green !important">'.$messge_xoath.'</span>';
        Session::put('messge_xoath',null);
      }
    ?>
    <div class="row w3-res-tb">
      <div class="col-sm-5 m-b-xs">
        <select class="input-sm form-control w-sm inline v-middle">
          <option value="0">Bulk action</option>
          <option value="1">Delete selected</option>
          <option value="2">Bulk edit</option>
          <option value="3">Export</option>
        </select>
        <button class="btn btn-sm btn-default">Apply</button>                
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
        <div class="input-group">
          <input type="text" class="input-sm form-control" placeholder="Nhập danh mục cần tìm...">
          <span class="input-group-btn">
            <button class="btn btn-sm btn-default" type="button">Tìm kiếm</button>
          </span>
        </div>
      </div>
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th style="width:20px;">
              <label class="i-checks m-b-none">
                <input type="checkbox"><i></i>
              </label>
            </th>
            <th>Tên thương hiệu</th>
            <th>Mô tả thương hiệu</th>
            <th>Ẩn/Hiện</th>
          
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
        	<!-- vòng lặp category-product -->
        @foreach ($all_brand_product as $key => $brand_product) 
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <!-- lấy ra tên category -->
            <td>{{$brand_product->brand_name}}</td>
            <td>{{$brand_product->brand_desc}}</td>
            <!-- kiễm tra status 0 or 1 để hiện thị ẩn or hiện -->
            <?php 
            	if($brand_product->brand_status == 1)
            	{


            ?>
            	<td><!-- <span class="text-ellipsis" >Ẩn</span> --> <a href="{{URL('/active-brand-product/'.$brand_product->brand_id)}}"><i class="fa fa-eye eye-category" aria-hidden="true"></i></a></td>
            <?php 
            	}
            	else{
            ?>
            	<td><!-- <span class="text-ellipsis" >Hiện</span> --><a href="{{URL('/unactive-brand-product/'.$brand_product->brand_id)}}"><i class="fa fa-eye-slash eye-category" aria-hidden="true"></i></i></a></td>
            <?php
            	}
            ?>
            	
            
            
            <td>
              <a href="" class="active" ui-toggle-class="">
              	<a href="{{URL('/edit-brand-product/'.$brand_product->brand_id)}}"><i class="fa fa-check-square-o edit_category text-success text-active" name="edit_category"></i></a>
              	<a onclick="return confirm('Bạn có muốn xóa thương hiệu này không ?')" href="{{URL('/del-brand-product/'.$brand_product->brand_id)}}"><i class="fa fa-times edit_category text-danger text" name="del_category"></i></a>
              </a>
            </td>
          </tr>
          
          @endforeach
        </tbody>
      </table>
    </div>

     <footer class="panel-footer">
      <div class="row">
        
        <div class="col-sm-5 text-center">
          <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
        </div>
        <div class="col-sm-7 text-right text-center-xs">                
          <ul class="pagination pagination-sm m-t-none m-b-none">
            <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
            <li><a href="">1</a></li>
            <li><a href="">2</a></li>
            <li><a href="">3</a></li>
            <li><a href="">4</a></li>
            <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
          </ul>
        </div>
      </div>
    </footer>
@endsection