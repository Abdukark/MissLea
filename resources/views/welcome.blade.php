@extends('layouts.app')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset("css/plugins.css")}}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min (2).css') }}">

@endsection

@section('content')
<!--Home slider-->
<div class="slideshow slideshow-wrapper pb-section">
    <div class="home-slideshow">
        <div class="slide slideshow--medium">
            <div class="blur-up lazyload">
                <img class="blur-up lazyload" data-src="{{asset('img/collection/home12-category-banner1.jpg')}}" src="{{asset('img/collection/home12-category-banner1.jpg')}}" alt="Outfit of Today" title="Outfit of Today" />
                <div class="slideshow__text-wrap slideshow__overlay classic middle">
                    <div class="slideshow__text-content classic left">
                        <div class="container">
                            <div class="wrap-caption left">
                                <h2 class="h1 mega-title slideshow__title">Outfit of Today</h2>
                                <span class="mega-subtitle slideshow__subtitle">Lookbook ss 2018</span>
                                <span class="btn">View Catelog</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide slideshow--medium">
            <div class="blur-up lazyload">
                <img class="blur-up lazyload" data-src="{{asset('img/collection/home12-category-banner2.jpg')}}" src="{{asset('img/collection/home12-category-banner2.jpg')}}" alt="Accessories" title="Accessories" />
                <div class="slideshow__text-wrap slideshow__overlay classic middle">
                    <div class="slideshow__text-content classic left">
                        <div class="container">
                            <div class="wrap-caption left">
                                <h2 class="h1 mega-title slideshow__title">Accessories</h2>
                                <span class="mega-subtitle slideshow__subtitle">New Collection A-W ss18</span>
                                <span class="btn">Shop now</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End Home slider-->


<!--Image Banners-->
<div class="section imgBanners">
    <div class="imgBnrOuter">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                    <div class="img-bnr">
                        <div class="inner center">
                            <a href="#">
                                <img data-src="{{asset('img/collection/modern1.jpg')}}" src="{{asset('img/collection/modern1.jpg')}}" alt="Cap" title="Cap" class="blur-up lazyload" />
                                <span class="ttl">Cap</span>
                            </a>
                        </div>
                    </div>
                    <div class="img-bnr">
                        <div class="inner center">
                            <a href="#">
                                <img data-src="{{asset('img/collection/modern2.jpg')}}" src="{{asset('img/collection/modern2.jpg')}}" alt="Sweaters" title="Sweaters" class="blur-up lazyload" />
                                <span class="ttl">Sweaters</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="inner center">
                        <a href="#">
                            <img data-src="{{asset('img/collection/modern3.jpg')}}" src="{{asset('img/collection/modern3.jpg')}}" alt="Tops" title="Tops" class="blur-up lazyload" />
                            <span class="ttl">Tops</span>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                    <div class="img-bnr">
                        <div class="inner center">
                            <a href="#">
                                <img data-src="{{asset('img/collection/modern4.jpg')}}" src="{{asset('img/collection/modern4.jpg')}}" alt="Jeans" title="Jeans" class="blur-up lazyload" />
                                <span class="ttl">Jeans</span>
                            </a>
                        </div>
                    </div>
                    <div class="img-bnr">
                        <div class="inner center">
                            <a href="#">
                                <img data-src="{{asset('img/collection/modern5.jpg')}}" src="{{asset('img/collection/modern5.jpg')}}" alt="Shoes" title="Shoes" class="blur-up lazyload" />
                                <span class="ttl">Shoes</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End Image Banners-->

<!--Feature Content-->
    <div class="section feature-content">
    <div class="container">
        <div class="row">
            <div class="feature-row">
                <div class="col-12 col-sm-12 col-md-6 feature-row__item text-center">
                    <img class="blur-up lazyload" data-src="{{asset('img/collection/home12-category-bnr1.jpg')}}" src="{{asset('img/collection/home12-category-bnr1.jpg')}}" alt="Hot hoodies jackets" title="Hot hoodies jackets" />
                </div>
                <div class="col-12 col-sm-12 col-md-6 feature-row__item feature-row__text feature-row__text--left text-start">
                    <div class="row-text">
                        <h2 class="h2">Hot hoodies jackets</h2>
                        <p>Cover up in style with Hot Jackets now only $50</p>
                        <a href="#" class="btn text-white">SHOP $50 Jackets</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Feature Content-->

