@extends('layouts.app')

@section('title')
    Create Package
@endsection

@section('stylesheets')
    @parent
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css" rel="stylesheet" />
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
    <form method="POST" action="{{ route('properties.store') }}" id="createPropertyForm" enctype="multipart/form-data">
        @csrf
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
                                    <select required="required" class="form-control" name="status">
                                        <option class="rent" value="rent" selected="selected" disabled>
                                            Select Property Status
                                        </option>
                                        <option class="rent" value="Rent">
                                            Rent
                                        </option>
                                        <option class="sale" value="Sale">
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
                                    <div  class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="category" id="inlineRadio1" value="House">
                                        <label class="form-check-label" for="inlineRadio1">House</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="category" id="inlineRadio2" value="Flat">
                                        <label class="form-check-label" for="inlineRadio2">Flat</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="category" id="inlineRadio3" value="Room">
                                        <label class="form-check-label" for="inlineRadio3">Room</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="category" id="inlineRadio4" value="Apartment">
                                        <label class="form-check-label" for="inlineRadio4">Apartment</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="category" id="inlineRadio5" value="Office Space">
                                        <label class="form-check-label" for="inlineRadio5">Office Space</label>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-4">
                            <div class="row">
                                <div class="col-4">
                                    <label>Purpose</label>
                                </div>
                                <div class="col-8">
                                    <div class="form-check form-check-inline">
                                        <input  class="form-check-input" type="radio" name="type" id="inlineRadio6" value="residental">
                                        <label class="form-check-label" for="inlineRadio6">Residential</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="type" id="inlineRadio7" value="commercial">
                                        <label class="form-check-label" for="inlineRadio7">Commercial</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-4">
                            <div class="row">
                                <div class="col-4">
                                    <label>Amenities</label>
                                </div>
                                <div class="col-8">
                                    <select required="required"
                                        class="form-control select2-lazy-list @error('amenities') is-invalid @enderror"
                                        id="amenities"
                                        data-placeholder="select amenities"
                                        name="amenities[]"
                                        multiple
                                        data-source="{{ route('amenities.getLists') }}">
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-4">
                            <div class="row">
                                <div class="col-4">
                                    <label>Property Face Option</label>
                                </div>
                                <div class="col-8">
                                    <select required="required" class="form-control" name="property_face">
                                        <option selected="selected" disabled>
                                            Select property face option
                                        </option>
                                        <option class="east" value="East">
                                            East
                                        </option>
                                        <option class="west" value="West">
                                            West
                                        </option>
                                        <option class="southEast" value="North">
                                            South
                                        </option>
                                        <option class="southWest" value="South">
                                            South
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
                                    <label for="unit">Width</label>
                                    <input required="required" value="{{ old('road_width') }}"  type="text" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" class="form-control" placeholder="Width" name="road_width">
                                </div>
                                <div class="col-4">
                                    <label for="unit">Unit</label>
                                    <select required="required" class="form-control" name="road_unit">
                                        <option selected="selected" disabled>
                                            Select length unit
                                        </option>
                                        <option class="unit" value="feet">
                                            Feet
                                        </option>
                                        <option class="unit" value="meter">
                                            Meter
                                        </option>
                                    </select>
                                </div>
                                <div class="col-4">
                                    <label for="road_type">Road Type</label>
                                    <select required="required" class="form-control" name="road_type">
                                        <option selected="selected" disabled>
                                            Select road type
                                        </option>
                                        <option class="roadType" value="Black-topped">
                                            Black Topped
                                        </option>
                                        <option class="roadType" value="Gravelled">
                                            Gravelled
                                        </option>
                                        <option class="roadType" value="Muddy">
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
                                    <input required="required" type="text" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" class="form-control" placeholder="e.g. 2077" name="built_year">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-4">
                            <div class="row">
                                <div class="col-4">
                                    <label>Furnishing</label>
                                </div>
                                <div class="col-8">
                                    <select required="required" class="form-control" name="furnish">
                                        <option selected="selected" disabled>
                                            Select Furnishing
                                        </option>
                                        <option class="furnish" value="Unfurnished">
                                            Unfurnished
                                        </option>
                                        <option class="furnish" value="Semi-furnished">
                                            Semi-Furnished
                                        </option>
                                        <option class="furnish" value="Well Furnished">
                                            Well-Furnished
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
                                        <input class="form-check-input" type="radio" name="kitchen" id="inlineRadio1" value="1">
                                        <label class="form-check-label" for="inlineRadio1">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="kitchen" id="inlineRadio2" value="2">
                                        <label class="form-check-label" for="inlineRadio2">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="kitchen" id="inlineRadio3" value="3">
                                        <label class="form-check-label" for="inlineRadio3">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="kitchen" id="inlineRadio4" value="4">
                                        <label class="form-check-label" for="inlineRadio4">4</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="kitchen" id="inlineRadio5" value="5">
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
                                        <input class="form-check-input" type="radio" name="bedroom" id="inlineRadio1" value="1">
                                        <label class="form-check-label" for="inlineRadio1">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="bedroom" id="inlineRadio2" value="2">
                                        <label class="form-check-label" for="inlineRadio2">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="bedroom" id="inlineRadio3" value="3">
                                        <label class="form-check-label" for="inlineRadio3">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="bedroom" id="inlineRadio4" value="4">
                                        <label class="form-check-label" for="inlineRadio4">4</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="bedroom" id="inlineRadio5" value="5">
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
                                        <input class="form-check-input" type="radio" name="living_room" id="inlineRadio1" value="1">
                                        <label class="form-check-label" for="inlineRadio1">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="living_room" id="inlineRadio2" value="2">
                                        <label class="form-check-label" for="inlineRadio2">2</label>
                                    </div>.
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="living_room" id="inlineRadio3" value="3">
                                        <label class="form-check-label" for="inlineRadio3">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="living_room" id="inlineRadio4" value="4">
                                        <label class="form-check-label" for="inlineRadio4">4</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="living_room" id="inlineRadio5" value="5">
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
                                        <input class="form-check-input" type="radio" name="bathroom" id="inlineRadio1" value="1">
                                        <label class="form-check-label" for="inlineRadio1">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="bathroom" id="inlineRadio2" value="2">
                                        <label class="form-check-label" for="inlineRadio2">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="bathroom" id="inlineRadio3" value="3">
                                        <label class="form-check-label" for="inlineRadio3">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="bathroom" id="inlineRadio4" value="4">
                                        <label class="form-check-label" for="inlineRadio4">4</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="bathroom" id="inlineRadio5" value="5">
                                        <label class="form-check-label" for="inlineRadio5">5</label>
                                    </div>

                                </div>
                            </div>
                        </div>


                        <div class="col-lg-12 mb-4">
                            <div class="row">
                                <div class="col-4">
                                    <label>Publish</label>
                                </div>
                                <div class="col-8">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="is_published" value="1">
                                        <label class="form-check-label" for="inlineRadio1">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="is_published" value="0">
                                        <label class="form-check-label" for="inlineRadio2">No</label>
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
                                    <input required="required" type="text" class="form-control" placeholder="e.g. Sunshin Apartment for Sale" name="title">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 mb-4">
                            <div class="row">
                                <div class="col-4">
                                    <label>Description</label>
                                </div>
                                <div class="col-8">
                                    <textarea type="text" class="form-control" placeholder="Describe your property" name="description"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 mb-4">
                            <div class="row">
                                <div class="col-lg-12 mb-1">
                                    <label style="float: none; text-align: center;">Price :</label>
                                </div>
                                <div class="col-4">
                                    <input required="required" type="text" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" class="form-control" placeholder="Enter Price" name="price">
                                </div>
                                <div class="col-lg-12 mb-1">
                                    <label style="float: none; text-align: center;">Price Unit</label>
                                </div>
                                <div class="col-4">
                                    <select class="form-control" name="price_unit">
                                        <option selected="selected" disabled>
                                            Select pricing value
                                        </option>
                                        <option class="priceunit" value="per month">
                                            Per Month
                                        </option>
                                        <option class="priceunit" value="onwards">
                                            Onwards
                                        </option>
                                        <option class="priceunit" value="per room">
                                            Per Room
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-4">
                            <div class="row">
                                <div class="col-lg-12 mb-1">
                                    <label style="float: none; text-align: center;">Insert Image</label>
                                </div>
                                <div class="col-12">
                                    <div class="form-froup">
                                        <div class="dropzone" id="my-awesome-dropzone"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <input type="text" class="form-control" id="search" placeholder="Search...." name="search_location">
                        <div id="map" class="mb-3">

                        </div>
                        <input type="text" name="display_address" id="display-address" class="form-control" disabled>
                        <input type = "hidden" name="address_line_1">
                        <input type = "hidden" name="longitude">
                        <input type = "hidden" name="latitude">
                        <input type = "hidden" name="user_id" value="{{authUser()->id}}">

                        <div class="col-lg-12">
                            <div class="bhadaBnt">
                                <button type="submit" class="btn btn-bhadaBtn">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
        @endsection

        @section('javascripts')
            @parent
	        <script src="{{ asset('js/dropzone.js') }}"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.js"></script>
            <script>
                var card = $('#create-property-box');
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
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBpdStvcLFu2Ymkx8iHXaUStiXscT2WlO4&callback=initializeGoogleMap&libraries=places"
                    async defer>
            </script>
            <script>
                $(".select2-lazy-list").each(function(){
                    var $this = $(this);
                    var placeholder = $this.data('placeholder') || "Search for a repository";
                    var multiple = false;
                    if($this.data('multiple') == true || $this.data('multiple') == 'multiple' || $this.attr('multiple') == true || $this.attr('multiple') == 'multiple'){
                        multiple = true;
                    }

                    $this.select2({
                        placeholder: placeholder,
                        allowClear: true,
                        delay: 250,
                        ajax: {
                            url: $this.data('source'),
                            dataType: 'json',
                            quietMillis: 250,
                            data: function (params) {
                                return {
                                    q: params.term,
                                    page: params.page || 1,
                                    id: $this.data('id')
                                };
                            },

                                processResults: function (data, params) {
                                    params.page = params.page || 1;

                            return {
                                results: data.items,
                                pagination: {
                                    more: (params.page * 30) < data.total
                                }
                            };
                            },
                            cache: true
                        },
                        multiple: multiple,
                        escapeMarkup: function (m) { return m; } // we do not want to escape markup since we are displaying html in results
                    });
                    if($this.data('value')){
                        $.ajax({
                            type: 'GET',
                            url: $this.data('source') + '/' + $this.data('value')
                        }).then(function (data) {
                            if(multiple && data.length > 0){
                            for(var i=0; i < data.length; i++){
                                var option = new Option(data[i].text, data[i].id, true, true);
                                $this.append(option).trigger('change');
                            }
                            }else{
                            var option = new Option(data.text, data.id, true, true);
                            $this.append(option).trigger('change');
                            }
                            // manually trigger the select2:select event
                            $this.trigger({
                                type: 'select2:select',
                                params: {
                                    data: data
                                }
                            });
                        });
                    }
                })
            </script>

            <script>
                var productCreateBox = $('#create-property-box');
                Dropzone.options.myAwesomeDropzone = {
                    autoProcessQueue: false,
                    url: "{{ route('properties.store') }}",
                    paramName: "files",
                    maxFilesize: 8,
                    addRemoveLinks: true,
                    uploadMultiple: true,
                    acceptedFiles: 'image/*',
                    init: function () {

                        var myDropzone = this;

                        $("button[type=submit]").click(function (e) {
                            e.preventDefault();
                            addCardLoader(productCreateBox);

                            var submitForm = true;
                            $("input[required]").each(function(){
                                var $this = $(this);
                                if(!$this.val()){
                                    submitForm = false;
                                    toastr.error($this.attr('name').split('_').join(' ')  + ' is required');
                                    $this.addClass('is-invalid');
                                }
                            });

                            $("select[required]").each(function(){
                                var $this = $(this);
                                if(!$this.val()){
                                    submitForm = false;
                                    toastr.error($this.attr('name').split('_').join(' ') + ' is required');
                                    $this.siblings('span.select2').addClass('invalid-select2');
                                }
                            });

                            if(myDropzone.getQueuedFiles().length >0 && submitForm){
                                myDropzone.processQueue();
                            }else if (submitForm) {
                                $('#createPropertyForm').submit();
                            }else{
                                removeCardLoader(productCreateBox);
                                // toastr.error('Please select at least one file');
                            }
                        });

                        this.on('sending', function(file, xhr, formData) {
                            var data = $('#createPropertyForm').serializeArray();
                            $.each(data, function(key, el) {
                                formData.append(el.name, el.value);
                            });
                        });

                        this.on('success', function(file, response){
                            toastMessage(response);
                            window.location.href = "{{ route('properties.index') }}";
                        });

                        this.on('error', function(file, response, xhr){
                            this.removeFile(file)

                            new File([file], file.name, { type: file.type });
                            this.addFile(file);

                            if(xhr.status === 422) {
                            $.each(response.errors, function(key, error) {
                                toastr.error(error[0]);
                            });
                            }

                            if(xhr.status ===1000) {
                                toastr.error('Internal server error');
                            }

                            if(xhr.status === 404){
                                toastr.error(response.message);
                            }
                        });

                        this.on('complete', function(){
                            removeCardLoader(productCreateBox);
                        });
                    }
                };

                $("input[required]").on('focus', function(e){
                    $(this).removeClass('is-invalid')
                });
                $("select[required]").on('focus, click, change', function(e){
                    $(this).siblings('span.select2').removeClass('invalid-select2')
                });
            </script>
            <script>
                function myFunction() {
                    var x = document.getElementById("myRadio").required;
                    document.getElementById("demo").innerHTML = x;
                }
            </script>
@endsection
