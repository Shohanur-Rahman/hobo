@extends('admin.layouts.admin')
@section('title', "New Warehouse")
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-2">New Warehouse</h4>
                    <p class="text-muted font-14 mb-4">
                        The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page
                        that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
                    </p>

                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <form method="post" action="{{route('warehouses.store')}}" class="d-inline" data-parsley-validate>
                                @csrf
                                <div class="form-group">
                                    <label for="name">Warehouses Name</label>
                                    <input type="text" class="form-control" id="name" placeholder="Enter Warehouses name" name="name" required="required" maxlength="50" data-parsley-error-message="Enter Warehouses name">
                                </div>

                                <div class="form-group">
                                    <label for="name">Warehouses Location</label>
                                    <input type="text" class="form-control" id="name" placeholder="Enter Warehouses Location" name="location" maxlength="200" required="required" data-parsley-error-message="Enter Warehouses Location">
                                </div>

                                <button type="submit" class="btn btn-success float-right mr-2">Save Warehouse</button>
                            </form>

                            <a href="{{route('warehouses.index')}}" class="btn btn-danger float-left">Back to Warehouses</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
