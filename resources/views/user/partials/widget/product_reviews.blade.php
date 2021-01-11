<div class="row show m-2">
    @if(count($productReviews) > 0)
    <div class="col-md-7  product-comments mt-0">
        <div class="rating-list">
            <ul class="list-none">
                @foreach($productReviews as $productReview)

                    <li class="row">
                        <div class="col-md-4">
                          <div class="d-flex flex-column align-items-lg-start">
                              <div class="d-flex rating-info-box">
                                  <div class="rating-info">

                                      @if(Auth::id() && Auth()->user()->userProfile->avatar != null)
                                          <img class="rounded-circle"  src="{{asset(Auth()->user()->userProfile->avatar)}}" alt="">
                                      @else
                                          <img class="rounded-circle" src="{{asset('user/assets/images/avatar.png')}}" alt="">
                                      @endif
                                  </div>
                                  <div class="ml-2">
                                      <span>{{$productReview->name}}</span><br>
                                      <div  id="dataReadonlyReview"
                                            data-rating-stars="5"
                                            data-rating-readonly="true"
                                            data-rating-half="true"
                                            data-rating-value="{{$productReview->rating}}"
                                            data-rating-input="#dataReadonlyInput">
                                      </div>

                                      <div>{{$productReview->created_at->format('d M Y')}}</div>
                                  </div>
                              </div>

                          </div>
                        </div>
                        <div class="comment-desc col-md-7 ">

                            <p>{{$productReview->comment}} </p>
                        </div>
                    </li>

                @endforeach
            </ul>
        </div>
    </div>
    @endif
    <div class="col-md-4 blog-comment-form product-comment-form ">
        <div class="">
            <h4 class="text-uppercase">Place your review</h4>
            <form action="{{route('product-reviews.store',$product->id)}}" method="post">
                <div class="row mt-10">
                    @csrf
                    <div class="col-sm-12 mb-3">
                        <div class="product-rating style-2 mb-0" id="halfstarsReview">
                            <input type="hidden" name="rating" value="" id="ratingValue">
                            <span>Your Rating:</span>
                        </div>
                        @error('rating')
                        <span class="text-danger text-sm-center">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="col-sm-12">
                        <textarea placeholder="Messages" name="comment"></textarea>

                        @error('comment')
                        <span class="text-danger text-sm-center">{{$message}}</span>
                        @enderror
                    </div>
                    @auth()
                        <div class="col-sm-12">
                            <button class="btn-common mt-25">Submit</button>
                        </div>
                    @else
                        <div class="col-sm-12">
                            <p class="text-success mt-25">Please sign in and review this product</p>
                        </div>
                    @endauth
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $("#halfstarsReview").rating({
        "half": true,
        "click": function (e) {
            $('#ratingValue').val(e.stars)
        },


    });

</script>
