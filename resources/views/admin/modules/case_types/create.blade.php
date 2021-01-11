@extends('admin.layouts.admin')
@section('title', "New Case Type")
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-2">New Case Type</h4>
                    <p class="text-muted font-14 mb-4">
                        The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page
                        that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
                    </p>

                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <form method="post" action="{{route('case-types.store')}}" class="d-inline" data-parsley-validate>
                                @csrf
                                <div class="form-group">
                                    <label for="caseType">Case Type</label>
                                    <input type="text" class="form-control" id="caseType" placeholder="Enter Case Type" name="case_type" required="required" maxlength="200" data-parsley-error-message="Enter Case Type">
                                </div>

                                <button type="submit" class="btn btn-success float-right mr-2">Save Case Type</button>
                            </form>

                            <a href="{{route('case-types.index')}}" class="btn btn-danger float-left">Back to Case Types</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    @include('admin.partials.partial_assets.touchspin')
@endsection

