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
                <div>
                    @foreach ($properties as $property)
                        <a href="{{route('properties.show',$property->id)}}">{{$property->type}}</a>
                        <a href="{{route('properties.edit',$property->id)}}">Edit</a>
                        <a href="{{route('properties.destroy',$property->id)}}">Delete</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection