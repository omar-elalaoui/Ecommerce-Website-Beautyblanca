<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $fillable = [
        "designation", "prix_avant", "prix_vente", "qnt_stock", "description", "image1", "image2"
        , "image3", "image4"];
}
