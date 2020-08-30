@extends('layouts.dashboardapp')

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
                                <a href="{{route('bookings.index')}}">Bookings</a>
                            </li>
                            <li>
                        @if(authUser()->user_type == "owner")
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
                                                                @php
                                                                    $user = \App\Models\User::where('id',$notification_data['user_id'])->first();
                                                                    $booking = \App\Models\Booking::where('id',$notification_data['id'])->first();
                                                                @endphp
                                                                @if ($user)
                                                                    <div style="font-style: italic;">
                                                                        <div>Name:{{$user->name}}</div>
                                                                        <div>Phone:{{$user->phone}}</div>
                                                                        <div>Email:{{$user->email}}</div>
                                                                    </div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="pprtGrp">
                                                        <div class="row">
                                                            <div class="col-3">
                                                                @if ($booking->property)
                                                                    <img src="{{asset($booking->property->images->first()?$booking->property->images->first()->path:asset('images/caroBanner.jpg'))}}" alt="" width="100" height="100">
                                                                @else
                                                                    <img src="images/caroBanner.jpg" width="180">
                                                                @endif
                                                            </div>

                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    @if (array_key_exists('status',$notification_data))
                                                        @php
                                                            $booking = \App\Models\Booking::where('id',$notification_data['id'])->first();
                                                        @endphp
                                                        @if ($booking->status == 'pending')
                                                            <a href="{{route('bookings.accept',$notification_data['id'])}}" class="notification-read notificationButton">
                                                                Confirm
                                                            </a>
                                                            <a href="{{route('bookings.reject',$notification_data['id'])}}" class="notification-read notificationButton">
                                                                Reject
                                                            </a>
                                                        @else
                                                            {{$booking->status}}
                                                        @endif
                                                    @endif
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
