@extends('layouts.app')

@section('contents')
	{{-- @include('layouts.shared.navbar') --}}

<div class="nm-page-wrap">


    

    <header>
        <div class="page-header">
           <div class="page-title">
               Product Details
           </div> 
           <div id="nm-shop-categories-wrap">
                        <ul id="nm-shop-categories" class="nm-shop-categories">
                            <li class="current-cat"><a href="{{ route('index') }}">All</a></li>
                            <li class="cat-item-24">
                                <span class="nm-shop-categories-divider">⁄</span>
                                <a href="#">{{ $category}}</a>
                            </li>
                            <li class="cat-item-21"><span class="nm-shop-categories-divider">⁄</span><a href="#">{{ $product->title}}</a></li></ul>               
            </div>
        </div>
    </header>


    <div class="woocommerce-notices-wrapper"></div> 


    <div class="nm-page-wrap-inner">
        <div id="nm-header-placeholder" class="nm-header-placeholder"></div>
        
            <div class="woocommerce-notices-wrapper"></div>

    <div id="product-239" class="nm-single-product layout-default gallery-col-7 summary-col-5 thumbnails-vertical has-bg-color meta-layout-default tabs-layout-default product type-product post-239 status-publish first instock product_cat-bags-backpacks product_tag-travel has-post-thumbnail shipping-taxable purchasable product-type-simple">
        <div class="nm-single-product-bg clear">
    
        
            <div class="nm-single-product-top">
                <div class="nm-row">
                    <div class="col-xs-9">
                        <nav id="nm-breadcrumb" class="woocommerce-breadcrumb" itemprop="breadcrumb"><a href="{{ route('index')}}">Home</a><span class="delimiter">/</span><a href="#">{{ $category}}</a><span class="delimiter">/</span>{{ $product->title }}</nav>        </div>

                    <div class="col-xs-3">
                        <div class="nm-single-product-menu">
                            <a href="#" rel="next"><i class="fe fe-skip-back flip"></i></a>
                            <a href="#" rel="prev"><i class="fe fe-skip-forward"></i></a>            </div>
                    </div>
                </div>
            </div>
        
        <div id="nm-shop-notices-wrap"></div>
        <div class="nm-single-product-showcase">
            <div class="nm-single-product-summary-row nm-row">
                <div class="nm-single-product-summary-col col-xs-12">
                    <div class="woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images lightbox-enabled pagination-enabled" data-columns="4" style="opacity: 1; transition: opacity 0.25s ease-in-out 0s;"><a href="#" class="woocommerce-product-gallery__trigger">🔍</a>
        
    <figure class="woocommerce-product-gallery__wrapper" style="height: 737.75px;">
        <div data-thumb="{{ asset('uploads/products/'. $product->cover) }}" data-thumb-alt="" class="woocommerce-product-gallery__image flex-active-slide" style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; z-index: 2;"><a href="{{ asset('uploads/products/'. $product->cover) }}">
            <img width="680" height="844" src="{{ asset('uploads/products/'. $product->cover) }}" class="wp-post-image" alt="" loading="lazy" title="product-henry-backpack" data-caption="" data-src="{{ asset('uploads/products/'. $product->cover) }}" data-large_image="{{ asset('uploads/products/'. $product->cover) }}" data-large_image_width="1280" data-large_image_height="1588" srcset="{{ asset('uploads/products/'. $product->cover) }} 680w, {{ asset('uploads/products/'. $product->cover) }} 450w, {{ asset('uploads/products/'. $product->cover) }} 600w, {{ asset('uploads/products/'. $product->cover) }} 242w, {{ asset('uploads/products/'. $product->cover) }} 825w, {{ asset('uploads/products/'. $product->cover) }} 700w, {{ asset('uploads/products/'. $product->cover) }} 220w, {{ asset('uploads/products/'. $product->cover) }} 140w, {{ asset('uploads/products/'. $product->cover) }} 940w, {{ asset('uploads/products/'. $product->cover) }} 1280w" sizes="(max-width: 680px) 100vw, 680px" draggable="false"></a></div><div data-thumb="{{ asset('uploads/products/'. $product->cover) }}" data-thumb-alt="" class="woocommerce-product-gallery__image" style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;"><a href="{{ asset('uploads/products/'. $product->cover) }}"><img width="680" height="844" src="{{ asset('uploads/products/'. $product->cover) }}" class="" alt="" loading="lazy" title="product-henry-backpack-2" data-caption="" data-src="{{ asset('uploads/products/'. $product->cover) }}" data-large_image="{{ asset('uploads/products/'. $product->cover) }}" data-large_image_width="1280" data-large_image_height="1588" srcset="{{ asset('uploads/products/'. $product->cover) }} 680w, https://savoy-webstack.netdna-ssl.com/wp-content/uploads/2015/08/product-henry-backpack-2-450x558.jpg 450w, https://savoy-webstack.netdna-ssl.com/wp-content/uploads/2015/08/product-henry-backpack-2-600x744.jpg 600w, https://savoy-webstack.netdna-ssl.com/wp-content/uploads/2015/08/product-henry-backpack-2-242x300.jpg 242w, https://savoy-webstack.netdna-ssl.com/wp-content/uploads/2015/08/product-henry-backpack-2-825x1024.jpg 825w, https://savoy-webstack.netdna-ssl.com/wp-content/uploads/2015/08/product-henry-backpack-2-700x868.jpg 700w, {{ asset('uploads/products/'. $product->cover) }} 220w, {{ asset('uploads/products/'. $product->cover) }} 140w, {{ asset('uploads/products/'. $product->cover) }} 940w, {{ asset('uploads/products/'. $product->cover) }} 1280w" sizes="(max-width: 680px) 100vw, 680px" draggable="false"></a></div> </figure>
    
        <ol class="flex-control-nav flex-control-thumbs">
            <li>
                <img src="{{ asset('uploads/products/'. $product->cover) }}" class="flex-active" draggable="false">
            </li>
            <li>
                <img src="{{ asset('uploads/products/'. $product->cover) }}" draggable="false">
            </li>
        </ol>
    <ul class="flex-direction-nav show">
        <li class="flex-nav-prev">
            <a class="flex-prev flex-disabled" href="#" tabindex="-1" style="margin-top: -64px;">Previous</a>
        </li>
        <li class="flex-nav-next">
            <a class="flex-next" href="#" style="margin-top: -64px;">Next</a>
        </li>
    </ul>
