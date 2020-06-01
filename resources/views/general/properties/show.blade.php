@extends('layouts.app')

@section('title')
    Property Detail
@endsection

@section('content')
    <!-- detail -->
    <div class="wrapper">
        <div class="detailUi">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-9">
                        <h3>{{$property->title}}</h3>
                        <p class="detailLocation"><i class="fa fa-map-marker-alt mr-2"></i>Lubhu, Lalitpur, Nepal</p>
                        <div class="offeredPrice">

                            <h4>Rs. {{$property->price}}</h4>
                        </div>
                    </div>
                    @auth
                        <div class="col-lg-3">
                            <div class="bookButton">
                                <form action="{{route('bookings.store')}}" method="POST">
                                    @csrf
                                    <input type="hidden" name="user_id" value="{{authUser()->id}}">
                                    <input type="hidden" name="property_id" value="{{$property->id}}">
                                    <button class="btn btn-bookBtn" >Book Now</button>
                                </form>
                                <div class="clear"></div>
                            </div>
                        </div>
                    @endauth
                    <div class="col-lg-12  wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="gharbhadaSlide owl-carousel owl-theme ">
                            @foreach ($property->images as $image)
                                <div class="item ">
                                    <div class="slideImg">
                                        <img src="{{asset($image->path)}}" alt=" ">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- <div class="col-lg-4">

                    </div> -->
                    <div class="col-lg-8 detailGrp">
                        <div class="detialPageInfo">
                            <label>Description</label>
                            <p>{{$property->description}}</p>
                        </div>
                        <div class="productDetails">
                            <ul>
                                <li>
                                    <strong>Road Access</strong>{{$property->road_width}} {{$property->road_unit}} / {{$property->road_type}}
                                </li>
                                <li>
                                    <strong>Build Up Area</strong> 0-7-5-0 Aana
                                </li>
                                <li>
                                    <strong>Property Face</strong>{{$property->property_face}}
                                </li>
                                <li>
                                    <strong>Build Year </strong>{{$property->build_year}}
                                </li>

                            </ul>
                        </div>
                        <div class="aminitiList">
                            <label>Amenities</label>

                            <ul>
                                @foreach ($property->amenities as $amenity)
                                    <li>
                                        <div class="aminiIcons">
                                            <i class="fa fa-wifi"></i>
                                            <p>{{$amenity->name}}</p>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 mb-3">
                        <div class="ownerInfogrp">
                            <label>Property Offers</label>
                            <ul>
                                <li>
                                    <div class="row">
                                        <div class="col-2">
                                            <i class="fa fa-bed"></i>
                                        </div>
                                        <div class="col-10">
                                            <div class="offerInfo">
                                                <span>Bedroom</span>
                                                <p>{{$property->bedroom}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-2">
                                            <i class="fa fa-bed"></i>
                                        </div>
                                        <div class="col-10">
                                            <div class="offerInfo">
                                                <span>Kitchen</span>
                                                <p>{{$property->kitchen}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-2">
                                            <i class="fa fa-bed"></i>
                                        </div>
                                        <div class="col-10">
                                            <div class="offerInfo">
                                                <span>Bathroom</span>
                                                <p>{{$property->bathroom}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-2">
                                            <i class="fa fa-bed"></i>
                                        </div>
                                        <div class="col-10">
                                            <div class="offerInfo">
                                                <span>Living Room</span>
                                                <p>{{$property->living_room}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <label>Owner's Details</label>
                            <p>{{$property->user->name}}</p>
                            <span>{{$property->user->phone}}</span>
                        </div>
                    </div>
                    <div class="col-lg-12">

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="gharLocation">
        <iframe src="https://maps.google.com/maps?q={{$property->latitude}}, {{$property->longitude}}&z=17&output=embed" width="360" height="270" frameborder="0" style="border:0"></iframe>
    </div>
    <div class="gharbadaContain wow fadeIn" data-wow-duration="1s" id="rentHouse">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Related Houses Nearby</h2>
                </div>
                @foreach ($relatedProperties as $relatedProperty)
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                        <div class="houesGrp">
                            <a href="{{route('properties.show',$relatedProperty->id)}}">
                                <div class="houseImg">
                                    <img src="{{asset('images/banner.jpg')}}">
                                    <span class="priceTag">Rs. {{$relatedProperty->price}}</span>
                                </div>
                                <h6>{{$relatedProperty->title}}</h6>
                                <p><i class="fa fa-map-marker-alt mr-2"></i>Bhaisepati, Lalitpur, Nepal</p>
                                <!-- <h5>Rs. 2,70,00,000</h5> -->
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <form action="{{route('bookings.store')}}" method="post">

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Book Property</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Full Name</label>
                            <input type="text" class="form-control" id="recipient-name" placeholder="Sagar Khadka" required>
                        </div>

                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Email</label>
                            <input type="text" class="form-control" id="recipient-name" placeholder="sagar@gmail.com">
                        </div>

                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Phone Number</label>
                            <input type="text" class="form-control" id="recipient-name" placeholder="+977-9876543210" required>
                        </div>

                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Message:</label>
                            <textarea class="form-control" id="message-text" placeholder="Text Area"></textarea>
                        </div>
                    </form>
                </div>

                    @csrf
                    <input type="hidden" name="user_id" value="{{authUser()->id}}">
                    <input type="hidden" name="property_id" value="{{$property->id}}">
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Send message</button>
                </div>

            </div>
        </div>
    </div>
    </form>
@endsection
<script type="text/javascript ">
    $('.gharbhadaSlide').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        autoplay: true,
        autoplayTimeout: 6000,
        autoplayHoverPause: false,
        animateIn: 'fadeIn',
        animateOut: 'fadeOut',
        smartSpeed: 2500,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }

    })
</script>

