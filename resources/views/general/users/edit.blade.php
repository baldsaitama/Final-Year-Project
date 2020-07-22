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
                                <a href="{{route('notifications.index')}}">Notifications</a>
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
                        <h4>Edit Profile</h4>

                        <div class="userProfileUi">
                            <div class="container-fluid">
                                <form action="{{route('users.update',authUser()->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <span class="dashHead">Name</span>
                                            <input type="text" name="name" class="form-control mt-2 mb-3 @error('name') is-invalid @enderror" id="name" placeholder="Enter your name" required autofocus value="{{authUser()->name}}">
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <span class="dashHead">Email</span>
                                            <input type="email" name="email" class="form-control mt-2 mb-3 @error('email') is-invalid @enderror" id="email" placeholder="Enter your email" required value="{{authUser()->email}}">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <span class="dashHead">phone</span>
                                            <input type="number" name="phone" class="form-control mt-2 mb-3 @error('phone') is-invalid @enderror" id="phone" placeholder="Enter your phone" value="{{authUser()->phone}}">
                                            @error('phone')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <span class="dashHead">Profile Picture</span>
                                            <input type="file" name="profile_picture" accept='image/*'>
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
