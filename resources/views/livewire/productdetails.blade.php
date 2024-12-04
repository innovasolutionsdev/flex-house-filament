<div>
    <style>
        .hidden1 {
            display: none;
        }

        /* Hide the up and down arrows in the number input */
        input[type="number"]::-webkit-outer-spin-button,
        input[type="number"]::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input[type="number"] {
            -moz-appearance: textfield;
        }
    </style>
    <div class="container mx-auto p-4">
        <nav class="text-sm text-gray-600 mb-4">
            <a class="hover:underline" href="#">
                Home
            </a>
            /
            <a class="hover:underline" href="#">
                Protein
            </a>
            /
            <a class="hover:underline" href="#">
                Whey Blends
            </a>
            /
            <span class="text-gray-800">
                {{$order->name}}
            </span>
        </nav>
        <div class="flex flex-col md:flex-row">
            <div class="w-full md:w-1/2">
                <img alt="{{$order->name}}" height="400"
                     src="{{$order->getFirstMediaUrl('product_image')}}"
                     width="500" />
            </div>
            <div class="w-full md:w-1/2 md:pl-8 mt-4 md:mt-0">
                @if ($order->on_sale)
                    <span class="text-green-500 uppercase font-semibold">
                    Sale!
                </span>
                @endif
                <h1 class="text-3xl font-bold mt-2 text-gray-800">
                    {{$order->name}}
                </h1>
                <p class="text-red-500 text-xl mt-2 font-semibold">
                    Rs.{{$order->discount_price}}
                </p>
                <p class="text-gray-500 text-sm">
                    or 3 installments of රු{{number_format($order->discount_price / 3, 2)}} with
                    <span class="font-semibold">
                        mintpay
                    </span>
                </p>

                <div class="mt-4 flex flex-col md:flex-row items-center space-y-2 md:space-y-0 md:space-x-2">
                    <div class="flex items-center space-x-2">
                        <button class="bg-gray-200 text-gray-700 px-2 py-1 rounded-sm font-bold" onclick="decreaseQuantity()">
                            -
                        </button>
                        <input wire:model.lazy="quantity" class="border border-gray-200 w-12 h-8 text-center" id="quantity" type="number"
                               value="1" min="1" max="{{$order->stock_quantity}}" oninput="validateQuantity()" />
                        <button class="bg-gray-200 text-gray-700 px-2 py-1 rounded-sm font-bold" onclick="increaseQuantity()">
                            +
                        </button>
                    </div>

                    <div class="pt-4 md:pt-0 flex flex-col w-full md:flex-row md:w-auto space-y-2 md:space-y-0 md:pl-4 md:space-x-2">
                        <form wire:submit.prevent="addToCart({{ $order->id }})" action="{{ route('cart.store') }}" method="POST">
                            @csrf
                            <button type="submit" class="bg-[#141414] dark:bg-[#F41E1E] text-white py-2 px-2 font-bold rounded-md shadow-md hover:bg-[#141414] transition duration-300 w-full md:w-auto" {{ $order->stock_quantity > 0 ? 'bg-[#F41E1E] text-white hover:bg-yellow-600' : 'bg-gray-400 text-gray-200 cursor-not-allowed'}}
                                {{ $order->stock_quantity <= 0 && $order->in_stock ? 'disabled' : '' }}>
                                Add To Cart
                                <i class="fas fa-shopping-cart ml-2"></i>
                            </button>
                        </form>
                        <button wire:click.prevent="quickbuy({{ $order->id }})"
                                class="bg-[#141414] dark:bg-[#F41E1E] text-white py-2 px-2 font-bold rounded-md shadow-md hover:bg-[#141414] transition duration-300 w-full md:w-auto  {{ $order->stock_quantity > 0 ? 'bg-[#F41E1E] text-white hover:bg-yellow-600' : 'bg-gray-400 text-gray-200 cursor-not-allowed'}}"
                            {{ $order->stock_quantity <= 0 && $order->in_stock ? 'disabled' : '' }}>
                            Quick Buy
                            <i class="fa-solid fa-truck-fast ml-2"></i>
                        </button>
                    </div>
                </div>

                <div class="mt-4 text-gray-700">
                    <p class="flex items-center">
                        <i class="fas fa-check-circle mr-2 text-green-500"></i>
                        Island-Wide Delivery
                    </p>
                    <p class="flex items-center">
                        <i class="fas fa-check-circle mr-2 text-green-500"></i>
                        Buy Now &amp; Pay Later
                    </p>
                    <p class="flex items-center">
                        <i class="fas fa-check-circle mr-2 text-green-500"></i>
                        Pay Securely Online with a Cr/Dr Card.
                    </p>
                </div>

                <div class="mt-8 bg-gray-200 p-2 rounded-md">
                    <h2 class="text-lg font-semibold text-gray-800 cursor-pointer flex justify-between items-center"
                        onclick="toggleDescription()">
                        Product Description
                        <i class="fas fa-chevron-down"></i>
                    </h2>
                    <p class="text-gray-700 mt-2 hidden" id="description">
                        <!-- Add your product description here -->
                    </p>
                </div>

                <div class="mt-4 bg-gray-200 p-2 rounded-md">
                    <h2 class="text-lg font-semibold text-gray-800 cursor-pointer flex justify-between items-center"
                        onclick="toggleNutritionDetails()">
                        Nutrition Details
                        <i class="fas fa-chevron-down"></i>
                    </h2>
                    <div class="hidden mt-2" id="nutrition-details">
                        <img alt="Nutrition details of the product" class="w-full" height="400"
                             src="{{$order->getFirstMediaUrl('nutrition_details_image')}}"
                             width="600" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function toggleDescription() {
            var description = document.getElementById('description');
            if (description.classList.contains('hidden1')) {
                description.classList.remove('hidden1');
            } else {
                description.classList.add('hidden1');
            }
        }

        function toggleNutritionDetails() {
            var nutritionDetails = document.getElementById('nutrition-details');
            if (nutritionDetails.classList.contains('hidden1')) {
                nutritionDetails.classList.remove('hidden1');
            } else {
                nutritionDetails.classList.add('hidden1');
            }
        }

        document.addEventListener('DOMContentLoaded', function() {
            var quantity = document.getElementById('quantity');
            if (!quantity.value) {
                quantity.value = 1;
            }
        });

        function increaseQuantity() {
            var quantity = document.getElementById('quantity');
            var maxQuantity = parseInt(quantity.getAttribute('max'));
            if (parseInt(quantity.value) < maxQuantity) {
                quantity.value = parseInt(quantity.value) + 1;
                @this.set('quantity', quantity.value);
            }
        }

        function decreaseQuantity() {
            var quantity = document.getElementById('quantity');
            if (parseInt(quantity.value) > 1) {
                quantity.value = parseInt(quantity.value) - 1;
                @this.set('quantity', quantity.value);
            }
        }

        function validateQuantity() {
            var quantity = document.getElementById('quantity');
            var maxQuantity = parseInt(quantity.getAttribute('max'));
            var value = parseInt(quantity.value);

            if (isNaN(value) || value < 1) {
                quantity.value = 1;
            } else if (value > maxQuantity) {
                quantity.value = maxQuantity;
            } else {
                quantity.value = value;
            }
            @this.set('quantity', quantity.value);
        }
    </script>
</div>
