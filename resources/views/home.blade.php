@extends('layouts.app')

@section('title', 'BEM REMA UPI - Badan Eksekutif Mahasiswa Universitas Pendidikan Indonesia')

@push('meta')
<meta name="description" content="BEM REMA UPI adalah Badan Eksekutif Mahasiswa Universitas Pendidikan Indonesia.">
@endpush

@section('content')
@include('partials.hero')
@include('partials.about')
@include('partials.leadership')
@include('partials.news')
@include('partials.vision-mission')
@endsection