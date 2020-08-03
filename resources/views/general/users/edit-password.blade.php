@extends('layouts.dashboardapp')

@section('title')
    Change Password
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
                            @if (authUser()->user_type=="owner")
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
                <div class="col-lg-10 ">
                    <div class="dashContain">
                        <div class="photobazarCard">
                            <h4>Change Password</h4>

                            <div class="userProfileUi">
                                <div class="container-fluid">
                                    <form action="{{route('users.changePassword',authUser()->id)}}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <span class="dashHead">Old Password</span>
                                                <input type="password" name="old_password" class="form-control mt-2 mb-3 @error('old_password') is-invalid @enderror" id="old_password" placeholder="Enter your current password" required autofocus>
                                                @error('required')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror

                                                <span class="dashHead ">New Password</span>
                                                <input type="password" name="password" class="form-control mt-2 mb-3 @error('new_password') is-invalid @enderror" id="password" placeholder="Enter your new password" required>
                                                @error('required')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror

                                                <span class="dashHead ">Confirm Password</span>
                                                <input id="password-confirm" type="password" class="form-control mt-2 mb-3" name="password_confirmation" required autocomplete="new-password" placeholder="Re-enter your new password">

                                            </div>

                                            <div class="col-lg-12 text-center mt-3">
                                                <button type="submit" class="btn btn-primary">Save Changes</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
