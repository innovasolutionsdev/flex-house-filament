<x-app-layout>
    <div class="max-w-2xl mx-auto p-8 text-center">
        <div class="bg-gray-100 p-8 rounded-lg shadow-lg">
            <div class="flex justify-center mb-6">
                <div class="flex items-center justify-center w-16 h-16 bg-green-500 rounded-full">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                </div>
            </div>

            <h1 class="text-3xl font-bold text-green-700 mb-4">Thank You for Your Order!</h1>
            <p class="text-lg text-gray-800 mb-6">We've received your bank transfer slip. Your order will be processed after we confirm the payment.</p>

            <p class="text-gray-600 mb-6">If you have any questions, please feel free to contact us at
                <a href="mailto:support@example.com" class="text-green-600 underline">support@example.com</a>.
            </p>

            <a href="/" class="inline-block mt-6 bg-green-600 text-white py-3 px-6 rounded-md text-lg font-medium hover:bg-green-700 transition-colors duration-200">
                Back to Home
            </a>
        </div>
    </div>
</x-app-layout>
