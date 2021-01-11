<?php $itemCount = 1; ?>
@foreach($categoryProducts as $product)
    @php
        $rating = \App\Models\Products::rating($product->id);
        $ratingCount = \App\Models\Products::ratingCount($product->id)
    @endphp
    <div class="col-xl-3 col-md-4 col-sm-6">
        <div class="flip-box">
            <div class="flip-box-inner">
                <div class="flip-box-front">
                    <div class="product-front-box">
                        <h4 class="product-title-name">
                            <a title="{{$product->title}}"
                               href="{{route('product.details', ["category" => $productCategory->slug ,"slug" => $product->slug])}}">{{$product->title}}</a>
                        </h4>
                        <a href="{{route('product.details', ["category" => $productCategory->slug ,"slug" => $product->slug])}}"><img
                                class="product-item-listed-image" src="{{asset($product->featured_image)}}"
                                alt="{{$product->title}}" title="{{$product->title}}"/></a>

                        <div class="product-price-box">
                            <div class="product-price-rating">
                                <span>$ {{$product->new_price}}</span>
                            </div>
                            <div class="rating-box pull-right d-flex">
                                <div title="{{$rating > 0 ? $rating : 'No rating yet'}}" id="dataReadonlyReview"
                                     data-rating-stars="5"
                                     data-rating-readonly="true"
                                     data-rating-half="true"
                                     data-rating-value="{{$rating}}"
                                     data-rating-input="#dataReadonlyInput">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flip-box-back">
                    <div class="product-view-link">
                        <a href="{{route('product.details', ["category" => $productCategory->slug ,"slug" => $product->slug])}}">View
                            Product</a>
                    </div>
                    <div class="product-action-form">
                        <form class="d-inline" id="cartForm_{{$product->id}}_list" action="{{route('product.add_to_cart')}}" method="post">
                            @csrf
                            <input type="hidden" name="product_id" value="{{$product->id}}">
                            <input type="hidden" name="product_price" value="{{$product->new_price}}">
                            <input type="hidden" value="1" name="quantity"/>
                            <button type="submit" frm="#cartForm_{{$product->id}}_list"
                                    class="btn btn-success add-to-cart dummy_cart_btn"
                                    url="{{route('product.add_to_cart')}}"
                                    id="cart_btn_{{$product->id}}_list">Add to Cart</button>
                        </form>

                        <form class="d-inline" action="javascript:void(0)" method="post">
                            @csrf
                            <a id="{{$product->id}}" href="javascript:void(0)" class="product-wishlist product-id"><i class="ti-heart"></i></a>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $itemCount += 1; ?>
@endforeach
