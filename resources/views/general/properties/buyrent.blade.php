@extends('layouts.app')
@section('title')
    {{$status=='rent'?'Rentig Property':'Buying Property'}}
@endsection

@section('content')

    <div class="wrapper">
        <div class="gharbadaContain filterUi">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="filterTags">
                            <form action="{{route('properties.search')}}" method="get">
                                <div class="row">
                                    <div class="col-lg-12 mb-3">
                                        <label>Property Area</label>
                                        <input type="text" class="form-control" name="area" placeholder="Eg. New Baneshowr" value="{{$area}}">
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <label>Category</label>
                                        <select class="custom-select" name="category">
                                            <option value="house" {{$category=='house'?'selected':''}}>House</option>
                                            <option value="flat" {{$category=='flat'?'selected':''}}>Flat</option>
                                            <option value="room" {{$category=='room'?'selected':''}}>Room</option>
                                            <option value="apartment" {{$category=='apartment'?'selected':''}}>Apartment</option>
                                            <option value="office space" {{$category=='office space'?'selected':''}}>Office Space</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <label>Propert Type</label>
                                        <select class="custom-select" name="type">
                                            <option value="residental" {{$type=='residental'?'selected':''}}>Residential</option>
                                            <option value="commercial" {{$type=='commercial'?'selected':''}}>Commercial</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <label>Price Range</label>
                                        <div class="filterPriceRange">
                                            <div class="slidecontainer">
                                                <input type="range" min="1" max="999999" value="{{$price? :'57000'}}" class="sliderPrice" id="myRangePrice" name="price">
                                                <p style="float: left;">Price Rs. 0 - Rs. <span id="demoPrice"></span></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <label>Propert Face</label>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio1" name="property_face" class="custom-control-input" value="east" {{$property_face=='east'?'checked':''}}>
                                            <label class="custom-control-label" for="customRadio1">East</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio2" name="property_face" class="custom-control-input" value="west" {{$property_face=='west'?'checked':''}}>
                                            <label class="custom-control-label" for="customRadio2">West</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio3" name="property_face" class="custom-control-input" value="southEast" {{$property_face=='southEast'?'checked':''}}>
                                            <label class="custom-control-label" for="customRadio3">SouthEast</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio4" name="property_face" class="custom-control-input" value="southWest" {{$property_face=='southWest'?'checked':''}}>
                                            <label class="custom-control-label" for="customRadio4">SouthWest</label>
                                            <input type="hidden" name="s" value="{{$search}}">
                                        </div>


                                    </div>
                                    <div class="col-lg-12 mb-2">
                                        <button class="btn btn-gharBhadaBtn w-100" type="submit">Filter Now</button>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="float-left">
                            <h2>Properties For {{$status=='rent'?'Rent':'Buying'}}</h2>
                        </div>
                        {{-- <div class="float-right sortSl">
                            <select class="custom-select">
                                <option value="1">Newest First</option>
                                <option value="1">Newest First</option>
                            </select>

                        </div> --}}
                        <div class="clear"></div>
                        <div class="row">
                            @foreach ($properties as $property)
                                <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                                    <div class="houesGrp">
                                        <a href="{{route('properties.show',$property->id)}}">
                                            <div class="houseImg">
                                                <img src="{{asset($property->images->first()?$property->images->first()->path:asset('images/banner.jpg'))}}">
                                                <span class="priceTag">Rs. {{$property->price}}</span>
                                            </div>
                                            <h6>{{$property->title}}</h6>
                                            <p><i class="fa fa-map-marker-alt mr-2"></i>{{$property->address_line_1}}</p>
                                            <!-- <h5>Rs. 2,70,00,000</h5> -->
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="pull-right">
                            {{ $properties->appends(request()->query())->links() }}
                        </div>
                    </div>

                </div>
            </div>
        </div>


        </div>

        </html>
@endsection
