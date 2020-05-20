
@extends('admin.dashboard-layout')

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
		.dropzone .dz-preview .dz-image img {
		    height: 120px;
		    width: 120px;
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
				<div class="box" id="product-edit-box">
					<form action="{{ route('admin.properties.update', $property->id) }}" method="POST" enctype="multipart/form-data" id="editPropertyForm" autocomplete="off">
	        			@csrf
	        			@method('PUT')
	                    <div class="box-header">
	                      <h3 class="box-title">Edit property</h3>
	                      	<div class="box-tools pull-right">
	        	        	    <a href="{{ url()->previous() }}" class="btn btn-default">Cancel</a>
	        	        	    <button type="submit" class="btn btn-success">Save</button>
	                	  	</div>
	                    </div>
			            <div class="box-body no-padding">
				            <div class="col-md-6">
				            	<div class="form-group">
			    	                <label for="title">Property Title <span class="text-danger">*</span></label>
			    	                <input 
			    	                	type="text"
			    	                	name="title"
			    	                	class="form-control @error('title') is-invalid @enderror"
			    	                	id="title"
			    	                	placeholder="Enter property title"
			    	                	required value="{{ $property->title }}"
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
        	    	                <label for="page_title">Page title</label>
        	    	                <input 
        	    	                	type="text"
        	    	                	name="page_title"
        	    	                	class="form-control @error('page_title') is-invalid @enderror"
        	    	                	id="page_title"
        	    	                	placeholder="Enter page title"
        	    	                	value="{{ $property->page_title }}"
        	    	                	autocomplete="off">
        	    	                @error('page_title')
        	    	                    <span class="invalid-feedback" role="alert">
        	    	                        <strong>{{ $message }}</strong>
        	    	                    </span>
        	    	                @enderror
            	                </div>
        		            </div>
        		            <div class="clearfix"></div>
        		            <div class="col-md-12">
        		            	<label for="my-awesome-dropzone">Property Images</label>
        		            	<div class="form-froup">
        		            		<div class="dropzone" id="my-awesome-dropzone"></div>
        		            	</div>
        		            </div>
        		            <div class="clearfix"></div>
        		            <br>
							<div class="col-md-12">
                                <label for="description">Description</label>
								<div class="form-froup">
									<textarea name="description" class="form-control" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$property->description}}</textarea>
								</div>
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
	</section>
@endsection

@section('javascripts')

@parent
	<script src="{{ asset('js/dropzone.js') }}"></script>
	<script>
		var productCreateBox = $('#property-edit-box');
		var productIndex = "{{ route('admin.properties.index') }}";
		var productUpdate = "{{ route('admin.properties.update', $property->id) }}";
		var productImagesUrl = "{{ route('admin.properties.getImagesLists', $property->id) }}";
		var productUploadImageUrl = "{{ route('admin.properties.uploadImage', $property->id) }}";
		var productDeleteImageUrl = "{{ route('admin.properties.deleteImage', [$property->id, ':image_id']) }}";
		var base_url = "{{ url('/') }}" + '/';
		var numberFilesAdded = 0;
		var numberFilesRemoved = 0;

		Dropzone.options.myAwesomeDropzone = {
			autoProcessQueue: false,
			url: productUpdate,
			paramName: "files",
			maxFilesize: 8, 
			addRemoveLinks: true,
			uploadMultiple: true,
			acceptedFiles: 'image/*',
		  	init: function () {

		          var myDropzone = this;

		          $.get(productImagesUrl, function(data) {
	                  $.each(data, function (key,value) {
	                    var mockFile = { name: value.name, size: value.size, id:value.id };
	                    myDropzone.emit("addedfile", mockFile);
	                    myDropzone.emit("thumbnail", mockFile, base_url + value.path);
						myDropzone.emit('complete', mockFile);
						numberFilesAdded += 1;
	                  });
	              });

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
		              		toastr.error($this.attr('name').split('_').join(' ')  + ' is required');
		              		$this.siblings('span.select2').addClass('invalid-select2');
		              	}
		              });

		              if(myDropzone.getQueuedFiles().length >0 && submitForm){
		              	myDropzone.processQueue();
		              } else if(submitForm && numberFilesAdded > numberFilesRemoved) {
		              	$('#editPropertyForm').submit();
		              }else if (submitForm){
		              	$('#editPropertyForm').submit();
		              } else{
		              	removeCardLoader(productCreateBox);
		              	if(numberFilesAdded <= numberFilesRemoved){
		              		toastr.error('Please select at least one file');
		              	}
		              }
		          });

		          this.on('sending', function(file, xhr, formData) {
		              var data = $('#editPropertyForm').serializeArray();
		              $.each(data, function(key, el) {
		                  formData.append(el.name, el.value);
		              });
		          });
		          
		         this.on('success', function(file, response){
		     		toastMessage(response);
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

		        this.on('complete', function(file){
		        	removeCardLoader(productCreateBox);
		        });

		        this.on('completemultiple', function(file){
		        	removeCardLoader(productCreateBox);
		        	if(file.length > 0){
		        		window.location.href = productIndex;
		        	}
		        });

		        this.on("removedfile", function (file) {
		        	if(file.id){
	                    $.ajax({
	                        url: productDeleteImageUrl.replace(':image_id', file.id),
	                        type: 'DELETE',
	                        success: function (response) {
	                            toastMessage(response);
	                            numberFilesRemoved += 1;
	                        },
	                        error: function () {
	                            toastr.error('Some Error Occured');
	                        }
	                    })
		        	}
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