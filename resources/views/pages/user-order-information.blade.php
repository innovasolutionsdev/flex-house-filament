<x-app-layout>

<div class="max-w-7xl mx-auto p-6">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="md:col-span-2 bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold mb-4">
                Contact information
            </h2>
            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-700">
                    Email address
                </label>
                <input class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" type="email"/>
            </div>
            <h2 class="text-xl font-semibold mb-4">
                Shipping information
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700">
                        First name
                    </label>
                    <input class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" type="text"/>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">
                        Last name
                    </label>
                    <input class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" type="text"/>
                </div>
            </div>
            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-700">
                    Company
                </label>
                <input class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" type="text"/>
            </div>
            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-700">
                    Address
                </label>
                <input class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" type="text"/>
            </div>
            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-700">
                    Apartment, suite, etc.
                </label>
                <input class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" type="text"/>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700">
                        City
                    </label>
                    <input class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" type="text"/>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">
                        Country
                    </label>
                    <select class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
                        <option>
                            United States
                        </option>
                    </select>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700">
                        State / Province
                    </label>
                    <input class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" type="text"/>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">
                        Postal code
                    </label>
                    <input class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" type="text"/>
                </div>
            </div>
            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-700">
                    Phone
                </label>
                <input class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" type="text"/>
            </div>
            <h2 class="text-xl font-semibold mb-4">
                Delivery method
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div class="border border-blue-500 rounded-md p-4">
                    <label class="flex items-center">
                        <input checked="" class="form-radio text-blue-500" name="delivery" type="radio"/>
                        <span class="ml-2">
         Standard
        </span>
                    </label>
                    <p class="text-sm text-gray-500">
                        4-10 business days
                    </p>
                    <p class="text-sm text-gray-500">
                        $5.00
                    </p>
                </div>
                <div class="border border-gray-300 rounded-md p-4">
                    <label class="flex items-center">
                        <input class="form-radio text-blue-500" name="delivery" type="radio"/>
                        <span class="ml-2">
         Express
        </span>
                    </label>
                    <p class="text-sm text-gray-500">
                        2-5 business days
                    </p>
                    <p class="text-sm text-gray-500">
                        $16.00
                    </p>
                </div>
            </div>
            <h2 class="text-xl font-semibold mb-4">
                Payment
            </h2>
            <div class="mb-6">
                <label class="flex items-center">
                    <input checked="" class="form-radio text-blue-500" name="payment" type="radio"/>
                    <span class="ml-2">
        Credit card
       </span>
                </label>
                <label class="flex items-center mt-2">
                    <input class="form-radio text-blue-500" name="payment" type="radio"/>
                    <span class="ml-2">
        PayPal
       </span>
                </label>
                <label class="flex items-center mt-2">
                    <input class="form-radio text-blue-500" name="payment" type="radio"/>
                    <span class="ml-2">
        eTransfer
       </span>
                </label>
            </div>
            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-700">
                    Card number
                </label>
                <input class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" type="text"/>
            </div>
            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-700">
                    Name on card
                </label>
                <input class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" type="text"/>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700">
                        Expiration date (MM/YY)
                    </label>
                    <input class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" type="text"/>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">
                        CVC
                    </label>
                    <input class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" type="text"/>
                </div>
            </div>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold mb-4">
                Order summary
            </h2>
            <div class="flex items-center mb-4">
                <img alt="Black T-shirt" class="w-16 h-16 rounded-md" height="60" src="https://storage.googleapis.com/a1aa/image/ldFq6kQGvZLeRCWNx32snxfRag5nTkeF1aWP3p4P4NkMCFSnA.jpg" width="60"/>
                <div class="ml-4">
                    <p class="text-sm font-medium text-gray-700">
                        Basic Tee
                    </p>
                    <p class="text-sm text-gray-500">
                        Black
                    </p>
                    <p class="text-sm text-gray-500">
                        Large
                    </p>
                    <p class="text-sm font-medium text-gray-900">
                        $32.00
                    </p>
                </div>
                <div class="ml-auto">
                    <select class="border border-gray-300 rounded-md p-2">
                        <option>
                            1
                        </option>
                    </select>
                </div>
                <button class="ml-4 text-gray-500 hover:text-gray-700">
                    <i class="fas fa-trash">
                    </i>
                </button>
            </div>
            <div class="flex items-center mb-4">
                <img alt="Sienna T-shirt" class="w-16 h-16 rounded-md" height="60" src="https://storage.googleapis.com/a1aa/image/fvfWLkZA5Gl0T0irOPDVa5isXMdTwWLAksYxbATvofXLCFSnA.jpg" width="60"/>
                <div class="ml-4">
                    <p class="text-sm font-medium text-gray-700">
                        Basic Tee
                    </p>
                    <p class="text-sm text-gray-500">
                        Sienna
                    </p>
                    <p class="text-sm text-gray-500">
                        Large
                    </p>
                    <p class="text-sm font-medium text-gray-900">
                        $32.00
                    </p>
                </div>
                <div class="ml-auto">
                    <select class="border border-gray-300 rounded-md p-2">
                        <option>
                            1
                        </option>
                    </select>
                </div>
                <button class="ml-4 text-gray-500 hover:text-gray-700">
                    <i class="fas fa-trash">
                    </i>
                </button>
            </div>
            <div class="border-t border-gray-200 pt-4">
                <div class="flex justify-between text-sm font-medium text-gray-700 mb-2">
                    <p>
                        Subtotal
                    </p>
                    <p>
                        $64.00
                    </p>
                </div>
                <div class="flex justify-between text-sm font-medium text-gray-700 mb-2">
                    <p>
                        Shipping
                    </p>
                    <p>
                        $5.00
                    </p>
                </div>
                <div class="flex justify-between text-sm font-medium text-gray-700 mb-2">
                    <p>
                        Taxes
                    </p>
                    <p>
                        $5.52
                    </p>
                </div>
                <div class="flex justify-between text-lg font-semibold text-gray-900 mb-4">
                    <p>
                        Total
                    </p>
                    <p>
                        $75.52
                    </p>
                </div>
                <button class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700">
                    Confirm order
                </button>
            </div>
        </div>
    </div>
</div>

</x-app-layout>
