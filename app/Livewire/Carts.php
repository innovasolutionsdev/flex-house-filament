<?php

namespace App\Livewire;

use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class Carts extends Component
{
    public $cartItems = [];

    public function mount()
    {
        $this->cartItems = Cart::content()->map(function($item) {
            return [
                'rowId' => $item->rowId,
                'id' => $item->id,
                'name' => $item->name,
                'qty' => $item->qty,
                'price' => $item->price,
                'image' => $item->options->image,
                'total' => $item->price * $item->qty
            ];
        })->toArray();
    }

    public function render()
    {

        return view('livewire.carts', [
            'cartItems' => $this->cartItems
        ]);;
    }
}
