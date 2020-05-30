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
                <table>
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
                                <a href="{{route('properties.show',$property->id)}}">{{$property->title}}</a>
                            </td>
                            <td>
                                <a href="{{route('properties.edit',$property->id)}}">Edit</a>
                                <a href="{{route('properties.destroy',$property->id)}}">Delete</a>
                            </td>
                        </tr>
                        
                    @endforeach
                </table>
                {{-- <div>
                    @foreach ($properties as $property)
                        <a href="{{route('properties.show',$property->id)}}">{{$property->type}}</a>
                        <a href="{{route('properties.edit',$property->id)}}">Edit</a>
                        <a href="{{route('properties.destroy',$property->id)}}">Delete</a>
                    @endforeach
                </div> --}}
            </div>
        </div>
    </div>
</div>
@endsection