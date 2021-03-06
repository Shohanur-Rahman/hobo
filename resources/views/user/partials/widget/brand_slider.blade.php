@php
    $brandSliders = \App\Models\ProductBrands::where('is_show',true)->get();
@endphp

@if(count($brandSliders) > 0)
    <div class="container-fluid mt-60">
        <div class="row px-4">
            <div class="col-lg-12">
                <div class="card border-0 py-4 px-4">
                    <div class="brands-area">
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
    </div>
@endif
