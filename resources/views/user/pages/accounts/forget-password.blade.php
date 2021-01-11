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


                            <form action="{{route('forget-password.store')}}" method="post" data-parsley-validate>
                                @csrf
                                <div class="form-group">
                                    <label class="float-left" for="email">Enter Your Email</label>
                                    <input class="form-control" type="email" name="email" id="email" value="{{old('email')}}" required="" placeholder="Enter your email" required="required" data-parsley-error-message="Enter your email">
                                    <button class="btn btn-primary btn-sm mt-3">Submit</button>
                                    @error('email')
                                    <span class="text-danger">
                                         <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                              </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
