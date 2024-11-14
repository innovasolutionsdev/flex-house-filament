<x-filament-panels::page>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>
<div class="flex flex-col items-center justify-center  p-4">
    <div id="card" class="bg-black shadow-xl rounded-lg w-full max-w-lg mb-4" style="background-color: #141414;">
        <div style="background-color: #F41E1E; height: 4rem; border-top-left-radius: 0.5rem; border-top-right-radius: 0.5rem; display: flex; align-items: center; justify-content: space-between; padding-left: 1rem; padding-right: 1rem;">
            <img alt="Company Logo" class="h-12 w-12" height="50" src="https://storage.googleapis.com/a1aa/image/JOBuAVjU8EamLVKQYtVVvvrTakf7K4BUTKDfV6qArrX9B6tTA.jpg" width="50">
            <div class="text-right">
                <h2 class="text-white text-lg font-extrabold">Membership Card</h2>
                <div class="text-white flex">

                    <p>Registration No: </p>
                    <p class="pl-2"> 123456</p>
                </div>
            </div>
        </div>
        <div class="p-6">
            {{-- <div class="flex justify-between items-center mb-4">
                <h1 class="text-2xl font-bold">CASH <span class="text-yellow-500">RECEIPT</span></h1>
                <div class="border border-gray-300 p-2 rounded">
                    <span>Date: 01/01/2023</span>
                </div>
            </div> --}}
            <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 1rem; color:white;">
                <div>
                    <span class="font-bold">Member Name</span>
                </div>
                <div>
                    <span >{{ $record->user->name}}</span>
                </div>
                <div>
                    <span class="font-bold"> Membership Type</span>
                </div>
                <div>
                    <span>{{ $record->user->membership_id }}</span>
                </div>
                <div>
                    <span class="font-bold">Date</span>
                </div>
                <div>
                    <span>{{ $record->payment_date }}</span>
                </div>
                <div>
                    <span class="font-bold">Amount</span>
                </div>
                <div>
                    <span>{{ $record->amount }}</span>
                </div>
                <div>
                    <span class="font-bold">Payment Method</span>
                </div>
                <div>
                    <span>{{ $record->payment_method }}</span>
                </div>
            </div>
        </div>
        <div style="background-color: #F41E1E; padding: 1rem; border-bottom-left-radius: 0.5rem; border-bottom-right-radius: 0.5rem; display: flex; flex-direction: column; justify-content: space-between; align-items: center;">

            <div style="display: flex; align-items: center; gap: 4rem;">
                <span class="font-bold">Received By</span>
                <span>Authorized Signature</span>
            </div>
        </div>
    </div>
    <button id="downloadButton" style="background-color: #F41E1E; color: white; padding: 0.5rem 1rem; border-radius: 0.25rem;" onclick="downloadPDF()">Download</button>


    <script>
        function downloadPDF() {
            const button = document.getElementById('downloadButton');
            button.style.display = 'none'; // Hide the button

            const element = document.getElementById('card');
            html2pdf(element, {
                margin: 1,
                filename: 'membership_card.pdf',
                image: { type: 'jpeg', quality: 0.98 },
                html2canvas: { scale: 2 },
                jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
            }).then(() => {
                button.style.display = 'block'; // Show the button again
            });
        }
    </script>
</div>

</x-filament-panels::page>
