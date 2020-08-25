@extends('layouts.dashboardapp')
@section('title')
    Bookings
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
                                        <img src="{{authUser()->present()->profilePicture}}">
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="userInfo">
                                        <h6>Welcome Back</h6>
                                        <p>{{authUser()->name}}</p>
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
                                    <a href="{{route('users.edit',authUser()->id)}}">Edit Profile</a>
                                </li>
                                <li>
                                    <a href="{{route('users.editPassword')}}">Change Password</a>
                                </li>
                                <li>
                                    <a href="{{route('bookings.index')}}">Bookings</a>
                                </li>
                                <li>
                            @if(authUser()->user_type=="owner")
                                    <a href="{{route('notifications.index')}}">Notifications</a>
                                @endif
                                </li>
                                <li>
                                    <a href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Log Out</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="wrapper">
                    <div class="bhdaTable">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 mb-3 text-center">
                                    <h2>Your Bookings</h2>
                                </div>
                                <div class="col-lg-12">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th scope="col">S.N</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Property Details</th>
                                            <th scope="col">Action</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($bookings as $index=>$booking)
                                                <tr>
                                                    <th scope="row">{{++$index}}</th>
                                                    <td>
                                                        <div class="pprtGrp">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <p>You have booked <span>Mr. {{$booking->user->name}}</span> property</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="pprtGrp">
                                                            <div class="row">
                                                                <div class="col-3">
                                                                    <a href="{{route('properties.showProperty',$booking->property->id)}}">
                                                                        <img src="{{asset($booking->property->images->first()?$booking->property->images->first()->path:asset('images/banner.jpg'))}}" width="180">
                                                                    </a>
                                                                </div>
        
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <form action="{{route('bookings.destroy',$booking->id)}}" method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn-danger">Cancel Booking</button>
                                                        </form>
        
                                                    </td>
        
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
<!-- footer -->
<!--  JavaScript -->
<script type="text/javascript " src="js/jquery-3.2.1.min.js "></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript " src="js/owl.carousel.min.js "></script>
<script src="js/script.js"></script>
<script src="js/feather.min.js"></script>
<script>
    feather.replace()
</script>

