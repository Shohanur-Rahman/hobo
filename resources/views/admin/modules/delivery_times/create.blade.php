@extends('admin.layouts.admin')
@section('title', "New Delivery Time")
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-2">New Delivery Time</h4>
                    <p class="text-muted font-14 mb-4">
                        The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page
                        that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
                    </p>

                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <form method="post" action="{{route('delivery.times.store')}}" class="d-inline" data-parsley-validate>
                                @csrf
                                <div class="form-group">
                                    <label for="size">Delivery Time</label>
                                    <input type="text" class="form-control" id="size" placeholder="Delivery Time" name="name" required="required" maxlength="50" data-parsley-error-message="Enter Timeline Name">
                                </div>

                                <div class="form-group">
                                    <label for="day">Add Maximum Delivery Date</label>
                                    <input type="number" class="form-control" id="day" placeholder="Add Maximum Delivery Date" name="day" required="required" data-parsley-error-message="Enter Maximum Delivery Date Name">
                                </div>

                                <button type="submit" class="btn btn-success float-right mr-2">Save Delivery Time</button>
                            </form>

                            <a href="{{route('delivery.times.index')}}" class="btn btn-danger float-left">Back to Delivery Times</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    @include('admin.partials.partial_assets.touchspin')
@endsection

