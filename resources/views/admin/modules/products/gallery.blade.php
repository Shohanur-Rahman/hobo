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
	            <h4 class="card-title mb-2">Gallery {{$product->id}}</h4>
	            <p class="text-muted font-14 mb-4">
	                The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page
	                that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
	            </p>
	            <p><strong><a href="{{route('products.edit', $product->id)}}">Back to Edit</a></strong></p>

                <table class="tablew-100" style="width: 100%;">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Photo</th>
                            <th>Action</th>
                        </tr>
                    </thead>


                    <tbody>

                       @if($imgGallery)
                        @foreach($imgGallery as $gallery)
                        
                        <tr>
                            <td style="padding: 5px;">{{$gallery->id}}</td>
                            <td style="padding: 5px;"><img src="{{asset($gallery->image_url)}}" class="table-image"></td>
                            <td style="padding: 5px;">
                            <form class="d-inline"  action="{{route('products.gallery.destroy',$gallery->id)}}" method="post">
                                @method('DELETE')
                                @csrf

                                <button class="btn btn-outline-danger table-btn btn-sm"  title="Delete"><i class="zmdi zmdi-delete"></i></button>
                            </form>
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
@endsection
