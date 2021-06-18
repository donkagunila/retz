@extends('layouts.app')

@section('contents')
    {{-- @include('layouts.shared.navbar') --}}

    <div class="nm-page-wrap">

        <header>
            <div class="page-header">
               <div class="page-title">
                   Shop
               </div> 
               <div id="nm-shop-categories-wrap">
                    <ul id="nm-shop-categories" class="nm-shop-categories">
                        <li class="current-cat"><a href="{{ route('index') }}">Home</a></li>
                      
                        <li class="cat-item-21"><span class="nm-shop-categories-divider">⁄</span><a href="#">All</a></li>
                    </ul>               
                </div>
            </div>
        </header>


        <section class="mt-5 pt-6">
      <div class="container">

        <div class="row gutter-4">

          <!-- sidebar -->
          <aside class="col-lg-3 sidebar">
            <div class="widget d-none d-lg-block">
              <span class="widget-title">Product Categories</span>
              <ul id="page-nav" class="nav flex-column nav-accordion mt-5">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('shop/all*') ? 'active' : '' }}" href="{{ route('shop.all') }}">
                            All Products
                        </a>
                    </li>
                @foreach($categories as $category)
                    <li class="nav-item"><a class="nav-link" href="{{ $category->slug}}">{{ $category->title}}</a></li>
                @endforeach
              </ul>
            </div>

        
          </aside>

          <!-- content -->
          <div class="col-lg-9">
            <div class="row gutter-1 align-items-end">
              <div class="col-md-6">
                <h1>Dresses</h1>
              </div>
              <div class="col-md-6 text-md-right">
                <ul class="list list--horizontal list--separated text-muted fs-14">
                  <li>
                    <span>15 from 90 items</span>
                  </li>
                  <li>
                      <span>Sort by
                      <span class="dropdown">
                        <a class="dropdown-toggle underline" href="#!" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Most popular
                        </a>

                        <span class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                          <a class="dropdown-item" href="#!">Action</a>
                          <a class="dropdown-item" href="#!">Another action</a>
                          <a class="dropdown-item" href="#!">Something else here</a>
                        </span>
                      </span>
                    </span>
                  </li>
                </ul>
              </div>
            </div>

            <div class="row">

              <ul class="nm-products products xsmall-block-grid-2 small-block-grid-2 medium-block-grid-3 large-block-grid-3 grid-default layout-default mt-5">


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

            <div class="row">
              <div class="col">
                <nav aria-label="Page navigation">
                    <?php echo $products->render(); ?>
                    {{ $products->render() }}
                  <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#!">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#!">1</a></li>
                    <li class="page-item active"><a class="page-link" href="#!">2</a></li>
                    <li class="page-item"><a class="page-link" href="#!">3</a></li>
                    <li class="page-item"><a class="page-link" href="#!">4</a></li>
                    <li class="page-item"><a class="page-link" href="#!">5</a></li>
                    <li class="page-item"><a class="page-link" href="#!">Next</a></li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>






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
