@extends('admin.modules.mails.layout.layout')
@section('title', "sendMail")
@section('mail-content')

        <div class="row">
            <div class="col-md-12">
                <x-inform-users></x-inform-users>
            </div>
        </div>
        <div class="mb-5">
            <form action="{{route('mails.destroy')}}" method="post" id="dummy_mail_form_submit">

                @method('DELETE')
                @csrf
                @include('admin.modules.mails.layout.common.header')

                <div class="admi-mail-list mb-30">
                    <!-- Single Mail -->
                    @foreach($mailAddresses as $mailAddress)

                        <div class="admi-mail-item">
                            <!-- Admi-mail-checkbox -->
                            <div class="admi-mail-checkbox">
                                <div class="form-group mb-0">
                                    <div class="checkbox d-inline">
                                        <input type="checkbox" name="mail[]" value="{{$mailAddress->id}}" id="checkbox-{{$mailAddress->id}}">

                                        <label for="checkbox-{{$mailAddress->id}}" class="cr"></label>
                                    </div>
                                </div>
                            </div>


                            <a href="{{route('mails.show',$mailAddress->id)}}">
                                <!-- Admi-mail-body -->
                                <div class="admi-mail-body d-flex align-items-center mr-3">
                                    <div class="div">
                                        <div class="admi-mail-from">{{$mailAddress->email}}</div>
                                        <div class="admi-mail-subject">
                                            <p class="mb-0 mail-subject--text--">
                                                {{$mailAddress->mail->subject}} <span>{{Str::limit(strip_tags(htmlspecialchars_decode($mailAddress->mail->description)),220)}}</span></p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <div class="admi-mail-date">{{$mailAddress->created_at->format('H:m:A')}}</div>
                        </div>
                    @endforeach
                </div>
            </form>
            {{ $mailAddresses->links() }}
        </div>


@endsection
