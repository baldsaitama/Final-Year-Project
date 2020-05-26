@extends('layouts.app')

@section('content')
    <!-- detail -->
    <div class="wrapper">
        <div class="detailUi">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-9">
                        <h3>Karyabinyak Homes: House for Sale</h3>
                        <p class="detailLocation"><i class="fa fa-map-marker-alt mr-2"></i>Lubhu, Lalitpur, Nepal</p>
                        <div class="offeredPrice">

                            <h4>Rs. 2,50,00,000</h4>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="bookButton">
                            <button type="submit" class="btn btn-bookBtn">Book Now</button>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="col-lg-12  wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="gharbhadaSlide owl-carousel owl-theme ">
                            <div class="item ">
                                <div class="slideImg">
                                    <img src="images/gharbanner.jpg" alt=" ">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="col-lg-4">

                    </div> -->
                    <div class="col-lg-8 detailGrp">
                        <div class="detialPageInfo">
                            <label>Description</label>
                            <p>A house on sale at Chamati, Banasthali Kathmandu. It is made on 9.5 aana land adjoining with 13 ft road, 4 houses inside from the Chamati town planning road. 100 meters inside the ring road from the Banasthali ring road. Ground
                                Floor: Living room, kitchen, dining area, one bedroom, one common bathroom, 1st Floor: 3 bedrooms with all attached bathrooms, family room, and one common bathroom, 2nd Floor: one bedroom with attached bathroom,</p>
                        </div>
                        <div class="productDetails">
                            <ul>
                                <li>
                                    <strong>Property Id </strong>BN7040
                                </li>
                                <li>
                                    <strong>Area Covered </strong> 0-9-5-0 Aana
                                </li>
                                <li>
                                    <strong>Road Access</strong>14 Feet / Blacktopped
                                </li>
                                <li>
                                    <strong>Build Up Area</strong> 0-7-5-0 Aana
                                </li>
                                <li>
                                    <strong>Property Fac</strong>East
                                </li>
                                <li>
                                    <strong>Build Year </strong>2075
                                </li>
                                <li>
                                    <strong>Views </strong>1205
                                </li>
                            </ul>
                        </div>
                        <div class="aminitiList">
                            <label>Amenities</label>

                            <ul>
                                <li>
                                    <div class="aminiIcons">
                                        <i class="fa fa-wifi"></i>
                                        <p>Wifi</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="aminiIcons">
                                        <i class="fa fa-wifi"></i>
                                        <p>Wifi</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="aminiIcons">
                                        <i class="fa fa-wifi"></i>
                                        <p>Wifi</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="aminiIcons">
                                        <i class="fa fa-wifi"></i>
                                        <p>Wifi</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="aminiIcons">
                                        <i class="fa fa-wifi"></i>
                                        <p>Wifi</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="aminiIcons">
                                        <i class="fa fa-wifi"></i>
                                        <p>Wifi</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="aminiIcons">
                                        <i class="fa fa-wifi"></i>
                                        <p>Wifi</p>
                                    </div>
                                </li>
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
                                                <p>5</p>
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
                                                <span>Bedroom</span>
                                                <p>5</p>
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
                                                <span>Bedroom</span>
                                                <p>5</p>
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
                                                <span>Bedroom</span>
                                                <p>5</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <label>Owner's Details</label>
                            <p>Ram karki</p>
                            <span>98412329526</span>
                        </div>
                    </div>
                    <div class="col-lg-12">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="gharLocation">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3533.181744364861!2d85.32347611453773!3d27.68077713326705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19c795792897%3A0xd2064f344bb0abd!2sLalitpur%20Engineering%20College!5e0!3m2!1sen!2snp!4v1587387970418!5m2!1sen!2snp"
                frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    <div class="gharbadaContain wow fadeIn" data-wow-duration="1s" id="rentHouse">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Related Houses Nearby</h2>
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
@endsection
