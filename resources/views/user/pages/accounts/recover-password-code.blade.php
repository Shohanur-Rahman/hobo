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


                            <form action="{{route('password.recovery')}}" method="post" data-parsley-validate>
                                @csrf
                                <div class="form-group">
                                    <label class="float-left" for="code">Enter Your Code</label>
                                    <input class="form-control" type="text" name="code" id="code" value="{{old('code')}}" required="" placeholder="Enter your code" required="required" data-parsley-error-message="Enter your code">

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
