
@extends('admin.dashboard-layout')

@php 
	$can_manage = authUser()->can('manage_products');
@endphp

@section('title')
	Properties
@endsection

@section('stylesheets')
@parent
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css">
	<style>
		.invalid-select2{
			border: 1px solid red;
		}
	</style>
@endsection

@section('content-header')
	<h1>
	  Properties
	</h1>
	<ol class="breadcrumb">
	  <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a href="{{ route('admin.properties.index') }}"><i class="fa fa-dashboard"></i> Properties</a></li>
	  <li class="active">Property</li>
	</ol>
@endsection

@section('content')
	<section>
		<div class="row">
			<div class="col-md-12">
				<div class="box" id="property-create-box">
					<form action="{{ route('admin.properties.store') }}" method="POST" enctype="multipart/form-data" id="createPropertyForm" autocomplete="off">
	        			@csrf
	                    <div class="box-header">
	                      <h3 class="box-title">Create Property</h3>
	                      	<div class="box-tools pull-right">
	        	        	    <a href="{{ url()->previous() }}" class="btn btn-default">Cancel</a>
	        	        	    <button type="submit" class="btn btn-success">Create</button>
	                	  	</div>
	                    </div>
			            <div class="box-body no-padding">
				            <div class="col-md-6">
				            	<div class="form-group">
			    	                <label for="name">Property Title <span class="text-danger">*</span></label>
			    	                <input 
			    	                	type="text"
			    	                	name="title"
			    	                	class="form-control @error('title') is-invalid @enderror"
			    	                	id="title"
			    	                	placeholder="Enter property title"
			    	                	required value="{{ old('title') }}"
			    	                	autocomplete="off">
			    	                @error('title')
			    	                    <span class="invalid-feedback" role="alert">
			    	                        <strong>{{ $message }}</strong>
			    	                    </span>
			    	                @enderror
		    	                </div>
				            </div>
        		            <div class="col-md-6">
        		            	<div class="form-group">
        	    	                <label for="status">Status</label>
        	    	                <input 
        	    	                	type="text"
        	    	                	name="status"
        	    	                	class="form-control @error('status') is-invalid @enderror"
        	    	                	id="status"
        	    	                	placeholder="Enter status"
        	    	                	value="{{ old('status') }}"
        	    	                	autocomplete="off">
        	    	                @error('status')
        	    	                    <span class="invalid-feedback" role="alert">
        	    	                        <strong>{{ $message }}</strong>
        	    	                    </span>
        	    	                @enderror
            	                </div>
        		            </div>
        		            <div class="col-md-6">
        		            	<div class="form-group">
        	    	                <label for="type">type</label>
        	    	                <input 
        	    	                	type="text"
        	    	                	name="type"
        	    	                	class="form-control @error('type') is-invalid @enderror"
        	    	                	id="type"
        	    	                	placeholder="Enter type"
        	    	                	value="{{ old('type') }}"
        	    	                	autocomplete="off">
        	    	                @error('type')
        	    	                    <span class="invalid-feedback" role="alert">
        	    	                        <strong>{{ $message }}</strong>
        	    	                    </span>
        	    	                @enderror
            	                </div>
        		            </div>
        		            <div class="col-md-6">
        		            	<div class="form-group">
        	    	                <label for="category">category</label>
        	    	                <input 
        	    	                	type="text"
        	    	                	name="category"
        	    	                	class="form-control @error('category') is-invalid @enderror"
        	    	                	id="category"
        	    	                	placeholder="Enter category"
        	    	                	value="{{ old('category') }}"
        	    	                	autocomplete="off">
        	    	                @error('category')
        	    	                    <span class="invalid-feedback" role="alert">
        	    	                        <strong>{{ $message }}</strong>
        	    	                    </span>
        	    	                @enderror
            	                </div>
        		            </div>
        		            <div class="col-md-6">
        		            	<div class="form-group">
        	    	                <label for="latitude">latitude</label>
        	    	                <input 
        	    	                	type="text"
        	    	                	name="latitude"
        	    	                	class="form-control @error('latitude') is-invalid @enderror"
        	    	                	id="latitude"
        	    	                	placeholder="Enter latitude"
        	    	                	value="{{ old('latitude') }}"
        	    	                	autocomplete="off">
        	    	                @error('latitude')
        	    	                    <span class="invalid-feedback" role="alert">
        	    	                        <strong>{{ $message }}</strong>
        	    	                    </span>
        	    	                @enderror
            	                </div>
        		            </div>
        		            <div class="col-md-6">
        		            	<div class="form-group">
        	    	                <label for="longitude">longitude</label>
        	    	                <input 
        	    	                	type="text"
        	    	                	name="longitude"
        	    	                	class="form-control @error('longitude') is-invalid @enderror"
        	    	                	id="longitude"
        	    	                	placeholder="Enter longitude"
        	    	                	value="{{ old('longitude') }}"
        	    	                	autocomplete="off">
        	    	                @error('longitude')
        	    	                    <span class="invalid-feedback" role="alert">
        	    	                        <strong>{{ $message }}</strong>
        	    	                    </span>
        	    	                @enderror
            	                </div>
        		            </div>
        		            <div class="col-md-6">
        		            	<div class="form-group">
        	    	                <label for="property_face">property_face</label>
        	    	                <input 
        	    	                	type="text"
        	    	                	name="property_face"
        	    	                	class="form-control @error('property_face') is-invalid @enderror"
        	    	                	id="property_face"
        	    	                	placeholder="Enter property_face"
        	    	                	value="{{ old('property_face') }}"
        	    	                	autocomplete="off">
        	    	                @error('property_face')
        	    	                    <span class="invalid-feedback" role="alert">
        	    	                        <strong>{{ $message }}</strong>
        	    	                    </span>
        	    	                @enderror
            	                </div>
        		            </div>
        		            <div class="col-md-6">
        		            	<div class="form-group">
        	    	                <label for="road_width">road_width</label>
        	    	                <input 
        	    	                	type="text"
        	    	                	name="road_width"
        	    	                	class="form-control @error('road_width') is-invalid @enderror"
        	    	                	id="road_width"
        	    	                	placeholder="Enter road_width"
        	    	                	value="{{ old('road_width') }}"
        	    	                	autocomplete="off">
        	    	                @error('road_width')
        	    	                    <span class="invalid-feedback" role="alert">
        	    	                        <strong>{{ $message }}</strong>
        	    	                    </span>
        	    	                @enderror
            	                </div>
        		            </div>
        		            <div class="col-md-6">
        		            	<div class="form-group">
        	    	                <label for="road_unit">road_unit</label>
        	    	                <input 
        	    	                	type="text"
        	    	                	name="road_unit"
        	    	                	class="form-control @error('road_unit') is-invalid @enderror"
        	    	                	id="road_unit"
        	    	                	placeholder="Enter road_unit"
        	    	                	value="{{ old('road_unit') }}"
        	    	                	autocomplete="off">
        	    	                @error('road_unit')
        	    	                    <span class="invalid-feedback" role="alert">
        	    	                        <strong>{{ $message }}</strong>
        	    	                    </span>
        	    	                @enderror
            	                </div>
        		            </div>
        		            <div class="col-md-6">
        		            	<div class="form-group">
        	    	                <label for="road_type">road_type</label>
        	    	                <input 
        	    	                	type="text"
        	    	                	name="road_type"
        	    	                	class="form-control @error('road_type') is-invalid @enderror"
        	    	                	id="road_type"
        	    	                	placeholder="Enter road_type"
        	    	                	value="{{ old('road_type') }}"
        	    	                	autocomplete="off">
        	    	                @error('road_type')
        	    	                    <span class="invalid-feedback" role="alert">
        	    	                        <strong>{{ $message }}</strong>
        	    	                    </span>
        	    	                @enderror
            	                </div>
        		            </div>
        		            <div class="col-md-6">
        		            	<div class="form-group">
        	    	                <label for="built_year">built_year</label>
        	    	                <input 
        	    	                	type="text"
        	    	                	name="built_year"
        	    	                	class="form-control @error('built_year') is-invalid @enderror"
        	    	                	id="built_year"
        	    	                	placeholder="Enter built_year"
        	    	                	value="{{ old('built_year') }}"
        	    	                	autocomplete="off">
        	    	                @error('built_year')
        	    	                    <span class="invalid-feedback" role="alert">
        	    	                        <strong>{{ $message }}</strong>
        	    	                    </span>
        	    	                @enderror
            	                </div>
        		            </div>
        		            <div class="col-md-6">
        		            	<div class="form-group">
        	    	                <label for="furnish">furnish</label>
        	    	                <input 
        	    	                	type="text"
        	    	                	name="furnish"
        	    	                	class="form-control @error('furnish') is-invalid @enderror"
        	    	                	id="furnish"
        	    	                	placeholder="Enter furnish"
        	    	                	value="{{ old('furnish') }}"
        	    	                	autocomplete="off">
        	    	                @error('furnish')
        	    	                    <span class="invalid-feedback" role="alert">
        	    	                        <strong>{{ $message }}</strong>
        	    	                    </span>
        	    	                @enderror
            	                </div>
        		            </div>
        		            <div class="col-md-6">
        		            	<div class="form-group">
        	    	                <label for="kitchen">kitchen</label>
        	    	                <input 
        	    	                	type="text"
        	    	                	name="kitchen"
        	    	                	class="form-control @error('kitchen') is-invalid @enderror"
        	    	                	id="kitchen"
        	    	                	placeholder="Enter kitchen"
        	    	                	value="{{ old('kitchen') }}"
        	    	                	autocomplete="off">
        	    	                @error('kitchen')
        	    	                    <span class="invalid-feedback" role="alert">
        	    	                        <strong>{{ $message }}</strong>
        	    	                    </span>
        	    	                @enderror
            	                </div>
        		            </div>
        		            <div class="col-md-6">
        		            	<div class="form-group">
        	    	                <label for="bedroom">bedroom</label>
        	    	                <input 
        	    	                	type="text"
        	    	                	name="bedroom"
        	    	                	class="form-control @error('bedroom') is-invalid @enderror"
        	    	                	id="bedroom"
        	    	                	placeholder="Enter bedroom"
        	    	                	value="{{ old('bedroom') }}"
        	    	                	autocomplete="off">
        	    	                @error('bedroom')
        	    	                    <span class="invalid-feedback" role="alert">
        	    	                        <strong>{{ $message }}</strong>
        	    	                    </span>
        	    	                @enderror
            	                </div>
        		            </div>
        		            <div class="col-md-6">
        		            	<div class="form-group">
        	    	                <label for="bathroom">bathroom</label>
        	    	                <input 
        	    	                	type="text"
        	    	                	name="bathroom"
        	    	                	class="form-control @error('bathroom') is-invalid @enderror"
        	    	                	id="bathroom"
        	    	                	placeholder="Enter bathroom"
        	    	                	value="{{ old('bathroom') }}"
        	    	                	autocomplete="off">
        	    	                @error('bathroom')
        	    	                    <span class="invalid-feedback" role="alert">
        	    	                        <strong>{{ $message }}</strong>
        	    	                    </span>
        	    	                @enderror
            	                </div>
        		            </div>
        		            <div class="col-md-6">
        		            	<div class="form-group">
        	    	                <label for="living_room">living_room</label>
        	    	                <input 
        	    	                	type="text"
        	    	                	name="living_room"
        	    	                	class="form-control @error('living_room') is-invalid @enderror"
        	    	                	id="living_room"
        	    	                	placeholder="Enter living_room"
        	    	                	value="{{ old('living_room') }}"
        	    	                	autocomplete="off">
        	    	                @error('living_room')
        	    	                    <span class="invalid-feedback" role="alert">
        	    	                        <strong>{{ $message }}</strong>
        	    	                    </span>
        	    	                @enderror
            	                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                      <label for="user_id">Customer <span class="text-danger">*</span></label>
                                      <span class="clearfix"></span>
                                      <select
                                        class="form-control select2-lazy-list @error('user_id') is-invalid @enderror"
                                        id="user_id"
                                        data-placeholder="select customer"
                                        name="user_id"
                                        required
                                        data-source="{{ route('admin.users.getLists') }}"
                                        style="width:100%">
                                      </select>
                                      @error('user_id')
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                      @enderror
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Is property published?</label>
                                    <div class="radio">
                                        <label class="pad-r-10">
                                          <input type="radio" name="is_published" id="is_published" value="1" checked>
                                          Yes
                                        </label>
                                        <label>
                                          <input type="radio" name="is_published" id="is_published1" value="0">
                                          No
                                        </label>
                                    </div>
                                </div>
                            </div>
        		            <div class="col-md-12">
        		            	<label for="tags">Properties Images</label>
        		            	<div class="form-froup">
        		            		<div class="dropzone" id="my-awesome-dropzone"></div>
        		            	</div>
        		            </div>
        		            <div class="clearfix"></div>
        		            <br>
							<div class="col-md-12">
                                <label for="description">Description</label>
								<div class="form-froup">
									<textarea name="description" class="form-control" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
								</div>
							</div>
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
	</section>
