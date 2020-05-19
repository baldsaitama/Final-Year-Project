
@extends('admin.dashboard-layout')

@section('title')
	Create Users
@endsection


@section('content-header')
	<h1>
	  Create Users
	</h1>
	<ol class="breadcrumb">
	  <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
	  <li class="active">Create Users</li>
	</ol>
@endsection

@section('content')

	<div class="row">
		<div class="col-md-12">
			<div class="box">
				<form action="{{ route('admin.users.store') }}" method="POST" enctype="multipart/form-data" id="create_user_form">
					@csrf
		            <div class="box-header">
		              <h3 class="box-title">Create users</h3>
		              	<div class="box-tools pull-right">
			        	    <a href="{{ url()->previous() }}" class="btn btn-default">Cancel</a>
			        	    <button type="submit" class="btn btn-success">Create</button>
		        	  	</div>
		            </div>
		            <!-- /.box-header -->
		            <div class="box-body no-padding">
			            <div class="col-md-12">
			            	<div class="form-group">
		    	                <label for="name">Full Name <span class="text-danger">*</span></label>
		    	                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Enter full name" required value="{{ old('name') }}">
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
		    	                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Enter email" required value="{{ old('email') }}">
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
    	    	                <input type="number" name="phone" size="10" class="form-control @error('phone') is-invalid @enderror" id="phone" placeholder="Enter phone" required value="{{ old('phone') }}">
    	    	                @error('phone')
    	    	                    <span class="invalid-feedback" role="alert">
    	    	                        <strong>{{ $message }}</strong>
    	    	                    </span>
    	    	                @enderror
        	                </div>
    		            </div>
			            <div class="col-md-6">
			            	<div class="form-group">
		    	                <label for="password">Password <span class="text-danger">*</span></label>
		    	                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Enter password" required>
		    	                @error('password')
		    	                    <span class="invalid-feedback" role="alert">
		    	                        <strong>{{ $message }}</strong>
		    	                    </span>
		    	                @enderror
	    	                </div>
			            </div>
			            <div class="col-md-6">
			            	<div class="form-group">
		    	                <label for="password-confirm" >{{ __('Confirm Password') }} <span class="text-danger">*</span></label>

		    	                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
	    	                </div>
			            </div>
			            <div class="clearfix"></div>
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
										<option value="{{ $key }}">{{ $value }}</option>
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
		            </div>
		            <div class="box-footer">
						<div class="pull-right">
							<a href="{{ url()->previous() }}" class="btn btn-default">Cancel</a>
							<button type="submit" class="btn btn-success">Create</button>
						</div>
		        	</div>
		        </form>
	        </div>
		</div>
	</div>
@endsection
