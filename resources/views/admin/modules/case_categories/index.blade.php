
@extends('admin.layouts.admin')
@section('title', "Case Categories")
@section('content')

    <div class="row">
        <div class="col-md-12">
            <x-inform-users></x-inform-users>
        </div>

        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-2">Case Categories</h4>
                    <p class="text-muted font-14 mb-4">
                        The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page
                        that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
                    </p>

                    <p>
                        <a class="btn btn-primary" href="{{route('case-categories.create')}}">New Case Categories</a>
                    </p>


                    <table id="datatable-buttons" class="table table-striped dt-responsive js-exportable nowrap w-100">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Case Type</th>
                            <th>Case Category</th>
                            <th>Created date</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($caseCategories as $caseCategory)
                            <tr>

                                <td>{{$caseCategory->id}}</td>
                                <td>{{$caseCategory->caseType->case_type}}</td>
                                <td>{{$caseCategory->case_category}}</td>
                                <td>{{$caseCategory->created_at->format('d F Y')}}</td>
                                <td>

                                    <a class="btn btn-outline-primary table-btn btn-sm" href="{{route('case-categories.edit',$caseCategory->id )}}" title="Edit"><i class="zmdi zmdi-edit"></i></a>

                                    <form class="d-inline"  action="{{route('case-categories.destroy',$caseCategory->id)}}" method="post">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-outline-danger table-btn btn-sm"  title="Delete"><i class="zmdi zmdi-delete"></i></button>
                                    </form>

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
