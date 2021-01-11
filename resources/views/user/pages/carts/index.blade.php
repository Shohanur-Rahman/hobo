@extends('user.layouts.layout-third')
@section('title', 'My Cart')
@section('content')

    <div class="shopping-cart-steps">
        <x-inform-users></x-inform-users>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cart-steps">
                        <ul class="clearfix">
                            <li class="active">
                                <div class="inner">
                                    <span class="step">01</span> <span class="inner-step">Shopping Cart</span>
                                </div>
                            </li>
                            <li>
                                <div class="inner">
                                    <span class="step">02</span> <span class="inner-step">Checkout </span>
                                </div>
                            </li>
                            <li>
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

    <!--shopping-cart area-->
    <div class="shopping-cart-area mb-5">
        <form action="{{route('cart.update')}}" method="post" data-parsley-validate>
            @method('PATCH')
            @csrf
            <div class="container">
                <div class="card border-0 py-4 px-4">
                    <div class="row">
                        <div class="col-sm-12">

                            <div class="table-responsive">
                                <table class="cart-table">
                                    <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Product Name</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Shipping Charge</th>
                                        <th>Total</th>
                                        <th class="text-center"><i class="fa fa-times" aria-hidden="true"></i></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $taotalPrice = 0;
                                    $shippingCharge = 0;
                                    ?>
                                    @foreach($myCartList as $cartItem)

                                        <tr class="cart-row">
                                            <td>
                                                <div class="cart-product-thumb">
                                                    <a title="{{$cartItem->product->title}}"
                                                       href="{{route('product.search.show', $cartItem->product->slug)}}"><img
                                                            src="{{asset($cartItem->product->featured_image)}}"
                                                            class="cart-page-image"
                                                            alt="{{$cartItem->product->title}}"/></a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="cart-product-name">
                                                    <h5>
                                                        <a href="{{route('product.search.show', $cartItem->product->slug)}}">{{$cartItem->product->title}}</a>
                                                    </h5>
                                                </div>
                                            </td>
                                            <td>
                                                <span
                                                    class="cart-product-price">${{$cartItem->product->new_price}}</span>
                                                <span style="display: none;"
                                                      id="price_{{$cartItem->id}}">{{$cartItem->product->new_price}}</span>
                                            </td>
                                            <td>
                                                <div class="cart-quantity-changer">
                                                    <input type="hidden" name="product_id[]"
                                                           value={{$cartItem->product_id}}>

                                                    <input type="number" name="quantity[]" min="1"
                                                           value="{{$cartItem->quantity}}"
                                                           onchange="CalculateTotal(this)" id="qty_{{$cartItem->id}}"
                                                           selector="{{$cartItem->id}}" pattern="[0-9]"
                                                           onkeydown="CalculateTotal(this)"
                                                           onkeyup="CalculateTotal(this)"
                                                           onkeyup="CalculateTotal(this)"/>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="cart-product-price">$<span
                                                        id="shipping_{{$cartItem->id}}"> {{$cartItem->product->shipping_charge}} </span></span>
                                            </td>
                                            <td>
                                                <span class="cart-product-price">$<span
                                                        id="{{$cartItem->id}}_total_price">{{number_format($cartItem->product->new_price*$cartItem->quantity + $cartItem->product->shipping_charge, 2)}}</span></span>
                                            </td>
                                            <td>
                                                <div class="product-remove">
                                                    <a title="Remove Item"
                                                       href="{{route('cart.delete',$cartItem->id)}}">
                                                        <i class="fa fa-times" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php
                                        $taotalPrice = ($taotalPrice + ($cartItem->product->new_price * $cartItem->quantity));

                                        $shippingCharge += $cartItem->product->shipping_charge;
                                        ?>
                                    @endforeach

                                    <tr>
                                        <td class="td-subtotal" colspan="5">
                                            <strong>Total</strong>
                                        </td>

                                        <td class="td-subtotal" colspan="2">
                                            $<span class="dummy_cartTotal">{{$taotalPrice}}</span>
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                    <div class="row mt-30">
                        <div class="col-lg-4">
                            <div class="cart-update">
                                <a href="{{route('app.home')}}" class="btn-common">CONTINUE SHOPPING</a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="cart-update">
                                <a href="{{route('cart.clear')}}" class="btn-common btn-danger">CLEAR CART</a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="cart-update pull-right">
                                <button type="submit" class="btn-common btn-success">UPDATE CART</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-40 d-flex justify-content-between ">
                    <div class="col-lg-4">
                        {{--<div class="cart-box cart-coupon fix">
                            <h5>Discount Codes</h5>
                            <div class="cart-box-inner">
                                <p>Enter your coupin if you have one</p>
                                <input type="text">
                                <a href="#" class="btn-common">Apply</a>
                            </div>
                        </div>--}}
                    </div>
                    <div class="col-lg-4">
                        <div class="card border-0 py-4 px-4">
                            <div class="cart-box cart-total">
                                <h5>Cart Total</h5>
                                <div class="cart-box-inner">
                                    <table class="table">
                                        <tbody>
                                        <tr>
                                            <td>SUB TOTAL:</td>
                                            <td><span>${{$taotalPrice}}</span></td>
                                        </tr>

                                        <tr>
                                            <td>Shipping Charge <b>(+)</b>:</td>
                                            <td><span>${{$shippingCharge}}</span></td>
                                        </tr>

                                        <tr>
                                            <td>GRAND TOTAL:</td>
                                            <td><span>${{$taotalPrice + $shippingCharge}}</span></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <div class="proceed-checkout">
                                        <div class="col-lg-12">
                                            <a href="#">Checkout with multiple address</a>
                                        </div>
                                        <div class="col-lg-12">
                                            @if($myCartList->isNotEmpty())
                                                <a href="{{route('checkouts.create')}}" class="btn-common">PROCEED TO
                                                    CHECK
                                                    OUT</a>
                                            @else
                                                <a href="javascript:" class="btn-common">Please Buy first</a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>


    <!--shopping-cart end-->


    <script type="text/javascript">
        function CalculateTotal(element) {
            var value = parseInt($(element).val());
            var selector = $.trim($(element).attr('selector'));
            var price = parseFloat($("#price_" + selector).text());
            var shippingCost = parseFloat($("#shipping_" + selector).text());
            if (value && price) {
                var tPrice = ((price * value) + shippingCost).toFixed(2);
                $("#" + selector + "_total_price").text(tPrice);
            }
            if (value == 0 || value == "" || isNaN(value)) {
                $(element).val('1');
                $("#" + selector + "_total_price").text(price.toFixed(2));
            }
        }
    </script>


@endsection
