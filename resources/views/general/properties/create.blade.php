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
                                <input type="text" class="form-control" placeholder="Text">
                            </div>
                            <div class="col-4">
                                <select class="form-control">
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
                                    <option class="roadType" value="roadType">
                                        Road Type
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

