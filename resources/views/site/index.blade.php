@extends('layouts.app')

@section('contents')
	{{-- @include('layouts.shared.navbar') --}}

	<div class="nm-page-full">

        <div class="entry-content mx-3 mx-md-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="slider-holder">
                        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                          <ol class="carousel-indicators">
                            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                          </ol>
                          <div class="carousel-inner">
                            <div class="carousel-item item-1 active">

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="slider-content ml-md-5">

                                            <div class="ml-7 pl-5">
                                                <h2 class="slider-title text-white">
                                                    Create and Order Custom <br> products online
                                                </h2>

                                                <p class="slider-subtitle mt-4 mb-5 text-white">
                                                    Easy print-on-demand drop shipping and fulfillment <br> warehouse services
                                                </p>

                                                <button class="btn btn-outline">
                                                    <span class="nm_btn_title text-white">ORDER FOR YOURSELF</span>
                                                </button>
                                            </div>
                                            
                                        </div>
                                    </div>


                                </div>
                            </div>



                             <div class="carousel-item item-2">

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="slider-content ml-md-5">

                                            <div class="ml-7 pl-5">
                                                <h2 class="slider-title text-white">
                                                    Create and Order Custom <br> products online
                                                </h2>

                                                <p class="slider-subtitle mt-4 mb-5 text-white">
                                                    Easy print-on-demand drop shipping and fulfillment <br> warehouse services
                                                </p>

                                                <button class="btn btn-outline">
                                                    <span class="nm_btn_title text-white">ORDER FOR YOURSELF</span>
                                                </button>
                                            </div>
                                            
                                        </div>
                                    </div>


                                </div>
                            </div>



                             <div class="carousel-item item-3">

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="slider-content ml-md-5">

                                            <div class="ml-7 pl-5">
                                                <h2 class="slider-title text-white">
                                                    Create and Order Custom <br> products online
                                                </h2>

                                                <p class="slider-subtitle mt-4 mb-5 text-white">
                                                    Easy print-on-demand drop shipping and fulfillment <br> warehouse services
                                                </p>

                                                <button class="btn btn-outline">
                                                    <span class="nm_btn_title text-white">ORDER FOR YOURSELF</span>
                                                </button>
                                            </div>
                                            
                                        </div>
                                    </div>


                                </div>
                            </div>



                        
                          </div>
                         
                        </div>
                    </div>
                </div>
            </div>
        </div>










<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="title mt-5">
                <div class="nm-divider separator_align_center"><h1 class="nm-divider-title medium text-app">Trending Products</h1>
			        <div class="nm-divider-line" style="background:#717171;"></div>
			    </div>

                <div class="page-subtitle mt-5">
                    <p class="m-5">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat sed ullamcorper nisl semper amet, <br>dolor donec. Auctor donec fermentum scelerisqu
                    </p>
                </div>
            </div>



            <ul class="nm-products products xsmall-block-grid-2 small-block-grid-2 medium-block-grid-4 large-block-grid-4 grid-default layout-default mt-5">


                @foreach($products as $product) 
                   <li class="product type-product post-217 status-publish first instock product_cat-bags-backpacks product_tag-contemporary product_tag-travel has-post-thumbnail shipping-taxable purchasable product-type-simple" data-product-id="217">
                        <div class="nm-shop-loop-product-wrap">
                            
                            
                            <div class="nm-shop-loop-thumbnail">
                                <a href="{{ route('product.show', $product->slug)}}" class="nm-shop-loop-thumbnail-link woocommerce-LoopProduct-link">
                                <img src="{{ asset('uploads/products/'. $product->cover) }}"></a>
                            </div>
                            
                                    
                            <div class="nm-shop-loop-details">
                                <a href="#" id="nm-wishlist-item-217-button" class="nm-wishlist-button nm-wishlist-item-217-button" data-product-id="217" title="Add to Wishlist"></a>
                                <div class="nm-shop-loop-title-price">
                                <h3 class="woocommerce-loop-product__title"><a href="../emil-backpack/index.html" class="nm-shop-loop-title-link woocommerce-LoopProduct-link">{{ $product->title }}</a></h3>
                                <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">Tsh</span> {{ $product->price ?? 0 }}</bdi></span></span>
                                </div>

                                <div class="nm-shop-loop-actions">
                                <a href="../emil-backpack/index.html" class="nm-quickview-btn">Show more</a>            </div>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>


        <div class="nm_btn_align_center mb-5">
				<a href="{{ route('shop.all')}}" class="nm_btn nm_btn_md nm_btn_border">
					<span class="nm_btn_title">DISCOVER MORE</span>
					<span class="nm_btn_bg"></span>
				</a>
			</div>




    </div>

    <hr>



			 <div class="title mt-5">
                	<h1 class="nm-divider-title medium text-app text-center">Get Discount Info</h1>
			    </div>

                <div class="page-subtitle mt-5">
                    <p class="m-5">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat sed ullamcorper nisl semper amet, <br>dolor donec. Auctor donec fermentum scelerisqu
                    </p>
                </div>
            </div>



</div>






@endsection
