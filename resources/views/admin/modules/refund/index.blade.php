@extends('admin.layouts.admin')
@section('title', "Refund History")
@section('content')

    <div class="row">
        <div class="col-md-12">
            <x-inform-users></x-inform-users>
        </div>

        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-2">Refunds</h4>
                    <p class="text-muted font-14 mb-4">
                        The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page
                        that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
                    </p>

                    <p>
                        <a class="btn btn-primary" href="{{route('refunds.create')}}">Make Refund Request</a>
                    </p>


                    <table id="datatable-buttons" class="table table-striped dt-responsive js-exportable nowrap w-100">
                        <thead>
                        <tr>
                            <th>#OrderID</th>
                            <th>#RefundID</th>
                            <th>#Invoice</th>
                            <th>#Transaction</th>
                            <th>#Received</th>
                            <th>#Fee</th>
                            <th>#Amount</th>
                            <th>#Total</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($refunds as $refund)
                            <tr>
                                <td>{{$refund->order_id}}</td>
                                <td>{{$refund->refund_id}}</td>
                                <td>{{$refund->invoice_number}}</td>
                                <td>{{$refund->transaction_id}}</td>
                                <td>{{$refund->refund_from_received_amount}}</td>
                                <td>{{$refund->refund_from_transaction_fee}}</td>
                                <td>{{$refund->amount}}</td>
                                <td>{{$refund->total_refunded_amount}}</td>

                                <td>
                                    @can('access-settings',$refund)
                                        <a class="btn btn-outline-primary table-btn btn-sm" href="{{route('orders.show',$refund->order_id )}}" title="View Order"><i class="fa fa-eye"></i></a>
                                    @endcan
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
