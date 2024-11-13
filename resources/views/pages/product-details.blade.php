<x-app-layout>
    <style>
        .hidden {
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
                Nitro-Tech
            </span>
        </nav>
        <div class="flex flex-col md:flex-row">
            <div class="w-full md:w-1/2">
                <img alt="Muscletech Nitro-Tech Whey Protein container" class="w-full" height="800"
                    src="https://storage.googleapis.com/a1aa/image/kXjRdiGlRez2AyevMlMhsyFMVqa6waUeuoceGr0UM25c88BPB.jpg"
                    width="600" />
            </div>
            <div class="w-full md:w-1/2 md:pl-8 mt-4 md:mt-0">
                <span class="text-green-500 font-semibold">
                    Sale!
                </span>
                <h1 class="text-3xl font-bold text-gray-800">
                    Nitro-Tech
                </h1>
                <p class="text-red-500 text-xl font-semibold">
                    Rs. 17,500 – Rs. 52,500
                </p>
                <p class="text-gray-500 text-sm">
                    or 3 installments of Rs. 5,833.33 - Rs. 17,500.00 with
                    <span class="font-semibold">
                        mintpay
                    </span>
                </p>
                {{-- <div class="mt-4">
                    <p class="text-gray-700 font-medium">
                        SIZE:
                        <span class="text-gray-500">
                            No selection
                        </span>
                    </p>
                    <div class="flex space-x-2 mt-2">
                        <button class="border border-gray-300 px-4 py-2">
                            4Lbs
                        </button>
                        <button class="border border-gray-300 px-4 py-2">
                            10Lbs
                        </button>
                        <button class="border border-gray-300 px-4 py-2">
                            2Lbs
                        </button>
                    </div>
                </div> --}}
                {{-- <div class="mt-4">
                    <p class="text-gray-700 font-medium">
                        FLAVOR:
                        <span class="text-gray-500">
                            No selection
                        </span>
                    </p>
                    <div class="flex space-x-2 mt-2">
                        <button class="border border-gray-300 px-4 py-2">
                            Cookies &amp; Cream
                        </button>
                        <button class="border border-gray-300 px-4 py-2">
                            Milk Chocolate
                        </button>
                        <button class="border border-gray-300 px-4 py-2">
                            Strawberry
                        </button>
                        <button class="border border-gray-300 px-4 py-2">
                            Vanilla
                        </button>
                    </div>
                </div> --}}
                <div class="mt-4 flex items-center space-x-2">
                    <button class="bg-gray-200 text-gray-700 px-2 py-2" onclick="decreaseQuantity()">
                        <i class="fas fa-minus">
                        </i>
                    </button>
                    <input class="border border-gray-200 w-12 text-center" id="quantity" type="number"
                        value="1" />
                    <button class="bg-gray-200 text-gray-700 px-2 py-2" onclick="increaseQuantity()">
                        <i class="fas fa-plus">
                        </i>
                    </button>
                    <button class="bg-pink-200 text-pink-700 px-6 py-2 flex items-center">
                        <i class="fas fa-shopping-cart mr-2">
                        </i>
                        Add to cart
                    </button>
                    <button class="bg-blue-200 text-blue-700 px-6 py-2">
                        Quick Buy
                    </button>
                </div>
                <div class="mt-4 text-gray-700">
                    <p class="flex items-center">
                        <i class="fas fa-check-circle mr-2">
                        </i>
                        Island-Wide Delivery
                    </p>
                    <p class="flex items-center">
                        <i class="fas fa-check-circle mr-2">
                        </i>
                        Buy Now &amp; Pay Later
                    </p>
                    <p class="flex items-center">
                        <i class="fas fa-check-circle mr-2">
                        </i>
                        Pay Securely Online with a Cr/Dr Card.
                    </p>
                </div>
                <div class="mt-8 border border-gray-300 bg-gray-50 p-4">
                    <h2 class="text-2xl font-bold text-gray-800 cursor-pointer flex justify-between items-center"
                        onclick="toggleDescription()">
                        Product Description
                        <i class="fas fa-chevron-down">
                        </i>
                    </h2>
                    <p class="text-gray-700 mt-2 hidden" id="description">
                        Nitro-Tech is a scientifically engineered whey protein formula designed for all athletes who are
                        looking for more muscle, more strength, and better performance. It contains protein sourced
                        primarily from whey protein isolate and whey peptides – two of the cleanest and purest protein
                        sources available. Other whey protein formulas might have only a few grams of these highly
                        bioavailable and easily digested proteins. Nitro-Tech is also enhanced with the most studied
                        form of creatine for even better gains in muscle and strength.
                    </p>
                </div>
                <div class="mt-4 border border-gray-300 bg-gray-50 p-4">
                    <h2 class="text-2xl font-bold text-gray-800 cursor-pointer flex justify-between items-center"
                        onclick="toggleNutritionDetails()">
                        Nutrition Details
                        <i class="fas fa-chevron-down">
                        </i>
                    </h2>
                    <div class="hidden mt-2" id="nutrition-details">
                        <img alt="Nutrition details of the product" class="w-full" height="800"
                            src="https://storage.googleapis.com/a1aa/image/kKk4dmOYpwYSH10l7wozqVm0g5FbJ9Zokq5wqTMc7ZRV3H8E.jpg"
                            width="600" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function toggleDescription() {
            var description = document.getElementById('description');
            if (description.classList.contains('hidden')) {
                description.classList.remove('hidden');
            } else {
                description.classList.add('hidden');
            }
        }

        function toggleNutritionDetails() {
            var nutritionDetails = document.getElementById('nutrition-details');
            if (nutritionDetails.classList.contains('hidden')) {
                nutritionDetails.classList.remove('hidden');
            } else {
                nutritionDetails.classList.add('hidden');
            }
        }

        function increaseQuantity() {
            var quantity = document.getElementById('quantity');
            quantity.value = parseInt(quantity.value) + 1;
        }

        function decreaseQuantity() {
            var quantity = document.getElementById('quantity');
            if (parseInt(quantity.value) > 1) {
                quantity.value = parseInt(quantity.value) - 1;
            }
        }
    </script>
</x-app-layout>
