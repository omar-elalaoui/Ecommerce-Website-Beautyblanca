<?php

namespace App\Http\Controllers;

use App\Produit;
use Illuminate\Http\Request;

class FrontHomeController extends Controller
{

    public function index()
    {
        $produits= Produit::all();
        $produits= $produits->reverse();
        return view('front-end/index',['produits' => $produits]);
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
}
