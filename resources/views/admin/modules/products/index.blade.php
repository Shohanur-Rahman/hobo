@extends('admin.layouts.admin')
@section('title', "Products")
@section('content')

<div class="row">
    @if(session()->get("message"))
    <div class="col-md-12">
        <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            <strong>{{session()->get("message")}}</strong>
        </div>
    </div>
    @endif
	<div class="col-md-12">
		<div class="card">
	        <div class="card-body">
	            <h4 class="card-title mb-2">Products</h4>
	            <p class="text-muted font-14 mb-4">
	                The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page
	                that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
	            </p>

	            <p>
	            	<a class="btn btn-primary" href="{{route('products.create')}}">New Product</a>
	            </p>


                <table id="datatable-buttons" class="table table-striped dt-responsive js-exportable nowrap w-100">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Photo</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Published</th>
                            <th>Created By</th>
                            <th>Created Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>


                    <tbody>

                        @if($products)
                        @foreach($products as $aProduct)
                        <tr>
                            <td>{{$aProduct->id}}</td>
                            <td><img src="{{asset($aProduct->featured_image)}}" class="table-image"></td>
                            <td>{{$aProduct->title}}</td>
                            <td>{{$aProduct->new_price}}</td>
                            <td><i class="{{ $aProduct->is_published == true ? 'zmdi zmdi-check grid-icon approve' : 'zmdi zmdi-close grid-icon not-approve' }}"></i></td>
                            <td>{{$aProduct->user->name}}</td>
                            <td>{{$aProduct->created_at->format('d F Y')}}</td>
                            <td>
                                @can('access-settings',$aProduct)
                                    <a class="btn btn-outline-primary table-btn btn-sm" href="{{route('products.edit', $aProduct->id)}}" title="Edit"><i class="zmdi zmdi-edit"></i></a>
                                @endcan

                                @can('access-settings',$aProduct)
                                    <a class="btn btn-outline-primary table-btn btn-sm" href="{{route('products.copy', $aProduct->id)}}" title="Copy"><i class="zmdi zmdi-copy"></i></a>
                                @endcan

                                @can('access-settings',$aProduct)
                                    <form class="d-inline"  action="{{route('products.destroy',$aProduct->id)}}" method="post">
                                        @method('DELETE')
                                        @csrf

                                        <button class="btn btn-outline-danger table-btn btn-sm"  title="Delete"><i class="zmdi zmdi-delete"></i></button>
                                    </form>
                                @endcan
                            </td>
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>


            </div>
        </div>
	</div>
</div>


@include('admin.partials.partial_assets.datatable')
@endsection
