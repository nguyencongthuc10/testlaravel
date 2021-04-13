@extends('master')
@section('noidung')
<div class="col-md-9 col-sm-12 padding-right">
	<section id="cart_items">
		<div class="container">
			
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Hình ảnh</td>
							<td class="description">Tên sản phẩm</td>
							<td class="price">Giá sản phẩm</td>
							<td class="quantity">Số lượng</td>
							<td class="total">Thành tiền</td>
							<td></td>
						</tr>
					</thead>
					
					@php
						$name =  Session::get('cart');
						if($name){


					@endphp			
					<tbody>

						@php
								$total = 0;
						@endphp

						@foreach(Session::get('cart') as $key => $cart)

						@php
							$subtotal = $cart['product_price']*$cart['product_qty'];
							$total += $subtotal;
						@endphp

						<tr>
							<td class="cart_product">
								<img src="{{asset('public/updates/product/'.$cart['product_image'])}}" width="90"/>
							</td>
							<td class="cart_description">
								<h4><a href=""></a></h4>
								<p>{{$cart['product_name']}}</p>
							</td>
							<td class="cart_price">
								<p>{{number_format($cart['product_price'],0,',','.')}}đ</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<form action="" method="POST">

										<input class="cart_quantity form-control_" type="number" min="1" name="cart_quantity" value="{{$cart['product_qty']}}"  >

										<input type="submit" name="update_qty_cart" value="Cập nhật" class="btn-primary" style="padding: 0.6em;">
									</form>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">
								
									{{number_format($subtotal,0,',','.')}}đ
									
	
								</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>
						@endforeach

					</tbody>
					@php 
					}else{
						echo 'Thêm sản phẩm';
					}
					@endphp
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->
	<section id="do_action">
		<div class="container">
			<div class="heading">
				<h3>Tổng thanh toán</h3>
				
			</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="total_area">
						<ul>
							<li>Mã giảm giá <span>{{number_format($total,0,',','.')}}đ</span></li>
							<li>Thuế<span></span></li>
							<li>Phí vận chuyển<span>Free</span></li>
							<li>Tổng<span></span></li>
						</ul>

						<a class="btn btn-primary check_out"  style="padding: 0.6em;" href="">Thanh toán</a>

						<a class="btn btn-primary check_out"  style="padding: 0.6em;" href="{}">Thanh toán</a>


					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->

</div>

@endsection