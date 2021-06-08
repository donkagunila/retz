<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from demo.hasthemes.com/corano-preview/corano/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Jul 2020 10:08:20 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Retz Citybly | Buy the best</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

    <!-- CSS
    ============================================ -->
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,900" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}">
    <!-- Pe-icon-7-stroke CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/pe-icon-7-stroke.css') }}">
    <!-- Font-awesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/font-awesome.min.css') }}">
    <!-- Slick slider css -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/slick.min.css') }}">
    <!-- animate css -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/animate.css') }}">
    <!-- Nice Select css -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/nice-select.css') }}">
    <!-- jquery UI css -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/jqueryui.min.css')}}">


    <link rel="stylesheet" href="{{ asset('assets/fonts/feather/feather.css') }}" />
    <!-- main style css -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
   

    <link rel="stylesheet" type="text/css" href="{{ asset('js/slick/slick.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('js/slick/slick-theme.css') }}"/>

     <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>

<body>

    <div class="nm-page-overflow">




        <div class="nm-page-wrap">
            <div class="nm-page-wrap-inner">




                <div id="nm-header-placeholder" class="nm-header-placeholder"></div>

                <header id="nm-header" class="nm-header centered resize-on-scroll clear">
                    <div class="nm-header-inner">
                        <div class="nm-row">
        
                            <div class="nm-header-logo">
                                <a href="{{ route('index')}}">
                                    <img src="{{ asset('assets/img/logo/logo.png')}}" class="nm-logo" alt="rets">
                                    <img src="{{ asset('assets/img/logo/logo.png')}}" class="nm-alt-logo"  alt="retz">
                                </a>
                            </div>

                            <div class="nm-main-menu-wrap col-xs-6">
                                <nav class="nm-main-menu">
                                    <ul id="nm-main-menu-ul" class="nm-menu">
                                        <li class="nm-menu-offscreen menu-item-default">
                                            <span class="nm-menu-cart-count count nm-count-zero">0</span>                    
                                            <a href="#" id="nm-mobile-menu-button" class="clicked">
                                                <div class="nm-menu-icon"><span class="line-1"></span><span class="line-2"></span><span class="line-3"></span>
                                                </div>
                                            </a>
                                        </li>
                                        <li id="menu-item-20" class="megamenu col-2 shop-link menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-has-children current-menu-item current_page_item menu-item-20">
                                            <a href="{{ route('index')}}" aria-current="page">Home</a>
                                        </li>

                                        <li id="menu-item-20" class="megamenu col-2 shop-link menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-has-children current-menu-item current_page_item menu-item-20">
                                            <a href="{{ route('index')}}" aria-current="page">Shop</a>
                                        </li>

                                        <li id="menu-item-20" class="megamenu col-2 shop-link menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-has-children current-menu-item current_page_item menu-item-20">
                                            <a href="{{ route('index')}}" aria-current="page">Blog</a>
                                        </li>

                                        <li id="menu-item-20" class="megamenu col-2 shop-link menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-has-children current-menu-item current_page_item menu-item-20">
                                            <a href="{{ route('index')}}" aria-current="page">Contact</a>
                                        </li>
                                    </ul>
                                </nav>

                                </div>

    <div class="nm-right-menu-wrap col-xs-6">
        <nav class="nm-right-menu">
            <ul id="nm-right-menu-ul" class="nm-menu">
                <li class="nm-menu-wishlist menu-item-default">
                    <a href="{{ route('index') }}">
                        <i class="fe fe-search"></i>
                        <span>Search</span>
                    </a>
                </li>
                <li class="nm-menu-account menu-item-default">
                    <a href="{{ route('login') }}" id="nm-menu-account-btn">Sign In</a>
                </li>
                <li class="nm-menu-cart menu-item-default no-icon">
                    <a href="#" id="nm-menu-cart-btn"><span class="nm-menu-cart-title">Cart</span> 
                        <span class="nm-menu-cart-count count nm-count-zero">0</span></a>
                </li>            
            </ul>
        </nav>
    </div>

    </div>    </div>
</header>



@yield('contents')


@include('layouts.shared.footer')




</div>


<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
{{-- <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script> --}}

<script
  src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
  integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
  crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<script type="text/javascript" src="{{ asset('js/slick/slick.min.js') }}"></script>
<script src="{{ asset('js/niceselect.js')}}"></script>


<script type="text/javascript">
    $(document).ready(function(){

        $('.carousel').carousel();

      $('.yourclass').slick({
        dots: true,
        infinite: true,
      });
    });
  </script>



</body> 


  


  {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script> --}}


</html>
