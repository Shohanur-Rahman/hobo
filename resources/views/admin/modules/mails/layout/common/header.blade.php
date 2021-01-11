<div class="mail-box-header">
    <div class="mail-title-search-area d-md-flex align-items-center justify-content-between">
        <!-- Title -->
        <div class="inbox-title mb-15">
            <h2>Mail</h2>
        </div>
    </div>

    <!-- Tools -->
    <div class="mail-tools tooltip-demo d-flex align-items-center mb-15 justify-content-between">
        <div class="mail-btn-group d-flex align-items-center mb-15">
            <a href="javascript:" class="btn"  id="dummy_delete_btn" ><i class="icon_trash_alt"></i></a>
            <a href="{{route('mails.index')}}" class="btn"><i class="icon_mail_alt"></i></a>
            <a href="{{route('draft-mail.index')}}" class="btn"><i class="icon_tag_alt"></i></a>
           @if(request()->routeIs('trash-mails.index'))
                <a href="javascript:" id="dummy_restore_btn" class="btn"><i class="fa fa-trash-restore"></i></a>
           @endif
        </div>
       {{-- <div class="mail-pager d-flex align-items-center text-right mb-15">
            <span>1-50 of 9</span>
            <a href="#"><i class="arrow_carrot-left"></i></a>
            <a href="#"><i class="arrow_carrot-right"></i></a>
        </div>--}}

    </div>
</div>

