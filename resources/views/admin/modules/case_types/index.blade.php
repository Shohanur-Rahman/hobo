@extends('admin.layouts.admin')
@section('title', "Case Types")
@section('content')

    <div class="row">
        <div class="col-md-12">
            <x-inform-users></x-inform-users>
        </div>

        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-2">Case Types</h4>
                    <p class="text-muted font-14 mb-4">
                        The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page
                        that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
                    </p>

                    <p>
                        <a class="btn btn-primary" href="{{route('case-types.create')}}">New Case Type</a>
                    </p>


                    <table id="datatable-buttons" class="table table-striped dt-responsive js-exportable nowrap w-100">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Case Type</th>
                            <th>Created date</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($caseTypes as $caseType)
                            <tr>
                                <td>{{$caseType->id}}</td>
                                <td>{{$caseType->case_type}}</td>
                                <td>{{$caseType->created_at->format('d F Y')}}</td>
                                <td>
                                    @can('access-settings',$caseType)
                                        <a class="btn btn-outline-primary table-btn btn-sm" href="{{route('case-types.edit',$caseType->id )}}" title="Edit"><i class="zmdi zmdi-edit"></i></a>
                                    @endcan

                                    @can('access-settings',$caseType)
                                        <form class="d-inline"  action="{{route('case-types.destroy',$caseType->id)}}" method="post">
                                            @method('DELETE')
                                            @csrf
                                            <button class="btn btn-outline-danger table-btn btn-sm"  title="Delete"><i class="zmdi zmdi-delete"></i></button>
                                        </form>
                                    @endcan
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
