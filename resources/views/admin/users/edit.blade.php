
@extends('admin.dashboard-layout')

@section('title')
	Edit User
@endsection

@section('content-header')
	<h1>
	  Edit User
	</h1>
	<ol class="breadcrumb">
	  <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
	  <li class="active">Edit User</li>
	</ol>
@endsection

@section('content')

	<div class="row">
		<div class="col-md-12">
			<div class="box">
				<form action="{{ route('admin.users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
					@csrf
					@method('PUT')
		            <div class="box-header">
		              <h3 class="box-title">Edit user</h3>
		              	<div class="box-tools pull-right">
			        	    <a href="{{ url()->previous() }}" class="btn btn-default">Cancel</a>
			        	    <button type="submit" class="btn btn-success">Save</button>
		        	  	</div>
		            </div>
		            <!-- /.box-header -->
		            <div class="box-body no-padding">
			            <div class="col-md-12">
			            	<div class="form-group">
		    	                <label for="name">Full Name <span class="text-danger">*</span></label>
		    	                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Enter first name" required value="{{ $user->name }}">
		    	                @error('name')
		    	                    <span class="invalid-feedback" role="alert">
		    	                        <strong>{{ $message }}</strong>
		    	                    </span>
		    	                @enderror
	    	                </div>
			            </div>
			            <div class="col-md-6">
			            	<div class="form-group">
		    	                <label for="email">Email <span class="text-danger">*</span></label>
		    	                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Enter email" required disabled readonly value="{{ $user->email }}">
		    	                @error('email')
		    	                    <span class="invalid-feedback" role="alert">
		    	                        <strong>{{ $message }}</strong>
		    	                    </span>
		    	                @enderror
	    	                </div>
			            </div>
    		            <div class="col-md-6">
    		            	<div class="form-group">
    	    	                <label for="phone">{{__('Mobile Phone')}} <span class="text-danger">*</span></label>
    	    	                <input type="number" name="phone" size="10" class="form-control @error('phone') is-invalid @enderror" id="phone" placeholder="Enter phone" required disabled readonly value="{{ $user->phone }}">
    	    	                @error('phone')
    	    	                    <span class="invalid-feedback" role="alert">
    	    	                        <strong>{{ $message }}</strong>
    	    	                    </span>
    	    	                @enderror
        	                </div>
    		            </div>
    		            <div class="col-md-6">
    		            	<div class="form-group">
    	    	                <label for="type">{{__('Type')}}</label>
    	    	                <select
    	    	                	class="form-control @error('type') is-invalid @enderror"
    	    	                	id="type"
    	    	                	data-placeholder="select user type"
    	    	                	name="user_type"
    	    	                	required>
    	    	               		@foreach(getUserTypes() as $key => $value)
										<option value="{{ $key }}" {{ $key == $user->user_type ? 'selected' : '' }}>
											{{ $value }}
										</option>
    	    	               		@endforeach
    	    	                </select>
    	    	                @error('type')
		    	                    <span class="invalid-feedback" role="alert">
		    	                        <strong>{{ $message }}</strong>
		    	                    </span>
		    	                @enderror
        	                </div>
    		            </div>
						<div class="clearfix"></div>
    		            <div class="col-md-6">
    		            	<div class="form-group">
    	    	                <label for="profile_picture">{{__('Profile picture')}}</label>
    	    	                <input type="file" accept="image/*" name="profile_picture" size="10" class="form-control @error('profile_picture') is-invalid @enderror" id="profile_picture">
    	    	                @error('profile_picture')
    	    	                    <span class="invalid-feedback" role="alert">
    	    	                        <strong>{{ $message }}</strong>
    	    	                    </span>
    	    	                @enderror
        	                </div>
        	                @if($user->profile_picture)
								<img src="{{ $user->present()->profilePicture }}" alt="">
        	                @endif
    		            </div>
		            </div>
		            <div class="box-footer">
						<div class="pull-right">
							<a href="{{ url()->previous() }}" class="btn btn-default">Cancel</a>
							<button type="submit" class="btn btn-success">Save</button>
						</div>
		        	</div>
		        </form>
	        </div>
		</div>
	</div>
@endsection

