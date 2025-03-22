{{-- <div class="mx-auto p-8 md:pl-10 md:pr-10 dark:bg-[#171717]">
    <div class="flex justify-center">
        <h1 class="text-3xl ml-2 font-bold mb-16 md:pl-10 dark:text-white">YOUR CART</h1>
        <i class="fa-solid fa-cart-shopping text-2xl dark:text-white ml-4"></i>
    </div>

    @if(empty($cartItems))
        <!-- Message if the cart is empty -->
        <div class="flex justify-center items-center h-64">
            <p class="text-gray-600 text-xl dark:text-white">Your cart is currently empty.</p>
        </div>
    @else
        <!-- Flex container to position product and order summary next to each other -->
        <div class="flex flex-col lg:flex-row gap-16 md:pl-16">
            <!-- Left column for product items -->
            <div class="lg:w-2/3">
                @foreach($cartItems as $item)
                    <div class="pb-4 mb-4" wire:key="cart-item-{{ $item['rowId'] }}">
                        <div class="flex items-center md:pl-12">
                            <img alt="Sienna Basic Tee" class="w-24 h-24 object-cover rounded-md" height="100" src="{{ asset('img/prod.jpg') }}" width="100"/>
                            <div class="ml-4 flex-1 md:pl-16">
                                <h2 class="text-lg font-bold dark:text-gray-100">{{$item['name']}}</h2>
                                <p class="text-lg font-medium mt-2 dark:text-gray-100">රු.{{$item['total']}}.00</p>
                            </div>
                            <livewire:update-cart-quantity :rowId="$item['rowId']" :quantity="$item['qty']" :stock="$item['stock']" wire:key="update-quantity-{{ $item['rowId'] }}" />
                            <livewire:remove-from-cart :rowId="$item['rowId']" wire:key="remove-cart-item-{{ $item['rowId'] }}" />
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Right column for order summary -->
            <div class="lg:w-1/3  p-6 rounded-lg shadow-md bg-[#141414]">
                <h2 class="text-lg font-semibold mb-4 text-white">Order Summary</h2>
                <div class="flex justify-between mb-2">
                    <span class="text-gray-300">Subtotal</span>
                    <span class="font-medium text-white">රු. {{ Cart::subtotal() }}</span>
                </div>
                <div class="flex justify-between mb-2">
                    <span class="text-gray-300">Shipping estimate
                      <i class="fas fa-question-circle text-gray-400 ml-1"></i>
                    </span>
                    <span class="font-medium text-white">රු. 399</span>
                </div>
                <div class="flex justify-between mt-4 pt-4 border-t border-gray-200">
                    <span class="text-lg font-medium text-white ">Order total</span>
                    <span class="text-lg font-medium text-white">රු.{{ Cart::subtotal() + 399.00 }}</span>
                </div>

                <a href="order/user-info">
                    <button class="w-full bg-[#F41E1E] text-white py-2 px-2 font-bold mt-3 rounded-md shadow-md hover:bg-[#dd4949] transition duration-300">
                        Checkout
                        <i class="fa-solid fa-truck-fast ml-2"></i>
                    </button>
                </a>
            </div>
        </div>
    @endif
</div> --}}
<style>
    @media (max-width: 768px) {
     .checkout-button {
      position: fixed;
      bottom: 0;
      left: 0;
      right: 0;
      z-index: 50;
     }
    }
   </style>
