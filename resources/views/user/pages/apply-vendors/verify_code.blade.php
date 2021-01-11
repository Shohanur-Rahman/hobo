@extends('user.layouts.layout-third')

@section('content')
    <div class="container mt-5 mb-30">
        <div class="row h-100 align-items-center justify-content-center">
            <div class="col-md-8 col-lg-5">
                <!-- Middle Box -->
                <input type="hidden" value="{{$code}}">
                <div class="middle-box">
                    <div class="card">
                        <div class="card-body p-4">
                            <form action="{{route('verify-code.store')}}" method="post" data-parsley-validate>
                                <x-inform-users></x-inform-users>
                                @csrf
                                <div class="form-group">
                                    <label class="float-left" for="code">Verify Your Email Account</label>
                                    <input class="form-control" type="text" name="code" id="code" value="{{old('code')}}" required="required" placeholder="Enter your Email Verify code" maxlength="6" minlength="6" data-parsley-trigger="change" data-parsley-required-message="Enter Your Email Verify Code">

                                    @error('code')
                                    <span class="text-danger d-block">
                                         <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                    <button class="btn btn-primary btn-sm  mt-3">Submit</button>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
