@extends('user.layouts.layout-third')

@section('content')
    <div class="container-fluid">
        <div class="row mt-3 ">

            @include('user.pages.profiles.partial.sidebar')
            <div class="col-md-9 col-sm-8 col-xs-12 col-sm-push-4 col-md-push-3 pb-4">
                <div class="card border-0">
                    <div class="bg-white">
                        <h3 class="text-uppercase font-weight-bold h5">Update Shipping Address</h3>
                    </div>
                    <form class="py-3 row" action="{{route('shipping-address.update',$shippingAddress->id)}}" method="post" data-parsley-validate>
                        @method('PATCH')
                        @csrf

                        <div class="form-group col-6">
                            <label class="float-left" for="phone">Phone</label>
                            <input class="form-control phone-formate" type="text" name="phone" id="phone"
                                   value="{{$shippingAddress->phone}}"
                                   placeholder="(123) 345-3455" required="required"
                                   data-parsley-error-message="Enter Phone Number">
                        </div>

                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group col-6">
                                    <label class="float-left" for="line1">Line 1</label>
                                    <input class="form-control" type="text" name="line1" id="line1" value="{{$shippingAddress->line1}}"
                                           placeholder="Address line 1" data-parsley-error-message="Enter address line 1"
                                           required>
                                </div>
                                <div class="form-group col-6">
                                    <label class="float-left" for="line2">Line 2</label>
                                    <input class="form-control" type="text" name="line2" id="line2" value="{{$shippingAddress->line2}}"
                                           placeholder="Address line 2" data-parsley-error-message="Enter address line 2"
                                           required>
                                </div>
                            </div>
                        </div>


                        <div class="form-group col-4">
                            <label class="float-left" for="city">City</label>
                            <input class="form-control" type="text" name="city" id="city"
                                   value="{{$shippingAddress->city}}"
                                   placeholder="City" required="required"
                                   data-parsley-error-message="Enter your city">
                        </div>

                        <div class="form-group col-4">
                            <label class="float-left" for="state">State</label>
                            <select required="" name="state" id="state" class="form-control" value="{{$shippingAddress->state}}">
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
                            <label class="float-left" for="postcode">zipcode</label>
                            <input class="form-control zipcode" type="text" name="postcode" id="postcode"
                                   value="{{$shippingAddress->postcode}}"
                                   placeholder="Enter zipcode" required="required"
                                   data-parsley-error-message="Enter your zipcode">
                        </div>


                        <div class="form-group col-12">
                            <label class="float-left" for="full_address">Full Address</label>
                            <textarea class="form-control" name="describe_address" id="full_address" cols=""
                                      rows="2">{{$shippingAddress->describe_address}}</textarea>
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

    <script>
        $(document).ready(function () {
            $("#state").val("{{$shippingAddress->state}}");
        })
    </script>
@endsection
