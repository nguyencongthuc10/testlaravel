@extends('master')
@section('noidung')
<div class="col-sm-9 padding-right">
    <div class="features_items"><!--features_items-->


        <div class="tt-banner-index">
          <div class="container"> 
            @foreach($brand_name as $key => $brand_name) 
            <h3 class="title-comm"><span class="title-holder">{{$brand_name->brand_name}}</span></h3>
              @endforeach
            <div class="row">
            @foreach($bra_product as $key => $bra_product)  
                <div class="col-md-4  col-sm-12">
                    <div class="img_wrapper_grid">
                      <div class="itemsub">
                        <span>Nổi bật</span>
                    </div>

                    <div class="imgXbanner8">
                        <img src="{{URL('public/updates/product/'.$bra_product->product_img)}}"  class="img-rounded" width="100%" height="240" class="img-responsive">

                            <div class="short007">
                                <h3>{{$bra_product->product_name}}</h3>
                                <em>{{number_format($bra_product->product_price).' '.'VND'}}</em>
                                <a href="{{URL('/detail-product/'.$bra_product->product_id)}}">
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