<div class="max-w-7xl mx-auto p-6">
    <h1 class="text-3xl font-bold mb-6">Shopping Cart</h1>

    @if(empty($cartItems))
        <!-- Message if the cart is empty -->
        <div class="flex justify-center items-center h-64">
            <p class="text-gray-600 text-xl">Your cart is currently empty.</p>
        </div>
    @else
        <!-- Flex container to position product and order summary next to each other -->
        <div class="flex flex-col lg:flex-row gap-6">
            <!-- Left column for product items -->
            <div class="lg:w-2/3">
                @foreach($cartItems as $item)
                    <div class="border-b border-gray-200 pb-4 mb-4">
                        <div class="flex items-center">
                            <img alt="Sienna Basic Tee" class="w-24 h-24 object-cover rounded-md" height="100" src="{{$item['image']}}" width="100"/>
                            <div class="ml-4 flex-1">
                                <h2 class="text-lg font-medium">{{$item['name']}}</h2>
                                <p class="text-lg font-medium mt-2">{{$item['total']}}</p>
                            </div>
                            <div class="flex items-center">
                                <input type="number" class="border border-gray-300 rounded-md p-2 text-center w-16"
                                       min="1" value="{{$item['qty']}}">
                            </div>
                            <livewire:remove-from-cart :rowId="$item['rowId']" />
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Right column for order summary -->
            <div class="lg:w-1/3 bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-lg font-medium mb-4">Order summary</h2>
                <div class="flex justify-between mb-2">
                    <span class="text-gray-500">Subtotal</span>
                    <span class="font-medium">රු.{{ Cart::total() }}</span>
                </div>
                <div class="flex justify-between mb-2">
                    <span class="text-gray-500">Shipping estimate
                      <i class="fas fa-question-circle text-gray-400 ml-1"></i>
                    </span>
                    <span class="font-medium">රු399</span>
                </div>
                <div class="flex justify-between mb-2">
                    <span class="text-gray-500">Tax estimate
                      <i class="fas fa-question-circle text-gray-400 ml-1"></i>
                    </span>
                    <span class="font-medium">$8.32</span>
                </div>
                <div class="flex justify-between mt-4 pt-4 border-t border-gray-200">
                    <span class="text-lg font-medium">Order total</span>
                    <span class="text-lg font-medium">රු.{{ Cart::total() + 399 }}</span>
                </div>

                <a href="order/user-info">
                    <button class="w-full bg-blue-600 text-white py-2 rounded-md mt-6 hover:bg-blue-700">
                        Checkout
                    </button>
                </a>
            </div>
        </div>
    @endif
</div>
