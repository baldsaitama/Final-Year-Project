<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('meta')
    <title>
        @section('title')
        @show
        | Ghar Bhada
    </title>

    @section('stylesheets')r
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/responsive.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito" rel="stylesheet">
    <style>
        .select2-results__option[aria-selected=true] {
          display: none;
        }
    </style>
    @show

</head>
<body>
    <div id="app">
        @include('layouts.partials.navbar')
        @yield('content')
        @include('layouts.partials.footer')
    </div>

    @section('javascripts')
        <script>
            const BASE_URL = "{{ url('/') }}";
            const CURRENT_URL = "{{ url()->current() }}";
        </script>
        <script type="text/javascript" src="{{asset('js/jQuery.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/script.js')}}"></script>
        {{-- <script type="text/javascript" src="{{asset('js/gharBhadaScrollTop.js')}}"></script> --}}
        <script type="text/javascript" src="{{asset('js/wow.js')}}"></script>
        <script>
            new WOW().init();
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
        <script src="{{asset('js/smooth-scroll.js')}}"></script>
        <script type="text/javascript">
            var scroll = new SmoothScroll('a[href*="#buyHouse"]', {
                speed: 1500,
                offset: 100,

            });
            var scroll = new SmoothScroll('a[href*="#rentHouse"]', {
                speed: 1500,
                offset: 100,

            });
        </script>


{{-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">
        </script>
        <script src="{{ asset('js/hamro-front-end.js') }}"></script>
        {{-- <script src="{{asset('js/imageUpload.js')}}"></script> --}}
        {{-- <script>
            (function(){var options={};$('.js-uploader__box').uploader(options);}());
        </script> --}}
        <script type="text/javascript">
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-36251023-1']);
            _gaq.push(['_setDomainName', 'jqueryscript.net']);
            _gaq.push(['_trackPageview']);
            (function() {
                var ga = document.createElement('script');
                ga.type = 'text/javascript';
                ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(ga, s);
            })();
        </script>
        <script>
            $('#createPostModal').on('show.bs.modal', function (e) {
                var form = $(this).find('form');
                form.trigger('reset')
            });
        </script>




    @include('admin.partials.alert')
    @show
</body>
</html>
