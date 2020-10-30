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
<style>
    .content {
        font-family: 'Helvetica Neue';
        display: flex;
        flex-flow: column nowrap;
        justify-content: center;
        align-items: center;
        font-size: 30px;
    }

    .title {
        font-weight: bold;
        color: #5c5c5c;
    }

    .symbol {
        -webkit-text-stroke: 13px white;
        font-size: 150px;
        color: #37b20a;
    }

    .text {
        margin-top: 15px;
        font-size: 25px;
        color: #e07202;
        text-align: center;
        font-family: 'avenir';
        font-weight: lighter;
    }
</style>
<div class="product_container">
    <div class="container">
            <div class='content'>
                <div class='fa fa-check-circle-o symbol'></div>
                <div class='title'>شكرا لكم على تقديم طلبكم!</div>
                <div class='text-success mt-3'>سوف يقوم احد فريق العمل بالاتصال بكم قريبا من اجل تأكيد طلبكم</div>
            </div>
    </div>
</div>


@endsection
