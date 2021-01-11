@extends('admin.modules.mails.layout.layout')
@section('title', "Send Mail")
@section('mail-content')
    @include('admin.partials.partial_assets.kendo')
    <link rel="stylesheet" href="{{asset('admin/css/email.multiple.css')}}">
    <div class="row">
        <div class="col-12 box-margin">
            <div class="card">
                <div class="card-body">
                    <!-- Email Area -->
                    <div class="compose-email--area">

                        <form action="{{route('mails.store')}}" method="post" data-parsley-validate>
                            @csrf
                            <div class="box-header with-border compose">
                                <h5 class="mb-30">Compose Mail</h5>
                            </div>
                            <!-- Box-header -->
                            <div class="box-body">
                                <div class="form-group">
                                    <input type="text" class="form-control"  id="dummy_multiple_email" name="emails" placeholder="To:">
                                    <p>Type a email address and press the enter then insert another email address</p>
                                </div>

                                <div class="form-group mb-30">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject:" required="required" data-parsley-required-message="Please enter a subject">
                                </div>
                                <div class="form-group mb-30">
                                    <select class="form-control" name="user_type" id="userType">
                                        <option value="">Select User Type</option>
                                        @foreach($userTypes as $type)
                                            <option value="{{$type->user_type}}">{{$type->user_type}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <textarea class="kendo_editor" rows="6" id="description" placeholder="Enter Email Description" name="description" required="required"
                                              data-parsley-error-message="Enter Email description"> </textarea>
                                </div>
                            </div>
                            <!-- Box-body -->
                            <div class="box-footer">
                                <div class="pull-right">
                                    <button type="submit" name="submit"  value="update" class="btn btn-primary btn-sm mb-2"><i
                                            class="fa fa-envelope-o"></i> Send
                                    </button>
                                    <button  type="submit" name="draft"  value="draft"  class="btn btn-primary btn-sm mb-2"><i
                                            class="fa fa-pencil"></i> Draft
                                    </button>
                                    <button type="reset" class="btn btn-primary btn-sm mb-2"><i
                                            class="fa fa-times"></i> Discard
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $('#email').change(function () {
            var email = $(this).val();
            if (email.length > 1) {
                $('#userType').removeAttr('required');
            }
        });

        $('#userType').change(function () {
            var email = $(this).val();
            if (email.length > 1) {
                $('#email').removeAttr('required');

            }
        })
    </script>

    <script>
        $(document).ready(function($){
            let data = [
            ];

            $("#dummy_multiple_email").email_multiple({
                data: data
            })
        });
    </script>
    @include('admin.partials.partial_assets.kendo_init')
    <script src="{{asset('admin/js/jquery.email.multiple.js')}}"></script>
@endsection


