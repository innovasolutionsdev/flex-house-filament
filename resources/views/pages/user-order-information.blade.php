<x-app-layout>

<div class="max-w-7xl mx-auto p-6">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="md:col-span-2 bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold mb-4">
                Contact information
            </h2>

            <form method="post" action="{{ route('checkout.process') }}">
                @csrf
            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-700">
                    Email address
                </label>
                <input class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" type="email" name="email"/>
            </div>
            <h2 class="text-xl font-semibold mb-4">
                Shipping information
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700">
                        First name
                    </label>
                    <input class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" type="text" name="first_name"/>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">
                        Last name
                    </label>
                    <input class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" type="text" name="last_name"/>
                </div>
            </div>

            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-700">
                    Address
                </label>
                <input class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" type="text" name="address"/>
            </div>
            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-700">
                    Apartment, suite, etc.
                </label>
                <input class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" type="text" name="apartment"/>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700">
                        City
                    </label>
                    <input class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" type="text" name="city"/>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">
                        Phone
                    </label>
                    <input class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" type="text" name="phone"/>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700">
                        State / Province
                    </label>
                    <input class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" type="text" name="state"/>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">
                        Zip code
                    </label>
                    <input class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" type="text" name="zip"/>
                </div>
            </div>

                <div class="mb-6">
                    <label class="block text-sm font-medium text-gray-700">
                        Note
                    </label>
                    <textarea class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" name="note" rows="4"></textarea>
                </div>




        <div class="bg-gray-100 p-4 rounded-md mt-6">
            <h3 class="text-lg font-semibold mb-2">Bank Transfer Details</h3>
            <p>Please transfer the total amount to the bank details below:</p>
            <ul class="list-disc ml-5 mt-2">
                <li>Bank Name: Your Bank Name</li>
                <li>Account Number: 1234567890</li>
                <li>Account Holder: Your Account Name</li>
                <li>IFSC Code: ABCD1234</li>
            </ul>
            <p class="mt-2">Once the transfer is complete, please email us at support@example.com with your order number as the reference to confirm your payment.</p>
        </div>
        <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-md mt-6 hover:bg-blue-700">
            Checkout
        </button>
        </form>

    </div>
        @livewire('checkout-order-summery')
</div>

</x-app-layout>
