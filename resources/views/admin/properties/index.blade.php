@extends('admin.dashboard-layout')


@section('title')
    Properties
@endsection

@section('content-header')
	<h1>
        Properties
	</h1>
	<ol class="breadcrumb">
	  <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
	  <li class="active">Properties</li>
	</ol>
@endsection

@section('content')
	<section>
		<div class="row">
			<div class="col-md-12">
				<div class="box">
		            <div class="box-header">
		              <h3 class="box-title">All Properties</h3>
		              	<a href="{{ route('admin.properties.create') }}" class="btn btn-default pull-right">
		              		<i class="fa fa-plus"></i> Add item
		              	</a>
		            </div>
		            <!-- /.box-header -->
		            <div class="box-body no-padding" id="products-table">
			            <table class="table table-striped">
			                <tbody>
			                	<tr>
			                      <th style="width: 10px">#</th>
			                      <th>Name</th>
			                      <th>Image</th>
			                      <th>Operation</th>
			                    </tr>
			                    @forelse($properties as $index => $property)
			                        <tr>
			                          <td>{{ ++$index }}</td>
			                          <td>
                                        {{ $property->title }}
			                          </td>
			                          <td>
			                          	<img src="{{ $property->images->first() ? asset($property->images->first()->path) : '' }}" alt="" height="20" width="20">
			                          </td>
			                          <td>
			                          	<a href="{{ route('admin.properties.edit', $property->id) }}">
			                          		<i class="fa fa-edit"></i>
			                          	</a>
			            				{!! getDeleteForm(route('admin.properties.destroy', $property->id), "Delete property ({$property->name})?", "Are you sure you want to delete this property ({$property->name})", 'btn btn-flat text-danger', 'fa fa-archive') !!}
			                          </td>
			                        </tr>
			                    @empty

			                    @endforelse
			                </tbody>
			            </table>
			            <div class="pull-right">
			            	{{ $properties->appends(request()->query())->links() }}
			            </div>
			        </div>
		        </div>
			</div>
		</div>
	</section>
@endsection