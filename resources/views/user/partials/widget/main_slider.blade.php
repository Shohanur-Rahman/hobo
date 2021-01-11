@php
    $mainSliders = \App\models\MainSlider::with('category')->get();
@endphp

<!--slider-area start-->
<div class="slider-area">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="main-slider">
                    @foreach($mainSliders as $slider)
                        <div class="slider-single "  style="background-image: url({{$slider->image_url}})">
                            <div class="d-table">
                                <div class="slider-caption text-center">
                                    <h4>{{$slider->name}}</h4>
                                    <h2 class="cssanimation leDoorCloseLeft sequence">{{$slider->caption}}</h2>
                                    <a href="#" class="btn-common mt-43">shop now</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!--slider-area end-->
