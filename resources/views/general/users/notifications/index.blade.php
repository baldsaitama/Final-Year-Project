@extends('layouts.app')

@section('title')
    Notifications
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
            <div class="wrapper">
                <div class="bhdaTable">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 mb-3 text-center">
                                <h2>Notifications</h2>
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
                                        @foreach ($notifications as $index=>$notification)
                                            <tr>
                                                <th scope="row">{{++$index}}</th>
                                                <td>
                                                    @php
                                                        $notification_data = $notification->data;
                                                    @endphp
                                                    <div class="pprtGrp">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <p>{{$notification_data['message']}}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="pprtGrp">
                                                        <div class="row">
                                                            <div class="col-3">
                                                                <img src="images/caroBanner.jpg" width="180">
                                                            </div>
        
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button>Confirm</button>
                                                    <button>Delete</button>
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
