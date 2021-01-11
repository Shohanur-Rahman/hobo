@extends('admin.layouts.admin')
@section('title', "Profile")
@section('content')

    <div class="row">
        <div class="col-md-12">
            <x-inform-users></x-inform-users>
        </div>

        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-2">User Information</h4>
                    <p class="text-muted font-14 mb-4">
                        The Buttons extension for DataTables provides a common set of options, API methods and styling
                        to display buttons on a page
                        that will interact with a DataTable. The core library provides the based framework upon which
                        plug-ins can built.
                    </p>


                    @if($user == null)
                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <h1>User is Not Found</h1>
                            </div>
                        </div>
                    @else
                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <div class="form-row">
                                    <div class="form-group col-md-6 d-flex">
                                        @if($user->userProfile->avatar)
                                            <img class="rounded-circle" src="{{($user->userProfile->avatar)}}"   style="width: 120px;height: 120px" alt="">
                                        @else
                                            <img class="rounded-circle" src="{{asset('user/assets/images/avatar.png')}}" id="uploadPreview"   style="width: 120px;height: 120px" alt="">
                                        @endif

                                        <address class="ml-4">
                                            <h3>{{$user->name}}</h3>
                                            {!!html_entity_decode($user->userProfile->line1 ? $user->userProfile->line1 . ',' : '')!!}
                                            {!!html_entity_decode($user->userProfile->line2 ? $user->userProfile->line2 . ',' : '')!!}
                                            {!!html_entity_decode($user->userProfile->state ? $user->userProfile->state . ',' : '')!!}
                                            {!!html_entity_decode($user->userProfile->state ? $user->userProfile->state . '<br/>' : '')!!}
                                            {!!html_entity_decode($user->userProfile->postcode ? $user->userProfile->postcode . '<br/>' : '')!!}
                                            {!!html_entity_decode($user->userProfile->describe_address ? $user->userProfile->describe_address . '<br/>' : '')!!}
                                        </address>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <table class="table">
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
                                        @if($orders->isNotEmpty())
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
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>


@endsection
