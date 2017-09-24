@extends('layouts.app')

@section('content')

    <div class="row">

    @foreach ($widgets as $widget)
    	@include('dashboard_widgets.' . $widget['path'],  ['data' => $widget['data']])
    @endforeach



    </div>

@endsection
