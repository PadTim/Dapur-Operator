<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>

    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/landingPage.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/kopiHideung.css') }}">
</head>

<body>
    @include('Layout.WebPublic.StyleTambahan')
    <!-- ======= Header ======= -->
    @include('Layout.WebPublic.Header')
    <!-- End Header -->
   
    @yield('public-konten')

    <!-- ======= Footer ======= -->
    @include('Layout.WebPublic.Footer')
    <!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>


    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/plugins/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/plugins/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('assets/plugins/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
</body>

</html>
