<html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"></link>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
    </style>
</head>
<body class="bg-gray-200 flex flex-col items-center justify-center min-h-screen p-4">
    <div id="card" class="bg-white shadow-lg rounded-lg w-full max-w-lg mb-4">
        <div class="bg-yellow-500 h-16 rounded-t-lg flex items-center justify-between pl-4 pr-4">
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
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <span class="font-bold">Member Name</span>
                </div>
                <div>
                    <span>{{ $payment->user->name}}</span>
                </div>
                <div>
                    <span class="font-bold"> Membership Type</span>
                </div>
                <div>
                    <span>{{ $payment->user->membership_id }}</span>
                </div>
                <div>
                    <span class="font-bold">Date</span>
                </div>
                <div>
                    <span>{{ $payment->payment_date }}</span>
                </div>
                <div>
                    <span class="font-bold">Amount</span>
                </div>
                <div>
                    <span>{{ $payment->amount }}</span>
                </div>
                <div>
                    <span class="font-bold">Payment Method</span>
                </div>
                <div>
                    <span>{{ $payment->payment_method }}</span>
                </div>
            </div>
        </div>
        <div class="bg-yellow-500 p-4 rounded-b-lg flex flex-col md:flex-row justify-between items-center">

            <div class="flex items-center space-x-16">
                <span class="font-bold">Received By</span>
                <span>Authorized Signature</span>
            </div>
        </div>
    </div>
    <button id="downloadButton" class="bg-blue-500 text-white px-4 py-2 rounded" onclick="downloadPDF()">Download PDF</button>


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
</body>
</html>
