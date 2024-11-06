<div>
    <div class="container mt-20 mx-auto p-4">
        <div class="flex flex-col lg:flex-row">
            <!-- Sidebar -->
            <div class="hidden lg:block w-2/3 lg:w-1/4 mb-4 lg:mb-0">
                <div class="bg-white p-4 shadow-md rounded-lg">
                    <h2 class="text-xl font-bold border-b-2 border-yellow-500 pb-2 mb-4">
                        Categories
                    </h2>
                    <ul class="space-y-2">

                        @foreach($categories as $category)
                            <li>
                                <a href="#"
                                   class="flex items-center text-gray-700 hover:text-blue-500"
                                   wire:click.prevent="filterByCategory({{ $category->id }})"
                                   style="color: inherit;"
                                   :class="{ 'text-blue-500': selectedCategoryId === {{ $category->id }} }"
                                   onclick="this.style.color = '';">
                                    <i class="fas fa-caret-right mr-2"></i>
                                    {{ $category->name }}
                                </a>
                            </li>

                        @endforeach
                    </ul>
                </div>
                <div class="bg-white p-4 shadow-md mt-4 rounded-lg">
                    <h2 class="text-xl font-bold border-b-2 border-yellow-500 pb-2 mb-4">
                        Brands
                    </h2>
                    <ul class="space-y-2">

                        @foreach($brands as $value)
                            <li>
                                <a class="flex items-center text-gray-700" href="#">
                                    <i class="fas fa-caret-right mr-2">
                                    </i>
                                    {{$value->name}}
                                </a>
                            </li>
                        @endforeach
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
                    @foreach($products as $value)
                        <div class="bg-white p-2 shadow-md rounded-lg">
                            <div class="relative">
                                <img alt="{{$value->name}}" class="w-full rounded-lg" height="300" src="{{ $value->getFirstMediaUrl('product_image') }}" width="300"/>
                                @if($value->on_sale)
                                    <span class="absolute top-2 right-2 bg-red-500 text-white px-2 py-1 text-xs rounded-lg">
            Sale!
        </span>
                                @endif

                                @if($value->in_stock && $value->quantity > 0)
                                    <span class="absolute top-2 left-2 bg-green-500 text-white px-2 py-1 text-xs rounded-lg">
            In Stock
        </span>
                                @else
                                    <span class="absolute top-2 left-2 bg-red-500 text-white px-2 py-1 text-xs rounded-lg">
            Out of Stock
        </span>
                                @endif
                            </div>
                            <p class="text-gray-500 text-xs mt-2">
                                {{$value->tags}}
                            </p>
                            <h2 class="text-lg font-bold mt-2">
                                {{$value->name}}
                            </h2>
                            <div class="flex items-center mt-2">
        <span class="line-through text-gray-500 mr-2">
         රු{{$value->price}}
        </span>
                                <span class="text-red-500 text-xl font-bold">
         රු{{$value->discount_price}}
        </span>
                            </div>
                            <div class="flex mt-2">
                                <!-- Quick Buy Button -->
                                <button
                                    class="w-full py-2 mr-2 rounded-lg
               {{ $value->stock_quantity > 0 ? 'bg-yellow-500 text-white hover:bg-yellow-600' : 'bg-gray-400 text-gray-200 cursor-not-allowed' }}"
                                    {{ $value->stock_quantity <= 0 && $value->in_stock ? 'disabled' : '' }}>
                                    Quick Buy
                                </button>

                                <!-- Add to Cart Button -->
                                <form wire:submit.prevent="addToCart({{ $value->id }})" action="{{ route('cart.store') }}" method="POST">
                                    @csrf
                                    <button type="submit"
                                            class="py-2 px-4 rounded-lg
                {{ $value->stock_quantity > 0 ? (isset($cartAdded[$value->id]) && $cartAdded[$value->id] ? 'bg-green-500 text-white' : 'bg-gray-200 text-gray-700 hover:bg-gray-300') : 'bg-gray-400 text-gray-200 cursor-not-allowed' }}"
                                        {{ $value->stock_quantity <= 0 && $value->in_stock ? 'disabled' : '' }}>
                                        <i class="fas fa-cart-plus"></i>
                                    </button>
                                </form>
                            </div>

                            <p class="text-gray-500 text-xs mt-2">
                                or 3 Installments of රු{{number_format($value->discount_price / 3, 2)}} with
                                <span class="font-bold">
         KOKO
        </span>
                            </p>
                        </div>
                    @endforeach


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
                    @foreach($categories as $category)
                        <li>
                            <a href="#"
                               class="flex items-center text-gray-700 hover:text-blue-500"
                               wire:click.prevent="filterByCategory({{ $category->id }})"
                               style="color: inherit;"
                               :class="{ 'text-blue-500': selectedCategoryId === {{ $category->id }} }"
                               onclick="this.style.color = '';">
                                <i class="fas fa-caret-right mr-2"></i>
                                {{ $category->name }}
                            </a>
                        </li>

                    @endforeach
                </ul>
            </div>
            <div class="bg-white p-4 shadow-md mt-4 rounded-lg">
                <h2 class="text-xl font-bold border-b-2 border-yellow-500 pb-2 mb-4">
                    Brands
                </h2>
                <ul class="space-y-2">
                    @foreach($brands as $value)
                        <li>
                            <a class="flex items-center text-gray-700" href="#">
                                <i class="fas fa-caret-right mr-2">
                                </i>
                                {{$value->name}}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
