@extends('admin.layouts.admin')
@section('title', "Warehouses")
@section('content')

    <div class="row">
        <div class="col-md-12">
            <x-inform-users></x-inform-users>
        </div>

        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-2">Warehouses</h4>
                    <p class="text-muted font-14 mb-4">
                        The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page
                        that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
                    </p>

                    <p>
                        <a class="btn btn-primary" href="{{route('warehouses.create')}}">New Warehouse</a>
                    </p>


                    <table id="datatable-buttons" class="table table-striped dt-responsive js-exportable nowrap w-100">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>User ID</th>
                            <th>Warehouse Name</th>
                            <th>Location</th>
                            <th>Created date</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($warehouses as $warehouse)
                            <tr>
                                <td>{{$warehouse->id}}</td>
                                <td>{{$warehouse->user_id  }}</td>
                                <td>{{$warehouse->name}}</td>
                                <td>{{$warehouse->location}}</td>
                                <td>{{$warehouse->created_at->format('d F Y')}}</td>

                                <td>
                                   {{-- @can('access-setting',$warehouse)--}}
                                        <a class="btn btn-outline-primary table-btn btn-sm" href="{{route('warehouses.edit', $warehouse->id)}}" title="Edit"><i class="zmdi zmdi-edit"></i></a>
                                   {{-- @endcan

                                    @can('access-setting',$warehouse)--}}
                                        <form class="d-inline"  action="{{route('warehouses.destroy',$warehouse->id)}}" method="post">
                                            @method('DELETE')
                                            @csrf

                                            <button class="btn btn-outline-danger table-btn btn-sm"  title="Delete"><i class="zmdi zmdi-delete"></i></button>
                                        </form>
                                    {{--@endcan--}}
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
