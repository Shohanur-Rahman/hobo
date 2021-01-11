@extends('admin.layouts.admin')
@section('title', "Arrival Tab")
@section('content')

    <div class="row">
        <div class="col-md-12">
            <x-inform-users></x-inform-users>
        </div>

        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-2">Arrivals Tab</h4>
                    <p class="text-muted font-14 mb-4">
                        The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page
                        that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
                    </p>

                    <p>
                        <a class="btn btn-primary" href="{{route('arrivals.create')}}">New Arrival</a>
                    </p>


                    <table id="datatable-buttons" class="table table-striped dt-responsive js-exportable nowrap w-100">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Category Name</th>
                            <th>Show Top Menu</th>
                            <th>Created date</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($tabList as $tab)
                            <tr>
                                <td>{{$tab->id}}</td>
                                <td>{{$tab->category->category_name ?? ''}}</td>
                                <td><i class="{{ $tab->is_published == true ? 'zmdi zmdi-check grid-icon approve' : 'zmdi zmdi-close grid-icon not-approve' }}"></i></td>
                                <td>{{$tab->created_at->format('d F Y')}}</td>
                                <td>
                                <a class="btn btn-outline-primary table-btn btn-sm" href="{{route('arrivals.edit', $tab->id)}}" title="Edit"><i class="zmdi zmdi-edit"></i></a>
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
