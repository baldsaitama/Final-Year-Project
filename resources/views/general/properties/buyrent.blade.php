@extends('layouts.app')
@section('content')

    <div class="wrapper">


        <div class="gharbadaContain filterUi">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="filterTags">
                            <div class="row">
                                <div class="col-lg-12 mb-3">
                                    <label>Property Area</label>
                                    <input type="text" class="form-control" name="area" placeholder="Eg. New Baneshowr">
                                </div>
                                <div class="col-lg-12 mb-3">
                                    <label>Category</label>
                                    <select class="custom-select">
                                        <option value="1">House</option>
                                        <option value="1">Land</option>
                                        <option value="1">Flat</option>
                                        <option value="1">Office Space</option>
                                        <option value="1">Hostel</option>
                                    </select>
                                </div>
                                <div class="col-lg-12 mb-3">
                                    <label>Propert Type</label>
                                    <select class="custom-select">
                                        <option value="1">Residential</option>
                                        <option value="1">Commercial</option>
                                    </select>
                                </div>
                                <div class="col-lg-12 mb-3">
                                    <label>Price Range</label>
                                    <div class="filterPriceRange">
                                        <div class="slidecontainer">
                                            <input type="range" min="1" max="999999" value="57000" class="sliderPrice" id="myRangePrice">
                                            <p style="float: left;">Price Rs. 0 - Rs. <span id="demoPrice"></span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-3">
                                    <label>Propert Face</label>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio1">North</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio2">West</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio3">South</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio4">East</label>
                                    </div>


                                </div>
                                <div class="col-lg-12 mb-2">
                                    <button class="btn btn-gharBhadaBtn w-100" type="submit">Filter Now</button>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="float-left">
                            <h2>Properties For Rent</h2>
                        </div>
                        <div class="float-right sortSl">
                            <select class="custom-select">
                                <option value="1">Newest First</option>
                                <option value="1">Newest First</option>
                            </select>

                        </div>
                        <div class="clear"></div>
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                                <div class="houesGrp">
                                    <a href="detailPage.html">
                                        <div class="houseImg">
                                            <img src="images/banner.jpg">
                                            <span class="priceTag">Rs. 2,70,00,000</span>
                                        </div>
                                        <h6>Kayabinyak Homes : House for sale</h6>
                                        <p><i class="fa fa-map-marker-alt mr-2"></i>Bhaisepati, Lalitpur, Nepal</p>
                                        <!-- <h5>Rs. 2,70,00,000</h5> -->
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                                <div class="houesGrp">
                                    <a href="detailPage.html">
                                        <div class="houseImg">
                                            <img src="images/banner.jpg">
                                            <span class="priceTag">Rs. 2,70,00,000</span>
                                        </div>
                                        <h6>Kayabinyak Homes : House for sale</h6>
                                        <p><i class="fa fa-map-marker-alt mr-2"></i>Bhaisepati, Lalitpur, Nepal</p>
                                        <!-- <h5>Rs. 2,70,00,000</h5> -->
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                                <div class="houesGrp">
                                    <a href="detailPage.html">
                                        <div class="houseImg">
                                            <img src="images/banner.jpg">
                                            <span class="priceTag">Rs. 2,70,00,000</span>
                                        </div>
                                        <h6>Kayabinyak Homes : House for sale</h6>
                                        <p><i class="fa fa-map-marker-alt mr-2"></i>Bhaisepati, Lalitpur, Nepal</p>
                                        <!-- <h5>Rs. 2,70,00,000</h5> -->
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                                <div class="houesGrp">
                                    <a href="detailPage.html">
                                        <div class="houseImg">
                                            <img src="images/banner.jpg">
                                            <span class="priceTag">Rs. 2,70,00,000</span>
                                        </div>
                                        <h6>Kayabinyak Homes : House for sale</h6>
                                        <p><i class="fa fa-map-marker-alt mr-2"></i>Bhaisepati, Lalitpur, Nepal</p>
                                        <!-- <h5>Rs. 2,70,00,000</h5> -->
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                                <div class="houesGrp">
                                    <a href="detailPage.html">
                                        <div class="houseImg">
                                            <img src="images/banner.jpg">
                                            <span class="priceTag">Rs. 2,70,00,000</span>
                                        </div>
                                        <h6>Kayabinyak Homes : House for sale</h6>
                                        <p><i class="fa fa-map-marker-alt mr-2"></i>Bhaisepati, Lalitpur, Nepal</p>
                                        <!-- <h5>Rs. 2,70,00,000</h5> -->
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                                <div class="houesGrp">
                                    <a href="detailPage.html">
                                        <div class="houseImg">
                                            <img src="images/banner.jpg">
                                            <span class="priceTag">Rs. 2,70,00,000</span>
                                        </div>
                                        <h6>Kayabinyak Homes : House for sale</h6>
                                        <p><i class="fa fa-map-marker-alt mr-2"></i>Bhaisepati, Lalitpur, Nepal</p>
                                        <!-- <h5>Rs. 2,70,00,000</h5> -->
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                                <div class="houesGrp">
                                    <a href="detailPage.html">
                                        <div class="houseImg">
                                            <img src="images/banner.jpg">
                                            <span class="priceTag">Rs. 2,70,00,000</span>
                                        </div>
                                        <h6>Kayabinyak Homes : House for sale</h6>
                                        <p><i class="fa fa-map-marker-alt mr-2"></i>Bhaisepati, Lalitpur, Nepal</p>
                                        <!-- <h5>Rs. 2,70,00,000</h5> -->
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                                <div class="houesGrp">
                                    <a href="detailPage.html">
                                        <div class="houseImg">
                                            <img src="images/banner.jpg">
                                            <span class="priceTag">Rs. 2,70,00,000</span>
                                        </div>
                                        <h6>Kayabinyak Homes : House for sale</h6>
                                        <p><i class="fa fa-map-marker-alt mr-2"></i>Bhaisepati, Lalitpur, Nepal</p>
                                        <!-- <h5>Rs. 2,70,00,000</h5> -->
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        </body>

        </html>
@endsection
