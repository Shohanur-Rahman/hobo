@extends('admin.layouts.admin')
@section('title', "E-com Setting")
@section('content')

    <div class="row">
        <div class="col-md-12">
            <x-inform-users></x-inform-users>
        </div>

        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-2">Change Password</h4>
                    <p class="text-muted font-14 mb-4">
                        The Buttons extension for DataTables provides a common set of options, API methods and styling
                        to display buttons on a page
                        that will interact with a DataTable. The core library provides the based framework upon which
                        plug-ins can built.
                    </p>

                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <form action="{{route('admin-change-password.update')}}" method="post" data-parsley-validate>
                                @method('PATCH')
                                @csrf
                                <div class="form-group">
                                    <label for="currentPassword">Current Password *</label>
                                    <input id="currentPassword" name="current_password"  type="password" class="required form-control" value="{{old('current_password')}}"
                                           placeholder="Enter your Current Password" required="required" data-parsley-error-message="Enter your Current Password">
                                </div>
                                <div class="form-group">
                                    <label for="new_password">Password *</label>
                                    <input name="new_password" type="password"  class="required form-control"  id="new_password" value="{{old('new_password')}}"
                                           min="8" placeholder="Enter your New Password" required="required" data-parsley-error-message="Enter your New Password">
                                </div>
                                <div class="form-group">
                                    <label for="confirm">Confirm Password *</label>
                                    <input id="confirm" name="confirm" type="password" class="required form-control" value="{{old('confirm_password')}}"
                                           min="8" placeholder="Enter your Confirm Password" required="required" data-parsley-error-message="Please confirm your password" data-parsley-equalto="#new_password">
                                    <small>(*) Mandatory</small>
                                </div>

                                <button type="submit" class="btn btn-success mr-2 float-left">Update Password</button>
                            </form>

                            <a href="{{route('dashboard')}}" class="btn btn-danger float-right">Back to Dashboard</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    @include('admin.partials.partial_assets.datatable')

@endsection