</div>

    <div class="summary entry-summary">
        <div class="nm-product-summary-inner-col nm-product-summary-inner-col-1">
            <h1 class="product_title entry-title"> 
                {{ $product->title}}
            </h1>

            <p class="price">
                <span class="woocommerce-Price-amount amount">
                    <bdi><span class="woocommerce-Price-currencySymbol">Tsh</span> 
                        {{ $product->price ?? 0}}
                    </bdi>
                </span>    
            </p>

            <hr class="separator my-2">
        </div>

        

        <div class="nm-product-summary-inner-col nm-product-summary-inner-col-2">
            <div class="woocommerce-product-details__short-description entry-content">
                {{ $product->summary }}
            </div>

            <div class="woocommerce-product-rating mb-5">
                <ul class="ratings">
                    <li>
                        <i class="fa fa-star"></i>
                    </li>
                    <li>
                        <i class="fa fa-star"></i>
                    </li>
                    <li>
                        <i class="fa fa-star"></i>
                    </li>
                    <li>
                        <i class="fa fa-star-half"></i>
                    </li>
                    <li>
                        <i class="fe fe-star"></i>
                    </li>
                </ul>

                <small>12 customer review</small>
                                          
            </div>


        
            <form class="cart" action="#" method="get" enctype="multipart/form-data">
                         
                    <div class="nm-quantity-wrap  qty-show">
                        <label>Quantity</label>
                        <label class="nm-qty-label-abbrev">Qty</label>

                        <div class="quantity">
                            <div class="nm-qty-minus nm-font fe fe-play flip"></div>&nbsp;
                            <input type="number" id="quantity_60ae766e54a69" class="input-text qty text" step="1" min="1" max="" name="quantity" value="1" size="4" placeholder="" pattern="[0-9]*">&nbsp;
                            <div class="nm-qty-plus nm-font fe fe-play"></div>
                        </div>
                    </div>
                
                <button type="subit" name="add-to-cart" value="239" class="nm-simple-add-to-cart-button single_add_to_cart_button button alt">
                    Place Order
                </button>
                
            </form>


            <div class="nm-product-share-wrap has-share-buttons">
                <div class="nm-product-wishlist-button-wrap">
                    Share
                </div>
                
                <div class="nm-product-share">
                    <a href="//www.facebook.com/sharer.php?u={{ route('product.show', $product->slug)}}" target="_blank" title="Share on Facebook">
                        <i class="fe fe-facebook"></i>
                    </a>
                    <a href="//twitter.com/share?url={{ route('product.show', $product->slug)}}" target="_blank" title="Share on Twitter">
                        <i class="fe fe-twitter"></i>
                    </a>
                    <a href="//pinterest.com/pin/create/button/?url={{ route('product.show', $product->slug)}}&amp;media={{ asset('uploads/products/'. $product->cover)}}&amp;description={{ $product->title }}" target="_blank" title="Pin on Pinterest">
                        <i class="fa fa-pinterest"></i>
                    </a>
                </div>
            </div>


        </div> 
    </div>

    </div>
