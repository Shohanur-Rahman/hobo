@extends('user.layouts.layout-third')
@section('title', "Register")
@section('content')

    <div class="container mb-30">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-8 col-lg-5">
                <x-inform-users></x-inform-users>
                <div class="middle-box">
                    <div class="card">
                        <div class="card-body p-4">
                            <h4 class="font-24 mb-30">Create account.</h4>

                            <form action="{{route('register.store')}}" method="post"  autocomplete="off" data-parsley-validate >
                                @csrf
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input class="form-control " type="text" name="name" id="username"
                                           placeholder="Enter your name" value="{{old('name')}}" autocomplete="off"
                                           required="required" data-parsley-error-message="Enter your name">

                                    @error('name')
                                    <span class="text-danger">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input class="form-control" type="email" name="email" id="email"
                                           placeholder="Enter your email" value="{{old('email')}}"
                                           required="required" data-parsley-error-message="Enter your email" autocomplete="off">

                                    @error('email')
                                    <span class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input class="form-control phone-formate" type="text" name="phone" id="phone"
                                           placeholder="Enter your phone" value="{{old('phone')}}"
                                           required="required" data-parsley-error-message="Enter your phone" autocomplete="off">

                                    @error('mobile')
                                    <span class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input class="form-control" type="password" name="password" id="password"
                                           placeholder="Enter your password" required="required"
                                           data-parsley-error-message="Enter your password" autocomplete="off">

                                    @error('password')
                                    <span class="text-danger">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="confirm-password">Password</label>
                                    <input class="form-control" type="password" name="password_confirmation"
                                           id="password_confirmation" placeholder="Enter your password"
                                           required="required" data-parsley-error-message="Please confirm your password"
                                           data-parsley-equalto="#password" autocomplete="off">
                                </div>

                                <div class="form-group mb-0 mt-15">
                                    <button class="btn btn-primary btn-block" type="submit">Create my account</button>
                                </div>

                                <div class="text-center mt-15"><span class="mr-2 font-13 font-weight-bold">Already have an account?</span><a
                                        class="font-13 font-weight-bold" href="{{route('login')}}">Sign in</a></div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script type="text/javascript">

        $(document).ready(function () {
            $('.phone-formate')
                .on('keypress', function (e) {
                    var key = e.charCode || e.keyCode || 0;
                    var phone = $(this);
                    if (phone.val().length === 0) {
                        phone.val(phone.val() + '(');
                    }
                    // Auto-format- do not expose the mask as the user begins to type
                    if (key !== 8 && key !== 9) {
                        if (phone.val().length === 4) {
                            phone.val(phone.val() + ')');
                        }
                        if (phone.val().length === 5) {
                            phone.val(phone.val() + ' ');
                        }
                        if (phone.val().length === 9) {
                            phone.val(phone.val() + '-');
                        }
                        if (phone.val().length >= 14) {
                            phone.val(phone.val().slice(0, 13));
                        }
                    }

                    return (key == 8 ||
                        key == 9 ||
                        key == 46 ||
                        (key >= 48 && key <= 57)
                    );
                })
                .on('focus', function () {
                    phone = $(this);

                    if (phone.val().length === 0) {
                        phone.val('(');
                    } else {
                        var val = phone.val();
                        phone.val('').val(val); // Ensure cursor remains at the end
                    }
                })
                .on('blur', function () {
                    $phone = $(this);

                    if ($phone.val() === '(') {
                        $phone.val('');
                    }
                });
        });

    </script>
    
    
@endsection
