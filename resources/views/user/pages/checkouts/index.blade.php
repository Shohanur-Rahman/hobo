@extends('user.layouts.layout-third')
@section('title', 'My Cart')
@section('content')




    <!--shopping-cart area-->
    <form action="{{route('checkouts.store')}}" method="post" data-parsley-validate>
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
                                    <li class="">
                                        <div class="inner">
                                            <span class="step">02</span> <span class="inner-step">Checkout </span>
                                        </div>
                                    </li>
                                    <li class="active">
                                        <div class="inner">
                                            <span class="step">03</span> <span class="inner-step">Order Completed </span>
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
                        <div class="col-lg-12">
                            <div class="text-center">
                                <h4>Order Completed</h4>
                                <p>Your Order has been completed successfully.
                                Thank your, for shopping us</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

@endsection
