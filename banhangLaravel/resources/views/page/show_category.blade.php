@extends('master')
@section('noidung')
<div class="col-sm-9 padding-right">
    <div class="features_items"><!--features_items-->


        <div class="tt-banner-index">
          <div class="container"> 
            @foreach($cate_name as $key => $cate_name)  
            <h3 class="title-comm"><span class="title-holder">{{$cate_name->category_name}}</span></h3>
            @endforeach
            <div class="row">
            @foreach($cate_product as $key => $cate_product)  
                <div class="col-md-4  col-sm-12">
                    <div class="img_wrapper_grid">
                      <div class="itemsub">
                      
                    </div>

                    <div class="imgXbanner8">
                        <img src="{{URL('public/updates/product/'.$cate_product->product_img)}}"  class="img-rounded" width="100%" height="240" class="img-responsive">

                            <div class="short007">
                                <h3>{{$cate_product->product_name}}</h3>
                                <em>{{number_format($cate_product->product_price).' '.'VND'}}</em>
                                <a href="{{URL('/detail-product/'.$cate_product->product_id)}}">
                                <p>Chi tiết</p>
                            </a>    
                            </div>
                        

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