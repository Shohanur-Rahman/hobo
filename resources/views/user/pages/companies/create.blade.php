@extends('user.layouts.layout-third')

@section('content')
    <div class="container-fluid">

        <div class="row mt-3 ">

            @include('user.pages.profiles.partial.sidebar')

            <div class="col-md-9">
                <div class="card border-0">
                    <div class="bg-white">
                        <h3 class="text-uppercase font-weight-bold h5">Company Information</h3>
                    </div>
                    <form class="row py-3" action="{{route('companies.store')}}" method="post"
                          enctype="multipart/form-data" autocomplete="off" data-parsley-validate>
                        @csrf
                        <div class="form-group col-6">
                            <label class="float-left" for="name">Company Name</label>
                            <input class="form-control" type="text" name="company_name" id="name"
                                   placeholder="Enter your company name" required="required" maxlength="100"
                                   data-parsley-error-message="Enter your company name" autocomplete="off">

                        </div>

                        <div class="form-group col-6">

                            <label for="nidImg" class="upload-preview">
                                <img src="{{asset('images/noimage.PNG')}}" id="PreviewImage"
                                     style="width: 80px;height: 80px"/>
                            </label>

                            <input type="file" name="company_img" class="hdn-uploder d-none" id="nidImg" accept="image/*"
                                   data-parsley-error-message="Upload Company Logo" required="required"/>

                        </div>

                        <div class="form-group col-12">
                            <label class="float-left" for="phone">Phone Number</label>
                            <input class="form-control phone-formate" type="text" name="company_number" id="phone"
                                   placeholder="Enter your company phone number" required="required"
                                   data-parsley-error-message="Enter your company phone number" autocomplete="off">
                        </div>

                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group col-6">
                                    <label class="float-left" for="line1">Line 1</label>
                                    <input class="form-control" type="text" name="line1" id="line1" maxlength="40"
                                           placeholder="Address line 1" data-parsley-error-message="Enter address line 1"  required="required" >
                                </div>
                                <div class="form-group col-6">
                                    <label class="float-left" for="line2">Line 2</label>
                                    <input class="form-control" type="text" name="line2" maxlength="40" id="line2"
                                           placeholder="Address line 2" data-parsley-error-message="Enter address line 2"
                                    >
                                </div>
                            </div>
                        </div>

                        <div class="form-group col-4">
                            <label class="float-left" for="postcode">City</label>
                            <input class="form-control" type="text" name="city" id="city"
                                   placeholder="City" required="required"
                                   data-parsley-error-message="Enter Your city">
                        </div>

                        <div class="form-group col-4">
                            <label class="float-left" for="state">State</label>
                            <select name="state" id="state" class="form-control"  required="required" >
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
                                   required="required"  placeholder="Enter your zipcode" data-parsley-error-message="Enter your zipcode">
                        </div>

                        <div class="form-group col-12">
                            <label class="float-left" for="full_address">Full Address</label>

                            <textarea class="form-control" name="describe_address" id="full_address" cols=""
                                      rows="2" required></textarea>
                            <span>Give us your full location address so we can find you and deliver your order accurately.</span>
                        </div>

                        <div class="form-group col-12">
                            <button class="btn btn-primary " type="submit"> Submit</button>
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
