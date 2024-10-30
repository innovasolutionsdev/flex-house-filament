<!-- head.blade.php -->
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

    <meta name="theme-color" content="#6777ef" />
    <link rel="manifest" href="{{ asset('/manifest.json') }}">
    {{-- PWA Codes end --}}

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Innova Solutions</title>

    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}" type="image/x-icon">

    <!-- Fonts -->

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Styles -->

    @livewireStyles
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- PWA Detection code --}}
    <script>
      if (window.matchMedia('(display-mode: standalone)').matches) {
        localStorage.setItem('pwaMode', true);
      } else {
        localStorage.removeItem('pwaMode');
      }
    </script>


</head>