<div class="mx-auto p-8 md:pl-10 md:pr-10 dark:bg-[#171717]">
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
</div>
