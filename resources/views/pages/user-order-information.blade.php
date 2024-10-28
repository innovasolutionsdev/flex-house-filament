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


            <p class="mt-8 text-lg font-medium">Payment Method</p>
            <div class="w-full mx-auto">
                <!-- First Card -->
                <label class="flex items-center justify-between p-4 bg-white border border-gray-200 rounded-lg mb-4 cursor-pointer radio-label">
                    <div class="flex items-center">
                        <img alt="FedEx logo" class="w-12 h-12 mr-4" height="50" src="{{ asset('img/cod.png') }}" width="50">
                        <div>
                            <h2 class="text-lg font-semibold">Cash on delivery</h2>
                            <p class="text-gray-500">Hand over the money to our delivery driver</p>
                        </div>
                    </div>
                    <input type="radio" value="cod" name="delivery" class="form-radio text-gray-300">
                </label>
                <!-- Second Card -->
                <label class="flex items-center justify-between p-4 bg-white border border-gray-200 rounded-lg mb-4 cursor-pointer radio-label">
                    <div class="flex items-center">
                        <img alt="DHL logo" class="w-12 h-12 mr-4" height="50" src="{{ asset('img/koko.png') }}" width="50">
                        <div>
                            <h2 class="text-lg font-semibold">Koko</h2>
                            <p class="text-gray-500">Pay in 3 easy instalments</p>
                        </div>
                    </div>
                    <input type="radio" value="koko" name="delivery" class="form-radio text-gray-300">
                </label>

                <!-- Second Card -->
                <label class="flex items-center justify-between p-4 bg-white border border-gray-200 rounded-lg mb-4 cursor-pointer radio-label">
                    <div class="flex items-center">
                        <img alt="DHL logo" class="w-12 h-12 mr-4" height="50" src="{{ asset('img/bank_transfer.png') }}" width="50">
                        <div>
                            <h2 class="text-lg font-semibold">Direct Bank transfer</h2>
                            <p class="text-gray-500">Transfer the total and upload the slip in the next page</p>
                        </div>
                    </div>
                    <input type="radio" value="bank_transfer" name="delivery" class="form-radio text-gray-300">
                </label>

                <label class="flex items-center justify-between p-4 bg-white border border-gray-200 rounded-lg mb-4 cursor-pointer radio-label">
                    <div class="flex items-center">
                        <img alt="DHL logo" class="w-12 h-12 mr-4" height="50" src="{{ asset('img/card.webp') }}" width="50">
                        <div>
                            <h2 class="text-lg font-semibold">Credit/Debit card</h2>
                            <p class="text-gray-500">Transfer the total and upload the slip in the next page</p>
                        </div>
                    </div>
                    <input type="radio" value="card" name="delivery" class="form-radio text-gray-300">
                </label>
            </div>
                <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-md mt-6 hover:bg-blue-700">
                    Checkout
                </button>
            </form>

    </div>
        @livewire('checkout-order-summery')
</div>
    <script>
        document.querySelectorAll('input[type="radio"]').forEach(radio => {
            radio.addEventListener('change', function() {
                document.querySelectorAll('.radio-label').forEach(label => {
                    label.classList.remove('border-2', 'border-gray-800');
                    label.classList.add('border', 'border-gray-200');
                });
                if (this.checked) {
                    this.parentElement.classList.remove('border', 'border-gray-200');
                    this.parentElement.classList.add('border-2', 'border-gray-800');
                }
            });
        });
    </script>
</x-app-layout>
