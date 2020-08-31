@extends('layouts.app')

@section('title')
    Edit Property
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
        .dropzone .dz-preview .dz-image img {
		    height: 120px;
		    width: 120px;
		}
    </style>
@endsection

@section('content')
    <div class="wrapper">
        <div class="container-fluid">
            <div class="postProperty">
                <h2>Edit Property</h2>
                <div class="row" id="create-property-box">
                    <form method="POST" action="{{ route('properties.update',$property->id)}}" id="editPropertyForm">
                        @csrf
                        @method('PATCH')
                        <div class="col-lg-12 mb-4">
                            <div class="row">
                                <div class="col-4">
                                    <label>Property Status</label>
                                </div>
                                <div class="col-8">
                                    <select class="form-control" name="status" required>
                                        <option class="rent" value="Rent" {{$property->status=='rent'?'selected':''}}>
                                            Rent
                                        </option>
                                        <option class="sale" value="Sale" {{$property->status=='sale'?'selected':''}}>
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
                                        <input required class="form-check-input" type="radio" name="category" id="inlineRadio1" value="House" {{$property->category=='house'?'checked':''}}>
                                        <label class="form-check-label" for="inlineRadio1">House</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="category" id="inlineRadio2" value="Flat" {{$property->category=='flat'?'checked':''}}>
                                        <label class="form-check-label" for="inlineRadio2">Flat</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="category" id="inlineRadio3" value="Room" {{$property->category=='room'?'checked':''}}>
                                        <label class="form-check-label" for="inlineRadio3">Room</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="category" id="inlineRadio4" value="Apartment" {{$property->category=='apartment'?'checked':''}}>
                                        <label class="form-check-label" for="inlineRadio4">Apartment</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="category" id="inlineRadio5" value="Office Space" {{$property->category=='office space'?'checked':''}}>
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
                                        <input required class="form-check-input" type="radio" name="type" id="inlineRadio6" value="residential" {{$property->type=='residential'?'checked':''}}>
                                        <label class="form-check-label" for="inlineRadio6">Residential</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="type" id="inlineRadio7" value="commercial" {{$property->type=='commercial'?'checked':''}}>
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
                                    <select
                                        class="form-control select2-lazy-list @error('amenities') is-invalid @enderror"
                                        id="amenities"
                                        data-placeholder="select amenities"
                                        name="amenities[]"
                                        multiple
                                        data-source="{{ route('amenities.getLists') }}">
                                        @if(count($property->amenities) > 0)
                                            @foreach($property->amenities as $amenity)
                                                <option value="{{ $amenity->id }}" selected>{{ $amenity->name }}</option>
                                            @endforeach
                                        @endif
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
                                    <select required class="form-control" name="property_face">
                                        <option class="east" value="East" {{$property->property_face=='east'?'selected':''}}>
                                            East
                                        </option>
                                        <option class="west" value="West" {{$property->property_face=='west'?'selected':''}}>
                                            West
                                        </option>
                                        <option class="southEast" value="South East" {{$property->property_face=='southEast'?'selected':''}}>
                                            South East
                                        </option>
                                        <option class="southWest" value="South West" {{$property->property_face=='southWest'?'selected':''}}>
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
                                    <label for="unit">Length</label>
                                    <input required type="text" class="form-control" placeholder="Length" name="road_width" value="{{$property->road_width}}">
                                </div>
                                <div class="col-4">
                                    <label for="unit">Unit</label>
                                    <select required class="form-control" name="road_unit">
                                        <option class="feet" value="feet" {{$property->road_unit=='feet'?'selected':''}}>
                                            Feet
                                        </option>
                                        <option class="meter" value="meter" {{$property->road_unit=='meter'?'selected':''}}>
                                            Meter
                                        </option>
                                    </select>
                                </div>
                                <div class="col-4">
                                    <label for="road_type">Road Type</label>
                                    <select required class="form-control" name="road_type">
                                        <option class="roadType" value="blacktopped" {{$property->road_type=='blacktopped'?'selected':''}}>
                                            Black Topped
                                        </option>
                                        <option class="roadType" value="gravelled" {{$property->road_type=='gravelled'?'selected':''}}>
                                            Gravelled
                                        </option>
                                        <option class="roadType" value="muddy" {{$property->road_type=='muddy'?'selected':''}}>
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
                                    <input required type="text" class="form-control" placeholder="e.g. 2077" name="built_year" value="{{$property->built_year}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-4">
                            <div class="row">
                                <div class="col-4">
                                    <label>Furnishing</label>
                                </div>
                                <div class="col-8">
                                    <select required class="form-control" name="furnish">
                                        <option class="furnish" value="Unfurnished" {{$property->furnish=='unfurnished'?'selected':''}}>
                                            Unfurnished
                                        </option>
                                        <option class="furnish" value="Semi-furnished" {{$property->furnish=='semifurnished'?'selected':''}}>
                                            Semi-Furnished
                                        </option>
                                        <option class="furnish" value="Well-furnished" {{$property->furnish=='wellfurnished'?'selected':''}}>
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
                                        <input required class="form-check-input" type="radio" name="kitchen" id="inlineRadio1" value="1"  {{$property->kitchen=='1'?'checked':''}}>
                                        <label class="form-check-label" for="inlineRadio1">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="kitchen" id="inlineRadio2" value="2" {{$property->kitchen=='2'?'checked':''}}>
                                        <label class="form-check-label" for="inlineRadio2">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="kitchen" id="inlineRadio3" value="3" {{$property->kitchen=='3'?'checked':''}}>
                                        <label class="form-check-label" for="inlineRadio3">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="kitchen" id="inlineRadio4" value="4" {{$property->kitchen=='4'?'checked':''}}>
                                        <label class="form-check-label" for="inlineRadio4">4</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="kitchen" id="inlineRadio5" value="5" {{$property->kitchen=='5'?'checked':''}}>
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
                                        <input required class="form-check-input" type="radio" name="bedroom" id="inlineRadio1" value="1" {{$property->bedroom=='1'?'checked':''}}>
                                        <label class="form-check-label" for="inlineRadio1">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="bedroom" id="inlineRadio2" value="2" {{$property->bedroom=='2'?'checked':''}}>
                                        <label class="form-check-label" for="inlineRadio2">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="bedroom" id="inlineRadio3" value="3" {{$property->bedroom=='3'?'checked':''}}>
                                        <label class="form-check-label" for="inlineRadio3">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="bedroom" id="inlineRadio4" value="4" {{$property->bedroom=='4'?'checked':''}}>
                                        <label class="form-check-label" for="inlineRadio4">4</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="bedroom" id="inlineRadio5" value="5" {{$property->bedroom=='5'?'checked':''}}>
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
                                        <input required class="form-check-input" type="radio" name="living_room" id="inlineRadio1" value="1" {{$property->living_room=='1'?'checked':''}}>
                                        <label class="form-check-label" for="inlineRadio1">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="living_room" id="inlineRadio2" value="2" {{$property->living_room=='2'?'checked':''}}>
                                        <label class="form-check-label" for="inlineRadio2">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="living_room" id="inlineRadio3" value="3" {{$property->living_room=='3'?'checked':''}}>
                                        <label class="form-check-label" for="inlineRadio3">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="living_room" id="inlineRadio4" value="4" {{$property->living_room=='4'?'checked':''}}>
                                        <label class="form-check-label" for="inlineRadio4">4</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="living_room" id="inlineRadio5" value="5" {{$property->living_room=='5'?'checked':''}}>
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
                                        <input required class="form-check-input" type="radio" name="bathroom" id="inlineRadio1" value="1" {{$property->bathroom=='1'?'checked':''}}>
                                        <label class="form-check-label" for="inlineRadio1">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="bathroom" id="inlineRadio2" value="2" {{$property->bathroom=='2'?'checked':''}}>
                                        <label class="form-check-label" for="inlineRadio2">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="bathroom" id="inlineRadio3" value="3" {{$property->bathroom=='3'?'checked':''}}>
                                        <label class="form-check-label" for="inlineRadio3">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="bathroom" id="inlineRadio4" value="4" {{$property->bathroom=='4'?'checked':''}}>
                                        <label class="form-check-label" for="inlineRadio4">4</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="bathroom" id="inlineRadio5" value="5" {{$property->bathroom=='5'?'checked':''}}>
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
                                        <input required class="form-check-input" type="radio" name="is_published" value="1" {{$property->is_published=='1'?'checked':''}}>
                                        <label class="form-check-label" for="inlineRadio1">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="is_published" value="0" {{$property->is_published=='0'?'checked':''}}>
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
                                    <input required type="text" class="form-control" placeholder="e.g. Sunshin Apartment for Sale" name="title" value="{{$property->title}}">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 mb-4">
                            <div class="row">
                                <div class="col-4">
                                    <label>Description</label>
                                </div>
                                <div class="col-8">
                                    <textarea type="text" class="form-control" placeholder="Describe your property" name="description">{{$property->description}}</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 mb-4">
                            <div class="row">
                                <div class="col-lg-12 mb-1">
                                    <label style="float: none; text-align: center;">Price :</label>
                                </div>
                                <div class="col-4">
                                    <input required type="text" class="form-control" placeholder="Enter Price" name="price" value="{{$property->price}}">
                                </div>
                                <div class="col-4">
                                    <label for="price_unit">Price Unit</label>
                                    <select required class="form-control" name="price_unit">
                                        <option class="priceunit" value="permonth" {{$property->price_unit=='permonth'?'selected':''}}>
                                            Per Month
                                        </option>
                                        <option class="priceunit" value="onwards" {{$property->price_unit=='onwards'?'selected':''}}>
                                            Onwards
                                        </option>
                                        <option class="priceunit" value="perroom" {{$property->price_unit=='perroom'?'selected':''}}>
                                            Per Room
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-4">
                            <div class="row">
                                <div class="col-lg-12 mb-1">
                                    <label style="float: none; text-align: center;">Image :</label>
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
                        <input required type="text" name="display_address" id="display-address" class="form-control" disabled>
                        <input required type = "hidden" name="address_line_1" value="{{$property->address_line_1}}">
                        <input required type = "hidden" name="longitude" id="longitude" value="{{$property->longitude}}">
                        <input required type = "hidden" name="latitude" id="latitude" value="{{$property->latitude}}">
                        <input required type = "hidden" name="user_id" value="{{authUser()->id}}">

                        <div class="col-lg-12">
                            <div class="bhadaBnt">
                                <button type="submit" class="btn btn-bhadaBtn">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
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
        var productIndex = "{{ route('properties.index') }}";
        var productUpdate = "{{ route('properties.update', $property->id) }}";
        var productImagesUrl = "{{ route('properties.getImagesLists', $property->id) }}";
        var productUploadImageUrl = "{{ route('properties.uploadImage', $property->id) }}";
        var productDeleteImageUrl = "{{ route('properties.deleteImage', [$property->id, ':image_id']) }}";
        var base_url = "{{ url('/') }}" + '/';
        var numberFilesAdded = 0;
        var numberFilesRemoved = 0;

        Dropzone.options.myAwesomeDropzone = {
            autoProcessQueue: false,
            url: productUpdate,
            paramName: "files",
            maxFilesize: 8,
            addRemoveLinks: true,
            uploadMultiple: true,
            acceptedFiles: 'image/*',
            init: function () {

                var myDropzone = this;

                $.get(productImagesUrl, function(data) {
                    $.each(data, function (key,value) {
                        var mockFile = { name: value.name, size: value.size, id:value.id };
                        myDropzone.emit("addedfile", mockFile);
                        myDropzone.emit("thumbnail", mockFile, base_url + value.path);
                        myDropzone.emit('complete', mockFile);
                        numberFilesAdded += 1;
                    });
                });

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
                            toastr.error($this.attr('name').split('_').join(' ')  + ' is required');
                            $this.siblings('span.select2').addClass('invalid-select2');
                        }
                    });

                    if(myDropzone.getQueuedFiles().length >0 && submitForm){
                        myDropzone.processQueue();
                    } else if(submitForm && numberFilesAdded > numberFilesRemoved) {
                        $('#editPropertyForm').submit();
                    }else if (submitForm){
                        $('#editPropertyForm').submit();
                    } else{
                        removeCardLoader(productCreateBox);
                        if(numberFilesAdded <= numberFilesRemoved){
                            toastr.error('Please select at least one file');
                        }
                    }
                });

                this.on('sending', function(file, xhr, formData) {
                    var data = $('#editPropertyForm').serializeArray();
                    $.each(data, function(key, el) {
                        formData.append(el.name, el.value);
                    });
                });

                this.on('success', function(file, response){
                    toastMessage(response);
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

                    if(xhr.status === 500) {
                        toastr.error('Internal server error');
                    }

                    if(xhr.status === 404){
                        toastr.error(response.message);
                    }
                });

                this.on('complete', function(file){
                    removeCardLoader(productCreateBox);
                });

                this.on('completemultiple', function(file){
                    removeCardLoader(productCreateBox);
                    if(file.length > 0){
                        window.location.href = productIndex;
                    }
                });

                this.on("removedfile", function (file) {
                    if(file.id){
                        $.ajax({
                            url: productDeleteImageUrl.replace(':image_id', file.id),
                            type: 'DELETE',
                            success: function (response) {
                                toastMessage(response);
                                numberFilesRemoved += 1;
                            },
                            error: function () {
                                toastr.error('Some Error Occured');
                            }
                        })
                    }
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
@endsection
