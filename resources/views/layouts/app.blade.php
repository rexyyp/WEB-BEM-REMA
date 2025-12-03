<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title', 'BEM REMA UPI - Badan Eksekutif Mahasiswa Universitas Pendidikan Indonesia')</title>

    {{-- Favicon - Logo Suar Sangga --}}
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon.png') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}">

    {{-- SEO Meta Tags --}}
    <meta name="description" content="@yield('meta_description', 'Website resmi BEM REMA UPI - Portal informasi, berita, dan kegiatan Badan Eksekutif Mahasiswa Raya Universitas Pendidikan Indonesia.')">
    <meta name="keywords" content="@yield('meta_keywords', 'BEM REMA UPI, BEM UPI, Mahasiswa UPI, Organisasi Mahasiswa, Universitas Pendidikan Indonesia, Berita Kampus')">
    <meta name="author" content="BEM REMA UPI">
    <meta name="robots" content="@yield('robots', 'index, follow')">
    <link rel="canonical" href="@yield('canonical', url()->current())">

    {{-- Google Site Verification --}}
    @include('partials.google-verification')

    {{-- Open Graph / Facebook --}}
    <meta property="og:type" content="@yield('og_type', 'website')">
    <meta property="og:url" content="@yield('og_url', url()->current())">
    <meta property="og:title" content="@yield('og_title', 'BEM REMA UPI')">
    <meta property="og:description" content="@yield('og_description', 'Website resmi BEM REMA UPI - Portal informasi, berita, dan kegiatan mahasiswa.')">
    <meta property="og:image" content="@yield('og_image', asset('build/assets/image/Logo Suar Sangga.png'))">
    <meta property="og:locale" content="id_ID">
    <meta property="og:site_name" content="BEM REMA UPI">

    {{-- Twitter Card --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="@yield('twitter_url', url()->current())">
    <meta name="twitter:title" content="@yield('twitter_title', 'BEM REMA UPI')">
    <meta name="twitter:description" content="@yield('twitter_description', 'Website resmi BEM REMA UPI')">
    <meta name="twitter:image" content="@yield('twitter_image', asset('build/assets/image/Logo Suar Sangga.png'))">

    {{-- PWA Meta Tags --}}
    <meta name="theme-color" content="#37537A">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta name="apple-mobile-web-app-title" content="BEM REMA UPI">

    {{-- Additional Meta Tags from Pages --}}
    @stack('meta')

    {{-- Google Fonts --}}
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