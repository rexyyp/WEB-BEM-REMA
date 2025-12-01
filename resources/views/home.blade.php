@extends('layouts.app')

@section('title', 'BEM REMA UPI - Badan Eksekutif Mahasiswa Universitas Pendidikan Indonesia')

@push('meta')
    {{-- Primary Meta Tags --}}
    <meta name="description" content="BEM REMA UPI adalah Badan Eksekutif Mahasiswa Universitas Pendidikan Indonesia. Kabinet Suar Sangga hadir sebagai pelayan dan penggerak mahasiswa UPI dengan transparansi, integritas, dan dedikasi.">
    <meta name="keywords" content="BEM REMA UPI, BEM UPI, Mahasiswa UPI, Universitas Pendidikan Indonesia, Kabinet Suar Sangga, Organisasi Mahasiswa, REMA UPI, Badan Eksekutif Mahasiswa">
    <meta name="author" content="BEM REMA UPI">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ url('/') }}">

    {{-- Open Graph / Facebook --}}
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:title" content="BEM REMA UPI - Badan Eksekutif Mahasiswa Universitas Pendidikan Indonesia">
    <meta property="og:description" content="Kabinet Suar Sangga BEM REMA UPI hadir sebagai pelayan dan penggerak mahasiswa UPI. Bergabunglah dalam pergerakan mahasiswa yang transparan dan berintegritas.">
    <meta property="og:image" content="{{ asset('build/assets/image/Logo Suar Sangga.png') }}">
    <meta property="og:site_name" content="BEM REMA UPI">
    <meta property="og:locale" content="id_ID">

    {{-- Twitter --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="{{ url('/') }}">
    <meta name="twitter:title" content="BEM REMA UPI - Badan Eksekutif Mahasiswa UPI">
    <meta name="twitter:description" content="Kabinet Suar Sangga BEM REMA UPI - Pelayan dan Penggerak Mahasiswa Universitas Pendidikan Indonesia">
    <meta name="twitter:image" content="{{ asset('build/assets/image/Logo Suar Sangga.png') }}">

    {{-- Additional SEO --}}
    <meta name="geo.region" content="ID-JB">
    <meta name="geo.placename" content="Bandung">
    <meta name="geo.position" content="-6.8621;107.5940">
    <meta name="ICBM" content="-6.8621, 107.5940">
@endpush

@push('structured-data')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "BEM REMA UPI",
  "alternateName": "Badan Eksekutif Mahasiswa REMA Universitas Pendidikan Indonesia",
  "url": "{{ url('/') }}",
  "logo": "{{ asset('build/assets/image/Logo Suar Sangga.png') }}",
  "description": "Badan Eksekutif Mahasiswa REMA UPI adalah organisasi mahasiswa yang bergerak untuk kesejahteraan dan kemajuan sivitas akademika Universitas Pendidikan Indonesia.",
  "foundingDate": "2024",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Bandung",
    "addressRegion": "Jawa Barat",
    "addressCountry": "ID"
  },
  "contactPoint": {
    "@type": "ContactPoint",
    "contactType": "Customer Service",
    "email": "bem@upi.edu"
  },
  "sameAs": [
    "https://www.instagram.com/bem.upi",
    "https://www.tiktok.com/@bem.upi",
    "https://www.linkedin.com/company/bem-rema-upi"
  ]
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebSite",
  "name": "BEM REMA UPI",
  "url": "{{ url('/') }}",
  "potentialAction": {
    "@type": "SearchAction",
    "target": {
      "@type": "EntryPoint",
      "urlTemplate": "{{ url('/berita') }}?q={search_term_string}"
    },
    "query-input": "required name=search_term_string"
  }
}
</script>
@endpush

@section('content')
    @include('partials.hero')
    @include('partials.about')
    @include('partials.leadership')
    @include('partials.news')
    @include('partials.vision-mission')
@endsection
