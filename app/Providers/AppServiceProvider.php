<?php

namespace App\Providers;

use App\Cart;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Session;
class AppServiceProvider extends ServiceProvider
{

    public function register()
    {
        //
    }

    public function boot()
    {
        Schema::defaultStringLength(191);
        View::composer('layouts.layout_front', function( $view )
        {
//            Session::forget('cart');
            if (Session::has('cart')) {
                $oldCart = Session::get('cart');
                $cart = new Cart($oldCart);
                $data= ['produits' => $cart->items, 'totalPrice' => $cart->totalPrice];
//                dd($cart);
            }else{
                $data=null;
            }
            $view->with( $data );
        } );
    }
}
