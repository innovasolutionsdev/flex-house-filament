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
    public $selectedCategory = null;

    public function mount()
    {
        $this->loadProducts();
    }

    protected $listeners = ['cart_updated' => 'render'];

    public function render()
    {
        $categories = ProductCategory::all();
        $brands = ProductBrand::all();

        return view('livewire.products', [
            'categories' => $categories,
            'brands' => $brands,
            'products' => $this->products // Pass the products to the view
        ]);
    }

    public function loadProducts()
    {
        // If a category is selected, filter products by category; otherwise, fetch all products
        $this->products = $this->selectedCategory
            ? Product::where('category_id', $this->selectedCategory)->get()
            : Product::all();
    }

    public function filterByCategory($categoryId)
    {
        $this->selectedCategory = $categoryId;
        $this->loadProducts();
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
