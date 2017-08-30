@extends('layouts.app')

@section('content')

    <div class="row">

        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-body">
                    <h3><span class="label label-lg label-success">Users list</span></h3>
                    <div class="table-responsive panel-collapse pull out">
                        <table class="table table-bordered table-hover" id="table1">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        </td>
                                        <td>{{ $user->getFullName()}}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->phone }}</td>
                                        <td class="text-center">
                                            <!-- button toolbar -->
                                            <div class="toolbar">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-sm btn-default">Action</button>
                                                    <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown">
                                                        <span class="caret"></span>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li><a href="javascript:void(0);"><i class="icon ico-pencil"></i>Update</a></li>
                                                        <li><a href="javascript:void(0);"><i class="icon ico-print3"></i>Print</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="javascript:void(0);" class="text-danger"><i class="icon ico-remove3"></i>Delete</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!--/ button toolbar -->
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    {{ $users->links() }}

                    <pre>
                        {{ print_r($url_params, 2) }}
                    </pre>
                </div>
            </div>
        </div>
    </div>

@endsection