@extends('user.layouts.layout-third')

@section('content')
    <div class="container-fluid">

        <div class="row mt-3 ">

            @include('user.pages.profiles.partial.sidebar')

            <div class="col-md-9">


                <div class="card border-0 px-4 py-4">
                    @include('user.pages.profiles.partial.details')

                    <div class="bg-white">
                        <h3 class="text-uppercase font-weight-bold h5">Update User Profile</h3>
                    </div>
                    <form class="row py-3" action="{{route('profiles.update')}}" method="post"
                          enctype="multipart/form-data" autocomplete="off" data-parsley-validate>
                        @method('PATCH')
                        @csrf
                        <div class="form-group col-12">
                            <label class="float-left" for="name">Username</label>
                            <input class="form-control" type="text" name="name" id="name"
                                   value="{{Auth::user()->name ?? old('name')}}"
                                   placeholder="Enter your name" required="required"
                                   data-parsley-error-message="Enter your name" autocomplete="off">

                        </div>

                        <div class="form-group col-12">
                            <label class="float-left" for="email">Secondary Email</label>
                            <input class="form-control" type="email" name="secondary_email" id="email"
                                   value="{{$userProfile->secondary_email ?? old('secondary_email')}}"
                                   placeholder="Enter your Secondary Email"
                                   data-parsley-error-message="Enter your Secondary Email" autocomplete="off">

                            @error('secondary_email')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="form-group col-12">
                            <label class="float-left" for="dob">Date Of Birth</label>
                            <input class="form-control" type="date" name="dob" id="dob"
                                   value="{{$userProfile->dob ?? old('dob')}}"
                                   placeholder="Enter your Date Of Birth"
                                   data-parsley-required-message="Enter Your Date Of Birth" autocomplete="off">
                        </div>

                        <div class="form-group col-6">
                            <label class="float-left" for="nid">Enter Your NID Number && NID Photo</label>
                            <input class="form-control" type="text" name="nid" id="nid"
                                   value="{{$userProfile->nid ?? old('nid')}}"
                                   placeholder="Enter Your NID Number"
                                   data-parsley-required-message="Enter Your NID Number" autocomplete="off">

                            @error('nid')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="form-group col-6">


                            <label for="nidImg" class="upload-preview">
                                @if($userProfile->nid_image)
                                    <img src="{{asset($userProfile->nid_image)}}" id="PreviewImage"
                                         style="width: 80px;height: 80px"/>
                                @else
                                    <img src="{{asset('images/noimage.PNG')}}" id="PreviewImage"
                                         style="width: 80px;height: 80px"/>
                                @endif

                            </label>

                            <input type="file" name="nid_image" class="hdn-uploder d-none" id="nidImg" accept="image/*"
                                   data-parsley-error-message="Upload NID image"/>

                        </div>


                        <div class="form-group col-6">
                            <label class="float-left" for="phone">Phone</label>
                            <input class="form-control phone-formate" type="text" name="phone" id="phone"
                                   value="{{$userProfile->phone}}"
                                   placeholder="(123) 345-3455" required="required"
                                   data-parsley-error-message="Enter Phone Number">
                        </div>


                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group col-6">
                                    <label class="float-left" for="line1">Line 1</label>
                                    <input class="form-control" type="text" name="line1" id="line1"
                                           value="{{$userProfile->line1}}"
                                           placeholder="Address line 1"
                                           data-parsley-error-message="Enter address line 1" maxlength="30" required>
                                </div>
                                <div class="form-group col-6">
                                    <label class="float-left" for="line2">Line 2</label>
                                    <input class="form-control" type="text" name="line2" id="line2"
                                           value="{{$userProfile->line2}}"
                                           placeholder="Address line 2" maxlength="30"
                                           data-parsley-error-message="Enter address line 2"
                                    >
                                </div>
                            </div>
                        </div>

                        <div class="form-group col-4">
                            <label class="float-left" for="postcode">City</label>
                            <input class="form-control" type="text" maxlength="50" name="city" id="city"
                                   value="{{$userProfile->city}}"
                                   placeholder="City" required="required"
                                   data-parsley-error-message="Enter your city">
                        </div>

                        <div class="form-group col-4">
                            <label class="float-left" for="state">State</label>
                            <select name="state" id="state" class="form-control" value="{{$userProfile->state}}"
                                    required>
                                <option value=""></option>
                                <option value="AL">Alabama (AL)</option>
                                <option value="AK">Alaska (AK)</option>
                                <option value="AZ">Arizona (AZ)</option>
                                <option value="AR">Arkansas (AR)</option>
                                <option value="CA">California (CA)</option>
                                <option value="CO">Colorado (CO)</option>
                                <option value="CT">Connecticut (CT)</option>
                                <option value="DE">Delaware (DE)</option>
                                <option value="DC">District Of Columbia (DC)</option>
                                <option value="FL">Florida (FL)</option>
                                <option value="GA">Georgia (GA)</option>
                                <option value="HI">Hawaii (HI)</option>
                                <option value="ID">Idaho (ID)</option>
                                <option value="IL">Illinois (IL)</option>
                                <option value="IN">Indiana (IN)</option>
                                <option value="IA">Iowa (IA)</option>
                                <option value="KS">Kansas (KS)</option>
                                <option value="KY">Kentucky (KY)</option>
                                <option value="LA">Louisiana (LA)</option>
                                <option value="ME">Maine (ME)</option>
                                <option value="MD">Maryland (MD)</option>
                                <option value="MA">Massachusetts (MA)</option>
                                <option value="MI">Michigan (MI)</option>
                                <option value="MN">Minnesota (MN)</option>
                                <option value="MS">Mississippi (MS)</option>
                                <option value="MO">Missouri (MO)</option>
                                <option value="MT">Montana (MT)</option>
                                <option value="NE">Nebraska (NE)</option>
                                <option value="NV">Nevada (NV)</option>
                                <option value="NH">New Hampshire (NH)</option>
                                <option value="NJ">New Jersey (NJ)</option>
                                <option value="NM">New Mexico (NM)</option>
                                <option value="NY">New York (NY)</option>
                                <option value="NC">North Carolina (NC)</option>
                                <option value="ND">North Dakota (ND)</option>
                                <option value="OH">Ohio (OH)</option>
                                <option value="OK">Oklahoma (OK)</option>
                                <option value="OR">Oregon (OR)</option>
                                <option value="PA">Pennsylvania (PA)</option>
                                <option value="RI">Rhode Island (RI)</option>
                                <option value="South Carolina (SC)" selected="">South Carolina (SC)</option>
                                <option value="SD">South Dakota (SD)</option>
                                <option value="TN">Tennessee (TN)</option>
                                <option value="TX">Texas (TX)</option>
                                <option value="UT">Utah (UT)</option>
                                <option value="VT">Vermont</option>
                                <option value="VA">Virginia</option>
                                <option value="WA">Washington</option>
                                <option value="WV">West Virginia</option>
                                <option value="WI">Wisconsin</option>
                                <option value="WY">Wyoming</option>
                            </select>
                        </div>

                        <div class="form-group col-4">
                            <label class="float-left" for="postcode">Zipcode</label>
                            <input class="form-control zipcode" type="text" name="postcode" id="postcode"
                                   value="{{$userProfile->postcode ?? old('postcode')}}"
                                   placeholder="Enter your zipcode" data-parsley-error-message="Enter your zipcode"
                                   required>
                        </div>

                        <div class="form-group col-12">
                            <label class="float-left" for="full_address">Full Address</label>

                            <textarea class="form-control" name="describe_address" id="full_address" cols=""
                                      rows="2"
                                      required>{{$userProfile->describe_address ?? old('describe_address')}}</textarea>
                            <span>Give us your full location address so we can find you and deliver your order accurately.</span>
                        </div>

                        <div class="form-group col-12">
                            <button class="btn btn-primary " type="submit"> Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <style>
        label.upload-preview img {
            height: 49px;
            width: 84px;
            cursor: pointer;
        }
    </style>



    <script>
        $(document).ready(function () {
            $("#nidImg").change(function () {
                readURL(this);
            });

            $("#state").val("{{$userProfile->state}}");


        });

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $("#PreviewImage").attr("src", e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>


@endsection
