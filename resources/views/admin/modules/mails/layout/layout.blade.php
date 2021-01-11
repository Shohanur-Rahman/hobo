@extends('admin.layouts.admin')
@section('title', "Mail")
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

<div class="inbox-area">
    <div class="row">
        <div class="col-12 box-margin">
            <div class="card">
                <div class="card-body pb-0">
                    <div class="d-sm-flex">
                        @include('admin.modules.mails.layout.partial.sidebar')

                        <div class="mail-body--area">

                            @yield('mail-content')
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $('#dummy_delete_btn').click(function () {
        $('#dummy_mail_form_submit').submit()
    })
</script>
@endsection
