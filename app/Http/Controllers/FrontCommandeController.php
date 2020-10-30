<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FrontCommandeController extends Controller
{

    public function index()
    {
        return view('front-end/checkout');
    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $order = new Order();
        $order->cart = serialize($cart);
        $order->name = $request->input('name');
        $order->tel = $request->input('tel');
        $order->address = $request->input('address');
        $order->status = "new";
        $order->save();
        session()->flash('success','شكرا سيتم الاتصال بكم قريبا');
        return redirect('/order_done');
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($id)
    {
        //
    }
    public function order_done()
    {
        return view('front-end/order_done');
    }
}
