@extends('admin.layouts.admin')
@section('title', "MainSlider")
@section('content')

    <div class="row">
        <div class="col-md-12">
            <x-inform-users></x-inform-users>
        </div>

        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-2">Main Sliders</h4>
                    <p class="text-muted font-14 mb-4">
                        The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page
                        that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
                    </p>

                    <p>
                        <a class="btn btn-primary" href="{{route('main-sliders.create')}}">New Main Slider</a>
                    </p>


                    <table id="datatable-buttons" class="table table-striped dt-responsive js-exportable nowrap w-100">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Product ID</th>
                            <th>Category ID</th>
                            <th>Name</th>
                            <th>Caption</th>
                            <th>Image Url</th>
                            <th>Created date</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($mainSliders as $mainSlider)
                            <tr>
                                <td>{{$mainSlider->id}}</td>
                                <td>{{$mainSlider->product_id  }}</td>
                                <td>{{$mainSlider->category_id}}</td>
                                <td>{{$mainSlider->name}}</td>
                                <td>{{$mainSlider->caption}}</td>
                                <td><img src="{{asset($mainSlider->image_url)}}" class="table-image" id="uploadPreview" /></td>
                                <td>{{$mainSlider->created_at->format('d F Y')}}</td>

                                <td>
                                    <a class="btn btn-outline-primary table-btn btn-sm" href="{{route('main-sliders.edit', $mainSlider->id)}}" title="Edit"><i class="zmdi zmdi-edit"></i></a>

                                    <form class="d-inline"  action="{{route('main-sliders.destroy',$mainSlider->id)}}" method="post">
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
