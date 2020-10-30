@extends('layouts.layout_front')
@section('content')

<!--breadcrumbs area start-->
<div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <p>  <img width="30px" height="30px" src="https://lcw-ma.akinoncdn.com/cms/2018/11/06/aa00d2cb-4f4d-4e6d-b742-26ebe37610c1.png"> الدفع عن الاستلام </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->

<div class="product_container">
    <div class="container">
        <div class="product_container_inner mb-60">
            @if ($message = Session::get('success'))
                <div class="alert alert-success text-right text-bold">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <!--product details start-->
            <div class="product_details mb-60">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="product-details-tab">
                            <div id="img-1" class="zoomWrapper single-zoom">
                                <a href="#">
                                    <img id="zoom1" src="{{asset('storage/'.$produit->image1)}}" data-zoom-image="{{asset('storage/'.$produit->image1)}}" alt="big-1">
                                </a>
                            </div>
                            <div class="single-zoom-thumb">
                                <ul class="s-tab-zoom owl-carousel single-product-active" id="gallery_01">
                                    <li>
                                        <a href="#" class="elevatezoom-gallery active" data-update="" data-image="{{asset('storage/'.$produit->image2)}}">
                                            <img src="{{asset('storage/'.$produit->image2)}}" alt="zo-th-1" />
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="elevatezoom-gallery active" data-update="" data-image="{{asset('storage/'.$produit->image3)}}">
                                            <img src="{{asset('storage/'.$produit->image3)}}" alt="zo-th-1" />
                                        </a>

                                    </li>
                                    <li>
                                        <a href="#" class="elevatezoom-gallery active" data-update="" data-image="{{asset('storage/'.$produit->image4)}}">
                                            <img src="{{asset('storage/'.$produit->image4)}}" alt="zo-th-1" />
                                        </a>

                                    </li>
                                    <li>
                                        <a href="#" class="elevatezoom-gallery active" data-update="" data-image="{{asset('storage/'.$produit->image1)}}">
                                            <img src="{{asset('storage/'.$produit->image1)}}" alt="zo-th-1" />
                                        </a>

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="product_d_right">
                            <form action="{{url('/cart/add')}}" method="post">
                                @csrf
                                <h1>{{$produit->designation}}</h1>
                                <div class="product_rating">
                                    <ul>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                    </ul>
                                </div>
                                <div class="price_box">
                                    <span class="current_price">{{$produit->prix_vente}} DH</span>
                                    <span class="old_price">{{$produit->prix_avant}} DH</span>

                                </div>
                                <div class="product_desc">
                                    <p>eget velit. Donec ac tempus ante. Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero hendrerit est, sed commodo augue nisi non neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi posuere nisl</p>
                                </div>
                                <div class="product_variant quantity">
                                    <input value="{{$produit->id}}" type="hidden" name="id">
                                    <input min="0" max="100" value="1" type="number" name="qnt">
                                    <label class="ml-2" style="font-weight: 700; font-size: 17px">: الكمية</label>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                        <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                    </ul>
                                </div>

                                @if($isExist)
                                    <button disabled type="text" class="button_buy button_cart" style="opacity: 0.8;cursor: context-menu;">موجود في السلة &nbsp;&nbsp;<i class="fa fa-shopping-cart"></i></button>
                                    <button type="submit" name="cl_action" value="buy_now_exist" class="button_buy"> اشتري الآن &nbsp;&nbsp;<i class="fa fa-shopping-bag"></i></button>
                                @else
                                    <button type="submit" name="cl_action" value="add_to_cart" class="button_buy button_cart"> اضف الى السلة &nbsp;&nbsp;<i class="fa fa-shopping-cart"></i></button>
                                    <button type="submit" name="cl_action" value="buy_now_none" class="button_buy"> اشتري الآن &nbsp;&nbsp;<i class="fa fa-shopping-bag"></i></button>
                                @endif
                            </form>
                            <div class="priduct_social">
                                <ul>
                                    <li><a class="facebook" href="#" title="facebook"><i class="fa fa-facebook"></i> Like</a></li>
                                    <li><a class="insta " href="#" title="instagram"><i class="fa fa-instagram"></i> instagram</a></li>
                                    <li><a class="whatsapp" href="#" title="whatsapp"><i class="fa fa-whatsapp"></i> whatsapp</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!--product details end-->
        </div>
    </div>
</div>


@endsection
