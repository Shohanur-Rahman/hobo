<div >
    @if(Session::has('error-message'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <span>{{Session::get('error-message')}}</span>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if(Session::has('success-message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <span>{{Session::get('success-message')}}</span>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if(Session::has("success"))
        <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            <strong>{{Session::get("success")}}</strong>
        </div>
    @endif
</div>
