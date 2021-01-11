@extends('user.layouts.layout-third')

@section('content')
    <div class="container h-100 mt-80 mb-30">
        <div class="row h-100 align-items-center justify-content-center">
            <div class="col-md-8 col-lg-5">
                <!-- Middle Box -->
                <div class="middle-box">
                    <div class="card">
                        <div class="card-body p-4">

                            <x-inform-users></x-inform-users>

                            <form action="{{route('password.update.store')}}" method="post" data-parsley-validate>
                                @csrf
                                <div class="form-group">
                                    <label class="float-left" for="password">Enter Your Password</label>
                                    <input class="form-control" type="password" name="password" id="password" value="{{old('password')}}" required="" placeholder="Enter your password" required="required" data-parsley-error-message="Enter your new password">

                                    @error('password')
                                        <span class="text-danger">
                                             <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="float-left" for="confirm-password">Enter Confirm password</label>
                                    <input class="form-control" type="password" name="confirm-password" id="confirm-password" value="{{old('confirm-password')}}" required="" placeholder="Enter your confirm-password" required="required" data-parsley-error-message="Enter your confirm-password">

                                </div>

                                <button class="btn btn-primary btn-sm">Submit</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
