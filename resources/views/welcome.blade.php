<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        @vite('resources/css/app.css')
        
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        
        <!-- AOS Stylesheet -->
        <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    </head>
    <body class="bg-white">
        @include('components.navbar')
        @include('components.home')
        @include('components.about')
        @include('components.services')
        @include('components.price')
        @include('components.faq')
        @include('components.contact')
        @include('components.footer')
        
        <!-- AOS Script -->
        <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                AOS.init({
                    duration: 1000,  // Durasi animasi (opsional)
                    once: false      // Aktifkan animasi setiap kali elemen terlihat
                });
            });
        </script>
    </body>
</html>
