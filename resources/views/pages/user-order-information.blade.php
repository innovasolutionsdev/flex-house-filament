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

          @livewire('checkout-order-summery')


    </div>
</div>

</x-app-layout>
