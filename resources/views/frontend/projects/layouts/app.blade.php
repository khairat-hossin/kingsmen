<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('img/favicon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('img/favicon.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>@yield('title') | {{ config('app.name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{{ setting('meta_description') }}">
    <meta name="keyword" content="{{ setting('meta_keyword') }}">
    <title>Home-Ecogardens</title>

    @include('frontend.includes.meta')

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  
  @stack('before-styles')
  <script src="{{ asset('vendor/jquery/jquery-3.6.4.min.js') }}"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    @vite(['resources/sass/app-backend.scss', 'resources/js/app-backend.js'])
  <!-- Favicons -->
  <link href="{{ asset('../../assets/img/ecogardens/favicon.png') }}" rel="icon">
  <link href="{{ asset('../../assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('../../assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('../../assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('../../assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('../../assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('../../assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('../../assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('../../assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('../../assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('../../assets/css/ecogardens.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Ecogardens
  * Updated: May 6 2023 with Bootstrap v5.2.3
  * Template URL: https://masirul-codify.github.io/ecogardens/
  * Author:https://triplebytesoft.com/

  ======================================================== -->
  @stack('after-styles')
</head>

<body>

    @include('frontend.projects.includes.header')

    <main>
        @yield('content')
    </main>

    @include('frontend.projects.includes.footer')

</body>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  <!-- Scripts -->
  @stack('before-scripts')

  <!-- Vendor JS Files -->
  <script src="{{ asset('../../assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('../../assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('../../assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('../../assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{ asset('../../assets/vendor/php-email-form/validate.js') }}"></script>
    <!-- Swiper JS -->
  <script src="{{ asset('../../assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('../../assets/js/ecogardens.js') }}"></script>
  <!-- Initialize Swiper -->
  @stack('after-scripts')

</html>
