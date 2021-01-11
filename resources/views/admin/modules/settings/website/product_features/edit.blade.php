@extends('admin.layouts.admin')
@section('title', "Edit Product Feature Tab")
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-2">Edit Product Feature Tab</h4>
                    <p class="text-muted font-14 mb-4">
                        The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page
                        that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
                    </p>

                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <form method="post" action="{{route('product-features.update', $productFeature->id)}}" class="d-inline" enctype="multipart/form-data" data-parsley-validate>
                               @method('PATCH')
                                @csrf
                                <div class="form-group">
                                    <label for="no_of_product">Number of Products</label>
                                    <input type="number" class="form-control" id="name" placeholder="Enter Category name" name="no_of_product" required="required" data-parsley-max="20" data-parsley-error-message="Enter Number of Products" value="{{$productFeature->no_of_product}}">
                                </div>

                                @include('admin.modules.settings.website.product_features.partial.edit-category')

                                <div class="form-group">
                                    <div class="new-checkbox">
                                        <div class="inline-widged">
                                            <label for="is_published" class="single-label">Published</label>
                                            <label class="switch">
                                                <input type="checkbox" id="is_published" value="1" name="is_published" {{ $productFeature->is_published ? 'checked="checked"' : '' }}/>
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary mr-2 float-right">Setting Update</button>

                            </form>

                            <a href="{{route('product-features.index')}}" class="btn btn-danger float-left">Back to Product Feature</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
