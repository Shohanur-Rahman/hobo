@extends('admin.layouts.admin')
@section('title', "Edit Case Category")
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-2">Edit Case Category</h4>
                    <p class="text-muted font-14 mb-4">
                        The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page
                        that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
                    </p>

                    <div class="row">
                        <div class="col-sm-12 col-xs-12">

                            <form method="post" action="{{route('case-categories.update',$caseCategory->id)}}" class="d-inline" data-parsley-validate>
                                @method('PATCH')
                                @csrf

                                <div class="form-group">
                                    <label for="caseCategory">Case Categories</label>
                                    <input type="text" class="form-control" id="caseCategory" placeholder="Enter Case Category" name="case_category" value="{{$caseCategory->case_category ?? old('case_category')}}" required="required" maxlength="200" data-parsley-error-message="Enter Case Category">
                                </div>

                                <div class="form-group">
                                    <label for="caseTypes" class="w-100">Case Types</label>
                                    <select name="case_type_id" id="caseTypes" class="form-control" data-placeholder="Select Category">
                                        <option value="">Select One</option>
                                        @foreach($caseTypes as $caseType)
                                            <option value="{{$caseType->id}}" {{($caseType->id == $caseCategory->case_type_id) ? 'selected' : ''}}>{{$caseType->case_type}} </option>
                                        @endforeach
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-success float-right mr-2">Update Case Category</button>
                            </form>

                            <a href="{{route('case-categories.index')}}" class="btn btn-danger float-left">Back to Case Categories</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    @include('admin.partials.partial_assets.touchspin')
@endsection

