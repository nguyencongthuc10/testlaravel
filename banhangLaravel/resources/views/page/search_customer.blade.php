@extends('master')
@section('noidung')
<div class="col-md-9 col-sm-12 padding-right">
	<div class="features_items"><!--features_items-->


		<div class="tt-banner-index">
			<div class="container"> 
				<h3 class="title-comm"><span class="title-holder">Tìm kiếm </span></h3>
				<div class="row">
					@foreach($search_customer_product as $key => $search_customer)  
					<div class="col-md-4  col-sm-12">
						<div class="img_wrapper_grid">
							<div class="itemsub">
								
							</div>

							<div class="imgXbanner8">
								<img src="{{URL('public/updates/product/'.$search_customer->product_img)}}"  class="img-rounded" width="100%" height="240" class="img-responsive">

								<div class="short007">
									<h3>{{$search_customer->product_name}}</h3>
									<em>{{number_format($search_customer->product_price).' '.'VND'}}</em>
									<a href="{{URL('/detail-product/'.$search_customer->product_id)}}">
										<p>Chi tiết</p>
									</a>
								</div>
							</a>

						</div>

					</div>
				</div>
				@endforeach
     <!--  <div class="col-md-4">
        
     </div> -->
 </div>

</div>
</div>

</div><!--features_items-->


</div>

@endsection