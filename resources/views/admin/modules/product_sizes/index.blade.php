@extends('admin.layouts.admin')
@section('title', "Product Sizes")
@section('content')

    <div class="row">
        <div class="col-md-12">
            <x-inform-users></x-inform-users>
        </div>

        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-2">Product Sizes</h4>
                    <p class="text-muted font-14 mb-4">
                        The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page
                        that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
                    </p>

                    <p>
                        <a class="btn btn-primary" href="{{route('product-sizes.create')}}">New Product Size</a>
                    </p>


                    <table id="datatable-buttons" class="table table-striped dt-responsive js-exportable nowrap w-100">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Ussr Id</th>
                            <th>Product Size</th>
                            <th>Created date</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($productSizes as $productSize)
                            <tr>
                                <td>{{$productSize->id}}</td>
                                <td>{{$productSize->user_id}}</td>
                                <td>{{$productSize->size}}</td>
                                <td>{{$productSize->created_at->format('d F Y')}}</td>
                                <td>
                                    @can('access-settings',$productSize)
                                         <a class="btn btn-outline-primary table-btn btn-sm" href="{{route('product-sizes.edit',$productSize->id )}}" title="Edit"><i class="zmdi zmdi-edit"></i></a>
                                    @endcan

                                    @can('access-settings',$productSize)
                                        <form class="d-inline"  action="{{route('product-sizes.destroy',$productSize->id)}}" method="post">
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
