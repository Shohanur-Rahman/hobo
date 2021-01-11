@extends('user.layouts.layout-third')
@section('title', "HOBO")
@section('content')

    <!--contact-us-area start-->
    <div class="contact-area mt-70">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <x-inform-users></x-inform-users>
                </div>
                <div class="col-lg-6">
                    <div class="customer-supporter">
                        <div>
                            <p>
                                <span class="d-block font-weight-bold" style="font-size: 20px">Contact Customer Support</span>
                                <small> Tell us how we can help.</small>
                            </p>
                        </div>


                        <div class="contact-form mt-sm-30">
                            <form action="{{route('customer-supports.store')}}"  id="contactForm"  data-toggle="validator" method="POST" enctype="multipart/form-data" data-parsley-validate>
                                @csrf
                                <div class="row">
                                    <div class="col-sm-12">
                                        <input type="email" placeholder="Email" id="email" required="required"
                                               name="email" data-parsley-maxlength="255" data-parsley-type="email"/>
                                    </div>
                                    <div class="col-sm-12 mt-30">
                                        <input type="text" required="required"  name="first_name" placeholder="First name" id="firstName" data-parsley-maxlength="255">
                                    </div>
                                    <div class="col-sm-12 mt-30">
                                        <input type="text" required="required"  name="last_name" placeholder="Last name" id="lastName" data-parsley-maxlength="255">
                                    </div>
                                    <div class="col-sm-12 mt-30">
                                        <input type="number" required="required"  name="order_id" placeholder="Order Number" id="orderNumber" data-parsley-maxlength="255">
                                    </div>

                                    <div class="col-sm-12 mt-30">
                                        <select  class="form-control" name="case_type_id" id="caseType"  required="required" data-parsley-maxlength="255">
                                            <option value="">Select Case Type</option>
                                            @foreach($caseTypes as $caseType)
                                                <option value="{{$caseType->id}}">{{$caseType->case_type}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-sm-12 mt-30">
                                        <select class="form-control" id="caseCategory" name="case_category_id"  required="required" data-parsley-maxlength="255">
                                            <option value="">Select Case Category</option>

                                        </select>
                                    </div>

                                    <div class="col-sm-12 mt-30">
                                        <input type="text" required="required"  name="subject" placeholder="subject" id="subject" data-parsley-maxlength="255">
                                    </div>

                                    <div class="col-sm-12 mt-30">
                                        <textarea placeholder="Message" required="required" name="description" id="message"></textarea>
                                    </div>

                                    <div class="form-group col-6">

                                        <label for="nidImg" class="upload-preview">
                                            <img src="{{asset('images/noimage.PNG')}}" id="PreviewImage"
                                                 style="width: 80px;height: 80px"/>
                                        </label>

                                        <input type="file" name="file" class="hdn-uploder d-none" id="nidImg" accept="image/*"
                                               data-parsley-error-message="Upload Company Logo"/>

                                    </div>

                                    <div class="col-sm-12 mt-40">
                                        <button type="submit" class="btn-common" id="form-submit">Submit</button>
                                    </div>
                                    <div class="col-sm-8 text-left pt-30">
                                        <div id="msgSubmit" class="hidden"></div>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-supporter mt-35">
                        <!-- Button trigger modal -->
<a type="button" class="faq-titles" data-toggle="modal" data-target="#modal1Container">How do I use the Online Returns Portal to send items back from my online order?
</a>

<!-- Modal -->
<div class="modal fade" id="modal1Container" tabindex="-1" role="dialog" aria-labelledby="modal1ContainerTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="modal-textbox">
                    <h4>How do I use the Online Returns Portal?</h4>
                    <ol>
                        <li>You will go to the Online Returns Portal</li>
                        <li>Enter Your Email Address and Order Number. If you have an account, Sign In</li>
                        <li>Start your return- Select the items you wish to return from the order, as well as the reason(s) why you are returning.</li>
                        <li>Return Confirmation- Confirm the items you selected as well as your Shipping Address.</li>
                        <li>Pay Options- Enter your email address for confirmation (this is where your return label will be sent) and your payment method details to pay for your return shipping label.</li>
                        <li>Print Your Return Label- you will be able to print your label once your payment is confirmed. You will receive a payment receipt along with instructions provided for shipping.</li>
                        <li>Get Your Package Ready- Your package will ship via USPS! You have the option to provide your package to your USPS delivery courier, schedule a pickup with USPS by clicking here: Schedule a Pickup- USPS OR drop it off at your nearest Post Office. To look for a convenient Post Office, click here: USPS Locations</li>
                    </ol>
                    <h4>How much does the shipping label cost on the Online Returns Portal?</h4>

                    <p>
                        At this time we offer return shipping labels for purchase via the online Returns Portal at a flat-rate fee of $7.99. Please note that these return shipping labels are available for use by U.S. Domestic customers only. For step-by-step instructions on how to return using the Returns Portal, please click Online Returns Portal</p>





                    <h4>I am an International customer and I want to return an Item?</h4>
                    <p>Regrettably, the Online Returns Portal is for use by our U.S. Domestic Customers only! If you are an International customer and would like information on how to return your items back to Fashion Nova, please click here! </p>


                    <h4>What payment methods are accepted on the Online Returns Portal?</h4>
                    <p>We accept major credit card companies (Visa, MasterCard, Discover, American Express) when processing payment via the Online Returns Portal.
                    </p>

                    <h4>What carriers are available on the Online Returns Portal?</h4>
                    <p>Currently, we only offer a flat-rate return shipping service via USPS which is available for purchase through the Online Returns Portal for U.S. Domestic Customers only.</p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>




<!-- Button trigger modal -->
<a type="button" class="faq-titles" data-toggle="modal" data-target="#modal2Container">What is your Return Policy for Online Purchases?
</a>

<!-- Modal -->
<div class="modal fade" id="modal2Container" tabindex="-1" role="dialog" aria-labelledby="modal2ContainerTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                    <div class="modal-textbox">
                        <h4>How do I use the Online Returns Portal?</h4>
                        <ol>
                            <li>You will go to the Online Returns Portal</li>
                            <li>Enter Your Email Address and Order Number. If you have an account, Sign In</li>
                            <li>Start your return- Select the items you wish to return from the order, as well as the reason(s) why you are returning.</li>
                            <li>Return Confirmation- Confirm the items you selected as well as your Shipping Address.</li>
                            <li>Pay Options- Enter your email address for confirmation (this is where your return label will be sent) and your payment method details to pay for your return shipping label.</li>
                            <li>Print Your Return Label- you will be able to print your label once your payment is confirmed. You will receive a payment receipt along with instructions provided for shipping.</li>
                            <li>Get Your Package Ready- Your package will ship via USPS! You have the option to provide your package to your USPS delivery courier, schedule a pickup with USPS by clicking here: Schedule a Pickup- USPS OR drop it off at your nearest Post Office. To look for a convenient Post Office, click here: USPS Locations</li>
                        </ol>
                        <h4>How much does the shipping label cost on the Online Returns Portal?</h4>

                        <p>
                            At this time we offer return shipping labels for purchase via the online Returns Portal at a flat-rate fee of $7.99. Please note that these return shipping labels are available for use by U.S. Domestic customers only. For step-by-step instructions on how to return using the Returns Portal, please click Online Returns Portal</p>





                        <h4>I am an International customer and I want to return an Item?</h4>
                        <p>Regrettably, the Online Returns Portal is for use by our U.S. Domestic Customers only! If you are an International customer and would like information on how to return your items back to Fashion Nova, please click here! </p>


                        <h4>What payment methods are accepted on the Online Returns Portal?</h4>
                        <p>We accept major credit card companies (Visa, MasterCard, Discover, American Express) when processing payment via the Online Returns Portal.
                        </p>

                        <h4>What carriers are available on the Online Returns Portal?</h4>
                        <p>Currently, we only offer a flat-rate return shipping service via USPS which is available for purchase through the Online Returns Portal for U.S. Domestic Customers only.</p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Button trigger modal -->
<a type="button" class="faq-titles" data-toggle="modal" data-target="#modal3Container">Shipping Timeframes and Carriers
</a>

<!-- Modal -->
<div class="modal fade" id="modal3Container" tabindex="-1" role="dialog" aria-labelledby="modal3ContainerTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                    <div class="modal-textbox">
                        <h4>How do I use the Online Returns Portal?</h4>
                        <ol>
                            <li>You will go to the Online Returns Portal</li>
                            <li>Enter Your Email Address and Order Number. If you have an account, Sign In</li>
                            <li>Start your return- Select the items you wish to return from the order, as well as the reason(s) why you are returning.</li>
                            <li>Return Confirmation- Confirm the items you selected as well as your Shipping Address.</li>
                            <li>Pay Options- Enter your email address for confirmation (this is where your return label will be sent) and your payment method details to pay for your return shipping label.</li>
                            <li>Print Your Return Label- you will be able to print your label once your payment is confirmed. You will receive a payment receipt along with instructions provided for shipping.</li>
                            <li>Get Your Package Ready- Your package will ship via USPS! You have the option to provide your package to your USPS delivery courier, schedule a pickup with USPS by clicking here: Schedule a Pickup- USPS OR drop it off at your nearest Post Office. To look for a convenient Post Office, click here: USPS Locations</li>
                        </ol>
                        <h4>How much does the shipping label cost on the Online Returns Portal?</h4>

                        <p>
                            At this time we offer return shipping labels for purchase via the online Returns Portal at a flat-rate fee of $7.99. Please note that these return shipping labels are available for use by U.S. Domestic customers only. For step-by-step instructions on how to return using the Returns Portal, please click Online Returns Portal</p>





                        <h4>I am an International customer and I want to return an Item?</h4>
                        <p>Regrettably, the Online Returns Portal is for use by our U.S. Domestic Customers only! If you are an International customer and would like information on how to return your items back to Fashion Nova, please click here! </p>


                        <h4>What payment methods are accepted on the Online Returns Portal?</h4>
                        <p>We accept major credit card companies (Visa, MasterCard, Discover, American Express) when processing payment via the Online Returns Portal.
                        </p>

                        <h4>What carriers are available on the Online Returns Portal?</h4>
                        <p>Currently, we only offer a flat-rate return shipping service via USPS which is available for purchase through the Online Returns Portal for U.S. Domestic Customers only.</p>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--contact-us-area end-->


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


            $('#caseType').change(function () {
                var id = $(this).val();

                if(id == ''){
                    return false
                }else{

                    $.ajax({
                        url: 'customer-supports/case-category',
                        type: 'get',
                        data: {id:id},

                        success:function (resp) {
                            $('#caseCategory').html(resp)
                        }
                    });
                }

            })

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