@endsection

@section('javascripts')

@parent
	<script src="{{ asset('js/dropzone.js') }}"></script>
	<script>
		var productCreateBox = $('#property-create-box');

		Dropzone.options.myAwesomeDropzone = {
			autoProcessQueue: false,
			url: "{{ route('admin.properties.store') }}",
			paramName: "files",
			maxFilesize: 8, 
			addRemoveLinks: true,
			uploadMultiple: true,
			acceptedFiles: 'image/*',
		  	init: function () {

		          var myDropzone = this;

		          $("button[type=submit]").click(function (e) {
		              e.preventDefault();
		              addCardLoader(productCreateBox);

		              var submitForm = true;
		              $("input[required]").each(function(){
		              	var $this = $(this);
		              	if(!$this.val()){
		              		submitForm = false;
		              		toastr.error($this.attr('name').split('_').join(' ')  + ' is required');
		              		$this.addClass('is-invalid');
		              	}
		              });

		              $("select[required]").each(function(){
		              	var $this = $(this);
		              	if(!$this.val()){
		              		submitForm = false;
		              		toastr.error($this.attr('name').split('_').join(' ') + ' is required');
		              		$this.siblings('span.select2').addClass('invalid-select2');
		              	}
		              });

		              if(myDropzone.getQueuedFiles().length >0 && submitForm){
		              	myDropzone.processQueue();
		              }else if (submitForm) {
		              	$('#createPropertyForm').submit();
		              }else{
		              	removeCardLoader(productCreateBox);
		              	toastr.error('Please select at least one file');
		              }
		          });

		          this.on('sending', function(file, xhr, formData) {
		              var data = $('#createPropertyForm').serializeArray();
		              $.each(data, function(key, el) {
		                  formData.append(el.name, el.value);
		              });
		          });
		          
		         this.on('success', function(file, response){
		     		toastMessage(response);
		     		window.location.href = "{{ route('admin.properties.index') }}";
		         });

		        this.on('error', function(file, response, xhr){
        	     	this.removeFile(file)

        	     	new File([file], file.name, { type: file.type });
        	     	this.addFile(file);

        	     	if(xhr.status === 422) {
        		      $.each(response.errors, function(key, error) {
        		        toastr.error(error[0]);
        		      });
        		    }

        		    if(xhr.status === 500) {
        		         toastr.error('Internal server error');
        		    }

        		     if(xhr.status === 404){
        		         toastr.error(response.message);
        		    }
		        });

		        this.on('complete', function(){
		        	removeCardLoader(productCreateBox);
		        });
		     }
		};

		$("input[required]").on('focus', function(e){
			$(this).removeClass('is-invalid')
		});
		$("select[required]").on('focus, click, change', function(e){
			$(this).siblings('span.select2').removeClass('invalid-select2')
		});
	</script>
@endsection