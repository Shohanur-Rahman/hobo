@extends('user.layouts.layout-third')
@section('title', "HOBO")
@section('content')

    @php
        $allSliders = \App\models\MainSlider::all();

        $allProductCategory = \App\Models\ProductCategory::all();
    $maleProductCategory = $allProductCategory->where('category_name', 'Male')->first();
    $femaleProductCategory = $allProductCategory->where('category_name', 'Female')->first();
    $kidsProductCategory = $allProductCategory->where('category_name', 'Kids')->first();
    $othersProductCategory = $allProductCategory->where('category_name', 'Others')->first();

    @endphp

    @if(count($allSliders) > 0 )
        <div class="row female-bg">
            <div class="col-lg-12 col-md-12 col-xs-12 wow fadeIn">

                @php
                    $upcomingSlider = \App\models\MainSlider::where('is_upcoming',1)->get();
                @endphp

                @include('user.partials.widget.category_slider', ['sliders' => $upcomingSlider])

            </div>
        </div>
    @endif

    @if(count($allSliders) > 0 )
        <div class="row female-bg">
            <div class="col-lg-12 col-md-12 col-xs-12 wow fadeIn">

                @php
                    $femaleSlider = \App\models\MainSlider::with('category')->where('category_id',$femaleProductCategory->id)->get();
                @endphp

                @include('user.partials.widget.category_slider', ['sliders' => $femaleSlider])

            </div>
        </div>
    @endif

    <div class="row female-products row-eq-height female-bg">

        @if ($femaleProductCategory)

            @php $feMaleProducts = Illuminate\Support\Facades\DB::table('products')
                ->join('product_category_maps', 'products.id', '=', 'product_category_maps.product_id')
                ->select('products.*')
                ->where('product_category_maps.is_published', 1)
                ->where('products.show_on_home', 1)
                ->where('product_category_maps.cat_id', $femaleProductCategory->id)
                ->take(50)
                ->get(); @endphp


            @include('user.partials.widget.product_items', ['categoryProducts' => $feMaleProducts, 'productCategory' =>$femaleProductCategory ])

        @endif
    </div>

    @if(count($allSliders) > 0 )
        <div class="row male-bg">
            <div class="col-lg-12 col-md-12 col-xs-12">
                @php
                    $maleSlider = \App\models\MainSlider::with('category')->where('category_id',$maleProductCategory->id)->get();
                @endphp

                @include('user.partials.widget.category_slider', ['sliders' => $maleSlider])
            </div>
        </div>
    @endif

    <div class="row male-products male-bg">
        @if($maleProductCategory)

            @php $maleProducts = Illuminate\Support\Facades\DB::table('products')
            ->join('product_category_maps', 'products.id', '=', 'product_category_maps.product_id')
            ->select('products.*')
            ->where('product_category_maps.is_published', 1)
            ->where('products.show_on_home', 1)
            ->where('product_category_maps.cat_id', $maleProductCategory->id)
            ->take(50)
            ->get();
            @endphp

            @include('user.partials.widget.product_items', ['categoryProducts' => $maleProducts, 'productCategory' =>$maleProductCategory ])
        @endif
    </div>

    @if(count($allSliders) > 0 )
        <div class="row kids-bg">
            <div class="col-lg-12 col-md-12 col-xs-12">
                @php
                    $kidsSlider = \App\models\MainSlider::with('category')->where('category_id',$kidsProductCategory->id)->get();
                @endphp

                @include('user.partials.widget.category_slider', ['sliders' => $kidsSlider])
            </div>
        </div>

    @endif

    <div class="row kids-bg">
        @if($kidsProductCategory)

            @php $kidsProducts = Illuminate\Support\Facades\DB::table('products')
            ->join('product_category_maps', 'products.id', '=', 'product_category_maps.product_id')
            ->select('products.*')
            ->where('product_category_maps.is_published', 1)
            ->where('products.show_on_home', 1)
            ->where('product_category_maps.cat_id', $kidsProductCategory->id)
            ->take(50)
            ->get();
            @endphp

            @include('user.partials.widget.product_items', ['categoryProducts' => $kidsProducts, 'productCategory' =>$kidsProductCategory ])
        @endif
    </div>


    @if(count($allSliders) > 0 )
        <div class="row others-bg">
            <div class="col-lg-12 col-md-12 col-xs-12">
                @php
                    $otherslider = \App\models\MainSlider::with('category')->where('category_id',$othersProductCategory->id)->get();
                @endphp

                @include('user.partials.widget.category_slider', ['sliders' => $otherslider])
            </div>
        </div>
    @endif

    <div class="row others-bg">
        @if($othersProductCategory)
            @php
                $othersProducts = Illuminate\Support\Facades\DB::table('products')
                ->join('product_category_maps', 'products.id', '=', 'product_category_maps.product_id')
                ->select('products.*')
                ->where('product_category_maps.is_published', 1)
                ->where('products.show_on_home', 1)
                ->where('product_category_maps.cat_id', $othersProductCategory->id)
                ->take(50)
                ->get();
            @endphp

            @include('user.partials.widget.product_items', ['categoryProducts' => $othersProducts, 'productCategory' =>$othersProductCategory ])
        @endif
    </div>


@endsection

