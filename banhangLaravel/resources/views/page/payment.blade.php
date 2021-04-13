@extends('master')
@section('noidung')

<div class="col-md-9 col-sm-12 padding-right">
<section id="cart_items">
		<div class="container">
			
			


			<div class="shopper-informations">
				<div class="row">	
					<div class="col-sm-12 clearfix">
						<div class="bill-to">
							<p>Thanh toán</p>
							
						</div>
					</div>
								
				</div>
			</div>
			<div class="review-payment">
				<h2>Xem lại giỏ hàng</h2>
			</div>
	<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Hình ảnh</td>
							
							<td class="price">Giá</td>
							<td class="quantity">Số lượng</td>
							<td class="total">Tổng</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
					
						<?php 
							$content = Cart::content();
						?>
						@foreach($content as $v_value)
						<tr>
							<td class="cart_product">
								<a href=""><img src="{{URL('public/updates/product/'.$v_value->options->image)}}" alt=""  ></a>
							</td>
							
							<td class="cart_price">
								<p>{{number_format($v_value->price).' '.'VND'}}</p>
							</td>
							<td class="cart_quantity">
								<form action="{{URL('/update-qty')}}" method="POST">
								{{csrf_field()}}
								<div class="cart_quantity_button">
									
								<input class="cart_quantity_input" type="text" name="quantity_cart" value="{{$v_value->qty}}" autocomplete="off" size="4">
								<input type="hidden" name="rowid_cart" value="{{$v_value->rowId}}" class="form-control">
								<input type="submit" name="update_qty_cart" value="Cập nhật" class="btn-primary" style="padding: 0.6em;">
								</div>
								</form>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">{{number_format($v_value->price * $v_value->qty) .' '.'VND'}}</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="{{URL('/delete-cart/'.$v_value->rowId)}}"><i class="fa fa-times"></i></a>
							</td>
						</tr>

						@endforeach
					</tbody>
				</table>
			</div>

			<div class="shopper-informations">
				<div class="row">	
					<div class="col-sm-12 clearfix">
						<div class="bill-to">
							<p>Chọn hình thức thanh toán</p>
							
						</div>
					</div>
								
				</div>
			</div>
			<br>
			<form method="POST" action="{{URL('/hinhthucthanhtoan')}}">
				{{csrf_field()}}
				
		
			<div class="payment-options">
					<span>
						<label><input name="payment_option" value="1" type="radio">Thanh toán qua ATM</label>
					</span>
					<span>
						<label><input  name="payment_option" value="2" type="radio">Thanh toán khi nhận hàng</label>
					</span>
					<input type="submit"  value="Thanh toán" class="btn-primary" style="padding: 0.6em; ">
				</div>
			</form>
		</div>

	</section> <!--/#cart_items-->
</div>
@endsection