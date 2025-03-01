<!DOCTYPE html>
<html  lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('site.360.head')
</head>

<body class="index-page">

{{ $header ?? '360 LISTADOS' }}



    <!-- Hero Section -->
    @isset($hero)
       {{$hero}}
    @endisset

    <!-- Features Section -->
    @isset($step)
        {{$step}}
    @endisset
    <!-- /Features Section -->

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
    @endisset<!-- /Pricing Section -->

    <!-- Faq Section -->
    @isset($flag)
        {{$flag}}
    @endisset
    <!-- /Faq Section -->

    <!-- /Work -->
    @isset($work)
          {{$work}}
      @endisset
    <!-- /Work -->

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

      @isset($plans)
          {{$plans}}
      @endisset


  @include('site.360.footer')

  <!-- Scroll Top -->
  <a class="whatsapp-button scroll-whatsapp d-flex align-items-center justify-content-center"><i class="bi bi-whatsapp"></i></a>

  <style>
    .whatsapp-button {
      position: fixed;
      bottom: 20px;
      right: 20px;
      width: 50px;
      height: 50px;
      background-color: #25D366;
      color: white;
      font-size: 24px;
      border-radius: 50%;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      text-decoration: none;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .whatsapp-button:hover {
      background-color: #1ebe57;
      color: white;
    }
  </style>
  <!-- Vendor JS Files -->
  <script src="{{asset('js/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('js/php-email-form/validate.js')}}"></script>
  <script src="{{asset('js/aos/aos.js')}}"></script>
  <script src="{{asset('js/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('js/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('js/purecounter/purecounter_vanilla.js')}}"></script>

  <!-- Main JS File -->
  <script src="{{asset('js/main.js')}}"></script>


</body>

</html>
