<html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
            background: linear-gradient(135deg, #dc2626 0%, #b91c1c 100%);
        }
        .gradient-footer {
            background: linear-gradient(135deg, #b91c1c 0%, #dc2626 100%);
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

<div id="card" class="bg-white overflow-hidden card-shadow w-full max-w-md mb-6 transition-all duration-300 hover:shadow-xl relative" style="width: 500px; height: 420px;">
    <!-- Membership ribbon -->
    {{-- <div class="membership-label">GYM PASS</div> --}}

    <div class="gradient-header px-6 py-5 flex items-center justify-between">
        <div class="flex items-center">
            <div class=" p-2 rounded-full">
                <img alt="Gym Logo" class="rounded-full h-10 w-10 object-contain" src="https://storage.googleapis.com/a1aa/image/JOBuAVjU8EamLVKQYtVVvvrTakf7K4BUTKDfV6qArrX9B6tTA.jpg">
            </div>
            <div class="ml-3">
                <h2 class="text-white text-lg font-bold">FLEXIFIT GYM</h2>
                <p class="text-blue-100 text-xs">STRENGTH • FITNESS • WELLNESS</p>
            </div>
        </div>
        <div class="text-right">
            <div class="bg-white bg-opacity-20 text-white px-3 py-1 rounded-full text-sm">
                <span class="font-medium">Payment ID:</span> {{$payment->id}}
            </div>
        </div>
    </div>

    <div class="p-6 space-y-6">
        <div class="flex items-center space-x-4">
            <div>
                <p class="text-gray-500 text-xs uppercase tracking-wide">Member</p>
                <p class="font-bold text-lg">{{ $payment->user->name}} - {{ $payment->user->id}} </p>
            </div>
        </div>

        <div class="grid grid-cols-2 gap-y-4 border-t border-gray-100 pt-4">
            <div class="text-gray-500 text-sm flex items-center">
                <i class="fas fa-award mr-2 text-red-500"></i>
                Membership Type
            </div>
            <div class="font-medium">
                {{$payment->user->membershipPlan->name }}
            </div>

            <div class="text-gray-500 text-sm flex items-center">
                <i class="far fa-calendar-alt mr-2 text-red-500"></i>
                Issue Date
            </div>
            <div class="font-medium">
                {{ $payment->payment_date }}
            </div>

            <div class="text-gray-500 text-sm flex items-center">
                <i class="fas fa-dollar-sign mr-2 text-red-500"></i>
                Amount Paid
            </div>
            <div class="font-medium">
                {{ $payment->amount }}
            </div>

            <div class="text-gray-500 text-sm flex items-center">
                <i class="far fa-credit-card mr-2 text-red-500"></i>
                Payment Method
            </div>
            <div class="font-medium">
                {{ Str::of($payment->payment_method)->replace('_', ' ')->title() }}
            </div>
        </div>
    </div>

    <div class="gradient-footer px-6 py-4 flex justify-between items-center">
        <div class="flex items-center space-x-4">
            <span class="text-white text-sm">Payment Recieved By - {{$payment->collected_by}}</span>
            {{-- <div class="w-24 h-0.5 bg-white bg-opacity-40 rounded"></div> --}}
        </div>
        {{-- <div class="flex items-center">
            <i class="fas fa-qrcode text-white text-xl"></i>
        </div> --}}
    </div>
</div>

<!-- Back & Download buttons -->
<div class="flex flex-col sm:flex-row gap-4">
    <a href="{{ url()->previous() }}"
       class="bg-gray-700 hover:bg-gray-600 text-gray-200 font-medium px-6 py-2 rounded-lg transition-all duration-300 flex items-center shadow-md">
        <i class="fas fa-arrow-left mr-2"></i>
        Back
    </a>

    <button id="downloadButton"
            class="bg-red-600 hover:bg-red-700 text-white font-medium px-6 py-2 rounded-lg transition-all duration-300 flex items-center shadow-md"
            onclick="downloadPDF()">
        <i class="fas fa-download mr-2"></i>
        Download Membership Card
    </button>
</div>

<script>
    // function downloadPDF() {
    //     const button = document.getElementById('downloadButton');
    //     button.style.display = 'none'; // Hide the button

    //     const element = document.getElementById('card');
    //     html2pdf(element, {
    //         margin: 1,
    //         filename: 'gym_membership_card.pdf',
    //         image: { type: 'jpeg', quality: 0.98 },
    //         html2canvas: { scale: 2 },
    //         jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
    //     }).then(() => {
    //         button.style.display = 'block'; // Show the button again
    //     });
    // }
    function downloadPDF() {
    const button = document.getElementById('downloadButton');
    button.style.display = 'none'; // Hide the button

    const element = document.getElementById('card');
    
    // Get the exact dimensions of the card
    const cardWidth = element.offsetWidth;
    const cardHeight = element.offsetHeight;
    
    // Convert pixels to inches (96px = 1in for most screens)
    const widthInInches = cardWidth / 98;
    const heightInInches = cardHeight / 98;
    
    html2pdf(element, {
        margin: 0, // Remove all margins
        filename: 'gym_membership_card.pdf',
        image: { type: 'jpeg', quality: 0.98 },
        html2canvas: { 
            scale: 2, // High resolution
            width: cardWidth, // Exact width
            height: cardHeight // Exact height
        },
        jsPDF: { 
            unit: 'in', 
            format: [widthInInches, heightInInches], // Dynamic size
            orientation: widthInInches > heightInInches ? 'landscape' : 'portrait'
        }
    }).then(() => {
        button.style.display = 'block'; // Show the button again
    });
}
</script>

</body>
</html>
