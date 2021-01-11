@extends('admin.layouts.admin')
@section('title', "Customer Supports")
@section('content')

    <div class="row">
        <div class="col-md-12">
            <x-inform-users></x-inform-users>
        </div>

        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-2">Customer Supports</h4>
                    <p class="text-muted font-14 mb-4">
                        The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page
                        that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
                    </p>

                    <table id="datatable-buttons" class="table table-striped dt-responsive js-exportable nowrap w-100">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Order Id</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Case Type</th>
                            <th>Case Category</th>
                            <th>Created_at</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($customerSupports as $customerSupport)
                            <tr>
                                <td>{{$customerSupport->id}}</td>
                                <td>{{$customerSupport->order_id}}</td>
                                <td>{{$customerSupport->email}}</td>
                                <td>{{$customerSupport->subject}}</td>
                                <td>{{$customerSupport->caseType->case_type}}</td>
                                <td>{{$customerSupport->caseCategory->case_category}}</td>

                                <td>{{$customerSupport->created_at->format('d F Y')}}</td>
                                <td>
                                    <a class="btn btn-outline-primary table-btn btn-sm" href="{{route('customer-supports.show',$customerSupport->id)}}" title="View Customer Supports Information"><i class="fa fa-eye"></i></a>

                                    <a class="btn btn-outline-primary table-btn btn-sm" href="{{route('profile-show.show',$customerSupport->id)}}" title="View Customer Profile"><i class="fa fa-eye"></i></a>

                                    <form class="d-inline"  action="{{route('customer-supports.destroy',$customerSupport->id)}}" method="post">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-outline-danger table-btn btn-sm"  title="Delete"><i class="zmdi zmdi-delete"></i></button>
                                    </form>
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
