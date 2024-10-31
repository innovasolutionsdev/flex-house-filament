@include('layouts.head')

<body class="font-sans antialiased">

    <script>
        if (window.matchMedia('(display-mode: standalone)').matches) {

        } else {
            document.write(`@livewire('navigation-menu')`);
        }
    </script>
    {{-- @livewire('navigation-menu') --}}


    <!-- Page Content -->
    <main>
        {{ $slot }}
    </main>

    {{--
        @include('layouts.footer') --}}
    <script>
        if (window.matchMedia('(display-mode: standalone)').matches) {

        } else {
            document.write(`@include('layouts.footer')`);
        }
    </script>


    @include('layouts.bottom-nav ')




    <!-- component -->
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




    @stack('modals')
    @livewireScripts

</body>

</html>

