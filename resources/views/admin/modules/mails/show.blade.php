@extends('admin.modules.mails.layout.layout')
@section('title', "sendMail")
@section('mail-content')
    <div class="row">
        <div class="col-md-12">
            <x-inform-users></x-inform-users>
        </div>
    </div>

    <div class="mail-body--area">
            <div class="mail-windoe-body-area">
                <div class="mail-window-header pb-0">
                    <div class="row justify-content-between">
                        <div class="col-xs-6">
                            <div class="mail-window-header-text mb-20">
                                <a href="{{url()->previous()}}"><i class="fa fa-angle-left"></i></a>
                               {{-- <a href="#"><i class="fa fa-print"></i></a>--}}
                            </div>
                        </div>
                        {{--<div class="col-xs-6">
                            <div class="mail-window-header-text mb-20">
                                <a href="#"><i class="fa fa-camera"></i></a>
                                <a href="mail-view.html"><i class="fa fa-refresh"></i></a>
                            </div>
                        </div>--}}
                    </div>
                </div>

                <div class="mail-window-text-content">
                    <h5 class="mb-0">{{$mailAddress->mail->subject}}</h5>
                    <p>{{$mailAddress->created_at->format('h.m a M D Y')}}</p>
                    <div class="mail-avatra d-flex align-items-center mb-15">
                        <div class="mail-avatra-text">
                            <h6 class="mb-0">{{$mailAddress->name}}</h6>
                            <p class="mb-0">{{$mailAddress->email}}</p>
                        </div>
                    </div>

                    <p>{{strip_tags(htmlspecialchars_decode($mailAddress->mail->description))}}</p>

                    <p><i class="ti-help-alt"></i> Click on below buttons to see composer</p>

                  {{--  <!-- Button -->
                    <div class="box-footer">
                        <div class="pull-">
                            <a href="compose-mail.html" class="btn btn-primary btn-sm mb-2">Replay</a>
                        </div>
                    </div>--}}
                </div>
            </div>
        </div>
@endsection
