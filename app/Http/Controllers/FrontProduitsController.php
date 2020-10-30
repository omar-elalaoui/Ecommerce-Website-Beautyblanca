<?php

namespace App\Http\Controllers;

use App\Produit;
use App\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FrontProduitsController extends Controller
{

    public function index()
    {

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
        $produit= Produit::find($id);

        $exist= false;
        if(Session::has('cart')){
            $cart= Session::get('cart');
            $exist= $cart->isExist($cart, $id);
        }

        return view('front-end/product-details', ['produit'=>$produit, 'isExist'=>$exist]);
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
}
