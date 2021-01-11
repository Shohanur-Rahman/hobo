@extends('admin.layouts.admin')
@section('title', "Product Categories")
@section('content')

    <div class="row">
        <div class="col-md-12">
            <x-inform-users></x-inform-users>
        </div>

        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-2">Product Categories</h4>
                    <p class="text-muted font-14 mb-4">
                        The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page
                        that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
                    </p>

                    <p>
                        <a class="btn btn-primary" href="{{route('product-categories.create')}}">New Category</a>
                    </p>


                    <table id="datatable-buttons" class="table table-striped dt-responsive js-exportable nowrap w-100">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Parent ID</th>
                            <th>Category Name</th>
                            <th>Show Top Menu</th>
                            <th>Created date</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($productCategories as $category)
                            <tr>
                                <td>{{$category->id}}</td>
                                <td>{{($category->parent_id != 0) ?  $category->parent->category_name : 'NA'}}</td>
                                <td>{{$category->category_name}}</td>

                                <td>
                                    @if($category->is_top_menu=== 0)
                                        <i class="zmdi zmdi-close text-danger grid-icon"></i>
                                    @else
                                        <i class="zmdi zmdi-check text-success grid-icon"></i>
                                    @endif
                                </td>

                                <td>{{$category->created_at->format('d F Y')}}</td>

                                <td>
                                    @can('access-settings',$category)
                                        <a class="btn btn-outline-primary table-btn btn-sm" href="{{route('product-categories.edit', $category->id)}}" title="Edit"><i class="zmdi zmdi-edit"></i></a>
                                    @endcan

                                    @can('access-settings',$category)
                                        <form class="d-inline"  action="{{route('product-categories.destroy',$category->id)}}" method="post">
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
