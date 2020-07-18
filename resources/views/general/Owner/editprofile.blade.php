@extends('layouts.abc')
@section('title')
    Edit Profile
@endsection
@section('content')
<div class="dashboardUi">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 dashSpaceCut">
                <div class="dashGrp">
                    <div class="adminData">
                        <div class="row">
                            <div class="col-4">
                                <div class="userImg">
                                    <img src="images/profile.jpg">
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="userInfo">
                                    <h6>Welcome Back</h6>
                                    <p>User name</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dashboardMenus">
                        <ul>
                            <li>
                                <a href="dashboard.html">Dashboard</a>
                            </li>
                            <li>
                                <a href="edit profile.html">Edit Profile</a>
                            </li>
                            <li>
                                <a href="notifications.html">Notifications</a>
                            </li>
                            <li>
                                <a href="#">Log Out</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-10 ">
                <div class="dashContain">
                    <div class="photobazarCard">
                        <h4>Edit Profile</h4>

                        <form>
                            <div class="row mt-3">
                                <div class="col-lg-6 mb-3">
                                    <label>Name</label>
                                    <input type="text" class="form-control" name="fullName" placeholder="Enter Full Name">
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label>Address</label>
                                    <input type="text" class="form-control" name="address" placeholder="Enter your Address">
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label>Contact No.</label>
                                    <input type="number" class="form-control" name="fullName" placeholder="Enter Contact No.">
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="fullName" placeholder="Enter Email Address">
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <label>Profile Image</label><br>
                                    <input type="file" class="mt-3 " name="fullName" placeholder="Enter Email Address">
                                </div>
                                <div class="col-lg-12 mt-2">
                                    <div class="float-right">
                                        <button type="submit" class="btn btn-gharBhadaBtn">Save Now</button>
                                    </div>
                                    <span class="clear"></span>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
<!-- footer -->
<!--  JavaScript -->
@endsection
