@extends('layouts.app')

@section('title')
    Create Package
@endsection

@section('content')
    <div class="wrapper">
        <div class="container-fluid">
            <div class="postProperty">
                <h2>Post Property</h2>
                <div class="row">
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

