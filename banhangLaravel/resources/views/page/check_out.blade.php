@extends('master')
@section('noidung')

<div class="col-md-9 col-sm-12 padding-right">
<section id="cart_items">
		<div class="container">
			
			


			<div class="shopper-informations">
				<div class="row">
					
					<div class="col-sm-12 clearfix">
						<div class="bill-to">
							<p>Nhập thông tin</p>
							<div class="form-one">
								<form method="POST" action="{{URL('/save-checkout-customer')}}">
									{{csrf_field()}}
									<input type="text" name="shipping_email" placeholder="Email">
									<input type="text" name="shipping_name" placeholder="Họ và tên">
									<input type="number" name="shipping_phone" placeholder="Số điện thoại">
									<input type="text" name="shipping_address" placeholder="Địa chỉ">
									<textarea  name="shipping_note" placeholder="Ghi chú thông tin đơn hàng của bạn" rows="16"></textarea>
									<input type="submit"  value="Gửi" class="btn-primary" style="padding: 0.6em; background:#FE980F;">
								</form>
							</div>
							
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
							<td class="image">Item</td>
							<td class="description"></td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						
					</tbody>
				</table>
			</div>
			<div class="payment-options">
					<span>
						<label><input type="checkbox"> Direct Bank Transfer</label>
					</span>
					<span>
						<label><input type="checkbox"> Check Payment</label>
					</span>
					<span>
						<label><input type="checkbox"> Paypal</label>
					</span>
				</div>
		</div>
	</section> <!--/#cart_items-->
</div>
@endsection