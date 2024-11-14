<?php

namespace App\Livewire;

use App\Models\product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class Productdetails extends Component
{
    public $order;

    public $quantity = [];
    public array $cartAdded = [];

    public function mount($order)
    {
        $this->order = $order;
        $this->quantity = 1;
    }
    public function render()
    {
        return view('livewire.productdetails');
    }

    public function addToCart($product_id){
        $product = product::findorfail($product_id);
        Cart::add(
            $product->id,
            $product->name, 1,
            $product->discount_price,
            ['stock' => $product->stock_quantity, 'image'  => $product->getFirstMediaUrl('product_image')]


        );
        $this->dispatch('cart_counter_updated');
        $this->cartAdded[$product_id] = true;
    }

    public function quickbuy($product_id){

        $product = product::findorfail($product_id);
        Cart::add(
            $product->id,
            $product->name,
            $this->quantity,
            $product->discount_price,
            ['stock' => $product->stock_quantity, 'image'  => $product->getFirstMediaUrl('product_image')]

        );
        $this->redirect(url('/cart'));
    }
}