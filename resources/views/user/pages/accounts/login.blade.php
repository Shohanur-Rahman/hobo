@extends('user.layouts.layout-third')
@section('title', "Login")
@section('content')

    <div class="container mb-30">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-8 col-lg-5">
                <!-- Middle Box -->
                <div class="middle-box">
                    <div class="card">
                        <div class="card-body p-4">
                            @if(session()->get("error-message"))
                                    <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                        <strong>{{session()->get("error-message")}}</strong>
                                    </div>
                                @endif
                            <h4 class="font-24 mb-1">Login.</h4>
                            <p class="mb-30">Sign in to your account to continue.</p>

                            <form action="{{route('login')}}" method="post" autocomplete="off" data-parsley-validate>
                                @csrf
                                <div class="form-group">
                                    <label class="float-left" for="email">Email address</label>
                                    <input class="form-control" type="email" name="email" id="email" value="{{old('email')}}" required="" placeholder="Enter your email" required="required" data-parsley-error-message="Enter your email" autocomplete="off">

                                    @error('email')
                                    <span class="text-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <a href="forget-password.html" class="text-dark float-right"></a>
                                    <label class="float-left" for="password">Password</label>
                                    <input class="form-control" type="password" name="password" value="{{old('email')}}" required="" id="password" placeholder="Enter your password" required="required" data-parsley-error-message="Enter your password" autocomplete="off">

                                    @error('email')
                                    <span class="text-danger">
                                                    <strong>{{ $message }}</strong>
                                            </span>
                                    @enderror
                                </div>

                                <div class="form-group d-flex justify-content-between align-items-center mb-3">
                                    <div class="checkbox d-inline mb-0">
                                        <input type="checkbox"  id="checkbox-8" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label for="checkbox-8" class="cr mb-0">Remember me</label>
                                    </div>
                                    <span class="font-13 text-primary"><a href="{{route('forget-password.index')}}">Forgot your password?</a></span>
                                </div>

                                <div class="form-group mb-0">
                                    <button class="btn btn-primary btn-block" type="submit"> Log In </button>
                                </div>

                                <div class="text-center mt-15"><span class="mr-2 font-13 font-weight-bold">Don't have an account?</span><a class="font-13 font-weight-bold" href="{{route('register')}}">Sign up</a></div>

                            </form>

                            <!-- end card -->
                        </div>

                        <div class="card-footer">
                            <a href="{{route('socialite.provider', 'facebook')}}" class="btn btn-info">LOGIN WITH FACEBOOK</a>
                            <a href="{{route('socialite.provider', 'google')}}" class="btn btn-warning">LOGIN WITH GOOGLE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
