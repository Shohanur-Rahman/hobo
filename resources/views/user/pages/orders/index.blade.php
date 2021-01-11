@extends('user.layouts.layout-third')

@section('content')
    <div class="container-fluid">
        <div class="row mt-3 ">
            @include('user.pages.profiles.partial.sidebar')

            <div class="col-md-9 col-sm-8 col-xs-12 pb-4">
                <x-inform-users></x-inform-users>

                <div class="card border-0 px-4 py-4">
                    <div class="dashboard">
                        <div class="recent-orders">
                            <div class="d-flex justify-content-between">
                                <div class="text-black h6"><strong>Recent Orders</strong></div>
                            </div>
                            <div class="table-responsive">
                                <table class="table" id="my-orders-table">
                                    <thead>
                                    <tr class="first last">
                                        <th>Order ID#</th>
                                        <th>Date</th>
                                        <th>Ship to</th>
                                        <th><span class="nobr">Order Total</span></th>
                                        <th>Status</th>
                                        <th>&nbsp;</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($orders as $order)
                                        <tr class="first odd">
                                            <td>{{$order->id}}</td>
                                            <td>{{$order->created_at->format('d m Y')}}</td>
                                            <td>{{$order->shippingAddress->name}}</td>
                                            <td><span class="price">${{$order->total_amount}}</span></td>
                                            <td><em>{{$order->status}}</em></td>
                                            <td class="a-center last">
                                                <span class="nobr">
                                                    <a class="text-success" href="{{route('orders-details.show',$order->id)}}">View Order</a>
                                                </span>
                                            </td>
                                        </tr>
                                    @endforeach
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
