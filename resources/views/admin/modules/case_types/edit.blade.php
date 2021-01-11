@extends('admin.layouts.admin')
@section('title', "Edit Case Type")
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-2">Edit Case Type</h4>
                    <p class="text-muted font-14 mb-4">
                        The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page
                        that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
                    </p>

                    <div class="row">
                        <div class="col-sm-12 col-xs-12">

                                <form method="post" action="{{route('case-types.update',$caseType->id)}}" class="d-inline" data-parsley-validate>
                                    @method('PATCH')
                                    @csrf
                                    <div class="form-group">
                                        <label for="caseType">Case Type</label>
                                        <input type="text" class="form-control" value="{{$caseType->case_type ?? old('case_type')}}" id="caseType" maxlength="200" placeholder="Enter Case Type" name="case_type" required="required" data-parsley-error-message="Enter Case Type">
                                    </div>

                                    <button type="submit" class="btn btn-success float-right mr-2">Update Case Type</button>
                                </form>

                            <a href="{{route('case-types.index')}}" class="btn btn-danger float-left">Back to Case Type</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    @include('admin.partials.partial_assets.touchspin')
@endsection

