<!doctype html>
<html class="no-js" lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>BeatyBlanca</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="{{url('assets-front/img/favicon.png')}}">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- Plugins CSS -->

    <link rel="stylesheet" href="{{ asset('/assets-front/css/plugins.css') }}">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('/assets-front/css/style.css') }}">

</head>

<style>
    html {
        scroll-behavior: smooth;
    }

    .cart_info {
        width: 100% !important;
    }

     .button_buy {
         background-color: #00b894;
         border: none;
         color: white;
         padding: 10px 0px;
         text-align: center;
         width: 100%;
         text-decoration: none;
         display: inline-block;
         font-size: 16px;
         margin: 4px 2px;
         cursor: pointer;
         font-weight: 700;
         margin-bottom: 13px;
     }
     .button_cart{
         background-color: #AE307C !important;
     }

    .finish_button {
        background-color: #AE307C;
        border: none;
        color: white;
        padding: 10px 0px;
        text-align: center;
        width: 100%;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        font-weight: 700;
        margin-bottom: 13px;
    }
    .cart_item {
        margin-bottom: 5px;
        margin-top: 5px;
        padding-bottom: 0 !important;
    }
    .mini_cart_table {
        padding: 3px 0 3px !important;
    }
    .cart_button {
        display: block !important;
    }

    .cart_button a{
        background-color: #74b9ff;
        font-weight: bold;
    }



    .pp_float{
        position:fixed;
        width:40px;
        height:40px;
        bottom:20px;
        left:20px;
        background-color:#25d366;
        color:#FFF;
        border-radius:50px;
        text-align:center;
        font-size:26px;
        box-shadow: 2px 2px 3px #999;
        z-index:100;
    }

    a.pp_float:hover{
        color: white;
    }

    .my-float{
        margin-top:8px;
    }


</style>

<body class="home-five_wrapper">

<a href="https://wa.me/message/ITLQN5MXHMYUE1" class="pp_float" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
</a>




<!--header area start-->
<header class="header_area">
    <!--header container start-->
    <div class="header_container header_container_two sticky-header">
        <div class="container-fluid">
            <div class="header_container_inner container_position">
                <div class="logo">
                    <a href="{{url('')}}"><img style="height: 62px;" src="{{url('assets-front/img/logo/logo-bb3.png')}}" alt=""></a>
                </div>
                <div class="header_container_right">
                    <div class="main_menu menu_two">
                        <nav>
                            <ul>
                                <li><a href="#"> تواصل معنا</a></li>
                                <li class="active"><a href="{{url('')}}"> الصفحة الرئيسية</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="header_block_right block_right_two">
                        <ul>
                            <li class="search_bar"><a href="javascript:void(0)"><i class="ion-ios-search-strong"></i></a>
                            </li>
                            <li class="mini_cart_wrapper"><a href="javascript:void(0)"><i class="ion-bag"></i>
                                    <span>{{ Session::has('cart') ? Session::get('cart')->totalQty : 0 }}</span></a>
                                <!--mini cart-->
                                @if(Session::has('cart'))
                                <div class="mini_cart">
                                        @foreach($produits as $produit)
                                            <div class="cart_item">
                                                <div class="cart_img">
                                                    <a href="#"><img src="{{asset('storage/'.$produit['item']['image1'])}}" alt=""></a>
                                                </div>
                                                <div class="cart_info">
                                                    <a class="mb-0" href="#">{{ $produit['item']['designation'] }}</a>
                                                    <span class="mb-0 quantity">الكمية: {{ $produit['qty'] }}</span>
                                                    <span class="mb-0 price_cart">{{ $produit['qty'] }} x {{ $produit['item']['prix_vente'] }} DH</span>

                                                </div>
                                                <div class="cart_remove">
                                                    <a href="{{url('/cart/delete/'.$produit['item']['id'])}}"><i class="ion-android-close"></i></a>
                                                </div>
                                            </div>
                                        @endforeach


                                    <div class="mini_cart_table">
                                        <div class="cart_total">
                                            <span>Total:</span>
                                            <span class="price">{{ $totalPrice }} DH</span>
                                        </div>
                                    </div>
                                    <div class="mini_cart_footer">
                                        <div class="cart_button">
                                            <a href="{{url('/commande')}}">اطلب الأن</a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                                <!--mini cart end-->
                            </li>
                            <li class="setting_container"><a href="javascript:void(0)"><i class="ion-navicon"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <!--header container end-->
    </div>