</div>
</div>
    
    </div>
        
            
    
    <div class="woocommerce-tabs wc-tabs-wrapper">
        <div class="nm-product-tabs-col">
            <div class="nm-row">
                <div class="col-xs-12">
                    <ul class="tabs wc-tabs" role="tablist">
                        <li class="description_tab active" id="tab-title-description" role="tab" aria-controls="tab-description">
                            <a href="#tab-description">
                                    Description                                </a>
                        </li>
                                                    
                        <li class="reviews_tab" id="tab-title-reviews" role="tab" aria-controls="tab-reviews">
                            <a href="#tab-reviews">
                                    Reviews <span>1</span>                                </a>
                        </li>
                                            </ul>
                </div>
            </div>

                            <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel wc-tab" id="tab-description" role="tabpanel" aria-labelledby="tab-title-description" style="">
                                        <div class="nm-row">
                        <div class="col-xs-12">
                            <div class="nm-tabs-panel-inner entry-content"> 
                                {!! $product->description !!}
                            </div>
                        </div>
                    </div>
                                    </div>
                            <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--additional_information panel wc-tab" id="tab-additional_information" role="tabpanel" aria-labelledby="tab-title-additional_information" style="display: none;">
                                        <div class="nm-row">
                        <div class="col-xs-12">
                            <div class="nm-tabs-panel-inner">
                                
                            </div>
                        </div>
                    </div>
                                    </div>
                            <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--reviews panel wc-tab" id="tab-reviews" role="tabpanel" aria-labelledby="tab-title-reviews" style="display: none;">
                                        <div class="nm-row">
                        <div class="col-xs-12">
                            <div class="nm-tabs-panel-inner">
                                <div id="reviews" class="woocommerce-Reviews">
    <div id="comments">
                    <ol class="commentlist">
                <li class="review even thread-even depth-1" id="li-comment-4">

    <div id="comment-4" class="comment_container">

        <img alt="" src="https://secure.gravatar.com/avatar/676d90a1574e9d3ebf98dd36f7adad60?s=60&amp;d=mm&amp;r=g" srcset="https://secure.gravatar.com/avatar/676d90a1574e9d3ebf98dd36f7adad60?s=120&amp;d=mm&amp;r=g 2x" class="avatar avatar-60 photo" height="60" width="60" loading="lazy">
        <div class="comment-text">

            <div class="star-rating" role="img" aria-label="Rated 4 out of 5"><span style="width:80%">Rated <strong class="rating">4</strong> out of 5</span></div>
    <p class="meta">
        <strong class="woocommerce-review__author">Sarah Allen </strong>
                <span class="woocommerce-review__dash">–</span> <time class="woocommerce-review__published-date" datetime="2015-08-11T23:19:52+00:00">August 11, 2015</time>
    </p>

<div class="description"><p>Authentic keffiyeh master cleanse fingerstache. Deep v single-origin coffee cred Thundercats beard.</p>
</div>
        </div>
    </div>
