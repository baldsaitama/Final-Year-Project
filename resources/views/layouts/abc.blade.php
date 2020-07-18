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

    @section('stylesheets')

        <link rel="stylesheet" type="text/css" href="{{asset('dashboard/css/bootstrap.min.css')}}">
        <link href="https://fonts.googleapis.com/css2?family=Nunito" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{asset('dashboard/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('dashboard/css/owl.theme.default.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('dashboard/css/styles.css')}}">
    @show

</head>
<body>
<div id="app">
    @include('layouts.partials.dashboardnav')
    @yield('content')
    @include('layouts.partials.footer')
</div>

@section('javascripts')
    <script>
        const BASE_URL = "{{ url('/') }}";
        const CURRENT_URL = "{{ url()->current() }}";
    </script>
    <script type="text/javascript" src="{{asset('dashboard/js/jquery-3.2.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('dashboard/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('dashboard/js/owl.carousel.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('dashboard/js/script.js')}}"></script>
    <script type="text/javascript" src="{{asset('dashboard/js/feather.min.js')}}"></script>
    <script>
        feather.replace()
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
