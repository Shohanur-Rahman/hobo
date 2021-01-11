@extends('admin.layouts.admin')
@section('title', "Users")
@section('content')

    <div class="row">
        <div class="col-md-12">
            <x-inform-users></x-inform-users>
        </div>

        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-2">Orders</h4>
                    <p class="text-muted font-14 mb-4">
                        The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page
                        that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
                    </p>


                    <table id="datatable-buttons" class="table table-striped dt-responsive js-exportable nowrap w-100">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>#P_ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Invoice</th>
                            <th>Method</th>
                            <th>Status</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($orders as $order)
                            <?php $customerInfo = \App\User::find($order->customer_id);?>
                            <tr>
                                <td>{{$order->id}}</td>
                                <td>{{$order->payer_email}}</td>
                                <td>{{$customerInfo->name}}</td>
                                <td>{{$customerInfo->email}}</td>
                                <td>#{{$order->invoice_number}}</td>
                                <td>{{$order->payment_method}}</td>
                                <td>{{$order->status}}</td>
                                <td>{{date('d F Y H:m', strtotime($order->created_at))}}</td>
                                <td>
                                    <a class="btn btn-outline-primary table-btn btn-sm" href="{{route('orders.show',$order->id )}}" title="Edit"><i class="fa fa-eye"></i></a>
                                </td>

                            </tr>

                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>


    @include('admin.partials.partial_assets.datatable')

@endsection
