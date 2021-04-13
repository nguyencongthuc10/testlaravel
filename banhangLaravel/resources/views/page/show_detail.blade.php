@extends('master')
@section('noidung')
<div class="col-md-9 col-sm-12 padding-right">
	@foreach($deltail_product as $key  => $value)
	<div class="product-details"><!--product-details-->
		<div class="col-sm-5">
			<div class="view-product">
				<img src="{{URL('public/updates/product/'.$value->product_img)}}" alt="" />
				<h3>ZOOM</h3>
			</div>
			<div id="similar-product" class="carousel slide" data-ride="carousel">

				<!-- Wrapper for slides -->
				<div class="carousel-inner">
					<div class="item active">
						<a href=""><img src="{{URL('public/fontend/images/similar1.jpg')}}" alt=""></a>
						<a href=""><img src="{{URL('public/fontend/images/similar2.jpg')}}" alt=""></a>
						<a href=""><img src="{{URL('public/fontend/images/similar3.jpg')}}" alt=""></a>
					</div>
					

				</div>

				<!-- Controls -->
				<a class="left item-control" href="#similar-product" data-slide="prev">
					<i class="fa fa-angle-left"></i>
				</a>
				<a class="right item-control" href="#similar-product" data-slide="next">
					<i class="fa fa-angle-right"></i>
				</a>
			</div>

		</div>
		<div class="col-sm-7">
			<div class="product-information"><!--/product-information-->
				<img src="images/product-details/new.jpg" class="newarrival" alt="" />
				<h2>{{$value->product_name}}</h2>
				<p> Mã ID: {{$value->product_id}}</p>
				<img src="images/product-details/rating.png" alt="" />
				<form action="{{URL('/save-cart')}}" method="POST">
					{{csrf_field()}}

					<span>
						<span>{{number_format($value->product_price).' '.'VND'}}</span>
						<label>Số lượng:</label>
						<input name="qty" type="number" value="1" min="1" />
						<input name="productid_hidden" type="hidden" value="{{$value->product_id}}"  />
						<button type="submit" class="btn btn-default btn-primary cart">
							<i class="fa fa-shopping-cart"></i>
							Thêm vào giỏ hàng
						</button>
					</span>
				</form>
				<p><b>Tình trạng: </b> Còn hàng</p>
				<p><b>Điều kiện: </b> Mới 100%</p>
				<p><b>Thương hiệu: </b> {{$value->brand_name}}</p>
				<p><b>Danh mục: </b> {{$value->category_name}}</p>
				
				<a href=""><img src="images/product-details/share.png" class="share img-responsive"  alt="" /></a>
			</div><!--/product-information-->
		</div>
	</div><!--/product-details-->

	<div class="category-tab active  shop-details-tab"><!--category-tab-->
		<div class="col-sm-12">
			<ul class="nav nav-tabs">
				<li class="active"><a href="#details" data-toggle="tab">Mô tả sản phẩm</a></li>
				<li><a href="#companyprofile" data-toggle="tab">Chi tiết sản phẩm</a></li>

				<li ><a href="#reviews" data-toggle="tab">Đánh giá</a></li>
			</ul>
		</div>
		<div class="tab-content">
			<div class="tab-pane fade" id="details" >
				<p>{!!$value->product_desc!!}</p>

			</div>

			<div class="tab-pane fade" id="companyprofile" >

				<p>{!!$value->product_content!!}</p>

			</div>


			<div class="tab-pane fade " id="reviews" >
				<div class="col-sm-12">
					<ul>
						<li><a href=""><i class="fa fa-user"></i>EUGEN</a></li>
						<li><a href=""><i class="fa fa-clock-o"></i>12:41 PM</a></li>
						<li><a href=""><i class="fa fa-calendar-o"></i>31 DEC 2014</a></li>
					</ul>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
					<p><b>Write Your Review</b></p>

					<form action="#">

						<span>
							<input type="text" placeholder="Your Name"/>
							<input type="email" placeholder="Email Address"/>
						</span>
						<textarea name="" ></textarea>
						<b>Rating: </b> <img src="images/product-details/rating.png" alt="" />
						<button type="button" class="btn btn-default pull-right">
							Submit
						</button>
					</form>
				</div>
			</div>

		</div>
	</div><!--/category-tab-->
	@endforeach
	
</div>
<div class="tt-sp-lien-quan">
	<div class="container">
		<h3 class="title-comm"><span class="title-holder">Sản phẩm liên quan</span></h3>
		<div class="tt-phong-ngu-banner">
			<div class="container mt-5 mb-5">
				<div class="row g-1">
					@foreach($related_product as $key => $related_pro)
					<div class="col-md-4">

						<div class="p-card">
							<div class="p-carousel">
								<div class="carousel slide" data-ride="carousel" id="carousel-6">
									<div class="carousel-inner" role="listbox">
										<div class="carousel-item active"><img class="w-100 d-block" src="{{URL('public/updates/product/'.$related_pro->product_img)}}" alt="Slide Image"></div>
									</div>                               
								</div>
							</div>
							<div class="p-details">
								<div class="d-flex justify-content-between align-items-center mx-2">
									<h5>{{$related_pro->product_name}}</h5><span></span>
								</div>
								<div class="mx-2">
									<hr class="line">
								</div>
								<div class="tt-pn-1 d-flex justify-content-between mt-2 spec mx-2">
									{{number_format($related_pro->product_price).' '.'VND'}}

								</div>
								<div class="buy mt-3"><button class="btn btn-primary btn-block" type="button">Chi tiết</button></div>
							</div>
						</div>

					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</div>
@endsection