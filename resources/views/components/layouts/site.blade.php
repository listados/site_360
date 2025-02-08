<!DOCTYPE html>
<html  lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('site.360.head')
    @vite(['resources/css/main.css', 'resources/js/main.js'])
</head>

<body class="index-page">

{{ $header ?? '360 LISTADOS' }}

<main class="main">
    <!-- Hero Section -->
    @isset($hero)
       {{$hero}}
    @endisset
    <!-- Features step by step -->
    @isset($step)
        {{$step}}
    @endisset
    <!-- Features 2 Section -->
    @isset($feature)
        {{$feature}}
    @endisset
    <!-- /Features 2 Section -->
    <!-- Call To Action Section -->
    @isset($call)
        {{$call}}
    @endisset
    <!-- /Call To Action Section -->
    <!-- Clients Section -->
    @isset($client)
        {{$client}}
    @endisset
    <!-- /Clients Section -->
    <!-- Testimonials Section -->
    @isset($testimonials)
{{--        {{$testimonials}}--}}
    @endisset
    <!-- /Testimonials Section -->
    <!-- Services Section -->
    @isset($services)
        {{$services}}
    @endisset
    <!-- /Services Section -->
    <!-- Pricing Section -->
    @isset($price)
        {{$price}}
    @endisset
    <!-- /Pricing Section -->
    <!-- Faq Section -->
    @isset($flag)
        {{$flag}}
    @endisset
    <!-- /Faq Section -->
    <!-- LISTADOS -->
    @isset($listados)
        {{$listados}}
    @endisset
    <!-- /LISTADOS -->
    <!-- Contact Section -->
    @isset($contact)
        {{$contact}}
    @endisset
    <!-- /Contact Section -->

</main>

@include('site.360.footer')

<!-- Scroll Top -->
<a class="whatsapp-button scroll-whatsapp d-flex align-items-center justify-content-center"><i class="bi bi-whatsapp"></i></a>
</body>

</html>
