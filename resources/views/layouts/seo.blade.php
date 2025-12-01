<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    {{-- SEO Meta Tags --}}
    <title>{{ $title ?? 'BEM REMA UPI - Badan Eksekutif Mahasiswa Raya Universitas Pendidikan Indonesia' }}</title>
    <meta name="description" content="{{ $description ?? 'Website resmi BEM REMA UPI - Portal informasi, berita, dan kegiatan Badan Eksekutif Mahasiswa Raya Universitas Pendidikan Indonesia.' }}">
    <meta name="keywords" content="{{ $keywords ?? 'BEM REMA UPI, BEM UPI, Mahasiswa UPI, Organisasi Mahasiswa, Universitas Pendidikan Indonesia, Berita Kampus' }}">
    <meta name="author" content="BEM REMA UPI">
    <meta name="robots" content="index, follow">

    {{-- Open Graph / Facebook --}}
    <meta property="og:type" content="{{ $ogType ?? 'website' }}">
    <meta property="og:url" content="{{ $ogUrl ?? url()->current() }}">
    <meta property="og:title" content="{{ $ogTitle ?? $title ?? 'BEM REMA UPI' }}">
    <meta property="og:description" content="{{ $ogDescription ?? $description ?? 'Website resmi BEM REMA UPI' }}">
    <meta property="og:image" content="{{ $ogImage ?? asset('build/assets/image/Logo Suar Sangga.png') }}">
    <meta property="og:locale" content="id_ID">
    <meta property="og:site_name" content="BEM REMA UPI">

    {{-- Twitter Card --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="{{ $title ?? 'BEM REMA UPI' }}">
    <meta name="twitter:description" content="{{ $description ?? 'Website resmi BEM REMA UPI' }}">
    <meta name="twitter:image" content="{{ $ogImage ?? asset('build/assets/image/Logo Suar Sangga.png') }}">

    {{-- Canonical URL --}}
    <link rel="canonical" href="{{ $canonical ?? url()->current() }}">

    {{-- Favicon --}}
    <link rel="icon" type="image/png" href="{{ asset('build/assets/image/Logo Suar Sangga.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('build/assets/image/Logo Suar Sangga.png') }}">

    {{-- Additional meta tags can be added here --}}
    @stack('meta')

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('styles')
</head>

<body>
    {{ $slot }}

    @stack('scripts')
</body>

</html>