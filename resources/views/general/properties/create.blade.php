@extends('layouts.app')

@section('title')
    Create Package
@endsection

@section('stylesheets')
    @parent
    <style>
        #map{
            height:250px;
            width:100%;
        }
        .pac-container {
            z-index: 1051 !important;
        }
    </style>
@endsection

@section('content')
    <div class="wrapper">
        <div class="container-fluid">
            <div class="postProperty">
                <h2>Post Property</h2>
                <div class="row" id="create-property-box">
                    <div class="col-lg-12 mb-4">
                        <div class="row">
                            <div class="col-4">
                                <label>Property Status</label>
                            </div>
                            <div class="col-8">
                                <select class="form-control">
                                    <option class="rent" value="rent">
                                        Rent
                                    </option>
                                    <option class="sale" value="sale">
                                        Sale
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 mb-4">
                        <div class="row">
                            <div class="col-4">
                                <label>Category</label>
                            </div>
                            <div class="col-8">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                    <label class="form-check-label" for="inlineRadio1">House</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">Flat</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                                    <label class="form-check-label" for="inlineRadio3">Room</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option4">
                                    <label class="form-check-label" for="inlineRadio4">Apartment</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio5" value="option5">
                                    <label class="form-check-label" for="inlineRadio5">Office Space</label>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 mb-4">
                        <div class="row">
                            <div class="col-4">
                                <label>Category</label>
                            </div>
                            <div class="col-8">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio6" value="option6">
                                    <label class="form-check-label" for="inlineRadio6">Residental</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio7" value="option7">
                                    <label class="form-check-label" for="inlineRadio7">Commercial</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 mb-4">
                        <div class="row">
                            <div class="col-4">
                                <label>Property Face Option</label>
                            </div>
                            <div class="col-8">
                                <select class="form-control">
                                    <option class="east" value="east">
                                        East
                                    </option>
                                    <option class="west" value="west">
                                        West
                                    </option>
                                    <option class="southEast" value="southEast">
                                        South East
                                    </option>
                                    <option class="southWest" value="southWest">
                                        South West
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 mb-4">
                        <div class="row">
                            <div class="col-lg-12 mb-1">
                                <label style="float: none; text-align: center;">Road :</label>
                            </div>
                            <div class="col-4">
                                <input type="text" class="form-control" placeholder="Length">
                            </div>
                            <div class="col-4">
                                <select class="form-control">
                                    <option class="roadType" value="" disabled="disabled" selected="true">
                                        Unit
                                    </option>
                                    <option class="feet" value="feet">
                                        Feet
                                    </option>
                                    <option class="meter" value="meter">
                                        Meter
                                    </option>
                                </select>
                            </div>
                            <div class="col-4">
                                <select class="form-control">
                                    <option class="roadType" value="roadType" disabled="disabled" selected="true">
                                        Road Type
                                    </option>
                                    <option class="roadType" value="blacktopped">
                                        Black Topped
                                    </option>
                                    <option class="roadType" value="gravelled">
                                        Gravelled
                                    </option>
                                    <option class="roadType" value="muddy">
                                        Muddy
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 mb-4">
                        <div class="row">
                            <div class="col-lg-12 mb-1">
                                <label style="float: none; text-align: center;">Built Year :</label>
                            </div>
                            <div class="col-4">
                                <input type="text" class="form-control" placeholder="e.g. 2077">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 mb-4">
                        <div class="row">
                            <div class="col-4">
                                <label>Furnishing</label>
                            </div>
                            <div class="col-8">
                                <select class="form-control">
                                    <option class="furnish" value="" disabled="disabled" selected="true">
                                        Furnish
                                    </option>
                                    <option class="furnish" value="unfurnished">
                                        Unfurnished
                                    </option>
                                    <option class="furnish" value="semifurnished">
                                        Semi-Furnished
                                    </option>
                                    <option class="furnish" value="wellfurnished">
                                        Well-Furnished
                                    </option>
                                    <option class="southWest" value="southWest">
                                        South West
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 mb-4">

                        <div class="row">
                            <div class="col-4">
                                <label>Kitchen</label>
                            </div>
                            <div class="col-8">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                    <label class="form-check-label" for="inlineRadio1">1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">2</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                                    <label class="form-check-label" for="inlineRadio3">3</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option4">
                                    <label class="form-check-label" for="inlineRadio4">4</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio5" value="option5">
                                    <label class="form-check-label" for="inlineRadio5">5</label>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 mb-4">
                        <div class="row">
                            <div class="col-4">
                                <label>Bedroom</label>
                            </div>
                            <div class="col-8">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                    <label class="form-check-label" for="inlineRadio1">1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">2</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                                    <label class="form-check-label" for="inlineRadio3">3</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option4">
                                    <label class="form-check-label" for="inlineRadio4">4</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio5" value="option5">
                                    <label class="form-check-label" for="inlineRadio5">5</label>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 mb-4">
                        <div class="row">
                            <div class="col-4">
                                <label>Living Room</label>
                            </div>
                            <div class="col-8">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                    <label class="form-check-label" for="inlineRadio1">1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">2</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                                    <label class="form-check-label" for="inlineRadio3">3</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option4">
                                    <label class="form-check-label" for="inlineRadio4">4</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio5" value="option5">
                                    <label class="form-check-label" for="inlineRadio5">5</label>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 mb-4">
                        <div class="row">
                            <div class="col-4">
                                <label>Bathroom</label>
                            </div>
                            <div class="col-8">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                    <label class="form-check-label" for="inlineRadio1">1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">2</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                                    <label class="form-check-label" for="inlineRadio3">3</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option4">
                                    <label class="form-check-label" for="inlineRadio4">4</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio5" value="option5">
                                    <label class="form-check-label" for="inlineRadio5">5</label>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 mb-4">
                        <div class="row">
                            <div class="col-4">
                                <label>Property Title</label>
                            </div>
                            <div class="col-8">
                                <input type="text" class="form-control" placeholder="e.g. Sunshin Apartment for Sale">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 mb-4">
                        <div class="row">
                            <div class="col-4">
                                <label>Description</label>
                            </div>
                            <div class="col-8">
                                <input type="text" class="form-control" placeholder="Describe your property">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 mb-4">
                        <div class="row">
                            <div class="col-lg-12 mb-1">
                                <label style="float: none; text-align: center;">Price :</label>
                            </div>
                            <div class="col-4">
                                <input type="text" class="form-control" placeholder="Enter Price">
                            </div>
                            <div class="col-4">
                                <select class="form-control">
                                    <option class="priceunit" value="" disabled="disabled" selected="true">
                                        Price Unit
                                    </option>
                                    <option class="priceunit" value="permonth">
                                        Per Month
                                    </option>
                                    <option class="priceunit" value="onwards">
                                        Onwards
                                    </option>
                                    <option class="priceunit" value="perroom">
                                        Per Room
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <input type="text" class="form-control" id="search" placeholder="Search....">
                    <div id="map" class="mb-3">

                    </div>
                    <input type="text" name="display_address" id="display-address" class="form-control" disabled>
                    <input type = "hidden" name="address_line_1" >
                    <input type = "hidden" name="longitude">
                    <input type = "hidden" name="latitude">

                    <div class="col-lg-12">
                        <div class="bhadaBnt">
                            <button class="btn btn-bhadaBtn">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascripts')
    @parent
    <script>
        var card = $('#homestay-edit-box');
        $lat_val = $('#latitude').val();
        $lng_val = $('#longitude').val();
        $lat_val = parseFloat($lat_val);
        $lng_val = parseFloat($lng_val);
        var current_lat =27.7059;
        var current_lng =85.3340;
        if(BASE_URL.startsWith('https:') || BASE_URL.includes('http://127.0.0.1:') || BASE_URL.includes('http://localhost')){
            if ("geolocation" in navigator) {
            console.log('yes');
                navigator.geolocation.getCurrentPosition(function(position) {
                $('#latitude').val(position.coords.latitude);
                $('#longitude').val(position.coords.longitude);
                current_lat = position.coords.latitude;
                current_lng = position.coords.longitude;
                });
            } else {
            console.log('no');
            }
        }
        // initializeGoogleMap('map', modal, current_lat, current_lng);
        var infoWindow,map;
        function initializeGoogleMap() {
            if ($lat_val) {
                current_lat = $lat_val;
            }
            if ($lng_val) {
                current_lng = $lng_val;
            }
            var diff = 0.1000;
            //map options
            var options = {
                zoom:17,
                center:{lat:current_lat, lng:current_lng},
            }
            var restriction = {
                componentRestrictions: {country: 'np'}
            };
            var infowindow = new google.maps.InfoWindow();
            var infowindowContent = document.getElementById('infowindow-content');
            infowindow.setContent(infowindowContent);
            var markerCoordinates= {lat:current_lat, lng:current_lng}
            //new map
            map = new google.maps.Map(document.getElementById('map'), options);
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
                    console.log(address);
                })
            });

            function displayPosition(pos) {
                card.find('input[name=latitude]').val(pos.lat());
                card.find('input[name=longitude]').val(pos.lng());
            }
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC9_-5XwAG2EqiuzpFLEUK0ZX-P5Bgm9Yk&callback=initializeGoogleMap&libraries=places"
        async defer>
    </script>
@endsection