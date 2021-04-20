<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- ==================SEO================= -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <!-- mô tả trên gg -->
    <meta name="description" content="Thể hình phục vụ cuộc sống không để cuộc sống phục vụ thể hình. Là 1 gymer ngoài việc có body đẹp cần là 1 người có ích trong xã hội: trí tuệ, sức khỏe, sẻ chia"/>
    <meta name="keywords" content="thol store, trang bị thể hình, quần áo gym, thực phẩm bổ sung"/>
    <meta name="robots" content="INDEX,FOLLOW"/>
    <meta name="author" content="">
    <!-- link hiện hửu và để lấy lnk -->
    <link rel="canonical"  href="">
    <!-- icon bên cạnh tiêu đề -->

    <link  rel="shortcut icon" type="image/x-icon" href="https://www.thol.com.vn/pub/media/favicon/stores/5/favicon.png" />

   
      <meta property="og:site_name" content="lnik" />
      <meta property="og:description" content="Thể hình phục vụ cuộc sống không để cuộc sống phục vụ thể hình. Là 1 gymer ngoài việc có body đẹp cần là 1 người có ích trong xã hội: trí tuệ, sức khỏe, sẻ chia" />
      <meta property="og:title" content="ThucShoper" />
      <meta property="og:url" content="link" />
      <meta property="og:type" content="website" />

    <title>ThucShoper</title>
    <!-- END SEO  -->
    <link href="{{asset('public/fontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/fontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/fontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('public/fontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('public/fontend/css/animate.css')}}" rel="stylesheet">
     <link href="{{asset('public/fontend/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('public/fontend/css/responsive.css')}}" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Merriweather:400,900,900i" rel="stylesheet">
    <link href="{{asset('public/fontend/css/font-awesome.css')}}" rel="stylesheet"/>
    <link href="{{asset('public/fontend/css/font-awesome.min.css')}}" rel="stylesheet"/>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('public/fontend/css/owl.carousel.css')}}" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="{{asset('public/fontend/css/swiper.min.css')}}">  
    <link rel="stylesheet" type="text/css" href="{{asset('public/fontend/css/sweetalert.css')}}">  
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('public/fontend/images/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('public/fontend/images/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('public/fontend/images/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('public/fontend/images/apple-touch-icon-57-precomposed.png')}}">
</head><!--/head-->

<body>
   
<div class="tt-menu">

<header id="st-navbar-desktop-area" class="hidden-xs" role="banner">
  <div class="st-top-menu-wrapper">
    <div class="st-top-menu">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            
          </div> 
          <div class="col-sm-6">
            <div class="st-top-menu-right">
             <ul class="nav navbar-nav">
                <li><a href="{{URL('login-check-out-cart')}}"><i class="fa fa-user"></i> Tài khoản</a></li>
                <li><a href="#"><i class="fa fa-star"></i> Yêu thích</a></li>
                <?php 
                // kiểm tra \
                    $customer_id = Session::get('customer_id');
                    $shipping_id = Session::get('shipping_id');
                    if($customer_id != NULL && $shipping_id == NULL)
                    {
                    ?>
                   <li><a href="{{URL('check-out-cart')}}"><i class="fa fa-crosshairs"></i> Thanh toán</a></li>
                    <?php
                    }elseif($customer_id != NULL && $shipping_id != NULL){
                    ?>
                    <li><a href="{{URL('payment')}}"><i class="fa fa-crosshairs"></i> Thanh toán</a></li>
                    <?php    
                    }else{
                    ?>
                         <li><a href="{{URL('login-check-out-cart')}}"><i class="fa fa-crosshairs"></i> Thanh toán</a></li>
                    <?php
                    }
                    ?>
                
                <li><a href="{{URL('show-cart')}}"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>
                 <?php 
                // kiểm tra \
                    $customer_id = Session::get('customer_id');
                    if($customer_id)
                    {
                    ?>
                    <li><a href="{{URL('logout-check-out-cart')}}"><i class="fa fa-lock"></i> Đăng xuất</a></li>
                <?php
                    }else{
                    ?>
                         <li><a href="{{URL('login-check-out-cart')}}"><i class="fa fa-lock"></i> Đăng nhập</a></li>
                <?php    
                    }
                ?>
                
            </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div id="st-navbar-desktop-wrapper" class="st-navbar-desktop-wrapper">
    <div class="st-navbar-desktop">
      <div class="container">
        <div class="st-navbar-desktop-logo">
          <a class="st-navbar-desktop-logo-link" title="Logo" href="index.html"><img src="{{URL('public/fontend/images/logo.png')}}"></a>
        </div>
        <nav class="st-navbar-desktop-menu" role="navigation">
          <ul id="st-navbar-desktop-menu-nav" class="sf-menu">
            <li>
                <div class="topnav1">
                 
                  <div class="search-container">
                    <form action="{{URL('/search-custom')}}" method="POST">
                        {{csrf_field()}}
                      <input type="text" placeholder="Tìm kiếm..." name="keywordsearchcustomer">
                      <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                  </div>
                </div>
            </li>
            <li><a href="{{URL('/trang-chu')}}">Trang chủ</a></li>
            <li><a href="#">Giới thiệu</a></li>
            
            <li><a href="#">Tin tức</a></li>
            
           
            <li><a href="#">Liên hệ</a></li>
            

          </ul>
        </nav>
      </div>
    </div>
  </div>
</header>

<!-- Navbar mobile -->
<header id="st-navbar-mobile-wrapper" class="st-navbar-static-top visible-xs" role="banner">
  <div class="st-navbar-mobile">
    <div class="container-fluid">
      <div class="st-navbar-mobile-header">
        <a class="st-navbar-mobile-header-img" href="index.html">
          <img src="images/logo.png">
        </a>

               
        <div class="st-navbar-mobile-header-menu">
          <ul class="st-navbar-mobile-header-menu-nav">
            
            <li><a class="st-navbar-mobile-toggle"><i class="fa fa-bars fa-lg"></i></a></li>
          </ul>
        </div>
      </div>
      <nav class="st-navbar-mobile-nav-collapse" role="navigation">
        <ul class="st-navbar-mobile-nav">
            
          <li>
                 
                 
                  <div class="search-container">
                   <form action="{{URL('/search-custom')}}" method="POST">
                        {{csrf_field()}}
                      <input type="text" placeholder="Tìm kiếm..." name="keywordsearchcustomer" class="form-control">
                      <button type="submit" style="position: absolute;top: 0;right: 5px;font-size: 20px;"><i class="fa fa-search"></i></button>
                    </form>
                  </div>
               
            </li>  
          <li><a href="{{URL('/trang-chu')}}">Trang chủ</a></li>
         
          
          <li><a href="#">Tin tức</a></li>
          
          <li><a href="#">Liên hệ</a></li>
          
        </ul>
      </nav>
    </div>
  </div>
</header>
</div>

<!-- end-menu -->


<!-- header -->
  <div class="tt-header">

    <div class="swiper-container">  
    <div class="swiper-wrapper">
      <div class="swiper-slide" style="background-image:url({{URL('public/fontend/images/1_esIHh9dhOsRLbi9yKVdTtQ.jpeg')}}); background-size: cover;">
       <!--  <div class="title" data-swiper-parallax="-300">Slide 1</div>
        <div class="subtitle" data-swiper-parallax="-200">Subtitle</div> -->
        
      </div>
      <div class="swiper-slide" style="background-image:url({{URL('public/fontend/images/1_esIHh9dhOsRLbi9yKVdTtQ.jpeg')}})">
       <!--  <div class="title" data-swiper-parallax="-300" data-swiper-parallax-opacity="0">Slide 2</div>
        <div class="subtitle" data-swiper-parallax="-200">Subtitle</div> -->
        
      </div>
      <div class="swiper-slide" style="background-image:url({{URL('public/fontend/images/Vo-chong-Viet-xay-nha-đep-nhu-resort.jpg')}})">
        <!-- <div class="title" data-swiper-parallax="-300">Slide 3</div>
        <div class="subtitle" data-swiper-parallax="-200">Subtitle</div> -->
        
      </div>
    </div>
    <!-- Add Pagination -->
   
    <!-- Add Navigation -->
    <div class="swiper-button-prev swiper-button-white"></div>
    <div class="swiper-button-next swiper-button-white"></div>

  </div>

    <div class="tt-header-sub">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-12 bd-bt">
                        <div class="tt-header-border">
                            <div class="icon-box">
                            <i class="fa  fa-phone"></i>
                            <div class="icon-box__text">
                                <h4 class="icon-box__title">Số điện thoại:</h4>
                                <span class="icon-box__subtitle">096.338.334</span>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 bd-bt">
                        <div class="tt-header-border">
                            <div class="icon-box">
                            <i class="fa  fa-clock-o"></i>
                            <div class="icon-box__text">
                                <h4 class="icon-box__title">Thời gian làm việc:</h4>
                                <span class="icon-box__subtitle">Thứ 2 - Thứ 6: 7:00 - 18:00</span>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 bd-bt">
                        <div class="tt-header-border tt-bd-none">
                            <div class="icon-box">
                            <i class="fa  fa-envelope-o"></i>
                            <div class="icon-box__text">
                                <h4 class="icon-box__title">Email:</h4>
                                <span class="icon-box__subtitle">vnbuid@gmail.com.vn</span>
                            </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>  
  </div>

<!-- end-header -->
    
    
    
    <section>
        <div class="ipad">
            <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-3 mrt">
                    <div class="left-sidebar">
                         <h2>Danh mục sản phẩm</h2>

                        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                  
                            @foreach($category_product as $key => $cate_pro)
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="{{URL('danh-muc-san-pham/'.$cate_pro->id)}}">{{$cate_pro->category_name}}</a></h4>
                                </div>
                            </div>
                            @endforeach
                          
                        </div><!--/category-products-->
                    
                        <div class="brands_products"><!--brands_products-->
                            <h2>Thương hiệu sản phẩm</h2>
                            <div class="brands-name">
                                 @foreach($brand_product as $key => $brand_pro)
                                <ul class="nav nav-pills nav-stacked">
                                   
                                    <li><a href="{{URL('thuong-hieu-san-pham/'.$brand_pro->brand_id)}}"> <span class="pull-right">(50)</span>{{$brand_pro->brand_name}}</a></li>
                                    
                                </ul>
                                @endforeach
                            </div>
                        </div><!--/brands_products-->
                        
                        <!-- <div class="price-range"> --><!--price-range-->
                          <!--   <h2>Price Range</h2>
                            <div class="well text-center">
                                 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
                                 <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
                            </div>
                        </div> --><!--/price-range-->
                        
                                            
                    </div>
                </div>
                

                @yield('noidung')



                
            </div>
        </div></div>
    </section>
    
    <footer id="footer"><!--Footer-->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="companyinfo">
                            <h2><span>e</span>-shopper</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor</p>
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="{{('public/fontend/images/iframe1.png')}}" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Circle of Hands</p>
                                <h2>24 DEC 2014</h2>
                            </div>
                        </div>
                        
                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="{{('public/fontend/images/iframe2.png')}}" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Circle of Hands</p>
                                <h2>24 DEC 2014</h2>
                            </div>
                        </div>
                        
                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="{{('public/fontend/images/iframe3.png')}}" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Circle of Hands</p>
                                <h2>24 DEC 2014</h2>
                            </div>
                        </div>
                        
                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="{{('public/fontend/images/iframe4.png')}}" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Circle of Hands</p>
                                <h2>24 DEC 2014</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="address">
                            <img src="images/home/map.png" alt="" />
                            <p>505 S Atlantic Ave Virginia Beach, VA(Virginia)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Service</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Online Help</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Order Status</a></li>
                                <li><a href="#">Change Location</a></li>
                                <li><a href="#">FAQ’s</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Quock Shop</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">T-Shirt</a></li>
                                <li><a href="#">Mens</a></li>
                                <li><a href="#">Womens</a></li>
                                <li><a href="#">Gift Cards</a></li>
                                <li><a href="#">Shoes</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Policies</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Terms of Use</a></li>
                                <li><a href="#">Privecy Policy</a></li>
                                <li><a href="#">Refund Policy</a></li>
                                <li><a href="#">Billing System</a></li>
                                <li><a href="#">Ticket System</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>THUC Shopper</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Company Information</a></li>
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">Store Location</a></li>
                                <li><a href="#">Affillate Program</a></li>
                                <li><a href="#">Copyright</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 col-sm-offset-1">
                        <div class="single-widget">
                            <h2>THUC Shopper</h2>
                            <form action="#" class="searchform">
                                <input type="text" placeholder="Your email address" />
                                <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
                               
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p class="pull-left">Copyright © 2021 THUC-SHOPPER All rights reserved.</p>
                   
                </div>
            </div>
        </div>
      

    </footer><!--/Footer-->


  
    <script src="{{asset('public/fontend/js/jquery.js')}}"></script>
    <script src="{{asset('public/fontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/fontend/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('public/fontend/js/price-range.js')}}"></script>
    <script src="{{asset('public/fontend/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('public/fontend/js/main.js')}}"></script>
   

    <script src="{{asset('public/fontend/js/bootstrap.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('public/fontend/js/swiper.min.js')}}"></script>
    <script src="{{asset('public/fontend/js/owl.carousel.js')}}"></script>
 
    <script src="{{asset('public/fontend/js/doan.js')}}"></script>
    <script src="{{asset('public/fontend/js/formValidation.min.js')}}"></script>
     <script src="{{asset('public/fontend/js/sweetalert.min.js')}}"></script>
     <script src="{{asset('public/fontend/js/sweetalert.js')}}"></script>
    
     <script type="text/javascript">
        load_more();
         function load_more($id =''){
            $.ajax({
                    url: '{{url('/load-more-product')}}',
                    method: 'POST',
                    headers:{
                        'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
                    },
                    data:{id:$id},
                    success:function(data){
                        $('#load_more_product').remove();
                        $('#product_home').append(data);
                    }

                });
         }

         $(document).on('click','#load_more_product',function(){
            
            var id = $(this).data('id');
            load_more(id);
         });
     </script>   
    <!--  <script type="text/javascript">
        function AddCart($product_id){
            var id = $product_id;
                var cart_product_id = $('.cart_product_id_' + id).val();
                var cart_product_name = $('.cart_product_name_' + id).val();
                var cart_product_image = $('.cart_product_image_' + id).val();
                var cart_product_price = $('.cart_product_price_' + id).val();
                var cart_product_qty = $('.cart_product_qty_' + id).val();
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url: '{{url('/add-cart-ajax')}}',
                    method: 'POST',
                    data:{cart_product_id:cart_product_id,cart_product_name:cart_product_name,cart_product_image:cart_product_image,cart_product_price:cart_product_price,cart_product_qty:cart_product_qty,_token:_token},
                    success:function(data){

                        swal({
                                title: "Đã thêm sản phẩm vào giỏ hàng",
                                text: "Bạn có thể mua hàng tiếp hoặc tới giỏ hàng để tiến hành thanh toán",
                                showCancelButton: true,
                                cancelButtonText: "Xem tiếp",
                                confirmButtonClass: "btn-success",
                                confirmButtonText: "Đi đến giỏ hàng",
                                closeOnConfirm: false
                            },
                            function() {
                                window.location.href = "{{url('/show-cart-ajax')}}";
                            });

                    }

                });
        }
            
    </script> -->

</body>
</html>

