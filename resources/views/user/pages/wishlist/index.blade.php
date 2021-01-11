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
                                    <span class="step">{{count($wishLists)}}</span> <span
                                        class="inner-step">WishList</span>
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

        <div class="container">
            <form action="{{route('wish-lists.update')}}" method="post" data-parsley-validate>
                @method('PATCH')
                @csrf
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
                                        <th>Total</th>
                                        <th class="text-center"><i class="fa fa-times" aria-hidden="true"></i></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $totalPrice = 0; $shippingCharge = 0;?>
                                    @foreach($wishLists as $wishList)

                                        <tr class="cart-row">
                                            <td>
                                                <div class="cart-product-thumb">
                                                    <a title="{{$wishList->product->title}}"
                                                       href="{{route('product.search.show', $wishList->product->slug)}}"><img
                                                            src="{{asset($wishList->product->featured_image)}}"
                                                            class="cart-page-image"
                                                            alt="{{$wishList->product->title}}"/></a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="cart-product-name">
                                                    <h5>
                                                        <a href="{{route('product.search.show',$wishList->product->slug)}}">{{$wishList->product->title}}</a>
                                                    </h5>
                                                </div>
                                            </td>
                                            <td>
                                                <span
                                                    class="cart-product-price">${{$wishList->product->new_price}}</span>
                                                <span style="display: none;"
                                                      id="price_{{$wishList->id}}">{{$wishList->product->new_price}}</span>
                                            </td>
                                            <td>
                                                <div class="cart-quantity-changer">
                                                    <input type="hidden" name="product_id[]"
                                                           value={{$wishList->product_id}}>

                                                    <input type="number" name="quantity[]" min="1"
                                                           value="{{$wishList->quantity}}"
                                                           onchange="CalculateTotal(this)"
                                                           id="qty_{{$wishList->id}}" selector="{{$wishList->id}}"
                                                           pattern="[0-9]" onkeydown="CalculateTotal(this)"
                                                           onkeyup="CalculateTotal(this)"
                                                           onkeyup="CalculateTotal(this)"/>
                                                </div>
                                            </td>
                                            <td>
                                            <span class="cart-product-price">$<span
                                                    id="{{$wishList->id}}_total_price">{{number_format($wishList->product->new_price*$wishList->quantity, 2)}}</span></span>
                                            </td>
                                            <td>
                                                <div class="product-remove">
                                                    <a title="Remove Item"
                                                       href="{{route('wish-lists.destroy',$wishList->id)}}">
                                                        <i class="fa fa-times" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php

                                        $totalPrice = ($totalPrice + ($wishList->product->new_price * $wishList->quantity));
                                        $shippingCharge += $wishList->product->shipping_charge;
                                        ?>
                                    @endforeach

                                    <tr>
                                        <td class="td-subtotal" colspan="4">
                                            <strong>Total</strong>
                                        </td>

                                        <td class="td-subtotal" colspan="2">
                                            $<span class="dummy_cartTotal">{{$totalPrice}}</span>
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>

                        </div>

                    </div>

                    <div class="row mt-30">
                        <div class="col-lg-6">
                            <div class="cart-update">
                                <a href="{{route('app.home')}}" class="btn-common">CONTINUE SHOPPING</a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="cart-update pull-right">
                                @if($wishLists->isNotEmpty())
                                    <button type="submit" class="btn-common">UPDATE WishList</button>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </form>

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
                            <h5>WishList Total</h5>
                            <div class="cart-box-inner">
                                <table class="table">
                                    <tbody>
                                    <tr>
                                        <td>SUB TOTAL:</td>
                                        <td><span>${{$totalPrice}}</span></td>
                                    </tr>

                                    <tr>
                                        <td>Shipping Charge:</td>
                                        <td>@if($shippingCharge <= 0) Free Delivery @else
                                                ${{$shippingCharge}} @endif</td>
                                    </tr>

                                    <tr>
                                        <td>GRAND TOTAL:</td>
                                        <td><span>${{$totalPrice+$shippingCharge}}</span></td>
                                    </tr>
                                    </tbody>
                                </table>
                                <div class="proceed-checkout">
                                    <div class="col-lg-12">
                                        <a href="#">Checkout with multiple address</a>
                                    </div>
                                    <div class="col-lg-12">
                                        @auth()
                                            @if($wishLists->isNotEmpty())
                                                <form action="{{route('wish-lists-carts.store')}}" method="post">
                                                    @csrf
                                                    <button class="btn-common" type="submit">Add To Cart</button>
                                                </form>


                                            @else
                                                <a href="javascript:" class="btn-common">Please Buy first</a>
                                            @endif
                                        @else
                                            <a href="javascript:" class="btn-common">Please Login first</a>
                                        @endauth
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <!--shopping-cart end-->


    <script type="text/javascript">
        function CalculateTotal(element) {
            var value = parseInt($(element).val());
            var selector = $.trim($(element).attr('selector'));
            var price = parseFloat($("#price_" + selector).text());
            if (value && price) {
                var tPrice = (price * value).toFixed(2);
                $("#" + selector + "_total_price").text(tPrice);
            }
            if (value == 0 || value == "" || isNaN(value)) {
                $(element).val('1');
                $("#" + selector + "_total_price").text(price.toFixed(2));
            }
        }
    </script>


@endsection
