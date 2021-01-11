@extends('admin.layouts.admin')
@section('title', "New Product Feature Tab")
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-2">New E-commerce Support</h4>
                    <p class="text-muted font-14 mb-4">
                        The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page
                        that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
                    </p>

                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <form method="post" action="{{route('product-features.store')}}" class="d-inline" enctype="multipart/form-data" data-parsley-validate>
                                @csrf
                                <div class="form-group">
                                    <label for="no_of_product">Number of Products</label>
                                    <input type="number" class="form-control" id="no_of_product" placeholder="10" name="no_of_product" required="required" data-parsley-max="20" data-parsley-required-message="Enter Number of Products">
                                </div>

                               @include('admin.modules.settings.website.product_features.partial.create-category')

                                <div class="form-group">
                                    <div class="new-checkbox">
                                    <div class="inline-widged">
                                      <label for="is_published" class="single-label">Published</label>
                                        <label class="switch">
                                            <input type="checkbox" id="is_published" name="is_published" checked="checked" />
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                </div>
                                </div>

                                <button type="submit" class="btn btn-success mr-2 float-right">Save Setting</button>

                            </form>

                            <a href="{{route('product-features.index')}}" class="btn btn-danger float-left">Back to Product Feature</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