<!--Feature Content-->
<div class="section feature-content">
    <div class="container">
        <div class="row">
            <div class="feature-row">
                <div class="col-12 col-sm-12 col-md-6 feature-row__item feature-row__text feature-row__text--right text-end">
                    <div class="row-text">
                        <h2 class="h2">Shoes Collection</h2>
                        <p>Shoes we can't stop wearing!</p>
                        <a href="#" class="btn text-white">Shop Now</a>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 feature-row__item text-center">
                    <img class="blur-up lazyload" data-src="{{asset('img/collection/home12-category-bnr2.jpg')}}" src="{{asset('img/collection/home12-category-bnr2.jpg')}}" alt="Shoes Collection" title="Shoes Collection" />
                </div>
            </div>
        </div>
    </div>
</div>
<!--Feature Content-->

<!--Shop these looks-->
<div class="section ">
    <div class="container-fluid">
        <div class="row px-4">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="section-header text-center">
                    <h2 class="h2">Shop these looks</h2>
                    <p>Shop from hundreds of collections for a fashionable look.</p>
                </div>
                <div class="productSlider grid-products grid-products-hover-gry">
                    <div class="col-12 item">
                        <!-- start product image -->
                        <div class="product-image">
                            <!-- start product image -->
                            <a href="product-layout-1.html" class="grid-view-item__link">
                                <!-- image -->
                                <img class="primary blur-up lazyload" data-src="{{asset('img/collection/product-image7.jpg')}}" src="{{asset('img/collection/product-image7.jpg')}}" alt="image" title="product">
                                <!-- End image -->
                                <!-- Hover image -->
                                <img class="hover blur-up lazyload" data-src="{{asset('img/collection/product-image7-1.jpg')}}" src="{{asset('img/collection/product-image7-1.jpg')}}" alt="image" title="product">
                                <!-- End hover image -->
                            </a>
                            <!-- end product image -->
                            <!-- Start product button -->
                            <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                <button class="btn btn-addto-cart" type="button" tabindex="0">Add To Cart</button>
                            </form>
                            <div class="button-set">
                                <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                    <img src="{{ asset('img/Home/zooming-svgrepo-com.svg') }}" alt="Quick View" width="20px" class="p-2">
                                </a>
                                <div class="wishlist-btn">
                                    <a class="wishlist add-to-wishlist" href="wishlist.html">
                                        <img src="{{ asset('img/Home/heart-svgrepo-com (3).svg') }}" alt="Wishlist" width="20px" class="p-2">
                                    </a>
                                </div>
                            </div>
                            <!-- end product button -->
                        </div>
                        <!-- end product image -->
                        <!--start product details -->
                        <div class="product-details text-center">
                            <!-- product name -->
                            <div class="product-name">
                                <a href="product-layout-1.html">Block Button Up</a>
                            </div>
                            <!-- End product name -->
                            <!-- product price -->
                            <div class="product-price">
                                <span class="price">$600.00</span>
                            </div>
                            <!-- End product price -->
                        </div>
                        <!-- End product details -->
                    </div>
                    <div class="col-12 item">
                        <!-- start product image -->
                        <div class="product-image">
                            <!-- start product image -->
                            <a href="product-layout-1.html" class="grid-view-item__link">
                                <!-- image -->
                                <img class="primary blur-up lazyload" data-src="{{asset('img/collection/product-image24.jpg')}}" src="{{asset('img/collection/product-image24.jpg')}}" alt="image" title="product">
                                <!-- End image -->
                                <!-- Hover image -->
                                <img class="hover blur-up lazyload" data-src="{{asset('img/collection/product-image24-1.jpg')}}" src="{{asset('img/collection/product-image24-1.jpg')}}" alt="image" title="product">
                                <!-- End hover image -->
                            </a>
                            <!-- end product image -->

                            <!-- Start product button -->
                            <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                <button class="btn btn-addto-cart" type="button" tabindex="0">Select Options</button>
                            </form>
                            <div class="button-set">
                                <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                    <img src="{{ asset('img/Home/zooming-svgrepo-com.svg') }}" alt="Quick View" width="20px" class="p-2">
                                </a>
                                <div class="wishlist-btn">
                                    <a class="wishlist add-to-wishlist" href="wishlist.html">
                                        <img src="{{ asset('img/Home/heart-svgrepo-com (3).svg') }}" alt="Wishlist" width="20px" class="p-2">
                                    </a>
                                </div>
                            </div>
                            <!-- end product button -->
                        </div>
                        <!-- end product image -->

                        <!--start product details -->
                        <div class="product-details text-center">
                            <!-- product name -->
                            <div class="product-name">
                                <a href="product-layout-1.html">Cena Skirt</a>
                            </div>
                            <!-- End product name -->
                            <!-- product price -->
                            <div class="product-price">
                                <span class="price">$748.00</span>
                            </div>
                            <!-- End product price -->
                        </div>
                        <!-- End product details -->
                    </div>
                    <div class="col-12 item">
                        <!-- start product image -->
                        <div class="product-image">
                            <!-- start product image -->
                            <a href="product-layout-1.html" class="grid-view-item__link">
                                <!-- image -->
                                <img class="primary blur-up lazyload" data-src="{{asset('img/collection/product-image33.jpg')}}" src="{{asset('img/collection/product-image33.jpg')}}" alt="image" title="product">
                                <!-- End image -->
                                <!-- Hover image -->
                                <img class="hover blur-up lazyload" data-src="{{asset('img/collection/product-image33-1.jpg')}}" src="{{asset('img/collection/product-image33-1.jpg')}}" alt="image" title="product">
                                <!-- End hover image -->
                            </a>
                            <!-- end product image -->

                            <!-- Start product button -->
                            <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                <button class="btn btn-addto-cart" type="button" tabindex="0">Add To Cart</button>
                            </form>
                            <div class="button-set">
                                <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                    <img src="{{ asset('img/Home/zooming-svgrepo-com.svg') }}" alt="Quick View" width="20px" class="p-2">
                                </a>
                                <div class="wishlist-btn">
                                    <a class="wishlist add-to-wishlist" href="wishlist.html">
                                        <img src="{{ asset('img/Home/heart-svgrepo-com (3).svg') }}" alt="Wishlist" width="20px" class="p-2">
                                    </a>
                                </div>
                            </div>
                            <!-- end product button -->
                        </div>
                        <!-- end product image -->

                        <!--start product details -->
                        <div class="product-details text-center">
                            <!-- product name -->
                            <div class="product-name">
                                <a href="product-layout-1.html">Balda Button Pant</a>
                            </div>
                            <!-- End product name -->
                            <!-- product price -->
                            <div class="product-price">
                                <span class="price">$350.00</span>
                            </div>
                            <!-- End product price -->
                        </div>
                        <!-- End product details -->
                    </div>
                    <div class="col-12 item">
                        <!-- start product image -->
                        <div class="product-image">
                            <!-- start product image -->
                            <a href="product-layout-1.html" class="grid-view-item__link">
                                <!-- image -->
                                <img class="primary blur-up lazyload" data-src="{{asset('img/collection/product-image4-1.jpg')}}" src="{{asset('img/collection/product-image4-1.jpg')}}" alt="image" title="product" />
                                <!-- End image -->
                                <!-- Hover image -->
                                <img class="hover blur-up lazyload" data-src="{{asset('img/collection/product-image4.jpg')}}" src="{{asset('img/collection/product-image4.jpg')}}" alt="image" title="product" />
                                <!-- End hover image -->
                            </a>
                            <!-- end product image -->

                            <!-- Start product button -->
                            <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                <button class="btn btn-addto-cart" type="button" tabindex="0">Add To Cart</button>
                            </form>
                            <div class="button-set">
                                <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                    <img src="{{ asset('img/Home/zooming-svgrepo-com.svg') }}" alt="Quick View" width="20px" class="p-2">
                                </a>
                                <div class="wishlist-btn">
                                    <a class="wishlist add-to-wishlist" href="wishlist.html">
                                        <img src="{{ asset('img/Home/heart-svgrepo-com (3).svg') }}" alt="Wishlist" width="20px" class="p-2">
                                    </a>
                                </div>
                            </div>
                            <!-- end product button -->
                        </div>
                        <!-- end product image -->

                        <!--start product details -->
                        <div class="product-details text-center">
                            <!-- product name -->
                            <div class="product-name">
                                <a href="product-layout-1.html">Cape Dress</a>
                            </div>
                            <!-- End product name -->
                            <!-- product price -->
                            <div class="product-price">
                                <span class="old-price">$900.00</span>
                                <span class="price">$788.00</span>
                            </div>
                            <!-- End product price -->
                        </div>
                        <!-- End product details -->
                    </div>
                    <div class="col-12 item">
                        <!-- start product image -->
                        <div class="product-image">
                            <!-- start product image -->
                            <a href="product-layout-1.html" class="grid-view-item__link">
                                <!-- image -->
                                <img class="primary blur-up lazyload" data-src="{{asset('img/collection/product-image5.jpg')}}" src="{{asset('img/collection/product-image5.jpg')}}" alt="image" title="product" />
                                <!-- End image -->
                                <!-- Hover image -->
                                <img class="hover blur-up lazyload" data-src="{{asset('img/collection/product-image5-1.jpg')}}" src="{{asset('img/collection/product-image5-1.jpg')}}" alt="image" title="product" />
                                <!-- End hover image -->
                            </a>
                            <!-- end product image -->

                            <!-- Start product button -->
                            <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                <button class="btn btn-addto-cart" type="button" tabindex="0">Select Options</button>
                            </form>
                            <div class="button-set">
                                <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                    <img src="{{ asset('img/Home/zooming-svgrepo-com.svg') }}" alt="Quick View" width="20px" class="p-2">
                                </a>
                                <div class="wishlist-btn">
                                    <a class="wishlist add-to-wishlist" href="wishlist.html">
                                        <img src="{{ asset('img/Home/heart-svgrepo-com (3).svg') }}" alt="Wishlist" width="20px" class="p-2">
                                    </a>
                                </div>
                            </div>
                            <!-- end product button -->
                        </div>
                        <!-- end product image -->

                        <!--start product details -->
                        <div class="product-details text-center">
                            <!-- product name -->
                            <div class="product-name">
                                <a href="product-layout-1.html">Paper Dress</a>
                            </div>
                            <!-- End product name -->
                            <!-- product price -->
                            <div class="product-price">
                                <span class="price">$450.00</span>
                            </div>
                            <!-- End product price -->
                        </div>
                        <!-- End product details -->
                    </div>
                </div>
            </div>
        </div>    
    </div>
