
@if(count($sliders) > 0)
<div class="main-slider mt-30 mt-sm-0">
    @foreach($sliders as $slider)
    <div class="slider-single" style="background-image: url({{asset($slider->image_url)}})">
        <div class="d-table">
            <div class="slider-caption">
                <h4>{{$slider->category != null ? $slider->category->category_name : ''}}</h4>
                <h2 class="cssanimation leDoorCloseLeft sequence">{{$slider->name}}</h2>
                <p>{{$slider->caption}}</p>
                <a href="{{$slider->category != null ? route('product.index', $slider->category->slug) : '#'}}" class="btn-common mt-43">view more</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endif
