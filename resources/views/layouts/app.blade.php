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
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
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


        <script src="{{ asset('js/hamro-front-end.js') }}"></script>
        {{-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script> --}}
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">
        </script>
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



        {{-- <script>
            $('#createPostModal').on('show.bs.modal', function(e){
                var modal = $(this)
                console.log("sagar");
                initializeGoogleMap('map', modal, 27.7059, 85.3340)
            })
            var infoWindow,map;
            function initializeGoogleMap(mapElementId, card, a = 27.7059, b = 85.3340) {
                console.log("kas");
                var diff = 0.1000;
                //map options
                var options = {
                    zoom:17,
                    center:{lat:a, lng:b},
                }
                var restriction = {
                    componentRestrictions: {country: 'np'}
                };
                var infowindow = new google.maps.InfoWindow();
                var infowindowContent = document.getElementById('infowindow-content');
                infowindow.setContent(infowindowContent);
                var markerCoordinates= {lat:a, lng:b}
                //new map
                map = new google.maps.Map(document.getElementById(mapElementId), options);
                var input = document.getElementById('search');
                var searchBox = new google.maps.places.Autocomplete(input, restriction);
                var marker = new google.maps.Marker({
                    map:map,
                    position: markerCoordinates,
                    draggable: true
                });
                var geocoder = new google.maps.Geocoder();
                geocoder.geocode({latLng:marker.getPosition()},function (result ,status){
                    if('OK'===status){
                        address = result[0].formatted_address;
                        card.find('input[name=address_line_1]').val(address);
                        card.find('input[name=display_address]').val(address);
                    }
                })
                map.addListener('bounds_changed',function(){
                    searchBox.setBounds(map.getBounds());
                });
                searchBox.addListener('place_changed', function() {
                    infowindow.close();
                    marker.setVisible(false);
                    var place = searchBox.getPlace();
                    if (!place.geometry) {
                        window.alert("No details available for input: '" + place.name + "'");
                        return;
                    }
                    // If the place has a geometry, then present it on a map.
                    if (place.geometry.viewport) {
                        map.fitBounds(place.geometry.viewport);
                    } else {
                        map.setCenter(place.geometry.location);
                        map.setZoom(17);
                    }
                    marker.setPosition(place.geometry.location);
                    marker.setVisible(true);
                    var address = '';
                    if (place.address_components) {
                        address = [
                            (place.address_components[0] && place.address_components[0].short_name || ''),
                            (place.address_components[1] && place.address_components[1].short_name || ''),
                            (place.address_components[2] && place.address_components[2].short_name || '')
                        ].join(' ');
                    }
                    card.find('input[name=address_line_1]').val(address);
                    card.find('input[name=display_address]').val(address);
                    card.find('input[name=latitude]').val(place.geometry.location.lat());
                    card.find('input[name=longitude]').val(place.geometry.location.lng());
                });
                google.maps.event.addListener(marker, 'dragend', function(e) {
                    displayPosition(this.getPosition());
                    geocoder.geocode({latLng:marker.getPosition()},function (result ,status){
                        if('OK'===status){
                            address = result[0].formatted_address;
                            card.find('input[name=address_line_1]').val(address);
                            card.find('input[name=display_address]').val(address);
                        }

                    })
                });
                function displayPosition(pos) {
                    card.find('input[name=latitude]').val(pos.lat());
                    card.find('input[name=longitude]').val(pos.lng());
                }
            }
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC9_-5XwAG2EqiuzpFLEUK0ZX-P5Bgm9Yk&libraries=places" async defer></script> --}}

    @include('admin.partials.alert')
    @show
</body>
</html>
