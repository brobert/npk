@extends('layouts.app')

@section('content')

    <div class="row">

        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Payments</div>

                <div class="panel-body">
                    Your payments
                    {!! var_dump( Request::path() ) !!}
                </div>
            </div>
        </div>
    </div>

@endsection