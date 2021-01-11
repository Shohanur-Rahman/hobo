@php
    $brandSliders = \App\Models\ProductBrands::where('is_show',true)->get();
@endphp

@if(count($brandSliders) > 0)
<div class="container-fluid mt-60">
    <div class="brands-area">
        <div class="row">
            <div class="col-lg-12">
                <div class="brand-items">
                    @foreach($brandSliders as $brandSlider)
                        <div class="brand-item">
                            <img class="brand-static" src="{{asset($brandSlider->image)}}" alt="brand images"/>
                        </div>
                    @endforeach()
                </div>
            </div>
        </div>
    </div>
</div>
@endif
