@extends('user.layouts.layout-third')
@section('title', "HOBO")
@section('content')

    <!--google-map area start-->
    <div class="google-map-area mt-20">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d158858.47340138938!2d-0.24168153443090962!3d51.528558241258565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C%20UK!5e0!3m2!1sen!2sbd!4v1602498447678!5m2!1sen!2sbd" class="full-map" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    <!--google-map area end-->

    <!--contact-us-area start-->
    <div class="contact-area mt-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="customer-supporter">
                        <h1>How can we help you?</h1>
                        <div class="single-supporter mt-35">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="{{asset('user/assets/images/contact/1.jpg')}}" alt=""/>
                                </div>
                                <div class="col-md-6">
                                    <div class="supporter-desc mt-sm-20">
                                        <h3>John Doe</h3>
                                        <p>Customer Realations</p>
                                        <p>963.806.0919</p>
                                        <p>info@hobo.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-supporter mt-65">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="{{asset('user/assets/images/contact/2.jpg')}}" alt=""/>
                                </div>
                                <div class="col-md-6">
                                    <div class="supporter-desc mt-sm-20">
                                        <h3>Mark</h3>
                                        <p>Customer Support</p>
                                        <p>963.806.0919</p>
                                        <p>hello@hobo.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="contact-form mt-sm-30">
                        <form id="contactForm"  data-toggle="validator" method="POST"
                              action="{{route('send-mail.store')}}" data-parsley-validate>
                            @csrf
                            <div class="row">
                                <div class="col-sm-12">
                                    <input type="text" placeholder="Name" id="name" required="required"
                                          name="name" data-parsley-maxlength="255" data-error="NEW ERROR MESSAGE"/>
                                </div>
                                <div class="col-sm-12 mt-30">
                                    <input type="email" required="required"  name="email" placeholder="Email" id="email" data-parsley-maxlength="255"  data-parsley-type="email"/>
                                </div>
                                <div class="col-sm-12 mt-30">
                                    <input type="text" name="subject" required="required" placeholder="Subject" id="subject" data-parsley-maxlength="255"/>
                                </div>
                                <div class="col-sm-12 mt-30">
                                    <textarea placeholder="Message" required="required" name="description" id="message"></textarea>
                                </div>
                                <div class="col-sm-12 mt-40">
                                    <button type="submit" class="btn-common" id="form-submit">Send message</button>
                                </div>
                                <div class="col-sm-8 text-left pt-30">
                                    <div id="msgSubmit" class="hidden"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--contact-us-area end-->


@endsection
