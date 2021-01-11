@extends('admin.layouts.admin')
@section('title', "New Availability")
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-2">New Availability</h4>
                    <p class="text-muted font-14 mb-4">
                        The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page
                        that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
                    </p>

                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <form method="post" action="{{route('product-availabilities.store')}}" class="d-inline" data-parsley-validate>
                                @csrf
                                <div class="form-group">
                                    <label for="name">Availability Name</label>
                                    <input type="text" class="form-control" id="name" placeholder="Enter Availability name" name="name" required="required" maxlength="50" data-parsley-error-message="Enter Availability name">
                                </div>

                                <div class="form-group mt-20">
                                    <label for="name">Availability Days</label>
                                    <div class="input-group bootstrap-touchspin bootstrap-touchspin-injected">
                                        <input id="demo3" type="number" value="1" name="demo3" class="form-control" min="1" required="required" maxlength="200" data-parsley-error-message="Enter Availability Days" data-parsley-errors-container=".qtyError">
                                        <span class="qtyError"></span>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-success float-right mr-2">Save Availability</button>

                            </form>

                            <a href="{{route('product-availabilities.index')}}" class="btn btn-danger float-left">Back to Availabilities</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    @include('admin.partials.partial_assets.touchspin')
@endsection