</div>
<!--End Shop these looks-->
    
  
@endsection

@section('scripts')
<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins.js')}}"></script>
<script type="text/javascript">
/*-----------------------------------------
	  10.1 Homepage Slideshow -----------------
	  -----------------------------------------*/
	  function home_slider(){
		 $('.home-slideshow').slick({
			dots: false,
			infinite: true,
			slidesToShow: 1,
			slidesToScroll: 1,
			fade: true,
			arrows: true,
			autoplay: true,
			autoplaySpeed: 4000,
			lazyLoad: 'ondemand'
		  });
	  }
	  home_slider();

      /*-----------------------------------------
	  10.2 Product Slider Slick ---------------
	  -----------------------------------------*/
	function product_slider(){
	 $('.productSlider').slick({
		dots: false,
		infinite: true,
		slidesToShow: 4,
		slidesToScroll: 1,
		arrows: true,
		responsive: [
		{
		  breakpoint: 1024,
		  settings: {
			slidesToShow: 3,
			slidesToScroll: 1
		  }
		},
		{
		  breakpoint: 600,
		  settings: {
			slidesToShow: 2,
			slidesToScroll: 1
		  }
		},
		{
		  breakpoint: 480,
		  settings: {
			slidesToShow: 1,
			slidesToScroll: 1
		  }
		}
		]
	
	  });
	}
	product_slider();
	
	// Full Size Banner on the Any Screen
	$(window).resize(function() {
		var bodyheight = $(this).height() - 20;
		$(".sliderFull .bg-size").height(bodyheight);
	}).resize();
</script>

@endsection
