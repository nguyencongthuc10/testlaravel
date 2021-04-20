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
								<a href=""><img src="{{URL('public/updates/product/'.$v_value->options->image)}}" width="50px" height="50px" alt=""  ></a>
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
		</div>
	</section> <!--/#cart_items-->
	<section id="do_action">
		<div class="container">
			<div class="heading">
				<h3>What would you like to do next?</h3>
				<p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="total_area">
						<ul>
							<li>Tổng <span>{{Cart::subtotal().' '.'VND' }}</span></li>
							<li>Thuế<span>{{Cart::tax().' '.'VND' }}</span></li>
							<li>Phí vận chuyển<span>Free</span></li>
							<li>Thành tiền <span>{{Cart::total().' '.'VND' }}</span></li>
						</ul>
						  <?php 
                // kiểm tra \
	                    $customer_id = Session::get('customer_id');
	                    if($customer_id)
	                    {
	                    ?>
	                  <a class="btn btn-primary check_out"  style="padding: 0.6em;" href="{{URL('check-out-cart')}}">Thanh toán</a>
	                <?php
	                    }else{
	                    ?>
	                  <a class="btn btn-primary check_out"  style="padding: 0.6em;" href="{{URL('login-check-out-cart')}}">Thanh toán</a>
	                <?php    
	                    }
	                ?>	
							
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->

</div>
@endsection