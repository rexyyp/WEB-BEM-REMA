<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'BEM REMA UPI')</title>

    {{-- Default Meta Tags --}}
    <meta name="description" content="@yield('meta_description', 'BEM REMA UPI - Badan Eksekutif Mahasiswa Universitas Pendidikan Indonesia')">
    <meta name="keywords" content="@yield('meta_keywords', 'BEM REMA UPI, BEM UPI, Mahasiswa UPI')">
    <meta name="author" content="BEM REMA UPI">

    {{-- Additional Meta Tags from Pages --}}
    @stack('meta')

    {{-- Google Fonts - Editorial Font Pairing --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&family=Merriweather:wght@500;600&family=Playfair+Display:ital@1&family=Montserrat:wght@300;400;500;600;700;800&family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    {{-- Structured Data --}}
    @stack('structured-data')

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased">
    @include('partials.header')

    <main class="w-full overflow-hidden">
        @yield('content')
    </main>

    @include('partials.footer')

    <script>
        // Scroll animations
        const observerOptions = {
            threshold: 0.2,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.animate-on-scroll').forEach(el => {
            observer.observe(el);
        });

        // Mobile menu toggle
        function toggleMobileMenu() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        }
    </script>
</body>

</html>