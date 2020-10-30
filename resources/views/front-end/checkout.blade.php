@extends('layouts.layout_front')
@section('content')


    <!--breadcrumbs area start-->
<div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <p>  <img width="30px" height="30px" src="https://lcw-ma.akinoncdn.com/cms/2018/11/06/aa00d2cb-4f4d-4e6d-b742-26ebe37610c1.png"> الدفع عن الاستلام </p>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->

<!--Checkout page section-->
<div class="Checkout_section">
    <div class="container">
        <div class="checkout_form">
                <form action="{{url('/front/order')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-lg-4 col-md-4">
                                <h3 class="text-right pr-3 font-weight-bold">معلومات الزبون</h3>
                                <div class="row">

                                    <div class="col-lg-12 mb-20 text-right">
                                        <label class="pr-3"><span>*</span> الاسم الكامل</label>
                                        <input name="name" type="text" required>
                                    </div>
                                    <div class="col-lg-12 mb-20 text-right">
                                        <label class="pr-3"><span>*</span> رقم الهاتف </label>
                                        <input name="tel" type="number" required>
                                    </div>
                                    <div class="col-12 mb-20 text-right">
                                        <label class="pr-3"><span>*</span> العنوان</label>
                                        <input name="address" type="text" required>
                                    </div>

                                </div>

                        </div>
                        <div class="col-lg-8 col-md-8">
                                <h3 class="text-right pr-3 font-weight-bold">الطلبية</h3>
                                <div class="order_table table-responsive" style="overflow-x: hidden;">
                                    <table>
                                        <thead>
                                        <tr>
                                            <th>الثمن</th>
                                            <th>المنتج</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                            @foreach(Session::get('cart')->items as $produit)

                                                <tr>
                                                    <td> {{ $produit['qty'] }} x {{ $produit['item']['prix_vente'] }} DH</td>
                                                    <td style="position: relative"><a href="{{url('/cart/delete_in_checkout/'.$produit['item']['id'])}}" style="color: red; font-size: 18px;position: absolute; top:3px; right:7px;"><i class="fa fa-times"></i></a> {{ $produit['item']['designation'] }} <strong> × {{ $produit['qty'] }}</strong></td>
                                                </tr>
                                            @endforeach


                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <td><strong class="text-success">مجانية</strong></td>
                                            <th>مصاريف التوصيل</th>
                                        </tr>
                                        <tr class="order_total">
                                            <th>{{ Session::get('cart')->totalPrice }} DH</th>
                                            <td><strong>المجموع</strong></td>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <div class="">
                                    <button class="finish_button" type="submit"><i class="fa fa-check"></i> تأكيد الطلبية </button>
                                </div>
                        </div>
                    </div>
                </form>

        </div>
    </div>
</div>
<!--Checkout page section end-->

@endsection
