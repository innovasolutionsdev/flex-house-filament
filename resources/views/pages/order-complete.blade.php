<x-app-layout>
    <style>
        /* Base styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container1 {
            padding: 40px;
            width: 600px;
            margin: 40px auto; /* Centers the container */
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Subtle shadow */
        }

        .header {
            display: flex; /* Two divs in a row */
            justify-content: space-between; /* Align items at opposite ends */
            align-items: center; /* Vertically center elements */
            padding-bottom: 20px;
            border-bottom: 1px solid #ddd; /* Divider line */
        }

        .company-info {
            color: #666; /* Gray for company address */
        }

        .content {
            padding-top: 30px;
        }

        .text-center {
            text-align: center;
        }

        .text-sm {
            font-size: 0.875rem; /* Small text */
        }

        .h1 {
            font-size: 1.5rem; /* Heading size */
        }
        .order-info{
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
        }
    </style>

    <div class="container1">
        <div class="header">
            <div class="h1">Order Confirmed </div>
            <div class="text-sm">Order ID: 1234567</div>
        </div>
        <div class="order-info">
        <div id="customer_address">

        </div>

        <div>
        First Box : <span id="firstBox"></span><br>
        Time : <span id="time"></span><br>
        </div>
        </div>

        <div class="flex justify-center mt-3">
            <img src="{{url('img/shopping-bag.png')}}" width="100px">
        </div>

        <div class="content">
            <div class="text-center">
                <h1 class="h1">Thank you for your purchase.</h1>
            </div>
            <div class="text-sm">
                Visit your account & billing page to manage your invoices, products, and services.
            </div>
            <div class="text-sm text-center pt-4">
                If you have any questions, please contact us at JustEat.help@gmail.com
            </div>
        </div>
    </div>

    <script>
        document.getElementById("time").innerText = localStorage.getItem('time');
        document.getElementById("firstBox").innerText = localStorage.getItem('date');
        document.getElementById("customer_address").innerText = localStorage.getItem('useraddress');
    </script>
</x-app-layout>
