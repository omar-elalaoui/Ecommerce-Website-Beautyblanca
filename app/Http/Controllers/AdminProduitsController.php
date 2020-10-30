<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProduitRequest;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Produit;

class AdminProduitsController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $produits= Produit::all();
        $produits= $produits->reverse();
        return view('back_end/produits', ['produits' => $produits]);
    }


    public function create()
    {
        return view('back_end/produits-create');
    }

    public function store(ProduitRequest $request)
    {

        $produit= new Produit();
        $produit->designation= $request->input('designation');
        $produit->qnt_stock= $request->input('qnt_stock');
        $produit->prix_avant= $request->input('prix_avant');
        $produit->prix_vente= $request->input('prix_vente');
        $produit->description= $request->input('description');
        $produit->image1= $request->image1->store('public/image');
        $produit->image2= $request->image2->store('public/image');
        $produit->image3= $request->image3->store('public/image');
        $produit->image4= $request->image4->store('public/image');

        $produit->image1=str_replace("public/", '', $produit->image1);
        $produit->image2=str_replace("public/", '', $produit->image2);
        $produit->image3=str_replace("public/", '', $produit->image3);
        $produit->image4=str_replace("public/", '', $produit->image4);

        $produit->save();

        session()->flash('success','Produit créé avec succès.');
        return redirect('/admin/produits');
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $produit= Produit::find($id);
        return view('back_end/produits-edit', ['produit'=>$produit]);
    }


    public function update(Request $request, $id)
    {
        dd($request->all());
//        $produit= Produit::find($id);
//        $produit->designation= $request->input('designation');
//        $produit->qnt_stock= $request->input('qnt_stock');
//        $produit->prix_avant= $request->input('prix_avant');
//        $produit->prix_vente= $request->input('prix_vente');
//        $produit->description= $request->input('description');
//        $produit->image1= $request->image1->store('public/image');
//        $produit->image2= $request->image2->store('public/image');
//        $produit->image3= $request->image3->store('public/image');
//        $produit->image4= $request->image4->store('public/image');
//
//        $produit->image1=str_replace("public/", '', $produit->image1);
//        $produit->image2=str_replace("public/", '', $produit->image2);
//        $produit->image3=str_replace("public/", '', $produit->image3);
//        $produit->image4=str_replace("public/", '', $produit->image4);
//
//        $produit->save();
//
//        session()->flash('success','Produit modifié avec succès.');
//        return redirect()->route('produits.index');
    }

    public function destroy($id)
    {
        $produit= Produit::find($id);
        $produit->delete();
        return redirect('/admin/produits');
    }
}
