@extends('layouts.app')

@section('title')
    Home
@endsection

@section('content')
    <div class="bhadaNewSlide">
        <div class="bhadaInner">
            <div class="gharBhadaInfo">
                <h1 class="wow fadeInLeft" data-wow-duration="1s">Looking For A Property?</h1>
                <p class="wow fadeInLeft mt-2" data-wow-duration="1s" data-wow-delay="0.5s">Search your dream home on Nepal’s largest property marketplace
                </p>
                <form class="wow fadeInLeft " data-wow-duration="1s" data-wow-delay="0.9s" action="{{route('properties.search')}}" method="GET">
                    <input class="form-control " name="s" placeholder="Enter an address, town or property ID">
                    <span>
                        <button><i class="fa fa-search"></i></button>
                    </span>
                </form>
            </div>
        </div>
    </div>
    <!-- ghar info -->
    <div class="gharBadaWorks">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 wow fadeInLeft mt-2" data-wow-duration="1s">
                    <div class="gharIconGrp">
                        <div class="gharIconsInfo">
                            <i class="fa fa-home"></i>
                        </div>
                        <h6>Buy House</h6>
                    </div>
                </div>
                <div class="col-lg-3  wow fadeInLeft mt-2" data-wow-duration="1s" data-wow-delay="0.5s">
                    <div class="gharIconGrp">
                        <div class="gharIconsInfo">
                            <i class="fa fa-hand-holding-usd"></i>
                        </div>
                        <h6>Rent House</h6>
                    </div>
                </div>
                <div class="col-lg-3 wow fadeInLeft mt-2" data-wow-duration="1s" data-wow-delay="0.8s">
                    <div class="gharIconGrp">
                        <div class="gharIconsInfo">
                            <i class="fa fa-search"></i>
                        </div>
                        <h6>Search House</h6>
                    </div>
                </div>
                <div class="col-lg-3 wow fadeInLeft mt-2" data-wow-duration="1s" data-wow-delay="1s">
                    <div class="gharIconGrp">
                        <div class="gharIconsInfo">
                            <i class="fa fa-plus-circle"></i>
                        </div>
                        <h6>Add House</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- gharbada contain data -->
    <div class="gharbadaContain wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s" id="buyHouse">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Houses Nearby</h2>
                </div>
                @foreach ($buyingHouses as $buyingHouse)
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                        <div class="houesGrp">
                            <a href="{{route('properties.show',$buyingHouse->id)}}">
                                <div class="houseImg">
                                    <img src="{{asset($buyingHouse->images->first()?$buyingHouse->images->first()->path:asset('images/banner.jpg'))}}">
                                    <span class="priceTag">Rs. {{$buyingHouse->price}}</span>
                                </div>
                                <h6>{{$buyingHouse->title}}</h6>
                                <p><i class="fa fa-map-marker-alt mr-2"></i>Bhaisepati, Lalitpur, Nepal</p>
                                <!-- <h5>Rs. 2,70,00,000</h5> -->
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="gharbadaContain wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s" id="rentHouse">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Rented Houses Nearby</h2>
                </div>
                @foreach ($rentingHouses as $rentingHouse)
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                        <div class="houesGrp">
                            <a href="{{route('properties.show',$rentingHouse->id)}}">
                                <div class="houseImg">
                                    <img src="{{asset($rentingHouse->images->first()?$buyingHouse->images->first()->path:asset('images/banner.jpg'))}}">
                                    <span class="priceTag">Rs. {{$rentingHouse->price}}</span>
                                </div>
                                <h6>{{$rentingHouse->title}}</h6>
                                <p><i class="fa fa-map-marker-alt mr-2"></i>Bhaisepati, Lalitpur, Nepal</p>
                                <!-- <h5>Rs. 2,70,00,000</h5> -->
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection