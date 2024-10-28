{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schedule Details</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-6">
    <div class="max-w-4xl mx-auto bg-white shadow-lg rounded-lg p-6">
        <h1 class="text-3xl font-bold text-gray-800 mb-4">{{ $schedule->name }}</h1>

        <h2 class="text-2xl font-semibold text-gray-700 mb-2">Workouts</h2>
        @foreach ($schedule->workouts as $workout)
            <div class="mb-4">
                <h3 class="text-xl font-semibold text-gray-600">{{ $workout->name }}</h3>
                <ul class="list-disc ml-6">
                    @foreach ($workout->exercises as $exercise)
                        <li class="text-gray-500">
                            {{ $exercise->name }} -
                            <span class="font-medium">Sets:</span> {{ $exercise->sets }},
                            <span class="font-medium">Reps:</span> {{ $exercise->reps }},
                            <span class="font-medium">Rest:</span> {{ $exercise->rest_time }} seconds
                        </li>
                    @endforeach
                </ul>
            </div>
        @endforeach
    </div>
</body>
</html> --}}

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schedule Details</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-6">
    <div class="max-w-4xl mx-auto bg-white shadow-lg rounded-lg p-6">
        <h1 class="text-3xl font-bold text-gray-800 mb-4">{{ $schedule->name }}</h1>

        <h2 class="text-2xl font-semibold text-gray-700 mb-2">Workouts</h2>

        @foreach ($schedule->workouts as $workout)
            <div class="mb-4">
                <h3 class="text-xl font-semibold text-gray-600">{{ $workout->name }}</h3>
                <table class="min-w-full bg-white border border-gray-300 mt-2">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="py-2 px-4 border border-gray-300 text-left">Exercise Name</th>
                            <th class="py-2 px-4 border border-gray-300 text-left">Sets</th>
                            <th class="py-2 px-4 border border-gray-300 text-left">Reps</th>
                            <th class="py-2 px-4 border border-gray-300 text-left">Rest Time (seconds)</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($workout->exercises as $exercise)
                            <tr class="hover:bg-gray-100">
                                <td class="py-2 px-4 border border-gray-300">{{ $exercise->name }}</td>
                                <td class="py-2 px-4 border border-gray-300">{{ $exercise->sets }}</td>
                                <td class="py-2 px-4 border border-gray-300">{{ $exercise->reps }}</td>
                                <td class="py-2 px-4 border border-gray-300">{{ $exercise->rest_time }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endforeach
    </div>
</body>
</html> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schedule Details</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>
    <script>
        function downloadPDF() {
            const button = document.getElementById('downloadButton');
            button.style.display = 'none'; // Hide the button

            const button2 = document.getElementById('backButton');
            button2.style.display = 'none'; // Hide the button

            const element = document.getElementById('schedule');
            html2pdf(element, {
                margin: 1,
                filename: 'schedule.pdf',
                image: { type: 'jpeg', quality: 0.98 },
                html2canvas: { scale: 2 },
                jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
            }).then(() => {
                button.style.display = 'block'; // Show the button again
                button2.style.display = 'block'; // Show the button again
            });
        }

        function goBack() {
            window.history.back();
        }
    </script>
</head>
<body class="bg-gray-100 p-6">
    <div id="schedule" class="max-w-4xl mx-auto bg-white shadow-lg rounded-lg p-6">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-3xl font-bold text-gray-800">{{ $schedule->name }}</h1>
            <div class="flex space-x-4">
                <button id="downloadButton" onclick="downloadPDF()" class="bg-gradient-to-r from-blue-500 to-blue-700 text-white px-6 py-2 rounded-full shadow-lg hover:from-blue-600 hover:to-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-500 focus:ring-opacity-50 transform transition-transform duration-300 hover:scale-105">
                    Download
                </button>
                <button id="backButton" onclick="goBack()" class="bg-gray-500 text-white px-6 py-2 rounded-full shadow-lg hover:bg-gray-600 focus:outline-none focus:ring-4 focus:ring-gray-500 focus:ring-opacity-50 transform transition-transform duration-300 hover:scale-105">
                    Back
                </button>
            </div>
        </div>

        <h2 class="text-2xl font-semibold text-gray-700 mb-4">Workouts</h2>

        @foreach ($schedule->workouts as $workout)
            <div class="mb-6">
                <h3 class="text-xl font-semibold text-gray-600 mb-2">{{ $workout->name }}</h3>
                <table class="min-w-full bg-white border border-gray-200 rounded-lg overflow-hidden">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="py-3 px-4 border-b border-gray-200 text-left text-sm font-semibold text-gray-700">Exercise Name</th>
                            <th class="py-3 px-4 border-b border-gray-200 text-left text-sm font-semibold text-gray-700">Sets</th>
                            <th class="py-3 px-4 border-b border-gray-200 text-left text-sm font-semibold text-gray-700">Reps</th>
                            <th class="py-3 px-4 border-b border-gray-200 text-left text-sm font-semibold text-gray-700">Rest Time (seconds)</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($workout->exercises as $exercise)
                            <tr class="hover:bg-gray-50">
                                <td class="py-3 px-4 border-b border-gray-200">{{ $exercise->name }}</td>
                                <td class="py-3 px-4 border-b border-gray-200">{{ $exercise->sets }}</td>
                                <td class="py-3 px-4 border-b border-gray-200">{{ $exercise->reps }}</td>
                                <td class="py-3 px-4 border-b border-gray-200">{{ $exercise->rest_time }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endforeach
    </div>
</body>
</html>
