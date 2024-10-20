<x-app-layout>


    <div class="container mx-auto p-4">
        <div class="flex flex-col lg:flex-row">
            <!-- Sidebar -->
            <div class="hidden lg:block w-2/3 lg:w-1/4 mb-4 lg:mb-0">
                <div class="bg-white p-4 shadow-md rounded-lg">
                    <h2 class="text-xl font-bold border-b-2 border-yellow-500 pb-2 mb-4">
                        Categories
                    </h2>
                    <ul class="space-y-2">
                        <li>
                            <a class="flex items-center text-gray-700" href="#">
                                <i class="fas fa-caret-right mr-2">
                                </i>
                                Apparel and Accessories (5)
                            </a>
                        </li>
                        <li>
                            <a class="flex items-center text-gray-700" href="#">
                                <i class="fas fa-caret-right mr-2">
                                </i>
                                BCAAs (2)
                            </a>
                        </li>
                        <li>
                            <a class="flex items-center text-gray-700" href="#">
                                <i class="fas fa-caret-right mr-2">
                                </i>
                                Creatines and Recovery (11)
                            </a>
                        </li>
                        <li>
                            <a class="flex items-center text-gray-700" href="#">
                                <i class="fas fa-caret-right mr-2">
                                </i>
                                Fat burners (5)
                            </a>
                        </li>
                        <li>
                            <a class="flex items-center text-gray-700" href="#">
                                <i class="fas fa-caret-right mr-2">
                                </i>
                                Giftboxes (5)
                            </a>
                        </li>
                        <li>
                            <a class="flex items-center text-gray-700" href="#">
                                <i class="fas fa-caret-right mr-2">
                                </i>
                                Mass gainers (5)
                            </a>
                        </li>
                        <li>
                            <a class="flex items-center text-gray-700" href="#">
                                <i class="fas fa-caret-right mr-2">
                                </i>
                                Pre Workouts (13)
                            </a>
                        </li>
                        <li>
                            <a class="flex items-center text-gray-700" href="#">
                                <i class="fas fa-caret-right mr-2">
                                </i>
                                Protein (5)
                            </a>
                        </li>
                        <li>
                            <a class="flex items-center text-gray-700" href="#">
                                <i class="fas fa-caret-right mr-2">
                                </i>
                                Protein Bars &amp; Energy Cans (4)
                            </a>
                        </li>
                        <li>
                            <a class="flex items-center text-gray-700" href="#">
                                <i class="fas fa-caret-right mr-2">
                                </i>
                                Vitamins &amp; Fish Oils (5)
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="bg-white p-4 shadow-md mt-4 rounded-lg">
                    <h2 class="text-xl font-bold border-b-2 border-yellow-500 pb-2 mb-4">
                        Brands
                    </h2>
                    <ul class="space-y-2">
                        <li>
                            <a class="flex items-center text-gray-700" href="#">
                                <i class="fas fa-caret-right mr-2">
                                </i>
                                Muscletech (10)
                            </a>
                        </li>
                        <li>
                            <a class="flex items-center text-gray-700" href="#">
                                <i class="fas fa-caret-right mr-2">
                                </i>
                                Inner Armor (8)
                            </a>
                        </li>
                        <li>
                            <a class="flex items-center text-gray-700" href="#">
                                <i class="fas fa-caret-right mr-2">
                                </i>
                                Dymatize (12)
                            </a>
                        </li>
                        <li>
                            <a class="flex items-center text-gray-700" href="#">
                                <i class="fas fa-caret-right mr-2">
                                </i>
                                Optimum Nutrition (15)
                            </a>
                        </li>
                        <li>
                            <a class="flex items-center text-gray-700" href="#">
                                <i class="fas fa-caret-right mr-2">
                                </i>
                                BSN (7)
                            </a>
                        </li>
                        <li>
                            <a class="flex items-center text-gray-700" href="#">
                                <i class="fas fa-caret-right mr-2">
                                </i>
                                Universal Nutrition (5)
                            </a>
                        </li>
                        <li>
                            <a class="flex items-center text-gray-700" href="#">
                                <i class="fas fa-caret-right mr-2">
                                </i>
                                Cellucor (6)
                            </a>
                        </li>
                        <li>
                            <a class="flex items-center text-gray-700" href="#">
                                <i class="fas fa-caret-right mr-2">
                                </i>
                                Gaspari Nutrition (4)
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Main Content -->
            <div class="w-full lg:w-3/4 lg:ml-9">
                <div class="flex flex-col lg:flex-row justify-between items-center mb-4">
                    <h1 class="text-3xl font-bold mb-4 lg:mb-0">
                        Proteins
                    </h1>
                    <div class="relative w-2/3 lg:w-auto">
                        <input class="border border-gray-300 p-2 rounded-lg w-full lg:w-64" placeholder="Search..." type="text"/>
                        <button class="absolute right-2 top-2 text-gray-500 hover:text-gray-700">
                            <i class="fas fa-search">
                            </i>
                        </button>
                    </div>
                </div>
                <p class="mb-4">
                    Shop the best Protein Supplements in Sri Lanka to suit your Fitness goal! Variety of Proteins available from Pure isolates, Blends &amp; Vegan Proteins.
                </p>
                <div class="flex justify-between items-center mb-4">
                    <select class="border border-gray-300 p-2 rounded-lg hover:border-gray-400">
                        <option>
                            Sort by popularity
                        </option>
                        <!-- Add other sorting options here -->
                    </select>
                    <button class="lg:hidden bg-yellow-500 text-white p-2 rounded-lg hover:bg-yellow-600" onclick="toggleSidebar()">
                        Filter Options
                    </button>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-3 lg:grid-cols-3 gap-4">
                    <!-- Product 1 -->
                    <div class="bg-white p-2 shadow-md rounded-lg">
                        <div class="relative">
                            <img alt="Image of Muscletech Nitro Tech Whey Protein" class="w-full rounded-lg" height="300" src="https://storage.googleapis.com/a1aa/image/LjIP6wmo6k4DGFvXkyvFz3mni9j0VgSucB2ngIngUJcRFD6E.jpg" width="300"/>
                            <span class="absolute top-2 right-2 bg-red-500 text-white px-2 py-1 text-xs rounded-lg">
         Sale!
        </span>
                            <span class="absolute top-2 left-2 bg-green-500 text-white px-2 py-1 text-xs rounded-lg">
         In Stock
        </span>
                        </div>
                        <p class="text-gray-500 text-xs mt-2">
                            BEST SELLERS, PROTEIN, SPECIAL OFFERS, SUPPLEMENTS
                        </p>
                        <h2 class="text-lg font-bold mt-2">
                            Nitrotech 4lbs
                        </h2>
                        <div class="flex items-center mt-2">
        <span class="line-through text-gray-500 mr-2">
         රු25,500.00
        </span>
                            <span class="text-red-500 text-xl font-bold">
         රු24,500.00
        </span>
                        </div>
                        <div class="flex mt-2">
                            <button class="bg-yellow-500 text-white w-full py-2 mr-2 rounded-lg hover:bg-yellow-600">
                                Quick Buy
                            </button>
                            <button class="bg-gray-200 text-gray-700 py-2 px-4 rounded-lg hover:bg-gray-300">
                                <i class="fas fa-cart-plus">
                                </i>
                            </button>
                        </div>
                        <p class="text-gray-500 text-xs mt-2">
                            or 3 Installments of රු8,166.67 with
                            <span class="font-bold">
         KOKO
        </span>
                        </p>
                    </div>
                    <!-- Product 2 -->
                    <div class="bg-white p-2 shadow-md rounded-lg">
                        <div class="relative">
                            <img alt="Image of Inner Armor Zero Isolate Whey" class="w-full rounded-lg" height="300" src="https://storage.googleapis.com/a1aa/image/m9aLTKAiLlJxO5Ej8vRX7azvbtbaF9g4ebLK9ir1jEljKG0JA.jpg" width="300"/>
                            <span class="absolute top-2 right-2 bg-red-500 text-white px-2 py-1 text-xs rounded-lg">
         Sale!
        </span>
                            <span class="absolute top-2 left-2 bg-green-500 text-white px-2 py-1 text-xs rounded-lg">
         In Stock
        </span>
                        </div>
                        <p class="text-gray-500 text-xs mt-2">
                            BEST SELLERS, PROTEIN, SPECIAL OFFERS
                        </p>
                        <h2 class="text-lg font-bold mt-2">
                            Inner Armor Zero Isolate Whey 71 Servings
                        </h2>
                        <div class="flex items-center mt-2">
        <span class="line-through text-gray-500 mr-2">
         රු27,000.00
        </span>
                            <span class="text-red-500 text-xl font-bold">
         රු25,000.00
        </span>
                        </div>
                        <div class="flex mt-2">
                            <button class="bg-yellow-500 text-white w-full py-2 mr-2 rounded-lg hover:bg-yellow-600">
                                Quick Buy
                            </button>
                            <button class="bg-gray-200 text-gray-700 py-2 px-4 rounded-lg hover:bg-gray-300">
                                <i class="fas fa-cart-plus">
                                </i>
                            </button>
                        </div>
                        <p class="text-gray-500 text-xs mt-2">
                            or 3 Installments of රු8,333.33 with
                            <span class="font-bold">
         KOKO
        </span>
                        </p>
                    </div>
                    <!-- Product 3 -->
                    <div class="bg-white p-2 shadow-md rounded-lg">
                        <div class="relative">
                            <img alt="Image of Dymatize ISO 100" class="w-full rounded-lg" height="300" src="https://storage.googleapis.com/a1aa/image/iDDsxGqfu2Uej01wGu2GtsmcTdCJrffINV1qmdzyiylRUxgOB.jpg" width="300"/>
                            <span class="absolute top-2 right-2 bg-red-500 text-white px-2 py-1 text-xs rounded-lg">
         Sale!
        </span>
                            <span class="absolute top-2 left-2 bg-green-500 text-white px-2 py-1 text-xs rounded-lg">
         In Stock
        </span>
                        </div>
                        <p class="text-gray-500 text-xs mt-2">
                            BEST SELLERS, PROTEIN, SPECIAL OFFERS, SUPPLEMENTS
                        </p>
                        <h2 class="text-lg font-bold mt-2">
                            Dymatize ISO 100 5lbs
                        </h2>
                        <div class="flex items-center mt-2">
        <span class="line-through text-gray-500 mr-2">
         රු38,000.00
        </span>
                            <span class="text-red-500 text-xl font-bold">
         රු36,500.00
        </span>
                        </div>
                        <div class="flex mt-2">
                            <button class="bg-yellow-500 text-white w-full py-2 mr-2 rounded-lg hover:bg-yellow-600">
                                Quick Buy
                            </button>
                            <button class="bg-gray-200 text-gray-700 py-2 px-4 rounded-lg hover:bg-gray-300">
                                <i class="fas fa-cart-plus">
                                </i>
                            </button>
                        </div>
                        <p class="text-gray-500 text-xs mt-2">
                            or 3 Installments of රු12,166.67 with
                            <span class="font-bold">
         KOKO
        </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Sidebar -->
    <div class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden" id="mobileSidebar">
        <div class="fixed inset-y-0 left-0 bg-white w-3/4 p-4 overflow-y-auto">
            <button class="text-gray-700 mb-4" onclick="toggleSidebar()">
                <i class="fas fa-times">
                </i>
            </button>
            <div class="bg-white p-4 shadow-md rounded-lg">
                <h2 class="text-xl font-bold border-b-2 border-yellow-500 pb-2 mb-4">
                    Categories
                </h2>
                <ul class="space-y-2">
                    <li>
                        <a class="flex items-center text-gray-700" href="#">
                            <i class="fas fa-caret-right mr-2">
                            </i>
                            Apparel and Accessories (5)
                        </a>
                    </li>
                    <li>
                        <a class="flex items-center text-gray-700" href="#">
                            <i class="fas fa-caret-right mr-2">
                            </i>
                            BCAAs (2)
                        </a>
                    </li>
                    <li>
                        <a class="flex items-center text-gray-700" href="#">
                            <i class="fas fa-caret-right mr-2">
                            </i>
                            Creatines and Recovery (11)
                        </a>
                    </li>
                    <li>
                        <a class="flex items-center text-gray-700" href="#">
                            <i class="fas fa-caret-right mr-2">
                            </i>
                            Fat burners (5)
                        </a>
                    </li>
                    <li>
                        <a class="flex items-center text-gray-700" href="#">
                            <i class="fas fa-caret-right mr-2">
                            </i>
                            Giftboxes (5)
                        </a>
                    </li>
                    <li>
                        <a class="flex items-center text-gray-700" href="#">
                            <i class="fas fa-caret-right mr-2">
                            </i>
                            Mass gainers (5)
                        </a>
                    </li>
                    <li>
                        <a class="flex items-center text-gray-700" href="#">
                            <i class="fas fa-caret-right mr-2">
                            </i>
                            Pre Workouts (13)
                        </a>
                    </li>
                    <li>
                        <a class="flex items-center text-gray-700" href="#">
                            <i class="fas fa-caret-right mr-2">
                            </i>
                            Protein (5)
                        </a>
                    </li>
                    <li>
                        <a class="flex items-center text-gray-700" href="#">
                            <i class="fas fa-caret-right mr-2">
                            </i>
                            Protein Bars &amp; Energy Cans (4)
                        </a>
                    </li>
                    <li>
                        <a class="flex items-center text-gray-700" href="#">
                            <i class="fas fa-caret-right mr-2">
                            </i>
                            Vitamins &amp; Fish Oils (5)
                        </a>
                    </li>
                </ul>
            </div>
            <div class="bg-white p-4 shadow-md mt-4 rounded-lg">
                <h2 class="text-xl font-bold border-b-2 border-yellow-500 pb-2 mb-4">
                    Brands
                </h2>
                <ul class="space-y-2">
                    <li>
                        <a class="flex items-center text-gray-700" href="#">
                            <i class="fas fa-caret-right mr-2">
                            </i>
                            Muscletech (10)
                        </a>
                    </li>
                    <li>
                        <a class="flex items-center text-gray-700" href="#">
                            <i class="fas fa-caret-right mr-2">
                            </i>
                            Inner Armor (8)
                        </a>
                    </li>
                    <li>
                        <a class="flex items-center text-gray-700" href="#">
                            <i class="fas fa-caret-right mr-2">
                            </i>
                            Dymatize (12)
                        </a>
                    </li>
                    <li>
                        <a class="flex items-center text-gray-700" href="#">
                            <i class="fas fa-caret-right mr-2">
                            </i>
                            Optimum Nutrition (15)
                        </a>
                    </li>
                    <li>
                        <a class="flex items-center text-gray-700" href="#">
                            <i class="fas fa-caret-right mr-2">
                            </i>
                            BSN (7)
                        </a>
                    </li>
                    <li>
                        <a class="flex items-center text-gray-700" href="#">
                            <i class="fas fa-caret-right mr-2">
                            </i>
                            Universal Nutrition (5)
                        </a>
                    </li>
                    <li>
                        <a class="flex items-center text-gray-700" href="#">
                            <i class="<i class="fas fa-caret-right mr-2">
                            </i>
                            Cellucor (6)
                        </a>
                    </li>
                    <li>
                        <a class="flex items-center text-gray-700" href="#">
                            <i class="fas fa-caret-right mr-2">
                            </i>
                            Gaspari Nutrition (4)
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <script>
        function toggleSidebar() {
            const mobileSidebar = document.getElementById('mobileSidebar');
            mobileSidebar.classList.toggle('hidden');
        }
    </script>
</x-app-layout>
