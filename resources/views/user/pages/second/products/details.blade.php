<!--product-details-area start-->
@php
    $company = \App\Models\Company::where('user_id', $product->user_id)->first();
$rating = \App\Models\Products::rating($product->id);

@endphp

<div class="product-details-area mt-20">
    <div class="container-fluid">
        <div class="product-details">
            <div class="row">
                <div class="col-lg-1 col-md-2">
                    <ul class="nav nav-tabs products-nav-tabs">
                        <?php $tabCount = 0;?>
                        @foreach($galleries as $gallery)
                            <li><a class="{{$tabCount < 1 ? 'active': ''}}" data-toggle="tab"
                                   href="#product-{{$gallery->id}}"><img src="{{asset($gallery->thumb_url)}}"
                                                                         alt="{{$product->title}}"/></a></li>
                            <?php $tabCount += 2; ?>
                        @endforeach
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="tab-content">
                        <?php $tabCount = 0;?>
                        @foreach($galleries as $gallery)
                            <div id="product-{{$gallery->id}}"
                                 class="tab-pane fade {{$tabCount < 1 ? 'in show active': ''}}">
                                <div class="product-details-thumb">
                                    <a class="venobox" data-gall="myGallery" href="{{asset($gallery->image_url)}}"><i
                                            class="fa fa-search-plus"></i></a>
                                    <img src="{{asset($gallery->image_url)}}" alt=""/>
                                </div>
                            </div>
                            <?php $tabCount += 2; ?>
                        @endforeach
                    </div>
                </div>

                <div class="col-lg-7 mt-sm-50">
                    <div class="row">
                        <div class="col-lg-8 col-md-7">
                            <div class="product-details-desc">
                                <h2>{{$product->title}}</h2>
                                <div class="sort-description">
                                    {{$product->short_description}}
                                </div>
                                <div class="product-meta">
                                    <ul class="list-none d-flex flex-column">
                                        <li>SKU: 00012</li>
                                        <li>Categories:

                                            @foreach($categoryList as $aCategory)
                                                <a href="{{route('product.index', $aCategory->category->slug)}}">{{$aCategory->category->category_name}}  @if (!$loop->last)
                                                        | @endif </a>
                                            @endforeach

                                        </li>
                                        <li>Tags:
                                            <?php $tagList = App\Models\ProductTagMap::where('product_id', $product->id)->get(); ?>
                                            @foreach($tagList as $aTag)
                                                <a href="#">{{$aTag->tag->name}}  @if (!$loop->last) | @endif </a>
                                            @endforeach
                                        </li>

                                        <li>Color:
                                            @if($product->productColorMaps->isNotEmpty())
                                                @foreach($product->productColorMaps as $productColorMap)
                                                    <a href="javascript:"> {{$productColorMap->color->color}}
                                                        @if (!$loop->last) | @endif </a>

                                                @endforeach

                                            @endif
                                        </li>

                                        <li>

                                            @if($product->productSizeMaps->isNotEmpty())
                                                @foreach($product->productSizeMaps as $productSizeMap)
                                                    <span class="badge badge-success text-white dummy_select_size"
                                                          id="{{$productSizeMap->size->size}}"> {{$productSizeMap->size->size}}</span>
                                                @endforeach
                                            @endif
                                        </li>

                                    </ul>
                                </div>
                                {{-- <div class="social-icons style-5">
                                     <span>Share Link:</span>
                                     <a href="#"><i class="fa fa-facebook"></i></a>
                                     <a href="#"><i class="fa fa-twitter"></i></a>
                                     <a href="#"><i class="fa fa-google-plus"></i></a>
                                     <a href="#"><i class="fa fa-rss"></i></a>
                                 </div>--}}
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-5">

                            <div class="product-action stuck text-left">
                                <div class="free-delivery">
                                    <a href="#"><i class="ti-truck"></i>@if($product->shipping_charge <= 0) Free
                                        Delivery @else ${{$product->shipping_charge}} @endif</a>
                                </div>
                                <div class="product-price-rating">
                                    <div>
                                        <del>{{$product->old_price}}</del>
                                    </div>
                                    <span>${{$product->new_price}}</span>
                                    <div class="pull-right">
                                        <div title="{{$rating > 0 ? $rating : 'No rating yet'}}" id="dataReadonlyReview"
                                             data-rating-stars="5"
                                             data-rating-readonly="true"
                                             data-rating-half="true"
                                             data-rating-value="{{$rating}}"
                                             data-rating-input="#dataReadonlyInput">
                                        </div>
                                    </div>
                                </div>

                                <form id="cartForm_{{$product->id}}_details" action="{{route('product.add_to_cart')}}"
                                      method="post">
                                    @csrf
                                    <input id="dummy_product_size_value" type="hidden" value="" name="size">
                                    <input type="hidden" value="details" name="form" readonly>
                                    <input type="hidden" name="product_id" value="{{$product->id}}">
                                    <input type="hidden" name="product_price" value="{{$product->new_price}}">
                                    <div class="product-quantity mt-15">
                                        <label>Quatity:</label>
                                        <input type="number" value="1" name="quantity"/>
                                    </div>
                                    <div class="add-to-get mt-50">
                                        <button type="submit" class="btn btn-success add-to-cart">Add to Cart</button>
                                    </div>
                                </form>

                            </div>

                            <div class="delivery-time pt-3">
                                <p><i class="ti-time"></i>&nbsp; It's past time for <strong>Next delivery
                                        time</strong> {{$product->deliveryTime->name}}. Order
                                    by {{now()->format('h:i a')}} on {{now()->format('D, M d')}} for delivery
                                    <strong>{{now()->addDay($product->deliveryTime->day)->format('D, M d')}}</strong>
                                </p>
                            </div>
                            @if($company)
                                <div class="delivery-time">
                                    <p><i class="ti-location-arrow"></i>&nbsp; Sold and shipped
                                        by <strong><u>{{$company->company_name}}</u></strong></strong>
                                    </p>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>


                <div class="col-lg-12">
                    <div class="product-description">
                        {!!html_entity_decode($product->description)!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('user.partials.widget.product_reviews')

<script>
    $('.dummy_select_size').click(function () {
        var val = $(this).attr('id');

        $('#dummy_product_size_value').val(val);
    });

</script>
