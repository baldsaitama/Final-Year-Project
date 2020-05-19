
@extends('admin.dashboard-layout')

@section('title')
	Amenities
@endsection

@section('content-header')
	<h1>
	  Amenities
	</h1>
	<ol class="breadcrumb">
	  <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
	  <li class="active">Amenities</li>
	</ol>
@endsection

@section('content')
	<section>
		<div class="row">
			<div class="col-md-12">
				<div class="box">
		            <div class="box-header">
		                <h3 class="box-title">All Amenities</h3>
		              	<a href="#" class="btn btn-default pull-right" data-toggle="modal" data-target="#creatAmenityModal">
		              		<i class="fa fa-plus"></i> Add item
		              	</a>
		            </div>
		            <!-- /.box-header -->
		            <div class="box-body no-padding" id="tags-table">
			            @include('admin.amenities.index-body-content')
			        </div>
		        </div>
			</div>
		</div>

		<div class="modal fade" id="creatAmenityModal" tabindex="-1" role="dialog" aria-labelledby="creatAmenityModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      	<form action="{{ route('admin.amenities.store') }}" method="POST" enctype="multipart/form-data" id="createAmenityForm">
		      		@csrf
			      	<div class="modal-header">
			      	  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			      	  <h4 class="modal-title" id="creatAmenityModalLabel">Add new Amenity</h4>
			      	</div>
			      	<div class="modal-body">
						<div class="form-group">
		                  <label>Amenity Name <span class="text-danger">*</span></label>
		                  <input type="text"
		                  	name="name" 
		                  	value="{{ old('name') }}" 
		                  	class="form-control @error('name') is-invalid @enderror"
		                  	required placeholder="Tag Name" >
		                  @error('name')
		                      <span class="invalid-feedback" role="alert">
		                          <strong>{{ $message }}</strong>
		                      </span>
		                  @enderror
		                </div>
			      	</div>
			      	<div class="modal-footer">
			      	  <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
			      	  <button type="submit" class="btn btn-primary"><i class="fa fa-spinner fa-spin hide"></i>Create</button>
			      	</div>
		      	</form>
		    </div>
		  </div>
		</div>
		<div class="modal fade" id="editAmenityModal" tabindex="-1" role="dialog" aria-labelledby="editAmenityModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      	<form action="" method="POST" enctype="multipart/form-data" id="editAmenityForm">
		      		@csrf
		      		@method('PUT')
			      	<div class="modal-header">
			      	  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			      	  <h4 class="modal-title" id="editAmenityModalLabel">Edit Amenity</h4>
			      	</div>
			      	<div class="modal-body">
						<div class="form-group">
		                  <label>Amenity Name</label>
		                  <input type="text"
		                  	name="name" 
		                  	class="form-control @error('name') is-invalid @enderror"
		                  	required placeholder="Amenity Name" >
		                  @error('name')
		                      <span class="invalid-feedback" role="alert">
		                          <strong>{{ $message }}</strong>
		                      </span>
		                  @enderror
		                </div>
			      	</div>
			      	<div class="modal-footer">
			      	  <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
			      	  <button type="submit" class="btn btn-primary"><i class="fa fa-spinner fa-spin hide"></i>Save</button>
			      	</div>
		      	</form>
		    </div>
		  </div>
		</div>
	</section>
@endsection

@section('javascripts')

@parent
	<script>

		var viewCard = $('#tags-table');

		viewCard.on('click', '.confirm-delete', function(e){
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
            		toastMessage(response);

            		if(response.status){
        				form.closest('tr').remove();
            		}
	           }).fail(function(response) {
        			handleAjaxFailRequest(response);
        		});
          }));
		});

		$('#createAmenityForm').on('submit', function(e){
			e.preventDefault();

			var form = $(this);
			var button = form.find('button');
			var modal = form.closest('.modal');

			makeSimpleRequest(form, modal, 'POST', viewCard, true)
		})

		$('#editAmenityForm').on('submit', function(e){
			e.preventDefault();

			var form = $(this);
			var button = form.find('button');
			var modal = form.closest('.modal');

			makeSimpleRequest(form, modal, 'PUT', viewCard, true)
		})

		$('#editAmenityModal').on('show.bs.modal', function (e) {
		  var button = $(e.relatedTarget)
		  var data = button.data('data') 
		  var route = button.data('route') 
		  var modal = $(this)

		  var form = modal.find('form')
		  form.trigger('reset')
		  form.attr('action', route)
		  modal.find("input[name=name]").val(data.name)
		})

	</script>
@endsection