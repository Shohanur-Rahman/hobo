@extends('user.layouts.layout-third')

@section('content')
    <div class="container-fluid ">
        <div class="row mt-3 ">

            @include('user.pages.profiles.partial.sidebar')
            <div class="col-md-9 col-sm-8 col-xs-12  pb-4">
                <x-inform-users></x-inform-users>

                <div class="card border-0">
                    <div class="dashboard">
                        <div class="recent-orders">
                            <div class="d-flex justify-content-between">
                                <div class="text-black h6"><strong>Orders Details</strong></div>
                            </div>
                            <div class="table-responsive">
                                <table class="table" id="my-orders-table">
                                    <thead>
                                    <tr class="first last">
                                        <th>Product Name</th>
                                        <th>Sku</th>
                                        <th>Price</th>
                                        <th>&nbsp;Quantity</th>
                                        <th><span class="nobr">Total Price</span></th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                        @foreach($order->orderProducts as $orderProduct)
                                            <tr class="first odd">
                                                <td>{{$orderProduct->product->title}} </td>
                                                <td>{{$orderProduct->product->sku}} </td>
                                                <td>{{$orderProduct->product->new_price}} </td>
                                                <td>{{$orderProduct->quantity}} </td>
                                                <td>{{$orderProduct->quantity * $orderProduct->product->new_price}} </td>
                                            </tr>
                                        @endforeach

                                        <tr class="first odd">
                                            <td colspan="4" align="right">
                                                <table >
                                                    <tr >
                                                        <td class="border-0" colspan="4" align="right">Sub Total</td>
                                                    </tr>
                                                    <tr class="first odd">
                                                        <td class="border-0" colspan="4" align="right">Shipping Charge</td>
                                                    </tr>
                                                    <tr class="first odd">
                                                        <td class="border-0" colspan="4" align="right">Grand Total</td>
                                                    </tr>
                                                </table>
                                            </td>
                                            <td>
                                                <table >
                                                    <tr>
                                                        <td class="border-0">{{$order->total_amount}}</td>
                                                    </tr>
                                                    <tr class="first odd">
                                                        <td class="border-0">0</td>
                                                    </tr>
                                                    <tr class="first odd" style="border-bottom: 1px solid grey;border-bottom: double">
                                                        <td class="border-0">{{$order->total_amount}}</td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
