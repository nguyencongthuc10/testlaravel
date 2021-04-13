@extends('page_admin.admin_layout')
@section('noidungadmin')

<div class="table-agile-info">
	<div class="panel panel-default">
		<div class="panel-heading">
			Thông tin người mua 
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
		<div class="table-responsive">
			<table class="table table-striped b-t b-light">
				<thead>
					<tr>
						
						<th>Tên người mua</th>
						<th>Số điện thoại<th>


							<th style="width:30px;"></th>
						</tr>
					</thead>
					<tbody>
						<!-- vòng lặp category-product -->
							<!-- vòng lặp category-product -->
						@foreach ($order_shipping_custom_all as $key => $order_shipping_custom) 
						<tr>

							<!-- lấy ra tên category -->
							<td>{{$order_shipping_custom->customer_name}}</td>
							<td>{{$order_shipping_custom->customer_phone}}</td>
						
							<!-- kiễm tra status 0 or 1 để hiện thị ẩn or hiện -->
						</tr>

						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>	


	<div class="table-agile-info">
		<div class="panel panel-default">
			<div class="panel-heading">
				Thông tin vận chuyển
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
			<div class="table-responsive">
				<table class="table table-striped b-t b-light">
					<thead>
						<tr>
							
							<th>Tên người vận chuyển</th>
							<th>Số điện thoại</th>
							<th>Địa chỉ</th>
							

							<th style="width:30px;"></th>
						</tr>
					</thead>
					<tbody>
						<!-- vòng lặp category-product -->
							<!-- vòng lặp category-product -->
						@foreach ($order_shipping_custom_all as $key => $order_shipping_custom) 
						<tr>

							<!-- lấy ra tên category -->
							<td>{{$order_shipping_custom->shipping_name}}</td>
							<td>{{$order_shipping_custom->shipping_phone}}</td>
							<td>{{$order_shipping_custom->shipping_address}}</td>
							<!-- kiễm tra status 0 or 1 để hiện thị ẩn or hiện -->
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>

		</div>
	</div>

	<div class="table-agile-info">
		<div class="panel panel-default">
			<div class="panel-heading">
				Chi tiết đơn hàng 
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
			<div class="table-responsive">
				<table class="table table-striped b-t b-light">
					<thead>
						<tr>
							
							<th>Tên sản phẩm</th>
							<th>Số lượng</th>
							<th>Giá</th>
							<th>Tổng</th>

							<th style="width:30px;"></th>
						</tr>
					</thead>
					<tbody>
						@foreach ($order_detail_all as $key => $order_detail) 
						<tr>

							<!-- lấy ra tên category -->
							<td>{{$order_detail->product_name}}</td>
							<td>{{$order_detail->product_qty}}</td>
							<td>{{$order_detail->product_price}}</td>
							<td>{{$order_detail->product_qty * $order_detail->product_price}}</td>
							<!-- kiễm tra status 0 or 1 để hiện thị ẩn or hiện -->
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
		</div>
	</div>v
	@endsection