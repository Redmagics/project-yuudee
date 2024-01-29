<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <link rel="icon" to="/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    {{-- --JS-- --}}
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://kit.fontawesome.com/924b5e10e1.js" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/css.gg@2.0.0/icon s/css/chevron-down.css' rel='stylesheet'>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>
    {{-- --CSS-- --}}
    {{-- X sidebar --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6/dist/css/bootstrap.min.css" rel="stylesheet">
      <!-- Include Select2 from CDN -->
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css"> --}}
    {{-- --CSS BOOSTRAP-- --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    {{-- --CSS SWIPER -- --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    {{-- X sidebar --}}
    <link href="{{ asset('/assets/css/ppcss/dashboard.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('/assets/css/gallerycss/theme.css') }}" rel="stylesheet" type="text/css"/>
    {{-- --CSS-- --}}
     <link href="{{ asset('/assets/css/mcss/hometest.css') }}" rel="stylesheet" type="text/css" />
     <link href="{{ asset('/assets/css/re-spacing.css') }}" rel="stylesheet" type="text/css"/>




</head>

<body data-aos-easing="ease" data-aos-duration="1200" data-aos-delay="0" class="" style="">
    @include('layout.menu')
            @yield('content')
            @unless(Auth::check())
            @include('layout.footer')
            @endunless



    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
    <!-- Include Select2 from CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    {{-- <script type="module" crossorigin="" src="{{ asset('/assets/js/ppjs/dashboard.js"') }}"></script> --}}
    <script type="module" crossorigin="" src="{{ asset('/assets/js/ppjs/script.js') }}"></script>
    <script type="module" crossorigin="" src="{{ asset('/assets/js/galleryjs/theme.js') }}"></script>
    {{-- tabpanel --}}
    <script src="{{ asset('/assets/js/galleryjs/bootstrap-js/bootstrap.bundle.js') }}"></script>
    {{-- Image popup --}}
    <script src="{{ asset('/assets/js/galleryjs/magnific-popup-js/jquery.magnific-popup.min.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="{{ asset('/assets/js/mjs/indextest.js') }}"></script>

</body>
</html>
