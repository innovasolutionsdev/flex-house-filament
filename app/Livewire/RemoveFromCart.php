<?php

namespace App\Livewire;

use App\Models\product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;


class RemoveFromCart extends Component
{
    public $rowId;

    public function remove()
    {
        // Remove the item from the cart using the rowId

        $cartItem = Cart::get($this->rowId);

        if ($cartItem) {
            // Get the product based on the cart item id
            $product = Product::find($cartItem->id);

            if ($product) {
                // Increment the stock quantity of the product
                $product->increment('stock_quantity', $cartItem->qty);
            }

            // Remove the item from the cart
            Cart::remove($this->rowId);

            // Emit an event or refresh the cart if necessary

            $this->dispatch('cart_updated',);
            $this->dispatch('cart_counter_updated');
        }

    }

    public function render()
    {
        return view('livewire.remove-from-cart');
    }
}
