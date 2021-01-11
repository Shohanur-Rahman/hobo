@extends('user.layouts.layout-third')

@section('content')
    <div class="container-fluid ">
        <div class="row mt-3 ">

            @include('user.pages.profiles.partial.sidebar')
            <div class="col-md-9 col-sm-8 col-xs-12 col-sm-push-4 col-md-push-3 mb-4">
                <div class="card border-0 px-4 py-4">
                    @include('user.pages.profiles.partial.details')

                    <div class="card border-0">
                        <div class="bg-white">
                            <x-inform-users></x-inform-users>

                            <h3 class="text-uppercase font-weight-bold h5">Update User Profile</h3>
                        </div>
                        <form class="py-3" action="{{route('change-password.update')}}" method="post"
                              data-parsley-validate>
                            @method('PATCH')
                            @csrf
                            <div class="form-group">
                                <label class="float-left" for="current_password">Current Password</label>
                                <input class="form-control" type="password" name="current_password" id="name"
                                       value="{{old('current_password')}}" placeholder="Enter your Current Password"
                                       required="required" data-parsley-error-message="Enter your Current Password">

                            </div>

                            <div class="form-group">
                                <label class="float-left" for="new_password">New Password</label>
                                <input class="form-control" type="password" name="new_password" id="new_password"
                                       value=""
                                       data-parsley-minlength="8"
                                       placeholder="Enter your New Password"
                                       required="required"
                                       data-parsley-error-message="Enter your New Password">
                            </div>

                            <div class="form-group">
                                <label class="float-left" for="confirm_password">Confirm Password</label>
                                <input class="form-control" type="password" name="confirm_password"
                                       id="confirm_password" value=""
                                       data-parsley-minlength="8"
                                       placeholder="Enter your Confirm Password" required="required"
                                       data-parsley-error-message="Please confirm your password"
                                       data-parsley-equalto="#new_password">
                            </div>

                            <button class="btn btn-primary " type="submit"> Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
