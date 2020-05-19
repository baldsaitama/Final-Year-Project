@extends('admin.dashboard-layout')

@section('title')
	Dashboard
@endsection

@section('stylesheets')
@parent
<style>
    #map{
        height:250px;
        width:100%;
    }
    #map2{
        height:250px;
        width:100%;
    }
    .pac-container {
        z-index: 1051 !important;
    }
    .admin-dropdown a{
      width: 100%;
    }
</style>
@endsection

@section('content-header')
	<h2>
	  Dashboard 
    </h2>
@endsection