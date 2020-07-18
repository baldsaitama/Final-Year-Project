@extends('layouts.abc')

@section('title')
    User
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
                                    <img src="{{asset('dashboard/images/profile.jpg')}}">
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
                                <a href="{{route('users.show',authUser()->id)}}">Dashboard</a>
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
                        <h4>User Details</h4>

                        <div class="userProfileUi">
                            <div class="container-fluid">

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="userImgGrp">
                                            <div class="userImgs">
                                                <img src="{{asset('dashboard/images/caroBanner.jpg')}}">
                                            </div>
                                            <div class="float-left">
                                                <h6><strong>Name : </strong></h6>
                                            </div>
                                            <div class="float-right">
                                                <h6>Sagar Khadka</h6>
                                            </div>
                                            <div class="clear"></div>
                                            <div class="float-left">
                                                <h6><strong>Email : </strong></h6>
                                            </div>
                                            <div class="float-right">
                                                <h6>Sagar@gmailcom</h6>
                                            </div>
                                            <div class="clear"></div>
                                            <div class="float-left">
                                                <h6><strong>Phone : </strong></h6>
                                            </div>
                                            <div class="float-right">
                                                <h6>786151812</h6>
                                            </div>
                                            <div class="clear"></div>
                                            <div class="float-left">
                                                <h6><strong>Address : </strong></h6>
                                            </div>
                                            <div class="float-right">
                                                <h6>Mulpani</h6>
                                            </div>
                                            <div class="clear"></div>


                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="activeCase">
                                            <div class="float-left">

                                                <p><strong>Acive Properties : </strong></p>
                                            </div>
                                            <div class="float-right">
                                                <p>0</p>

                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="activeCase mt-3">
                                            <div class="float-left">

                                                <p><strong>Drafted Properties : </strong></p>
                                            </div>
                                            <div class="float-right">
                                                <p>0</p>

                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="seeAllGrp">
                                                    <div class="seeAllPr">
                                                        <img src="{{asset('dashboard/images/caroBanner.jpg')}}">
                                                    </div>
                                                    <a href="activePr.html">See All Active Properties</a>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="seeAllGrp">
                                                    <div class="seeAllPr">
                                                        <img src="{{asset('dashboard/images/caroBanner.jpg')}}">
                                                    </div>
                                                    <a href="drated.html">See All Drafted Properties</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection

<script>
    feather.replace()
</script>
