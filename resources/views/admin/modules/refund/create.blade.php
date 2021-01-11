@extends('admin.layouts.admin')
@section('title', "Refund Request")
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-2">Request for Refund</h4>
                    <p class="text-muted font-14 mb-4">
                        The Buttons extension for DataTables provides a common set of options, API methods and styling
                        to display buttons on a page
                        that will interact with a DataTable. The core library provides the based framework upon which
                        plug-ins can built.
                    </p>
                    <form method="post" action="{{route('refunds.store')}}" class="d-inline" data-parsley-validate>
                        @csrf
                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <div class="row">
                                    <div class="col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <label for="caseType">Invoice number</label>
                                            <input type="text" class="form-control" id="invoice_number"
                                                   placeholder="Invoice number" name="invoice_number"
                                                   required="required"
                                                   maxlength="20" data-parsley-error-message="Your Invoice Number">
                                        </div>
                                        <div class="form-group">
                                            <label for="caseType">Amount</label>
                                            <input type="number" class="form-control" id="invoice_number"
                                                   placeholder="Amount" name="invoice_amount"
                                                   required="required"
                                                   maxlength="20" data-parsley-error-message="Your refund amount">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success float-right mr-2">Request for Refund
                                </button>
                    </form>

                    <a href="{{route('refunds.index')}}" class="btn btn-danger float-left">Back to Refund History</a>
                </div>
            </div>

        </div>
    </div>
    </div>
    </div>

    @include('admin.partials.partial_assets.touchspin')
@endsection

