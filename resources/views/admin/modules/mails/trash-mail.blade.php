@extends('admin.modules.mails.layout.layout')
@section('title', "sendMail")
@section('mail-content')

    <div class="row">
        <div class="col-md-12">
            <x-inform-users></x-inform-users>
        </div>
    </div>
    <div class="mb-5">
        <form action="{{route('trash-mails.destroy')}}" method="post" id="dummy_mail_form_submit">

            @method('DELETE')
            @csrf
            @include('admin.modules.mails.layout.common.header')

            <div class="admi-mail-list mb-30">
                <!-- Single Mail -->
                @foreach($trashMails as $trashMail)
                    <div class="admi-mail-item">
                        <!-- Admi-mail-checkbox -->
                        <div class="admi-mail-checkbox">
                            <div class="form-group mb-0">
                                <div class="checkbox d-inline">
                                    <input type="checkbox" name="mail[]" value="{{$trashMail->id}}" id="checkbox-{{$trashMail->id}}">

                                    <label for="checkbox-{{$trashMail->id}}" class="cr"></label>
                                </div>
                            </div>
                        </div>


                        <a href="javascript:">
                            <!-- Admi-mail-body -->
                            <div class="admi-mail-body d-flex align-items-center mr-3">
                                <div class="div">
                                    <div class="admi-mail-from">{{$trashMail->email}}</div>
                                    <div class="admi-mail-subject">
                                        <p class="mb-0 mail-subject--text--">
                                            {{$trashMail->mail->subject}} <span>{{Str::limit(strip_tags(htmlspecialchars_decode($trashMail->mail->description)),220)}}</span></p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <div class="admi-mail-date">{{$trashMail->deleted_at->format('H:m:A')}}</div>
                    </div>
                @endforeach
                <input type="hidden" id="dummy_method_type" name="method_type" value="">
            </div>
        </form>
        {{ $trashMails->links() }}
    </div>

    <script>
        $('#dummy_delete_btn').click(function () {

            $('#dummy_method_type').val('destroy');
            $('#dummy_mail_form_submit').submit()
        });

        $('#dummy_restore_btn').click(function () {
            $('#dummy_method_type').val('restore');
            $('#dummy_mail_form_submit').submit()
        })
    </script>
@endsection
