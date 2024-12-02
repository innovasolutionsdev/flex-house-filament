<x-filament-panels::page>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>
    <div class="max-w-md rounded-lg shadow-lg bg-white p-6 border border-gray-300 mx-auto">
        <!-- Card Header -->
        <div class="flex items-center justify-between mb-4">
            <!-- Logo (SVG Example) -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-primary-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.354a4.354 4.354 0 01-4.354 4.354H6.354A4.354 4.354 0 0112 4.354zM18.354 8.708A4.354 4.354 0 0112 4.354a4.354 4.354 0 014.354 4.354zM12 4.354V12" />
            </svg>
            <h2 class="text-2xl font-bold text-primary-600 uppercase tracking-wider">Membership Card</h2>
        </div>

        <!-- Registration Number -->
        <p class="mb-4 text-gray-500 text-sm text-center">Registration No: <span class="font-semibold text-gray-900">123456</span></p>

        <!-- Membership Details -->
        <div class="space-y-3 text-sm">
            <div class="flex justify-between">
                <span class="text-gray-700 font-medium">Member Name:</span>
                <span class="text-gray-900 font-semibold">admin</span>
            </div>
            <div class="flex justify-between">
                <span class="text-gray-700 font-medium">Membership Type:</span>
                <span class="text-gray-900 font-semibold">3</span>
            </div>
            <div class="flex justify-between">
                <span class="text-gray-700 font-medium">Date:</span>
                <span class="text-gray-900 font-semibold">2024-11-27</span>
            </div>
            <div class="flex justify-between">
                <span class="text-gray-700 font-medium">Amount:</span>
                <span class="text-gray-900 font-semibold">5000.00</span>
            </div>
            <div class="flex justify-between">
                <span class="text-gray-700 font-medium">Payment Method:</span>
                <span class="text-gray-900 font-semibold">Cash</span>
            </div>
        </div>

        <!-- Received By -->
        <div class="mt-6 text-center border-t pt-4">
            <p class="text-xs text-gray-500">
                Received By: <span class="font-medium text-gray-900">Authorized Signature</span>
            </p>
        </div>

        <!-- Download Button -->
        <div class="mt-6">
            <button onclick="downloadCard()" class="w-full btn btn-primary">Download Membership Card</button>
        </div>
    </div>

    <script>
        function downloadCard() {
            const element = document.querySelector('.max-w-md');
            const opt = {
                margin: 0.3,
                filename: 'membership-card.pdf',
                image: { type: 'jpeg', quality: 0.98 },
                html2canvas: { scale: 2 },
                jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
            };
            html2pdf().from(element).set(opt).save();
        }
    </script>
</x-filament-panels::page>
