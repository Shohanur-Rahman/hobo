@extends('admin.layouts.admin')
@section('title', "Edit Warehouse")
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card tab-pane active" id="tabProductOverview">
                <div class="card-body">
                    <h4 class="card-title mb-2">Edit Warehouse</h4>
                    <p class="text-muted font-14 mb-4">
                        The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page
                        that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
                    </p>

                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <form method="post" action="{{route('warehouses.update',$warehouse->id)}}" class="d-inline">
                                @method('PATCH')
                                @csrf
                                <div class="form-group">
                                    <label for="name">Warehouses Name</label>
                                    <input type="text" class="form-control" id="name" value="{{$warehouse->name ?? old('name')}}" placeholder="Enter Warehouses name" maxlength="50" name="name" required="required" data-parsley-error-message="Enter Warehouses name">
                                </div>

                                <div class="form-group">
                                    <label for="name">Warehouses Location</label>
                                    <input type="text" class="form-control" id="name"  value="{{$warehouse->location ?? old('location')}}" placeholder="Enter Warehouses Location" maxlength="200" name="location" required="required" data-parsley-error-message="Enter Warehouses Location">
                                </div>

                                {{--@can('access-setting',$warehouse)--}}
                                    <button type="submit" class="btn btn-success float-right mr-2">Update Warehouse</button>
                                {{--@endcan--}}
                            </form>

                            <a href="{{route('warehouses.index')}}" class="btn btn-danger float-left">Back to Warehouses</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>


    </div>

@endsection
