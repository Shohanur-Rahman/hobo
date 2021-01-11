@extends('user.layouts.layout-third')
@section('title', 'My Cart')
@section('content')




    <!--shopping-cart area-->
    <form action="{{route('payments.create')}}" method="post" data-parsley-validate>
        @csrf

        <div class="mm-page mm-slideout mb-5" id="mm-0">
            <div class="shopping-cart-steps">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="cart-steps">
                                <ul class="clearfix">
                                    <li class="">
                                        <div class="inner">
                                            <span class="step">01</span> <span class="inner-step">Shopping Cart</span>
                                        </div>
                                    </li>
                                    <li class="active">
                                        <div class="inner">
                                            <span class="step">02</span> <span class="inner-step">Checkout </span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="inner">
                                            <span class="step">03</span> <span
                                                class="inner-step">Order Completed </span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="checkout-area mt-15">
                <div class="container">
                    <div class="row mt-10">
                        <div class="col-lg-8">
                            <div class="billing-form">
                                <h4>Billing Address</h4>
                                <div class="row">
                                    <div class="col-lg-3">
                                        <label>USERNAME *</label>
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="text" placeholder="Enter your name" name="name"
                                               value="{{$user->name ?? old('name')}}" maxlength="100" required
                                               data-parsley-required-message="Name filed is required"
                                               readonly="readonly">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3">
                                        <label>EMAIL ADDRESS *</label>
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="email" name="email" value="{{$user->email ?? old('email')}}"
                                               placeholder="Enter your email address" maxlength="100" required
                                               data-parsley-required-message="Email filed is required"
                                               readonly="readonly"/>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3">
                                        <label>PHONE</label>
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="text" name="phone" class="phone-formate"
                                               value="{{$user->userProfile->phone ?? old('phone')}}"
                                               placeholder="Enter your phone number" maxlength="15" required
                                               data-parsley-required-message="Phone filed is required">
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-lg-3">
                                        <label>ADDRESS *</label>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="form-group col-6">
                                                <label class="float-left" for="line1">Line 1</label>
                                                <input class="form-control" type="text" name="line1" id="line1"
                                                       value="{{$user->userProfile->line1 ?? old('line1')}}"
                                                       placeholder="Address line 1"
                                                       data-parsley-error-message="Enter address line 1"
                                                       required>
                                            </div>
                                            <div class="form-group col-6">
                                                <label class="float-left" for="line2">Line 2</label>
                                                <input class="form-control" type="text" name="line2" id="line2"
                                                       value="{{$user->userProfile->line2 ?? old('line2')}}"
                                                       placeholder="Address line 2"
                                                       data-parsley-error-message="Enter address line 2"
                                                >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="form-group col-4">
                                                <label class="float-left" for="postcode">City</label>
                                                <input class="form-control" type="text" name="city" id="city"
                                                       value="{{$user->userProfile->city}}"
                                                       placeholder="City" required="required"
                                                       data-parsley-error-message="Enter your city">
                                            </div>

                                            <div class="form-group col-4">
                                                <label class="float-left" for="state">State</label>
                                                <select name="state" id="state" class="form-control"
                                                        value="{{$user->userProfile->state}}" required>
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
                                                    <option value="South Carolina (SC)" selected="">South Carolina
                                                        (SC)
                                                    </option>
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
                                                <input class="form-control zipcode" type="text" name="postcode"
                                                       id="postcode"
                                                       value="{{$user->userProfile->postcode}}"
                                                       placeholder="Enter zipcode" required="required"
                                                       data-parsley-error-message="Enter your zipcode">
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>


                            <div class=" mt-5">
                                <h4>Shipping Address</h4>
                                <div>
                                    <div class="row">
                                        <div class="col-lg-4 align-items-center">
                                            <label>Choose Shipping Address *</label>
                                        </div>
                                        <div class="col-lg-8">
                                            <select name="shipping_id" class="form-control" required
                                                    data-parsley-required-message="please select a shipping address or create new shipping address">
                                                <option value="">Select Shipping Address</option>
                                                @foreach($user->shippingAddresses as $shippingAddress)
                                                    @php $id = Session::has('shipping_id') @endphp
                                                    <option
                                                        value="{{$shippingAddress->id}}" {{( $id|| $id ==$shippingAddress->id) ? 'selected' : '' }}>
                                                        {{$shippingAddress->title}}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>

                                    </div>
                                    <div class="d-flex justify-content-between align-items-lg-baseline">
                                        {{--  <div class="place-order text-center ">
                                              <a href="#" class="btn-common width-180">Submit</a>
                                          </div>--}}
                                        <a href="{{route('new-shipping-address.create')}}" class="h6 text-success">New
                                            Shipping Address</a>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-4">
                            <div class="order-details mt-0">
                                <h4>Your Order</h4>
                                <div class="order-details-inner">
                                    <table>
                                        <thead>
                                        <tr>
                                            <th>PRODUCT</th>
                                            <th>TOTAL</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @php $totalPrice = 0 ;$shippingCharge = 0;@endphp
                                        @foreach($cartItems as $cartItem)
                                            <tr>
                                                <td>{{Str::limit($cartItem->product->title,20)}}</td>
                                                <td>{{$cartItem->product->new_price}} x {{$cartItem->quantity}}</td>
                                            </tr>
                                            @php
                                                $totalPrice = ($totalPrice + ($cartItem->product->new_price * $cartItem->quantity));
                                                $shippingCharge += $cartItem->product->shipping_charge;
                                            @endphp
                                        @endforeach

                                        <tr>
                                            <td>Cart Subtotal</td>
                                            <td><strong>{{$totalPrice}}</strong></td>
                                        </tr>
                                        <tr>
                                            <td>Shipping and Handling</td>
                                            <td>@if($shippingCharge <= 0)  Free Shipping : @else
                                                    <b>${{$shippingCharge}}</b> @endif</td>
                                        </tr>
                                        <tr>
                                            <td>ORDER TOTAL</td>
                                            <td><strong>${{$totalPrice + $shippingCharge}}</strong></td>
                                        </tr>
                                        </tbody>
                                    </table>

                                    <span id="error-message"></span>
                                </div>
                                <div class="place-order text-center pb-3">
                                    <button id="submitForm" class="btn paypal-btn"></button>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

    </form>

    <script>
        $(document).ready(function () {
            $("#state").val("{{$user->userProfile->state}}");
        })
    </script>
@endsection
