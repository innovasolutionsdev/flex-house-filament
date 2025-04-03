<html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"></link>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>
    <style>
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background-color: #f5f7fa;
        }
        .card-shadow {
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        .gradient-header {
            background: linear-gradient(135deg, #2563eb 0%, #1e40af 100%);
        }
        .gradient-footer {
            background: linear-gradient(135deg, #1e40af 0%, #2563eb 100%);
        }
        .membership-label {
            position: absolute;
            top: 16px;
            right: -36px;
            background: #ef4444;
            color: white;
            padding: 2px 30px;
            font-size: 12px;
            font-weight: bold;
            transform: rotate(45deg);
        }
    </style>
</head>
<body class="bg-gray-100 flex flex-col items-center justify-center min-h-screen p-6">
<div id="card" class="bg-white rounded-xl overflow-hidden card-shadow w-full max-w-md mb-6 transition-all duration-300 hover:shadow-xl relative">
    <!-- Membership ribbon -->
    <div class="membership-label">GYM PASS</div>

    <div class="gradient-header px-6 py-5 rounded-t-xl flex items-center justify-between">
        <div class="flex items-center">
            <div class="bg-white p-2 rounded-full">
                <img alt="Gym Logo" class="h-10 w-10 object-contain" src="https://storage.googleapis.com/a1aa/image/JOBuAVjU8EamLVKQYtVVvvrTakf7K4BUTKDfV6qArrX9B6tTA.jpg">
            </div>
            <div class="ml-3">
                <h2 class="text-white text-lg font-bold">POWERFIT GYM</h2>
                <p class="text-blue-100 text-xs">STRENGTH • FITNESS • WELLNESS</p>
            </div>
        </div>
        <div class="text-right">
            <div class="bg-white bg-opacity-20 text-white px-3 py-1 rounded-full text-sm">
                <span class="font-medium">ID:</span> {{$payment->id}}
            </div>
        </div>
    </div>

    <div class="p-6 space-y-6">
        <div class="flex items-center space-x-4">
            <div class="bg-gray-200 rounded-full w-16 h-16 flex items-center justify-center">
                <i class="fas fa-user text-gray-500 text-2xl"></i>
            </div>
            <div>
                <p class="text-gray-500 text-xs uppercase tracking-wide">Member</p>
                <p class="font-bold text-lg">{{ $payment->user->name}}</p>
            </div>
        </div>

        <div class="grid grid-cols-2 gap-y-4 border-t border-gray-100 pt-4">
            <div class="text-gray-500 text-sm flex items-center">
                <i class="fas fa-award mr-2 text-blue-500"></i>
                Membership Type
            </div>
            <div class="font-medium">
                {{ $payment->user->membership_id }}
            </div>

            <div class="text-gray-500 text-sm flex items-center">
                <i class="far fa-calendar-alt mr-2 text-blue-500"></i>
                Issue Date
            </div>
            <div class="font-medium">
                {{ $payment->payment_date }}
            </div>

            <div class="text-gray-500 text-sm flex items-center">
                <i class="fas fa-dollar-sign mr-2 text-blue-500"></i>
                Amount Paid
            </div>
            <div class="font-medium">
                {{ $payment->amount }}
            </div>

            <div class="text-gray-500 text-sm flex items-center">
                <i class="far fa-credit-card mr-2 text-blue-500"></i>
                Payment Method
            </div>
            <div class="font-medium">
                {{ $payment->payment_method }}
            </div>
        </div>
    </div>

    <div class="gradient-footer px-6 py-4 rounded-b-xl flex justify-between items-center">
        <div class="flex items-center space-x-4">
            <span class="text-white text-sm">{{$payment->collected_by}}</span>
            <div class="w-24 h-0.5 bg-white bg-opacity-40 rounded"></div>
        </div>
        <div class="flex items-center">
            <i class="fas fa-qrcode text-white text-xl"></i>
        </div>
    </div>
</div>

<button id="downloadButton" class="bg-blue-600 hover:bg-blue-700 text-white font-medium px-6 py-3 rounded-lg transition-all duration-300 flex items-center shadow-md" onclick="downloadPDF()">
    <i class="fas fa-download mr-2"></i>
    Download Membership Card
</button>

<script>
    function downloadPDF() {
        const button = document.getElementById('downloadButton');
        button.style.display = 'none'; // Hide the button

        const element = document.getElementById('card');
        html2pdf(element, {
            margin: 1,
            filename: 'gym_membership_card.pdf',
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
