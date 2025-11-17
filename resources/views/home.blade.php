@extends('layouts.app')

@section('title', 'BEM REMA UPI - Beranda')

@section('content')
    @include('partials.hero')
    @include('partials.about')
    @include('partials.achievement')
    @include('partials.leadership')
    @include('partials.news')
    @include('partials.vision-mission')
@endsection
