@extends('admin.layouts.admin')
@section('title', "Edit Product Size")
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-2">Edit Product Size</h4>
                    <p class="text-muted font-14 mb-4">
                        The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page
                        that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
                    </p>

                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <form method="post" action="{{route('product-sizes.update',$productSize->id)}}" class="d-inline" data-parsley-validate>
                                @method('PATCH')
                                @csrf
                                <div class="form-group">
                                    <label for="size">Product Size</label>
                                    <input type="text" class="form-control" value="{{$productSize->size ?? old('size')}}" id="size"  placeholder="Enter Product Size" name="size" maxlength="10" required="required" data-parsley-error-message="Enter Product Size">
                                </div>
                                @can('access-settings',$productSize)
                                    <button type="submit" class="btn btn-success  float-right mr-2">Update Product Size</button>
                                @endcan
                            </form>

                            <a href="{{route('product-sizes.index')}}" class="btn btn-danger float-left">Back to Product Sizes</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    @include('admin.partials.partial_assets.touchspin')
@endsection

