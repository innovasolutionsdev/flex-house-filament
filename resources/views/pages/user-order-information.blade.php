<x-app-layout>

<div class=" mx-auto p-6 md:px-16 sm:px-4 dark:bg-[#171717]">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="md:col-span-2 bg-white p-6 rounded-lg shadow-md dark:bg-[#141414] ">
            <h2 class="text-2xl  mb-4 dark:text-white">
                Contact
            </h2>

            <form method="post" action="{{ route('checkout.process') }}">
                @csrf
            <div class="mb-6">
                <input class="mt-1 block w-full rounded-md shadow-sm p-3 focus:border-gray-300 dark:bg-[#141414] dark:text-gray-200 text-gray-800  dark:border-gray-800" placeholder="Email address" type="email" name="email"/>
            </div>
            <h2 class="text-2xl  mb-4 dark:text-white">
                Delivery
            </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <input class="mt-1 block w-full rounded-md shadow-sm p-3 focus:border-gray-400 dark:bg-[#141414] dark:text-gray-200 text-gray-800  border border-gray-300 dark:border-gray-800" placeholder="First name" type="text" name="first_name"/>
                    </div>
                    <div>
                        <input class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-3 focus:border-gray-400 dark:bg-[#141414] dark:text-gray-200 text-gray-800  dark:border-gray-800" placeholder="Last name" type="text" name="last_name"/>
                    </div>
                </div>

                <div class="mb-6">
                    <input class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-3 focus:border-gray-400 dark:bg-[#141414] dark:text-gray-200 text-gray-800  dark:border-gray-800" placeholder="Address" type="text" name="address"/>
                </div>
                <div class="mb-6">
                    <input class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-3 focus:border-gray-400 dark:bg-[#141414] dark:text-gray-200 text-gray-800  dark:border-gray-800" placeholder="Apartment, suite, etc." type="text" name="apartment"/>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <input class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-3 focus:border-gray-400 dark:bg-[#141414] dark:text-gray-200 text-gray-800  dark:border-gray-800" placeholder="City" type="text" name="city"/>
                    </div>
                    <div>
                        <input class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-3 focus:border-gray-400 dark:bg-[#141414] dark:text-gray-200 text-gray-800  dark:border-gray-800" placeholder="Phone" type="text" name="phone"/>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <input class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-3 focus:border-gray-400 dark:bg-[#141414] dark:text-gray-200 text-gray-800  dark:border-gray-800" placeholder="State / Province" type="text" name="state"/>
                    </div>
                    <div>
                        <input class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-3 focus:border-gray-400 dark:bg-[#141414] dark:text-gray-200 text-gray-800  dark:border-gray-800" placeholder="Zip code" type="text" name="zip"/>
                    </div>
                </div>

                <div class="mb-6">
                    <textarea class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-3 focus:border-gray-400 dark:bg-[#141414] dark:text-gray-200 text-gray-800  dark:border-gray-800" placeholder="Note" name="note" rows="4"></textarea>
                </div>

                <p class="mt-8 mb-4 text-2xl  dark:text-white">Payment Method</p>
            <div class="w-full mx-auto ">
                <!-- First Card -->
                <label class="flex items-center justify-between p-4 bg-white border border-gray-200 dark:border-gray-800 rounded-lg mb-4 cursor-pointer radio-label dark:bg-[#141414]">
                    <div class="flex items-center">
                        <img alt="FedEx logo" class="w-8 h-8 mr-4" height="50" src="{{ asset('img/cod.png') }}" width="50">
                        <div>
                            <h2 class="text-lg  dark:text-white">Cash on delivery</h2>
                            <p class="text-gray-500 text-sm dark:text-gray-300">Hand over the money to our delivery driver</p>
                        </div>
                    </div>
                    <input type="radio" value="COD" name="delivery" class="form-radio text-gray-300">
                </label>
                <!-- Second Card -->
                <label class="flex items-center justify-between p-4 bg-white border border-gray-200 dark:border-gray-800 rounded-lg mb-4 cursor-pointer radio-label dark:bg-[#141414]">
                    <div class="flex items-center">
                        <img alt="DHL logo" class="w-8 h-8 mr-4" height="50" src="{{ asset('img/koko.png') }}" width="50">
                        <div>
                            <h2 class="text-lg  dark:text-white">Koko</h2>
                            <p class="text-gray-500 text-sm dark:text-gray-300">Pay in 3 easy instalments</p>
                        </div>
                    </div>
                    <input type="radio" value="KOKO" name="delivery" class="form-radio text-gray-300">
                </label>

                <!-- Third Card -->
                <label class="flex items-center justify-between p-4 bg-white border border-gray-200 dark:border-gray-800 rounded-lg mb-4 cursor-pointer radio-label dark:bg-[#141414]">
                    <div class="flex items-center">
                        <img alt="Bank Transfer logo" class="w-8 h-8 mr-4" height="50" src="{{ asset('img/bank_transfer.png') }}" width="50">
                        <div>
                            <h2 class="text-lg  dark:text-white">Direct Bank transfer</h2>
                            <p class="text-gray-500 text-sm dark:text-gray-300">Transfer the total and upload the slip in the next page</p>
                        </div>
                    </div>
                    <input type="radio" value="Bank Transfer" name="delivery" class="form-radio text-gray-300">
                </label>

                <!-- Fourth Card -->
                <label class="flex items-center justify-between p-4 bg-white border border-gray-200 dark:border-gray-800 rounded-lg mb-4 cursor-pointer radio-label dark:bg-[#141414]">
                    <div class="flex items-center">
                        <img alt="Credit/Debit Card logo" class="w-8 h-8 mr-4" height="50" src="{{ asset('img/card.webp') }}" width="50">
                        <div>
                            <h2 class="text-lg  dark:text-white">Credit/Debit card</h2>
                            <p class="text-gray-500 text-sm dark:text-gray-300">Transfer the total and upload the slip in the next page</p>
                        </div>
                    </div>
                    <input type="radio" value="Card" name="delivery" class="form-radio text-gray-300">
                </label>
            </div>
                <button type="submit" class="w-full bg-[#F41E1E] hover:bg-black text-white py-2  font-bold rounded-md mt-6 transition-all duration-500 ">
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

        document.querySelectorAll('input, textarea').forEach(input => {
            input.addEventListener('focus', function() {
                this.classList.add('border-gray-400');
            });
            input.addEventListener('blur', function() {
                this.classList.remove('border-gray-400');
            });
        });
    </script>
</x-app-layout>
