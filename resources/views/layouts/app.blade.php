<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-9JTP7M54BJ"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">

    {{-- PWA Codes start --}}
    <meta name="apple-mobile-web-app-status-bar" content="#01d679" >
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="Innova Solutions">
    <link rel="apple-touch-icon" href="{{ asset('logo.png') }}">
    {{-- splash screen icons --}}

    <link rel="apple-touch-startup-image" href="{{ asset('logo.png') }}">
    {{-- icons  --}}
    <link rel="icon" type="image/png" sizes="36x36" href="{{ asset('/pwa/assets/icons/icon-36x36.png') }}">
    <link rel="icon" type="image/png" sizes="48x48" href="{{ asset('/pwa/assets/icons/icon-48x48.png') }}">
    <link rel="icon" type="image/png" sizes="72x72" href="{{ asset('/pwa/assets/icons/icon-72x72.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('/pwa/assets/icons/icon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="128x128" href="{{ asset('/pwa/assets/icons/icon-128x128.png') }}">
    <link rel="icon" type="image/png" sizes="144x144" href="{{ asset('/pwa/assets/icons/icon-144x144.png') }}">
    <link rel="icon" type="image/png" sizes="152x152" href="{{ asset('/pwa/assets/icons/icon-152x152.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('/pwa/assets/icons/icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="384x384" href="{{ asset('/pwa/assets/icons/icon-384x384.png') }}">
    <link rel="icon" type="image/png" sizes="512x512" href="{{ asset('/pwa/assets/icons/icon-512x512.png') }}">
    <!-- PWA  -->
    <meta name="theme-color" content="#6777ef" />
    {{-- <link rel="apple-touch-icon" href="{{ asset('logo.png') }}"> --}}
    <link rel="manifest" href="{{ asset('/manifest.json') }}">
    {{-- PWA Codes end --}}

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Just Eat</title>

    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}" type="image/x-icon">


    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>



    <!-- Styles -->
    @livewireStyles

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet">



    <!-- Template Stylesheet -->
    <link href="{{ url('css/style.css') }}" rel="stylesheet">
</head>

<body class="font-sans antialiased">
    <x-banner />

    <div class="min-h-screen bg-gray-100">
        @livewire('navigation-menu')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>

        <!-- Footer Start -->
        <!-- component -->
        {{--            <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css"> --}}
        <link rel="stylesheet"
            href="{{ url('https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}">

        {{-- pwa script start --}}
        <script src="{{ asset('/sw.js') }}"></script>
        <script>
            if ("serviceWorker" in navigator) {
                // Register a service worker hosted at the root of the
                // site using the default scope.
                navigator.serviceWorker.register("/sw.js").then(
                    (registration) => {
                        console.log("Service worker registration succeeded:", registration);
                    },
                    (error) => {
                        console.error(`Service worker registration failed: ${error}`);
                    },
                );
            } else {
                console.error("Service workers are not supported.");
            }
        </script>
        {{-- pwa script end --}}

        <footer class="footer-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="contact-option">
                            <span>Phone</span>
                            <p>(123) 118 9999 - (123) 118 9999</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contact-option">
                            <span>Address</span>
                            <p>72 Kangnam, 45 Opal Point Suite 391</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contact-option">
                            <span>Email</span>
                            <p>contactcompany@Gutim.com</p>
                        </div>
                    </div>
                </div>
                <div class="subscribe-option set-bg" data-setbg="img/footer-signup.jpg">
                    <div class="so-text">
                        <h4>Subscribe To Our Mailing List</h4>
                        <p>Sign up to receive the latest information </p>
                    </div>
                    <form action="#" class="subscribe-form">
                        <input type="text" placeholder="Enter Your Mail">
                        <button type="submit"><i class="fa fa-send"></i></button>
                    </form>
                </div>
                <div class="copyright-text">
                    <ul>
                        <li><a href="#">Term&Use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                    <p>&copy;
                    <p>
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | A creation by <a href="#"
                            target="_blank">Innova Solutions</a>
                    </p>
                    </p>
                    <div class="footer-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Section End -->

        @stack('modals')

        @livewireScripts
</body>

</html>
