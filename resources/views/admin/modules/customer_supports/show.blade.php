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
                    <h4 class="card-title mb-2">Customer Supports</h4>
                    <p class="text-muted font-14 mb-4">
                        The Buttons extension for DataTables provides a common set of options, API methods and styling
                        to display buttons on a page
                        that will interact with a DataTable. The core library provides the based framework upon which
                        plug-ins can built.
                    </p>

                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <div class="form-row">
                                <div class="form-group">
                                    <h4>{{$customerSupport->first_name}} {{$customerSupport->last_name}}</h4>
                                    <p>
                                        Email: {{$customerSupport->email}}<br>
                                       <b> CaseType:</b> {{$customerSupport->caseType->case_type}}<br>
                                       <b> CaseCategory:</b> {{$customerSupport->caseCategory->case_category}}<br>
                                    </p>
                                    <p>
                                       <b>Subject:</b> {{$customerSupport->subject}}<br>
                                        <b>Description:</b> {{$customerSupport->description}}
                                    </p>
                                    <a class="btn btn-success" href="{{route('orders.show',$customerSupport->order_id)}}">View Order Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
