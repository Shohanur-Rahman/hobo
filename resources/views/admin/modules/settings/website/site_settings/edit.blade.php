@extends('admin.layouts.admin')
@section('title', "Edit Site Setting")
@section('content')

    <div class="row">
        <div class="col-md-12">
            <x-inform-users></x-inform-users>
        </div>

        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-2">Edit Site Setting</h4>
                    <p class="text-muted font-14 mb-4">
                        The Buttons extension for DataTables provides a common set of options, API methods and styling
                        to display buttons on a page
                        that will interact with a DataTable. The core library provides the based framework upon which
                        plug-ins can built.
                    </p>

                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <form method="post" action="{{route('site-settings.update', $siteSetting->id)}}"
                                  class="d-inline" enctype="multipart/form-data" data-parsley-validate>
                                @method('PATCH')
                                @csrf
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name"
                                           placeholder="Enter Site Setting Name" name="name"
                                           data-parsley-trigger="change" required="required"
                                           data-parsley-required-message="Enter Site Setting  name"
                                           value="{{$siteSetting->name ?? old('name')}}">
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email"
                                               placeholder="Enter Site Setting Email" name="email"
                                               data-parsley-trigger="change" required="required"
                                               data-parsley-required-message="Enter Site Setting  Email"
                                               value="{{$siteSetting->email ?? old('email')}}">
                                    </div>

                                    <div class="form-group col-6">
                                        <label for="phone">Phone</label>
                                        <input class="form-control phone-formate" type="text" name="phone" id="phone"
                                               value="{{$siteSetting->phone}}"
                                               placeholder="Enter your Phone" required="required"
                                               data-parsley-error-message="Enter your Phone">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="form-group col-6">
                                                <label class="float-left" for="line1">Line 1</label>
                                                <input class="form-control" type="text" name="line1" id="line1"
                                                       value="{{$siteSetting->line1}}"
                                                       placeholder="Address line 1"
                                                       data-parsley-error-message="Enter address line 1" required>
                                            </div>
                                            <div class="form-group col-6">
                                                <label class="float-left" for="line2">Line 2</label>
                                                <input class="form-control" type="text" name="line2" id="line2"
                                                       value="{{$siteSetting->line2}}"
                                                       placeholder="Address line 2"
                                                       data-parsley-error-message="Enter address line 2"
                                                >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group col-4">
                                        <label class="float-left" for="city">City</label>
                                        <input class="form-control" type="text" name="city" id="city"
                                               value="{{$siteSetting->city}}"
                                               placeholder="City" required="required"
                                               data-parsley-error-message="Enter your city">
                                    </div>

                                    <div class="form-group col-4">
                                        <label class="float-left" for="state">State</label>
                                        <select name="state" id="state" class="form-control"
                                                value="{{$siteSetting->state}}" required>
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
                                               value="{{$siteSetting->postcode ?? old('postcode')}}"
                                               placeholder="Enter your zipcode"
                                               data-parsley-error-message="Enter your zipcode" required>
                                    </div>

                                    <div class="form-group col-12">
                                        <label class="float-left" for="address">Full Address</label>

                                        <textarea class="form-control" name="address" id="address" cols=""
                                                  rows="2"
                                                  required>{{$siteSetting->address ?? old('address')}}</textarea>
                                        <span>Give us your full location address so we can find you and deliver your order accurately.</span>
                                    </div>


                                    <div class="form-group col-12">
                                        <label class="form-label">Image Url</label>
                                        <label for="imgInp" class="upload-preview">
                                            <img
                                                src="{{$siteSetting->logo_url ? asset($siteSetting->logo_url) : asset('images/noimage.PNG') }}"
                                                id="uploadPreview"/>
                                        </label>
                                        <input type="file" name="logo_url" class="hdn-uploder" id="imgInp"
                                               {{ $siteSetting->logo_url? '' : 'required="required"'}} accept="image/*"
                                               data-parsley-error-message="Upload E-commerce Support image"/>
                                    </div>

                                </div>
                                <button type="submit" class="btn btn-success mr-2 float-right">Site Setting Update
                                </button>
                            </form>

                            <a href="{{route('dashboard')}}" class="btn btn-danger float-left">Back to Dashboard</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>




    <script>
        $(document).ready(function () {

            $("#imgInp").change(function () {
                readURL(this);
            });

            $("#state").val("{{$siteSetting->state}}");
        });

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $("#uploadPreview").attr("src", e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endsection
