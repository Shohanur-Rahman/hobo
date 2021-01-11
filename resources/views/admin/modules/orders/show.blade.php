@extends('admin.layouts.admin')
@section('title', "User Edit")
@section('content')

    <div class="row">
        <div class="col-md-12">
            <x-inform-users></x-inform-users>
        </div>

        <div class="col-md-12">
            <div class="card">
                <div class="card-body ml-3">
                    <h4 class="card-title mb-2">Order ID #{{$order->id}}</h4>
                    <p class="text-muted font-14 mb-4">
                        The Buttons extension for DataTables provides a common set of options, API methods and styling
                        to display buttons on a page
                        that will interact with a DataTable. The core library provides the based framework upon which
                        plug-ins can built.
                    </p>

                </div>


                <div class="row">
                    <div class="col-xl-6 ">
                        <div class="card">
                            <div class="card-body">
                                <div class="template-demo">
                                    <table class="table mb-0">
                                        <thead>
                                        <tr>
                                            <th colspan="2"><h4 class="card-title mb-0">Ordered Details</h4></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Ordered Date</td>
                                            <td class=" text-right">
                                                <div
                                                    class="badge badge-primary badge-pill">{{$order->created_at->format('d F Y')}}</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Ordered Status</td>
                                            <td class=" text-right">
                                                <div class="badge badge-primary badge-pill">{{$order->status}}</div>
                                            </td>
                                        </tr>

                                        <?php
                                        $total = 0;
                                        $shippingCharge = 0;
                                        foreach ($productInfo as $orderProduct) {
                                            $total += $orderProduct->new_price;
                                            $shippingCharge += $orderProduct->shipping_charge;

                                        }

                                        ?>

                                        <tr>
                                            <td>Ordered Amount</td>
                                            <td class=" text-right">
                                                <div class="badge badge-primary badge-pill">
                                                    ${{$total}}
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Shipping Charge</td>
                                            <td class=" text-right">
                                                <div class="badge badge-primary badge-pill">${{$shippingCharge}}</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Total</td>
                                            <td class=" text-right">
                                                <div class="badge badge-primary badge-pill">${{($total + $shippingCharge)}}</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Payer Email</td>
                                            <td class=" text-right">
                                                <div
                                                    class="badge badge-primary badge-pill">{{$order->payer_email}}</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Invoice</td>
                                            <td class=" text-right">
                                                <div class="badge badge-primary badge-pill">
                                                    #{{$order->invoice_number}}</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Payment Method</td>
                                            <td class=" text-right">
                                                <div
                                                    class="badge badge-primary badge-pill">{{$order->payment_method}}</div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body ml-3">
                                <div class="template-demo">
                                    <h4 class="card-title mb-3">Billing Address</h4>

                                    <address class="font-16">
                                        {{$order->user->name}}<br>
                                        {{$order->user->email}}<br>

                                        {!!html_entity_decode($order->user->userProfile->line1 ? $order->user->userProfile->line1 . '<br/>' : '')!!}
                                        {!!html_entity_decode($order->user->userProfile->line2 ? $order->user->userProfile->line2 . '<br/>' : '')!!}
                                        {!!html_entity_decode($order->user->userProfile->city ? $order->user->userProfile->city . '<br/>' : '')!!}
                                        {!!html_entity_decode($order->user->userProfile->state ? $order->user->userProfile->state . '<br/>' : '')!!}
                                        {!!html_entity_decode($order->user->userProfile->postcode ? $order->user->userProfile->postcode . '<br/>' : '')!!}
                                        {!!html_entity_decode($order->user->userProfile->describe_address ? $order->user->userProfile->describe_address . '<br/>' : '')!!}

                                    </address>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 ">
                        <div class="card">
                            <div class="card-body">
                                <div class="template-demo">
                                    <table class="table mb-0">
                                        <thead>
                                        <tr>
                                            <th colspan="2"><h4 class="card-title mb-0">Customer Details</h4></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Customer Name</td>
                                            <td class=" text-right">
                                                <div class="badge badge-primary badge-pill">{{$order->user->name}}</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Customer Email</td>
                                            <td class=" text-right">
                                                <div
                                                    class="badge badge-primary badge-pill">{{$order->user->email}}</div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body ml-3">
                                <div class="template-demo">

                                    <h4 class="card-title mb-3">Ordered Status</h4>
                                    <form action="{{route('orders-status.update',$order->id)}}" method="post">
                                        @method('PATCH')
                                        @csrf
                                        <div class="form-group">
                                            <div class="new-checkbox">
                                                <!-- Rectangular switch -->
                                                <div class="inline-widged">
                                                    <label for="new" class="single-label">New</label>
                                                    <label class="switch">
                                                        <input onclick="submit()" class="status-list" type="checkbox"
                                                               id="new" name="status"
                                                               {{$order->status=='New' ? 'checked' : '' }} value="New"/>
                                                        <span class="slider round"></span>
                                                    </label>
                                                </div>
                                                <div class="inline-widged">
                                                    <label for="pending" class="single-label">Pending</label>
                                                    <label class="switch">
                                                        <input onclick="submit()" class="status-list" type="checkbox"
                                                               id="pending" name="status"
                                                               {{$order->status=='Pending' ? 'checked' : '' }} value="Pending"/>
                                                        <span class="slider round"></span>
                                                    </label>
                                                </div>
                                                <div class="inline-widged">
                                                    <label for="delivered" class="single-label">Delivered</label>
                                                    <label class="switch">
                                                        <input onclick="submit()" class="status-list" type="checkbox"
                                                               id="delivered" name="status"
                                                               {{$order->status=='Delivered' ? 'checked' : '' }} value="Delivered"/>
                                                        <span class="slider round"></span>
                                                    </label>
                                                </div>
                                                <div class="inline-widged">
                                                    <label for="cancel" class="single-label">Cancel</label>
                                                    <label class="switch">
                                                        <input onclick="submit()" class="status-list" type="checkbox"
                                                               id="cancel" name="status"
                                                               {{$order->status=='Cancel' ? 'checked' : '' }} value="Cancel"/>
                                                        <span class="slider round"></span>
                                                    </label>
                                                </div>

                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body ml-3">
                                <div class="template-demo">
                                    <h4 class="card-title mb-3">Shipping Address</h4>

                                    <address class="font-16">
                                        {!!html_entity_decode($order->shippingAddress->title ? $order->shippingAddress->title . '' : '')!!}

                                        {!!html_entity_decode($order->shippingAddress->line1 ? $order->shippingAddress->line1 . '<br/>' : '')!!}
                                        {!!html_entity_decode($order->shippingAddress->line2 ? $order->shippingAddress->line2 . '<br/>' : '')!!}
                                        {!!html_entity_decode($order->shippingAddress->city ? $order->shippingAddress->city . '<br/>' : '')!!}
                                        {!!html_entity_decode($order->shippingAddress->state ? $order->shippingAddress->state . '<br/>' : '')!!}
                                        {!!html_entity_decode($order->shippingAddress->postcode ? $order->shippingAddress->postcode . '<br/>' : '')!!}
                                        {!!html_entity_decode($order->shippingAddress->describe_address ? $order->shippingAddress->describe_address . '<br/>' : '')!!}

                                    </address>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3 mb-5">
        <div class="col-xl-12 ">
            <div class="card ">
                <div class="card-body ml-3">
                    <div class="">
                        <h4 class="card-title mb-4">Ordered Product</h4>
                        <table class="table mb-0">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Product Name</th>
                                <th>Photo</th>
                                <th>Product SKU</th>
                                <th>Product Price</th>
                                <th>Product Quantity</th>
                                <th>Total Price</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($productInfo as $orderProduct)
                                <tr>
                                    <td>{{$orderProduct->id}}</td>
                                    <td>{{$orderProduct->title}}</td>
                                    <td><img src="{{asset($orderProduct->featured_image)}}" class="table-image"></td>
                                    <td>{{$orderProduct->sku}}</td>
                                    <td>${{$orderProduct->new_price}}</td>
                                    <td>{{$orderProduct->quantity}}</td>
                                    <td>${{$orderProduct->new_price*$orderProduct->quantity}}</td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $('.status-list').on('change', function () {
            $('.status-list').not(this).prop('checked', false);
        });
    </script>
@endsection
