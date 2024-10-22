<?php

namespace App\Livewire;

use App\Models\product;
use App\Models\ProductBrand;
use App\Models\ProductCategory;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class Products extends Component
{
    public $products;
    public array $quantity = [];

    public function mount(){
        $this->products = Product::all();
    }

    protected $listeners = ['cart_updated' => 'render'];

    public function render()
    {

        $categories = ProductCategory::all();
        $brands = ProductBrand::all();

        return view('livewire.products', compact( 'categories', 'brands'));
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

    }
}
