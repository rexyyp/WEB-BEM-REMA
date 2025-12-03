@extends('layouts.app')

@section('title', 'BEM REMA UPI - Badan Eksekutif Mahasiswa Universitas Pendidikan Indonesia')
@section('meta_description', 'Website resmi BEM REMA UPI - Portal informasi, berita, dan kegiatan Badan Eksekutif Mahasiswa Raya Universitas Pendidikan Indonesia.')
@section('meta_keywords', 'BEM REMA UPI, BEM UPI, Mahasiswa UPI, Organisasi Mahasiswa, Universitas Pendidikan Indonesia, Berita Kampus, Kegiatan Mahasiswa')
@section('canonical', url('/'))

@section('og_title', 'BEM REMA UPI - Badan Eksekutif Mahasiswa Universitas Pendidikan Indonesia')
@section('og_description', 'Website resmi BEM REMA UPI - Portal informasi, berita, dan kegiatan mahasiswa.')
@section('og_url', url('/'))

@push('structured-data')
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "BEM REMA UPI",
        "alternateName": "Badan Eksekutif Mahasiswa Raya Universitas Pendidikan Indonesia",
        "url": "{{ url('/') }}",
        "logo": "{{ asset('build/assets/image/Logo Suar Sangga.png') }}",
        "description": "Badan Eksekutif Mahasiswa Raya Universitas Pendidikan Indonesia",
        "address": {
            "@type": "PostalAddress",
            "addressCountry": "ID",
            "addressRegion": "Jawa Barat",
            "addressLocality": "Bandung"
        },
        "sameAs": [
            "https://www.instagram.com/bemremaupi/",
            "https://twitter.com/bemremaupi"
        ]
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