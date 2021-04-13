@extends('page_admin.admin_layout')
@section('noidungadmin')

			<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
     Danh sách đơn hàng 
      <br>
	
    </div>
   
    <?php 
      $messge_xoadm = Session::get('messge_xoadm');
      if($messge_xoadm)
      {
        echo '<span class="alert-text" style=" float: right; text-transform: uppercase; color:green !important">'.$messge_xoadm.'</span>';
        Session::put('messge_xoadm',null);
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
            <th>Tên người đặt hàng</th>
            <th>Tình trạng</th>
            <th>Tổng</th>
            <th>Chi tiết/Xóa</th>
          
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
        	<!-- vòng lặp category-product -->
        @foreach ($order_all as $key => $order_product) 
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <!-- lấy ra tên category -->
            <td>{{$order_product->customer_name}}</td>
            <td>{{$order_product->order_status}}</td>
            <td>{{$order_product->order_total}}</td>
            <!-- kiễm tra status 0 or 1 để hiện thị ẩn or hiện -->
           
            	
            
            
            <td>
              <a href="" class="active" ui-toggle-class="">
              	<a href="{{URL('/view-order/'.$order_product->order_id)}}"><i class="fa fa-check-square-o edit_category text-success text-active" name="edit_category"></i></a>
              	<a onclick="return confirm('Bạn có muốn xóa đơn hàng không ?')" href="{{URL('/del-order/'.$order_product->order_id)}}"><i class="fa fa-times edit_category text-danger text" name="del_category"></i></a>
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