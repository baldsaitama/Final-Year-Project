
@extends('admin.dashboard-layout')

@section('title')
	User
@endsection

@section('content-header')
	<h1>
	  User
	</h1>
	<ol class="breadcrumb">
	  <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
	  <li><a href="{{ route('admin.users.index') }}"><i class="fa fa-users"></i> Users</a></li>
	  <li class="active">User</li>
	</ol>
@endsection

@section('content')

	<div class="row">
		<div class="col-md-12">
			<section class="content">
			      <div class="row">
			        <div class="col-md-3">

			          <div class="box box-primary">
			            <div class="box-body box-profile">
			              <img class="profile-user-img img-responsive img-circle" src="{{ $user->present()->profilePicture }}" alt="{{$user->name}}">

			              <h3 class="profile-username text-center">{{ $user->name }}</h3>

			              <p class="text-muted text-center">{{ $user->user_type ? $user->user_type.' user' : '' }}</p>

			              <ul class="list-group list-group-unbordered">
			                <li class="list-group-item">
			                  <b>Joined</b> <a class="pull-right">{{ $user->created_at ? $user->created_at->format('F d, Y') : 'start' }}</a>
			                </li>
			                <li class="list-group-item">
			                  <b>Properties Listed</b> <a class="pull-right">{{ $user->properties->count() }}</a>
			                </li>
			                {{-- <li class="list-group-item">
			                  <b>Bookings</b> <a class="pull-right">{{ $user->bookings->count() }}</a>
			                </li> --}}
			              </ul>
			            </div>
			          </div>
			        </div>
			        <div class="col-md-9">
			          <div class="nav-tabs-custom">
			            <ul class="nav nav-tabs">
			              <li class="active"><a href="#details" data-toggle="tab" aria-expanded="true">Details</a></li>
                            <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-default pull-right"><i class="fa fa-edit"></i> Edit</a>
			            </ul>
			            <div class="tab-content">
			              <div class="tab-pane active" id="details">
			                <div class="post">
			                  <div class="table-responsive mailbox-messages">
			                  	<table class="table table-hover table-striped">
				                  <tbody>
				                  <tr>
				                    <td class="mailbox-star" width="10px"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
				                    <td class="mailbox-name" width="10px">Name:</td>
				                    <td class="mailbox-subject">{{ $user->name }}</td>
				                  </tr>
				                  <tr>
				                  	<td class="mailbox-star" width="10px"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
				                  	<td class="mailbox-name" width="10px">Email:</td>
				                  	<td class="mailbox-subject">
				                  		<a href="mailto:{{ $user->email }}">{{ $user->email }}</a>
				                  	</td>
				                  </tr>
				                  <tr>
				                  	<td class="mailbox-star" width="10px"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
				                  	<td class="mailbox-name" width="10px">Mobile:</td>
				                  	<td class="mailbox-subject">{{ $user->phone }}</td>
				                  </tr>
				                  <tr>
				                  	<td class="mailbox-star" width="10px"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
				                  	<td class="mailbox-name" width="10px">Type:</td>
				                  	<td class="mailbox-subject">{{ $user->user_type }}</td>
				                  </tr>
				                  </tbody>
				                </table>
			                  </div>
			                </div>
			              </div>
			              {{-- <div class="tab-pane" id="timeline">

			              </div> --}}
			            </div>
			          </div>
			        </div>
			      </div>
			</section>
	    </div>
	</div>
@endsection
