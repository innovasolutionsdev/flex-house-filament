
<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"></link>
    <!-- Include html2pdf.js library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>

    <!-- Invoice -->
    <div id="invoice-card" class="max-w-4xl px-4 sm:px-6 lg:px-8 mx-auto my-4 sm:my-10">
        <div class="mx-auto">
            <!-- Card -->
            <div class="flex flex-col p-4 sm:p-10 bg-white shadow-md rounded-xl dark:bg-gray-800 dark:border dark:border-gray-700">
                <!-- Buttons -->
                <div id="buttons" class="flex justify-end gap-x-3 mb-6">
                    <button id="download-button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-orange-50 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:bg-gray-600">
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" x2="12" y1="15" y2="3"/></svg>
                        Download Receipt
                    </button>

{{--                    @auth--}}
{{--                        <a class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-primary-600 text-white hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-primary-500 dark:bg-primary-700 dark:hover:bg-primary-600"--}}
{{--                           href="/user/my-orders">--}}
{{--                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">--}}
{{--                                <path d="M3 3h18l-2 13H5L3 3z"/>--}}
{{--                                <path d="M5 6h14"/>--}}
{{--                                <circle cx="7.5" cy="19.5" r="2.5"/>--}}
{{--                                <circle cx="16.5" cy="19.5" r="2.5"/>--}}
{{--                            </svg>--}}
{{--                            Track My Order--}}
{{--                        </a>--}}
{{--                    @else--}}
{{--                        <a class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-primary-600 text-white hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-primary-500 dark:bg-primary-700 dark:hover:bg-primary-600"--}}
{{--                           href="{{ route('order.tracking') }}">--}}
{{--                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">--}}
{{--                                <path d="M3 3h18l-2 13H5L3 3z"/>--}}
{{--                                <path d="M5 6h14"/>--}}
{{--                                <circle cx="7.5" cy="19.5" r="2.5"/>--}}
{{--                                <circle cx="16.5" cy="19.5" r="2.5"/>--}}
{{--                            </svg>--}}
{{--                            Track My Order--}}
{{--                        </a>--}}
{{--                    @endauth--}}
                </div>
                <!-- End Buttons -->

                <!-- Header -->
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center border-b border-gray-200 dark:border-gray-700 pb-5 mb-5">
                    <div>
                        <div class="flex items-center gap-x-3">
                            <svg class="w-10 h-10 text-primary-600 dark:text-primary-500" width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 26V13C1 6.37258 6.37258 1 13 1C19.6274 1 25 6.37258 25 13C25 19.6274 19.6274 25 13 25H12" stroke="currentColor" stroke-width="2"/>
                                <path d="M5 26V13.16C5 8.65336 8.58172 5 13 5C17.4183 5 21 8.65336 21 13.16C21 17.6666 17.4183 21.32 13 21.32H12" stroke="currentColor" stroke-width="2"/>
                                <circle cx="13" cy="13.0214" r="5" fill="currentColor"/>
                            </svg>

                            <h1 class="text-xl font-bold text-gray-800 dark:text-white">Flexifit</h1>
                        </div>
                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">123 Main Street, City, Country</p>
                        <p class="text-sm text-gray-500 dark:text-gray-400">Phone: (123) 456-7890</p>
                    </div>

                    <div class="mt-4 sm:mt-0 text-left sm:text-right">
                        <h2 class="text-2xl font-bold text-gray-800 dark:text-white">Receipt #{{ $receipt->id ?? '3682303' }}</h2>
                        <span class="mt-1 block text-sm text-gray-500 dark:text-gray-400">
                            Date: {{ $receipt->created_at ? $receipt->created_at->format('M d, Y') : 'March 10, 2023' }}
                        </span>
                    </div>
                </div>
                <!-- End Header -->

                <!-- Customer Info -->
                <div class="grid sm:grid-cols-2 gap-6 mb-6 border-b border-gray-200 dark:border-gray-700 pb-6">
                    <div>
                        <h3 class="text-lg font-bold text-gray-800 dark:text-white mb-3">Customer Information</h3>
                        <div class="space-y-2">
                            <div class="flex justify-between text-sm">
                                <span class="font-medium text-gray-600 dark:text-gray-400">Name:</span>
                                <span class="text-gray-800 dark:text-gray-300">{{ $receipt->first_name ?? 'Sara Williams' }}</span>
                            </div>
                            <div class="flex justify-between text-sm">
                                <span class="font-medium text-gray-600 dark:text-gray-400">Phone:</span>
                                <span class="text-gray-800 dark:text-gray-300">{{ $receipt->phone ?? '(123) 456-7890' }}</span>
                            </div>
                            <div class="flex justify-between text-sm">
                                <span class="font-medium text-gray-600 dark:text-gray-400">Note:</span>
                                <span class="text-gray-800 dark:text-gray-300">{{ $receipt->notes ?? 'No spicy' }}</span>
                            </div>
                            @if(isset($receipt->address) && !empty($receipt->address))
                                <div class="flex justify-between text-sm">
                                    <span class="font-medium text-gray-600 dark:text-gray-400">Delivery Address:</span>
                                    <span class="text-gray-800 dark:text-gray-300">{{ $receipt->address }}</span>
                                </div>
                            @endif
                        </div>
                    </div>

                    <div>
                        <h3 class="text-lg font-bold text-gray-800 dark:text-white mb-3">Order Details</h3>
                        <div class="space-y-2">
                            <div class="flex justify-between text-sm">
                                <span class="font-medium text-gray-600 dark:text-gray-400">Order Status:</span>
                                <span class="text-gray-800 dark:text-gray-300">
                                    @if(isset($receipt->Order_status))
                                        @if($receipt->Order_status == 0)
                                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800 dark:bg-blue-800/30 dark:text-blue-500">
                                                Processing
                                            </span>
                                        @elseif($receipt->Order_status == 1)
                                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 dark:bg-green-800/30 dark:text-green-500">
                                                Delivered
                                            </span>
                                        @else
                                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800 dark:bg-red-800/30 dark:text-red-500">
                                                Cancelled
                                            </span>
                                        @endif
                                    @else
                                        Processing
                                    @endif
                                </span>
                            </div>
                            <div class="flex justify-between text-sm">
                                <span class="font-medium text-gray-600 dark:text-gray-400">Payment Method:</span>
                                <span class="text-gray-800 dark:text-gray-300">{{ $receipt->payment_method ?? 'Cash on Pickup' }}</span>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- End Customer Info -->

                <!-- Order Items Table -->
                <div class="mb-6">
                    <h3 class="text-lg font-bold text-gray-800 dark:text-white mb-3">Order Items</h3>
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                            <thead>
                            <tr class="text-left bg-gray-50 dark:bg-gray-700">
                                <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 uppercase dark:text-gray-400">Item</th>

                                <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 uppercase dark:text-gray-400">Qty</th>
                                <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 uppercase dark:text-gray-400 text-right">Unit Price</th>
                                <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 uppercase dark:text-gray-400 text-right">Total</th>
                            </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">


                            @if(isset($receipt->order_product) && $receipt->order_product->count() > 0)

                                @foreach($receipt->order_product as $item)


                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                            {{ $item->product->name ?? 'Main Product' }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600 dark:text-gray-400">
                                            {{ $item->quantity}}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600 dark:text-gray-400 text-right">
                                            {{ $item->product->discount_price}}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200 text-right">
                                            @if(isset($item->product) && isset($item->quantity))
                                                {{ number_format($receipt->total) }}
                                            @else
                                             N/A
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach

                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- End Order Items Table -->

                <!-- Totals -->
                <div class="flex justify-end mb-6">
                    <div class="w-full sm:w-1/2 md:w-1/3">
                        <div class="border-t border-gray-200 dark:border-gray-700 pt-4">
                            <div class="flex justify-between text-sm mb-2">
                                <span class="font-medium text-gray-600 dark:text-gray-400">Subtotal:</span>
                                <span class="text-gray-800 dark:text-gray-300">{{ isset($receipt->total) ? number_format($receipt->total, 2) : '19.49' }}</span>
                            </div>
                            <div class="flex justify-between text-sm mb-2">
                                <span class="font-medium text-gray-600 dark:text-gray-400">Tax:</span>
                                <span class="text-gray-800 dark:text-gray-300">{{ isset($receipt->tax) ? number_format($receipt->tax, 2) : '1.95' }}</span>
                            </div>
                            <div class="flex justify-between font-bold text-base border-t border-gray-200 dark:border-gray-700 pt-2 mt-2">
                                <span class="text-gray-800 dark:text-white">Total:</span>
                                <span class="text-gray-800 dark:text-white">
                                        {{ number_format($receipt->total) }}
                                </span>
                            </div>
                            @if(isset($receipt->payment_status) && $receipt->payment_status == 1)
                                <div class="flex justify-between text-sm mt-2">
                                    <span class="font-medium text-gray-600 dark:text-gray-400">Payment Status:</span>
                                    <span class="text-green-600 dark:text-green-400 font-medium">Paid</span>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <!-- End Totals -->

                <!-- Footer -->
                <div class="border-t border-gray-200 dark:border-gray-700 pt-6 mt-2">
                    <h4 class="text-lg font-bold text-gray-800 dark:text-white mb-2">Thank you for your order!</h4>
                    <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">If you have any questions about your order, please contact us:</p>
                    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between text-sm text-gray-600 dark:text-gray-400">
                        <div class="mb-2 sm:mb-0">
                            <p>Email: support@flexifit.com</p>
                            <p>Phone: (123) 456-7890</p>
                        </div>
                        <div class="text-center sm:text-right">
                            <p>© {{ date('Y') }} Flexifit</p>
                            <p>Thank you for dining with us!</p>
                        </div>
                    </div>
                </div>
                <!-- End Footer -->
            </div>
            <!-- End Card -->
        </div>
    </div>
    <!-- End Invoice -->

    <script>
        document.getElementById('download-button').addEventListener('click', function(e) {
            e.preventDefault();
            var element = document.getElementById('invoice-card');
            var buttons = document.getElementById('buttons');

            // Hide the buttons before generating PDF
            buttons.style.display = 'none';

            // Set options for PDF generation
            var opt = {
                margin: [0.5, 0.5, 0.5, 0.5],
                filename: 'order-receipt.pdf',
                image: { type: 'jpeg', quality: 0.98 },
                html2canvas: { scale: 2, useCORS: true },
                jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
            };

            // Generate PDF
            html2pdf().set(opt).from(element).save().then(function() {
                // Show the buttons again after PDF generation
                buttons.style.display = 'flex';
            });
        });
    </script>

