@extends('admin.layouts.admin')
@section('title', "Product Feature Tab")
@section('content')

    <div class="row">
        <div class="col-md-12">
            <x-inform-users></x-inform-users>
        </div>

        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-2">Product Features</h4>
                    <p class="text-muted font-14 mb-4">
                        The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page
                        that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
                    </p>

                    <p>
                        <a class="btn btn-primary" href="{{route('product-features.create')}}">New Product Feature</a>
                    </p>


                    <table id="datatable-buttons" class="table table-striped dt-responsive js-exportable nowrap w-100">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Category Name</th>
                            <th>Number Of Product</th>
                            <th>Show Top Menu</th>
                            <th>Created date</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($productFeatures as $productFeature)
                            <tr>
                                <td>{{$productFeature->id}}</td>
                                <td>{{$productFeature->category->category_name ?? ''}}</td>
                                <td>{{$productFeature->no_of_product}}</td>
                                <td><i class="{{ $productFeature->is_published == true ? 'zmdi zmdi-check grid-icon approve' : 'zmdi zmdi-close grid-icon not-approve' }}"></i></td>
                                <td>{{$productFeature->created_at->format('d F Y')}}</td>
                                <td>
                                    <a class="btn btn-outline-primary table-btn btn-sm" href="{{route('product-features.edit', $productFeature->id)}}" title="Edit"><i class="zmdi zmdi-edit"></i></a>

                                    <form class="d-inline"  action="{{route('product-features.destroy',$productFeature->id)}}" method="post">
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
