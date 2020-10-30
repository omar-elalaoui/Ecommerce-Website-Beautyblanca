@extends('layouts.layout_front')
@section('content')

    <!--slider area start-->
    <section class="slider_section slider_section_three">
        <div class="slider_area owl-carousel">
            <div class="single_slider d-flex align-items-center" data-bgimg="assets-front/img/slider/slider10.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="slider_content slider_c_three color_three float-right text-right mr-4">
                                <h1>بيوتيبلانكا تضمن لكم منتجات <br> اصلية وبجودة عالية</h1>
{{--                                <a href="#nous_produits">اكتشف منتجاتنا</a>--}}
{{--                                <a href="#nous_produits"><img style="width: 30px; height: 30px; display: inline-block;" src="https://lcw-ma.akinoncdn.com/cms/2018/11/06/aa00d2cb-4f4d-4e6d-b742-26ebe37610c1.png">&ensp; الدفع عن الاستلام </a>--}}

                                <p style="color: #1d68a7; font-weight: bold"><img style="width: 30px; height: 30px; display: inline-block;" src="https://lcw-ma.akinoncdn.com/cms/2018/11/06/aa00d2cb-4f4d-4e6d-b742-26ebe37610c1.png">&ensp; الدفع عن الاستلام </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--slider area end-->

    <div id="nous_produits"></div>
    <!--new product area start-->
    <section class="product_area product_three mt-70 mb-40">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title title_style3">
                        <h3>المنتجات</h3>
                    </div>
                </div>
            </div>
            <div class="product_wrapper product_color3">
                <div class="tab-content">
                    <div class="tab-pane fade show active mx-3">
                        <div class="row ">
                            @foreach ($produits as $produit)
                                <div class="col-md-3">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="{{url('produits/'.$produit->id)}}"><img src="{{asset('storage/'.$produit->image1)}}" alt="image du produit"></a>
                                        </div>
                                        <div class="product_content">
                                            <div class="product_name">
                                                <h4><a href="product-details.blade.php">{{ $produit->designation }}</a></h4>
                                            </div>
{{--                                            <div class="product_rating">--}}
{{--                                                <ul>--}}
{{--                                                    <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>--}}
{{--                                                    <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>--}}
{{--                                                    <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>--}}
{{--                                                    <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>--}}
{{--                                                    <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>--}}
{{--                                                </ul>--}}
{{--                                            </div>--}}
                                            <div class="price-container">
                                                <div class="price_box">
                                                    <span class="current_price">{{$produit->prix_vente}} DH</span>
                                                    <span class="old_price">{{$produit->prix_avant}} DH</span>
                                                </div>
                                                <div class="wishlist_btn">
                                                    <a title="wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                </div>
                                            </div>



                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--new product area end-->

@endsection
