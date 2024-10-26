

<x-app-layout>
    <div class="max-w-3xl mx-auto p-6 text-center">
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h1 class="text-2xl font-semibold text-blue-600 mb-4">Thank You for Your Order!</h1>
            <p class="text-lg text-gray-700 mb-4">Your order has been placed successfully.</p>

            <div class="mt-4 text-left">
                <h2 class="text-xl font-semibold text-gray-800 mb-2">Next Steps</h2>
                <p class="text-gray-600 mb-4">To confirm your order, please complete the bank transfer using the following details:</p>

                <div class="bg-gray-100 p-4 rounded-md mb-4">
                    <ul class="list-disc ml-5">
                        <li><strong>Bank Name:</strong> Your Bank Name</li>
                        <li><strong>Account Number:</strong> 1234567890</li>
                        <li><strong>Account Holder:</strong> Your Account Name</li>
                        <li><strong>IFSC Code:</strong> ABCD1234</li>
                    </ul>
                </div>

                <p class="text-gray-600 mb-4">
                    Once you've made the transfer, please upload the bank transfer slip. This is required for us to confirm your order.
                </p>
                <p class="text-gray-600">
                    If you have any questions or need assistance, feel free to contact us at <strong>support@example.com</strong>.
                </p>

                <a href="" class="inline-block mt-6 bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700">
                    Upload Bank Slip
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
