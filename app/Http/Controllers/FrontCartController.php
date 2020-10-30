<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Produit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FrontCartController extends Controller
{
    public function index()
    {
        //
    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        //
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
    public function add(Request $request)
    {

        switch ($request->input('cl_action')) {
            case 'add_to_cart':

                $produit = Produit::find($request->input('id'));
                $oldCart = $request->session()->has('cart') ? $request->session()->get('cart') : null;
                $cart = new Cart($oldCart);
                $cart->add($produit, $produit->id, $request->input('qnt'));

                $request->session()->put('cart', $cart);
                session()->flash('success','تم اضافة المنتوج الى السلة بنجاح ');
                return redirect('/produits/'.$produit->id);

                break;

            case 'buy_now_none':

                $produit = Produit::find($request->input('id'));
                $oldCart = $request->session()->has('cart') ? $request->session()->get('cart') : null;
                $cart = new Cart($oldCart);
                $cart->add($produit, $produit->id, $request->input('qnt'));

                $request->session()->put('cart', $cart);
                return view('front-end/checkout');
                break;

            case 'buy_now_exist':
                $cart = $request->session()->get('cart');
                return view('front-end/checkout');
                break;
        }
    }

    public function delete(Request $request, $id){
        $cart = Session::get('cart');
        $items= $cart->items;
        if(count($items)==1){
            Session::forget('cart');
        }else{
            unset($items[$id]); // Unset the index you want
            $cart->totalQty --;
            $cart->totalPrice = $cart->totalPrice - ($cart->items[$id]['item']->prix_vente * $cart->items[$id]['qty']);
            $cart->items= $items;
            $request->session()->put('cart', $cart);

        }
        return redirect('/');
    }

    public function delete_in_checkout(Request $request, $id){
        $cart = Session::get('cart');
        $items= $cart->items;
        if(count($items)==1){
            Session::forget('cart');
            return redirect('/');
        }else{
            unset($items[$id]); // Unset the index you want
            $cart->totalQty --;
            $cart->totalPrice = $cart->totalPrice - ($cart->items[$id]['item']->prix_vente * $cart->items[$id]['qty']);
            $cart->items= $items;
            $request->session()->put('cart', $cart);
            return redirect('/commande');
        }
    }


}