<div class="container mx-auto p-4 mt-4">
    <div class="flex flex-col lg:flex-row bg-white rounded-lg shadow-lg">
        <!-- Shopping Cart Section -->
        <div class="w-full lg:w-2/3 p-6">
            <h2 class="text-2xl font-bold mb-4">Shopping Cart</h2>
            <div class="flex justify-between items-center mb-4">
                <span class="text-gray-600">3 items</span>
            </div>
            <div class="border-t border-gray-300"></div>
            <!-- Cart Items -->
            <div class="py-4">
                <!-- Item 1 -->
                <div class="flex flex-row md:flex-row items-center justify-between py-4 border-b border-gray-300">
                    <div class="flex items-center mb-4 md:mb-0 md:w-1/4">
                        <img alt="Dark purple T-shirt" class="w-16 h-16 mr-4" src="https://placehold.co/60x60" />
                    </div>
                    <div class="flex flex-col md:flex-row items-center justify-between w-full md:w-3/4">
                        <div class="flex flex-col items-start mb-4 md:mb-0 md:ml-4">
                            <p class="font-bold">Cotton T-shirt</p>
                        </div>
                        <div class="flex items-center mb-4 md:mb-0 md:ml-4">
                            <button class="px-3 py-1">-</button>
                            <input class="w-8 h-7 text-center border-t border-b border-gray-300" type="text" value="1" />
                            <button class="px-3 py-1">+</button>
                        </div>
                        <div class="flex items-center md:ml-4">
                            <span class="font-bold">€ 44.00</span>
                             <button class="ml-8 text-red-500">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Item 2 -->
                <div class="flex flex-row md:flex-row items-center justify-between py-4 border-b border-gray-300">
                    <div class="flex items-center mb-4 md:mb-0 md:w-1/4">
                        <img alt="Dark purple T-shirt" class="w-16 h-16 mr-4" src="https://placehold.co/60x60" />
                    </div>
                    <div class="flex flex-col md:flex-row items-center justify-between w-full md:w-3/4">
                        <div class="flex flex-col items-start mb-4 md:mb-0 md:ml-4">
                            <p class="font-bold">Cotton T-shirt</p>
                        </div>
                        <div class="flex items-center mb-4 md:mb-0 md:ml-4">
                            <button class="px-3 py-1">-</button>
                            <input class="w-8 h-7 text-center border-t border-b border-gray-300" type="text" value="1" />
                            <button class="px-3 py-1">+</button>
                        </div>
                        <div class="flex items-center md:ml-4">
                            <span class="font-bold">€ 44.00</span>
                             <button class="ml-8 text-red-500">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Item 3 -->
                <div class="flex flex-row md:flex-row items-center justify-between py-4 border-b border-gray-300">
                    <div class="flex items-center mb-4 md:mb-0 md:w-1/4">
                        <img alt="Dark purple T-shirt" class="w-16 h-16 mr-4" src="https://placehold.co/60x60" />
                    </div>
                    <div class="flex flex-col md:flex-row items-center justify-between w-full md:w-3/4">
                        <div class="flex flex-col items-start mb-4 md:mb-0 md:ml-4">
                            <p class="font-bold">Cotton T-shirt</p>
                        </div>
                        <div class="flex items-center mb-4 md:mb-0 md:ml-4">
                            <button class="px-3 py-1">-</button>
                            <input class="w-8 h-7 text-center border-t border-b border-gray-300" type="text" value="1" />
                            <button class="px-3 py-1">+</button>
                        </div>
                        <div class="flex items-center md:ml-4">
                            <span class="font-bold">€ 44.00</span>
                            <button class="ml-8 text-red-500">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-4">
                <a class="text-gray-600" href="#">
                    <i class="fas fa-arrow-left"></i> Back to shop
                </a>
            </div>
        </div>
        <!-- Summary Section -->
        <div class="w-full lg:w-1/3 bg-gray-100 p-6 rounded-r-lg">
            <h2 class="text-2xl font-bold mb-4">Summary</h2>
            <div class="flex justify-between items-center mb-4">
                <span class="text-gray-600">ITEMS 3</span>
                <span class="font-bold">€ 132.00</span>
            </div>
            <div class="border-t border-gray-300 mb-4"></div>
            <div class="mb-4">
                <label class="block text-gray-600 mb-2" for="shipping">SHIPPING</label>
                <select class="w-full p-2 border border-gray-300 rounded" id="shipping">
                    <option>Standard-Delivery- €5.00</option>
                </select>
            </div>
            <div class="mb-4">
                <label class="block text-gray-600 mb-2" for="code">GIVE CODE</label>
                <div class="flex">
                    <input class="w-full p-2 border border-gray-300 rounded-l" id="code" placeholder="Enter your code" type="text" />
                    <button class="p-2 bg-white border border-gray-300 rounded-r">
                        <i class="fas fa-arrow-right"></i>
                    </button>
                </div>
            </div>
            <div class="border-t border-gray-300 mb-4"></div>
            <div class="flex justify-between items-center mb-4">
                <span class="text-gray-600">TOTAL PRICE</span>
                <span class="font-bold">€ 137.00</span>
            </div>
            <button class="w-full p-3 bg-black text-white font-bold rounded-full checkout-button hover:bg-red-600 transition duration-500">
                CHECKOUT
                <i class="fas fa-shopping-cart ml-2"></i>
            </button>
        </div>
    </div>
</div>
