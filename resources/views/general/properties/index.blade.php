@extends('layouts.app')

@section('title')
    Properties
@endsection

@section('content')
<div class="wrapper">
    <div class="container-fluid">
        <div class="postProperty">
            <h2>Property List</h2>
            <div class="row">
                <table id="properties-table" class="table">
                    <tr>
                        <th>
                            S.n.
                        </th>
                        <th>
                            Title
                        </th>
                        <th>
                            Action
                        </th>
                    </tr>
                    @foreach ($properties as $index=>$property)
                        <tr>
                            <td>{{++$index}} </td>
                            <td>
                                <div class="houesGrp">
                                    <a href="{{route('properties.showProperty',$property->id)}}">

                                        <div class=" propertiesimg">
                                            <img src="{{asset($property->images->first()?$property->images->first()->path:asset('images/banner.jpg'))}}">

                                            <span class="priceTag">Rs. {{$property->price}}</span>

                                        </div>
                                        <h6>{{$property->title}}</h6>

                                        <p><i class="fa fa-map-marker-alt mr-2"></i>{{$property->address_line_1}}</p>
                                    </a>
                                </div>
{{--                                <a href="{{route('properties.show',$property->id)}}">{{$property->title}}</a>--}}
                            </td>
                            <td>
                                <a class="btn btn-gharBhadaBtn" href="{{route('properties.edit',$property->id)}}">Edit</a>
                                {!! getDeleteForm(route('properties.destroy', $property->id), "Delete property ({$property->title})?", "Are you sure you want to delete this property", 'btn btn-flat ink-reaction text-danger', 'fa fa-archive') !!}
                                {{-- <a href="{{route('properties.destroy',$property->id)}}">Delete</a> --}}
                            </td>
                        </tr>

                    @endforeach
                </table>

            </div>
        </div>
    </div>
</div>
@endsection

@section('javascripts')
    @parent
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script>
        var viewCard = $('#properties-table');

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

        function confirmWithCallback(title, text, cb) {
            if(!isOnline()){
            return false;
            }
            Swal.fire({
            title: title,
            text: text,
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#dd3333',
            cancelButtonColor: '#9e9a9a',
            cancelButtonText: 'Cancel',
            confirmButtonText: 'Yes',
            reverseButtons: true
            }).then((result) => {
            if (result.value) {
                cb(result);
            }
            })
        }
    </script>
@endsection
