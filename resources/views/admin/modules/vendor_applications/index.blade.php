@extends('admin.layouts.admin')
@section('title', "Users")
@section('content')

    <div class="row">
        <div class="col-md-12">
            <x-inform-users></x-inform-users>
        </div>

        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-2">Users</h4>
                    <p class="text-muted font-14 mb-4">
                        The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page
                        that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
                    </p>


                    <table id="datatable-buttons" class="table table-striped dt-responsive js-exportable nowrap w-100">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Avatar</th>
                            <th>User Type</th>
                            <th>Is Active</th>
                            <th>Created date</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($applications as $application)
                            <tr>
                                <td>{{$application->id}}</td>
                                <td>{{$application->user->name}}</td>
                                <td>{{$application->user->email}}</td>
                                <td><img src="{{asset($application->user->userProfile->avatar)}}" class="table-image"></td>
                                <td>{{$application->user->user_type}}</td>
                                <td>
                                    @if($application->is_active=== 0)
                                        <i class="zmdi zmdi-close text-danger"></i>
                                    @else
                                        <i class="zmdi zmdi-check text-success"></i>
                                    @endif
                                </td>
                                <td>{{$application->created_at->format('d F Y')}}</td>
                                <td>
                                    <a class="btn btn-outline-primary table-btn btn-sm" href="{{route('vendor-applications.show',$application->id )}}" title="Edit"><i class="fa fa-eye"></i></a>
                                </td>

                            </tr>

                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>


    @include('admin.partials.partial_assets.datatable')

@endsection
