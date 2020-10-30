<?php

namespace App;

class Cart
{
    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;

    public function __construct($oldCart)
    {
        if ($oldCart) {
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }

    public function add($item, $id, $qt) {
        $storedItem = ['qty' => 0, 'price' => $item->price, 'item' => $item];
        if ($this->items) {
            if (array_key_exists($id, $this->items)) {
                $storedItem = $this->items[$id];
            }
        }
        $storedItem['qty'] = $qt;
        $storedItem['price'] = $item->prix_vente * $qt;
        $this->items[$id] = $storedItem;
        $this->totalQty ++;
        $this->totalPrice = $this->totalPrice + ($item->prix_vente * $qt);
    }

    public function isExist($cart, $id) {
        foreach ($cart->items as $item){
            if ($item['item']->id == $id){
                return true;
            }
        }
        return false;
    }

}