</header>
<!--header area end-->

<!--search overlay-->
<div class="dropdown_search dropdown_search_two">
    <div class="search_close_btn">
        <i class="ion-android-close btn-close"></i>
    </div>
    <div class="search_container">
        <form action="#">
            <input placeholder="I’m shopping for..." type="text">
            <button type="submit"><i class="ion-ios-search-strong"></i></button>
        </form>
    </div>
</div>
<!--search overlay end-->

<!--Offcanvas menu area start-->
<div class="off_canvars_overlay"></div>
<div class="Offcanvas_menu Offcanvas_menu_two">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="canvas_open">
                    <span>MENU</span>
                    <a href="javascript:void(0)"><i class="ion-navicon"></i></a>
                </div>
                <div class="Offcanvas_menu_wrapper">
                    <div class="canvas_close">
                        <a href="javascript:void(0)"><i class="ion-android-close"></i></a>
                    </div>
                    <div class="header_block_right block_right_two">
                        <ul>
                            <li class="search_bar"><a href="javascript:void(0)"><i class="ion-ios-search-strong"></i></a>
                                <div class="dropdown_search">
                                    <div class="search_close_btn">
                                        <i class="ion-android-close btn-close"></i>
                                    </div>
                                    <div class="search_container">
                                        <form action="#">
                                            <input placeholder="I’m shopping for..." type="text">
                                            <button type="submit"><i class="ion-ios-search-strong"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </li>

                            <li class="mini_cart_wrapper"><a href="javascript:void(0)"><i class="ion-bag"></i>
                                    <span>{{ Session::has('cart') ? Session::get('cart')->totalQty : 0 }}</span></a>
                                <!--mini cart-->
                                @if(Session::has('cart'))
                                    <div class="mini_cart" style="padding-right: 25px;">
                                        @foreach($produits as $produit)
                                            <div class="cart_item">
                                                <div class="cart_img">
                                                    <a href="#"><img src="{{asset('storage/'.$produit['item']['image1'])}}" alt=""></a>
                                                </div>
                                                <div class="cart_info">
                                                    <a class="mb-0" href="#">{{ $produit['item']['designation'] }}</a>
                                                    <span class="mb-0 quantity">الكمية: {{ $produit['qty'] }}</span>
                                                    <span class="mb-0 price_cart">{{ $produit['qty'] }} x {{ $produit['item']['prix_vente'] }} DH</span>

                                                </div>
                                                <div class="cart_remove">
                                                    <a href="{{url('/cart/delete/'.$produit['item']['id'])}}"><i class="ion-android-close"></i></a>
                                                </div>
                                            </div>
                                        @endforeach
                                        <div class="mini_cart_table">
                                            <div class="cart_total">
                                                <span>Total:</span>
                                                <span class="price">{{ $totalPrice }} "background-color: #74b9ff;"</span>
                                            </div>
                                        </div>
                                        <div class="mini_cart_footer">
                                            <div class="cart_button">
                                                <a href="{{url('/commande')}}">اطلب الأن </a>
                                            </div>
                                        </div>
                                    </div>
                            @endif
                            <!--mini cart end-->
                            </li>
                        </ul>
                    </div>
                    <div id="menu" class="text-left ">
                        <ul>
                            <li class="active"><a href="{{url('')}}"> الصفحة الرئيسبة</a></li><br>
                            <li><a href="#"> تواصل معنا</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Offcanvas menu area end-->

@yield('content')

<!--footer area start-->
<footer class="footer_widgets footer_three">
    <hr>
    <div class="footer_bottom">
        <div class="container">
            <div class="copyright_area text-center">
                <p class="text-center">Copyright &copy; 2020 <a href="#"> Beautyblanca </a> All Right Reserved.</p>
            </div>
        </div>
    </div>
</footer>
<!--footer area end-->


<!-- JS
============================================ -->

<!-- Plugins JS -->
<script type="text/javascript" src="{{ URL::asset('assets-front/js/plugins.js') }}"></script>

<!-- Main JS -->
<script type="text/javascript" src="{{ URL::asset('assets-front/js/main.js') }}"></script>



</body>

</html>
