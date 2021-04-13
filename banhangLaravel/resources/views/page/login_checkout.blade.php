@extends('master')
@section('noidung')
<div class="col-md-9 col-sm-12 padding-right">
<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Đăng nhập</h2>
						<form action="{{URL('/login-customer')}}" method="POST">
							{{csrf_field()}}
							<input type="text"  name="customer_email_dn" placeholder="Nhập tài khoản..." />
							<input type="password" name="customer_pass_dn" placeholder="Password" />
							<span>
								<input type="checkbox" class="checkbox"> 
								Ghi nhớ đăng nhập
							</span>
							<button type="submit" class="btn btn-default">Đăng nhập</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">Hoặc</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>Đăng ký</h2>
						<form action="{{URL('/add-customer')}}" method="POST">
							{{csrf_field()}}
							<input type="text" name="customer_name" placeholder="Nhập tên..."/>
							<input type="email" name="customer_email" placeholder="Nhập Email..."/>
							<input type="password" name="customer_pass" placeholder="Password"/>
							<input type="number" name="customer_phone" placeholder="Nhập SĐT"/>
							<button type="submit" class="btn btn-default">Đăng ký</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
	</div>
@endsection