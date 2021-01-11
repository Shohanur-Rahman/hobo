<div class="mail-side-menu mb-30">
    <div class="ibox-content mailbox-content">
        <div class="file-manager clearfix">
            <a class="btn btn-primary d-block" href="{{route('mails.create')}}">Compose</a>
            <!-- Title -->
            <div class="folder-title mt-50">
                <h6 class="mb-3 primary-color-text">Folders</h6>
            </div>
            <ul class="folder-list">
                <li class="{{Route::is('mails.index') ? 'active' : ''}}">
                    <a href="{{route('mails.index')}}">
                        <i class="ti-email"></i> Inbox

                         @php $indexMailCount = \App\Models\MailAddress::indexMailCount() @endphp

                         @if($indexMailCount >0)
                            <span class="badge badge-pill badge-primary inbox ml-2">
                                {{$indexMailCount}}
                            </span>
                         @endif
                    </a>
                </li>
                <li class="{{Route::is('send-mail.index') ? 'active' : ''}}">
                    <a href="{{route('send-mail.index')}}">
                        <i class="ti-share"></i> Send Mail
                    </a>
                </li>
                <li class="{{Route::is('draft-mail.index') ? 'active' : ''}}">
                    <a href="{{route('draft-mail.index')}}">
                        <i class="far fa-file-alt"></i> Drafts
                        @php $mailCount = \App\Models\Mail::draftCount() @endphp
                        @if($mailCount >0)
                            <span class="badge badge-pill badge-warning inbox ml-2">
                                {{$mailCount}}
                            </span>
                        @endif
                    </a>
                </li>
                <li class="{{Route::is('trash-mails.index') ? 'active' : ''}}">
                    <a href="{{route('trash-mails.index')}}">
                        <i class="far fa-trash-alt"></i>Trash
                        @php $trashCount = \App\Models\MailAddress::trashCount() @endphp
                        @if($trashCount >0)
                            <span class="badge badge-pill badge-danger inbox ml-2">
                                {{$trashCount}}
                            </span>
                        @endif
                    </a>
                </li>
            </ul>


            <div class="clearfix"></div>
        </div>
    </div>
</div>
