
@extends('admin.dashboard-layout')

@php 
	$can_manage = authUser()->can('manage_users');
@endphp

@section('title')
	Users
@endsection

@section('content-header')
	<h1>
	  Users
	</h1>
	<ol class="breadcrumb">
	  <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
	  <li class="active">Users</li>
	</ol>
@endsection

@section('content')

	<div class="row">
		<div class="col-md-12">
			<div class="box">
	            <div class="box-header">
	              <h3 class="box-title">All users</h3>
	              @if($can_manage)
	              	<a href="{{ route('admin.users.create') }}" class="btn btn-default pull-right"><i class="fa fa-plus"></i> Add item</a>
	              @endif
	            </div>
	            <!-- /.box-header -->
	            <div class="box-body no-padding">
		            <table class="table table-striped">
		                <tbody>
		                	<tr>
			                  <th style="width: 10px">#</th>
			                  <th>Name</th>
			                  <th>Phone</th>
			                  <th>Email</th>
			                  <th>Type</th>
			                  <th>Operation</th>
			                </tr>
			                @forelse($users as $index => $user)
				                <tr>
				                  <td>{{ ++$index }}</td>
				                  <td>
				                  	<a href="{{ route('admin.users.show', $user->id) }}">
				                  		{{ $user->name }}
				                  	</a>
				                  </td>
				                  <td>
				                  	{{ $user->phone }}
				                  	{!! $user->phone ? ($user->phone_verified_at ? '<i class="fa fa-check text-success"></i>' : '<i class="fa fa-times text-danger"></i>') : '' !!}
				                  </td>
				                  <td>
				                  	{{ $user->email }} 
				                  	{!! $user->email ? ($user->email_verified_at ? '<i class="fa fa-check text-success"></i>' : '<i class="fa fa-times text-danger"></i>') : '' !!}
				                  </td>
				                  <td>
				                  	{{ $user->user_type }}
				                  </td>
				                  <td>
				                  	<a href="{{ route('admin.users.edit', $user->id) }}">
				                  		<i class="fa fa-edit"></i>
				                  	</a>
				                  	@if($user->id != authUser()->id)
										{!! getDeleteForm(route('admin.users.destroy', $user->id), "Delete user ({$user->name})?", "Are you sure you want to delete this user ({$user->name})", 'btn btn-flat ink-reaction text-danger', 'fa fa-archive') !!}
				                  	@endif
				                  </td>
				                </tr>
			                @empty

			                @endforelse
			             </tbody>
		         	</table>
		         	<div class="pull-right">
		         		{{ $users->appends(request()->query())->links() }}
		         	</div>
	            </div>
	        </div>
		</div>
	</div>
@endsection

@section('javascripts')

@parent
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
	<script>

		$('.confirm-delete').on('click', function(e){
			e.preventDefault();

			var title = $(this).data('title');
			var text = $(this).data('text');
			var form = $(this).next('.delete-form');
			var route = form.attr('action');

			confirmWithCallback(title, text, (function(result) {
            	$.ajax({
            		url: route,
            		method: 'DELETE',
            	}).done(function(response){
        			form.closest('tr').remove();
	               toastr.success('User deleted');
	           }).fail(function(response) {
        			toastr.success('Problem deleting user');
        		});
          }));
		});


	</script>
@endsection