</li><!-- #comment-## -->
            </ol>

                        </div>

            <div id="review_form_wrapper">
            <a href="#" id="nm-review-form-btn" class="button border">Add a review</a>
            
            <div id="review_form">
                    <div id="respond" class="comment-respond">
        <h3 id="reply-title" class="comment-reply-title">Add a review <small><a rel="nofollow" id="cancel-comment-reply-link" href="/product/henry-backpack/#respond" style="display:none;">Cancel reply</a></small></h3><form action="https://savoy.nordicmade.com/wp-comments-post.php" method="post" id="commentform" class="comment-form"><p class="comment-notes"><span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span></p><p id="nm-comment-form-rating" class="comment-form-rating"><label for="rating">Your rating&nbsp;<span class="required">*</span></label><p class="stars">                       <span>                          <a class="star-1" href="#">1</a>                            <a class="star-2" href="#">2</a>                            <a class="star-3" href="#">3</a>                            <a class="star-4" href="#">4</a>                            <a class="star-5" href="#">5</a>                        </span>                 </p><select name="rating" id="rating" required="" style="display: none;">
                        <option value="">Rate…</option>
                        <option value="5">Perfect</option>
                        <option value="4">Good</option>
                        <option value="3">Average</option>
                        <option value="2">Not that bad</option>
                        <option value="1">Very poor</option>
                    </select></p><p class="comment-form-comment"><label for="comment">Your review&nbsp;<span class="required">*</span></label><textarea id="comment" name="comment" cols="45" rows="8" required=""></textarea></p><p class="comment-form-author"><label for="author">Name&nbsp;<span class="required">*</span></label><input id="author" name="author" type="text" value="" size="30" required=""></p>
<p class="comment-form-email"><label for="email">Email&nbsp;<span class="required">*</span></label><input id="email" name="email" type="email" value="" size="30" required=""></p>
<p class="form-submit"><input name="submit" type="submit" id="submit" class="submit" value="Submit"> <input type="hidden" name="comment_post_ID" value="239" id="comment_post_ID">
<input type="hidden" name="comment_parent" id="comment_parent" value="0">
</p><p style="display: none;"><input type="hidden" id="akismet_comment_nonce" name="akismet_comment_nonce" value="4523bfb639"></p><textarea name="ak_hp_textarea" cols="45" rows="8" maxlength="100" style="display: none !important;"></textarea><input type="hidden" id="ak_js" name="ak_js" value="1623038603098"></form>    </div><!-- #respond -->
                </div>
        </div>
    
    <div class="clear"></div>
</div>
                            </div>
                        </div>
                    </div>
                                    </div>
                    </div>
    </div>

    
<div id="nm-product-meta" class="product_meta">
    
    <div class="nm-row">
        <div class="col-xs-12">

            
                        
                <span class="sku_wrapper">SKU: <span class="sku">RET{{ $product->id+550}}</span></span>

            
            <span class="posted_in">Category: 
                <a href="#" rel="tag">
                    {{ $category }}
                </a>
            </span>
            <span class="tagged_as">Tag: <a href="#/product-tag/travel/" rel="tag">Travel</a></span>
                        
        </div>
    </div>

</div>

    <section id="nm-related" class="related products">
        
        <div class="nm-row">
            <div class="col-xs-12">
                
                                    <h2>Related products</h2>
                
                <ul class="nm-products products xsmall-block-grid-2 small-block-grid-2 medium-block-grid-4 large-block-grid-4 grid-default layout-default">

                    
                        @foreach($products as $item) 
                           <li class="product type-product post-217 status-publish first instock product_cat-bags-backpacks product_tag-contemporary product_tag-travel has-post-thumbnail shipping-taxable purchasable product-type-simple" data-product-id="217">
                                <div class="nm-shop-loop-product-wrap">
                                    
                                    
                                    <div class="nm-shop-loop-thumbnail">
                                        <a href="{{ route('product.show', $item->slug)}}" class="nm-shop-loop-thumbnail-link woocommerce-LoopProduct-link">
                                        <img src="{{ asset('uploads/products/'. $item->cover) }}"></a>
                                    </div>
                                    
                                            
                                    <div class="nm-shop-loop-details">
                                        <a href="#" id="nm-wishlist-item-217-button" class="nm-wishlist-button nm-wishlist-item-217-button" data-product-id="217" title="Add to Wishlist"></a>
                                        <div class="nm-shop-loop-title-price">
                                        <h3 class="woocommerce-loop-product__title"><a href="../emil-backpack/index.html" class="nm-shop-loop-title-link woocommerce-LoopProduct-link">{{ $item->title }}</a></h3>
                                        <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">Tsh</span> {{ $item->price ?? 0 }}</bdi></span></span>
                                        </div>

                                        <div class="nm-shop-loop-actions">
                                        <a href="../emil-backpack/index.html" class="nm-quickview-btn">Show more</a>            </div>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    
                        
                    
                

                    
                </ul>
                
            </div>
        </div>

    </section>
    </div>


        
    
    
                </div>



</div>






@endsection
