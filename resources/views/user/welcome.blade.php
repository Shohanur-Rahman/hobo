@extends('user.layouts.user')
@section('title', "Home")
@section('content')

<!--slider-area start-->
	<div class="slider-area mt-20">
		<div class="container">
			<div class="row">
				<div class="col-lg-9">
					<div class="main-slider">
						<div class="slider-single bg-3">
							<div class="d-table">
								<div class="slider-caption">
									<h4>clothing</h4>
									<h2 class="cssanimation leDoorCloseLeft sequence">Men Collections</h2>
									<p>The 10 Best Man Collection 2018</p>
									<div class="slider-product-price">
										<del>$120.00</del> 
										<span>$295.00</span>
									</div>
									<a href="#" class="btn-common mt-43">buy now</a>
								</div>
							</div>
						</div>
						<div class="slider-single bg-4">
							<div class="d-table">
								<div class="slider-caption">
									<h4>clothing</h4>
									<h2 class="cssanimation leDoorCloseLeft sequence">Gadgets</h2>
									<p>The 10 Best Man Collection 2018</p>
									<div class="slider-product-price">
										<del>$120.00</del> 
										<span>$295.00</span>
									</div>
									<a href="#" class="btn-common mt-43">buy now</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 pl-05">
					<div class="banner-sm style-2 hover-effect">
						<img src="{{asset('user/assets/images/banners/small/5.jpg')}}" alt="" />
						<div class="banner-info">
							<div class="product-value">
								<span>$295.00</span>
								<del>$120.00</del> 
							</div>
							<p>Sale Up To <br/> <strong>25% Off</strong> <br/> iphone7s</p>
						</div>
					</div>
					<div class="banner-sm style-2 hover-effect mt-20">
						<img src="{{asset('user/assets/images/banners/small/6.jpg')}}" alt="" />
						<div class="banner-info">
							<div class="product-value">
								<span>$295.00</span>
								<del>$120.00</del> 
							</div>
							<p>Sale Up To <br/> <strong>25% Off</strong> <br/> iphone7s</p>
						</div>
					</div>
					<div class="banner-sm style-2 hover-effect mt-20">
						<img src="{{asset('user/assets/images/banners/small/7.jpg')}}" alt="" />
						<div class="banner-info">
							<div class="product-value">
								<span>$125.00</span>
								<del>$229.99</del> 
							</div>
							<p>Samsung <br/> <strong>Gear 360</strong> <br/> Camera</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--slider-area end-->
	
	<!--store-supports-area start-->
	<div class="store-supports-area">
		<div class="container br-bottom">
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="store-support style-3">
						<div class="support-icon">
							<img src="{{asset('user/assets/images/icons/bank-loan2.jpg')}}" alt="" />
						</div>
						<div class="support-text">
							<strong>Free Delivery</strong>
							<p>For all order over 99$</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="store-support style-3">
						<div class="support-icon">
							<img src="{{asset('user/assets/images/icons/bank-liquidity2.jpg')}}" alt="" />
						</div>
						<div class="support-text">
							<strong>30 Days Return</strong>
							<p>If goods have Problem</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="store-support style-3">
						<div class="support-icon">
							<img src="{{asset('user/assets/images/icons/bank-credit-card2.jpg')}}" alt="" />
						</div>
						<div class="support-text">
							<strong>Secure Payment</strong>
							<p>100% secure payment</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="store-support style-3">
						<div class="support-icon">
							<img src="{{asset('user/assets/images/icons/bank-support2.jpg')}}" alt="" />
						</div>
						<div class="support-text">
							<strong>24/7 Support</strong>
							<p>Dedicated support</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--store-supports-area end-->
	
	<!--top-categories-area start-->
	<div class="top-categories-area mt-35">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="product-categories">
						<div class="row">
							<div class="col-lg-12">
								<div class="section-title">
									<h3>Top Categories</h3>
								</div>
							</div>
						</div>
						<div class="row five-catItems mt-30">
							<div class="col-lg-3">
								<div class="single-product-cat">
									<a href="#"><img src="{{asset('user/assets/images/products/category/8.png')}}" alt="" /></a>
									<h4><a href="#">Smartphones</a></h4>
								</div>
							</div>
							<div class="col-lg-3">
								<div class="single-product-cat">
									<a href="#"><img src="{{asset('user/assets/images/products/category/4.png')}}" alt="" /></a>
									<h4><a href="#">Headphones</a></h4>
								</div>
							</div>
							<div class="col-lg-3">
								<div class="single-product-cat">
									<a href="#"><img src="{{asset('user/assets/images/products/category/9.png')}}" alt="" /></a>
									<h4><a href="#">Laptops</a></h4>
								</div>
							</div>
							<div class="col-lg-3">
								<div class="single-product-cat">
									<a href="#"><img src="{{asset('user/assets/images/products/category/2.png')}}" alt="" /></a>
									<h4><a href="#">Headphones</a></h4>
								</div>
							</div>
							<div class="col-lg-3">
								<div class="single-product-cat">
									<a href="#"><img src="{{asset('user/assets/images/products/category/10.png')}}" alt="" /></a>
									<h4><a href="#">Mouse</a></h4>
								</div>
							</div>
							<div class="col-lg-3">
								<div class="single-product-cat">
									<a href="#"><img src="{{asset('user/assets/images/products/category/4.png')}}" alt="" /></a>
									<h4><a href="#">Photography </a></h4>
								</div>
							</div>
							<div class="col-lg-3">
								<div class="single-product-cat">
									<a href="#"><img src="{{asset('user/assets/images/products/category/3.png')}}" alt="" /></a>
									<h4><a href="#">Tablets</a></h4>
								</div>
							</div>
							<div class="col-lg-3">
								<div class="single-product-cat">
									<a href="#"><img src="{{asset('
										user/assets/images/products/category/4.png')}}" alt="" /></a>
									<h4><a href="#">Camera </a></h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--top-categories-area end-->
	
	<!--products-area start-->
	<div class="products-area mt-40">
		<div class="container">
			<div class="row">
				<div class="col-lg-9">
					<!--products-tab-->
					<div class="products-tab">
						<div class="product-nav-tabs">
							<ul class="nav nav-tabs">
								<li><a class="active" data-toggle="tab" href="#new-arrivals">New Arrivals</a></li>
								<li><a data-toggle="tab" href="#on-sale">On Sale</a></li>
								<li><a data-toggle="tab" href="#best-rated">Best Rated</a></li>
							</ul>
						</div>
						<div class="tab-content pb-90">
							<div id="new-arrivals" class="tab-pane fade in show active">
								<div class="row products-three cv-visible">
									<div class="col-lg-3">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Camera</a></small>
												<h4><a href="#">Blue Yeti USB Microphone Blackout Edition</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="{{asset('user/assets/images/products/shop/3.jpg')}}" alt="" /></a>
												<div class="downsale"><span>-</span>$35</div>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<span>$195.00</span>
												<del>$229.99</del>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Camera</a></small>
												<h4><a href="#">Blue Yeti USB Microphone Blackout Edition</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="{{asset('user/assets/images/products/shop/2.jpg')}}" alt="" /></a>
												<div class="downsale"><span>-</span>$35</div>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<span>$195.00</span>
												<del>$229.99</del>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-3">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Iphone</a></small>
												<h4><a href="#">Samsung CF591 Series Curved 27-Inch FHD Monitor</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="{{asset('user/assets/images/products/shop/2.jpg')}}" alt="" /></a>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<div class="pull-left">
													<span>$395.00</span>
												</div>
												<div class="pull-right">
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
												</div>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Iphone</a></small>
												<h4><a href="#">Samsung CF591 Series Curved 27-Inch FHD Monitor</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="{{asset('user/assets/images/products/4.jpg')}}" alt="" /></a>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<div class="pull-left">
													<span>$395.00</span>
												</div>
												<div class="pull-right">
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
												</div>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-3">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Electronics</a></small>
												<h4><a href="#">iPATROL Riley V2 Bonus Bundle - WiFi</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="{{asset('user/assets/images/products/shop/5.jpg')}}" alt="" /></a>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<div class="pull-left">
													<span>$195.00</span>
												</div>
												<div class="pull-right">
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
												</div>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Electronics</a></small>
												<h4><a href="#">iPATROL Riley V2 Bonus Bundle - WiFi</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="{{asset('user/assets/images/products/shop/6.jpg')}}" alt="" /></a>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<div class="pull-left">
													<span>$195.00</span>
												</div>
												<div class="pull-right">
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
												</div>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-3">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Iphone</a></small>
												<h4><a href="#">Samsung CF591 Series Curved 27-Inch FHD Monitor</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="{{asset('user/assets/images/products/shop/7.jpg')}}" alt="" /></a>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<div class="pull-left">
													<span>$395.00</span>
												</div>
												<div class="pull-right">
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
												</div>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Iphone</a></small>
												<h4><a href="#">Samsung CF591 Series Curved 27-Inch FHD Monitor</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="{{asset('user/assets/images/products/shop/8.jpg')}}" alt="" /></a>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<div class="pull-left">
													<span>$395.00</span>
												</div>
												<div class="pull-right">
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
												</div>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-3">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Camera</a></small>
												<h4><a href="#">Blue Yeti USB Microphone Blackout Edition</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="{{asset('user/assets/images/products/8.jpg')}}" alt="" /></a>
												<div class="downsale"><span>-</span>$35</div>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<span>$195.00</span>
												<del>$229.99</del>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Camera</a></small>
												<h4><a href="#">Blue Yeti USB Microphone Blackout Edition</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="{{asset('user/assets/images/products/1.jpg')}}" alt="" /></a>
												<div class="downsale"><span>-</span>$35</div>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<span>$195.00</span>
												<del>$229.99</del>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-3">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Iphone</a></small>
												<h4><a href="#">Samsung CF591 Series Curved 27-Inch FHD Monitor</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="{{asset('user/assets/images/products/2.jpg')}}" alt="" /></a>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<div class="pull-left">
													<span>$395.00</span>
												</div>
												<div class="pull-right">
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
												</div>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Iphone</a></small>
												<h4><a href="#">Samsung CF591 Series Curved 27-Inch FHD Monitor</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="{{asset('user/assets/images/products/2.jpg')}}" alt="" /></a>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<div class="pull-left">
													<span>$395.00</span>
												</div>
												<div class="pull-right">
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
												</div>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-3">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Electronics</a></small>
												<h4><a href="#">iPATROL Riley V2 Bonus Bundle - WiFi</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="{{asset('user/assets/images/products/3.jpg')}}" alt="" /></a>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<div class="pull-left">
													<span>$195.00</span>
												</div>
												<div class="pull-right">
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
												</div>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Electronics</a></small>
												<h4><a href="#">iPATROL Riley V2 Bonus Bundle - WiFi</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="{{asset('user/assets/images/products/3.jpg')}}" alt="" /></a>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<div class="pull-left">
													<span>$195.00</span>
												</div>
												<div class="pull-right">
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
												</div>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-3">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Iphone</a></small>
												<h4><a href="#">Samsung CF591 Series Curved 27-Inch FHD Monitor</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="{{asset('user/assets/images/products/2.jpg')}}" alt="" /></a>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<div class="pull-left">
													<span>$395.00</span>
												</div>
												<div class="pull-right">
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
												</div>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Iphone</a></small>
												<h4><a href="#">Samsung CF591 Series Curved 27-Inch FHD Monitor</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="{{asset('user/assets/images/products/2.jpg')}}" alt="" /></a>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<div class="pull-left">
													<span>$395.00</span>
												</div>
												<div class="pull-right">
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
												</div>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div id="on-sale" class="tab-pane fade">
								<div class="row products-three cv-visible">
									<div class="col-lg-4">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Camera</a></small>
												<h4><a href="#">Blue Yeti USB Microphone Blackout Edition</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="{{asset('user/assets/images/products/shop/1.jpg')}}" alt="" /></a>
												<div class="downsale"><span>-</span>$35</div>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<span>$195.00</span>
												<del>$229.99</del>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Camera</a></small>
												<h4><a href="#">Blue Yeti USB Microphone Blackout Edition</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="{{asset('user/assets/images/products/shop/2.jpg')}}" alt="" /></a>
												<div class="downsale"><span>-</span>$35</div>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<span>$195.00</span>
												<del>$229.99</del>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-4">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Iphone</a></small>
												<h4><a href="#">Samsung CF591 Series Curved 27-Inch FHD Monitor</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="{{asset('assets/images/products/shop/3.jpg')}}" alt="" /></a>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<div class="pull-left">
													<span>$395.00</span>
												</div>
												<div class="pull-right">
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
												</div>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Iphone</a></small>
												<h4><a href="#">Samsung CF591 Series Curved 27-Inch FHD Monitor</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="{{asset('user/assets/images/products/shop/4.jpg')}}" alt="" /></a>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<div class="pull-left">
													<span>$395.00</span>
												</div>
												<div class="pull-right">
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
												</div>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-4">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Electronics</a></small>
												<h4><a href="#">iPATROL Riley V2 Bonus Bundle - WiFi</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="{{asset('user/assets/images/products/5.jpg')}}" alt="" /></a>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<div class="pull-left">
													<span>$195.00</span>
												</div>
												<div class="pull-right">
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
												</div>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Electronics</a></small>
												<h4><a href="#">iPATROL Riley V2 Bonus Bundle - WiFi</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="{{asset('user/assets/images/products/6.jpg')}}" alt="" /></a>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<div class="pull-left">
													<span>$195.00</span>
												</div>
												<div class="pull-right">
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
												</div>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-4">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Camera</a></small>
												<h4><a href="#">Blue Yeti USB Microphone Blackout Edition</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="{{asset('user/assets/images/products/shop/1.jpg')}}" alt="" /></a>
												<div class="downsale"><span>-</span>$35</div>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<span>$195.00</span>
												<del>$229.99</del>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Camera</a></small>
												<h4><a href="#">Blue Yeti USB Microphone Blackout Edition</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="{{asset('user/assets/images/products/shop/2.jpg')}}" alt="" /></a>
												<div class="downsale"><span>-</span>$35</div>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<span>$195.00</span>
												<del>$229.99</del>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-4">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Iphone</a></small>
												<h4><a href="#">Samsung CF591 Series Curved 27-Inch FHD Monitor</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="{{asset('user/assets/images/products/shop/3.jpg')}}" alt="" /></a>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<div class="pull-left">
													<span>$395.00</span>
												</div>
												<div class="pull-right">
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
												</div>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Iphone</a></small>
												<h4><a href="#">Samsung CF591 Series Curved 27-Inch FHD Monitor</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="{{asset('user/assets/images/products/shop/4.jpg')}}" alt="" /></a>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<div class="pull-left">
													<span>$395.00</span>
												</div>
												<div class="pull-right">
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
												</div>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-4">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Electronics</a></small>
												<h4><a href="#">iPATROL Riley V2 Bonus Bundle - WiFi</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="{{asset('user/assets/images/products/5.jpg')}}" alt="" /></a>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<div class="pull-left">
													<span>$195.00</span>
												</div>
												<div class="pull-right">
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
												</div>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Electronics</a></small>
												<h4><a href="#">iPATROL Riley V2 Bonus Bundle - WiFi</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="{{asset('user/assets/images/products/6.jpg')}}" alt="" /></a>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<div class="pull-left">
													<span>$195.00</span>
												</div>
												<div class="pull-right">
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
												</div>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div id="best-rated" class="tab-pane">
								<div class="row products-three cv-visible">
									<div class="col-lg-4">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Camera</a></small>
												<h4><a href="#">Blue Yeti USB Microphone Blackout Edition</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="{{asset('user/assets/images/products/shop/5.jpg')}}" alt="" /></a>
												<div class="downsale"><span>-</span>$35</div>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<span>$195.00</span>
												<del>$229.99</del>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Camera</a></small>
												<h4><a href="#">Blue Yeti USB Microphone Blackout Edition</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="{{asset('user/assets/images/products/shop/6.jpg')}}" alt="" /></a>
												<div class="downsale"><span>-</span>$35</div>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<span>$195.00</span>
												<del>$229.99</del>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-4">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Iphone</a></small>
												<h4><a href="#">Samsung CF591 Series Curved 27-Inch FHD Monitor</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="{{asset('user/assets/images/products/shop/7.jpg')}}" alt="" /></a>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<div class="pull-left">
													<span>$395.00</span>
												</div>
												<div class="pull-right">
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
												</div>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Iphone</a></small>
												<h4><a href="#">Samsung CF591 Series Curved 27-Inch FHD Monitor</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="{{asset('user/assets/images/products/shop/8.jpg')}}" alt="" /></a>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<div class="pull-left">
													<span>$395.00</span>
												</div>
												<div class="pull-right">
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
												</div>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-4">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Electronics</a></small>
												<h4><a href="#">iPATROL Riley V2 Bonus Bundle - WiFi</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="{{asset('user/assets/images/products/5.jpg')}}" alt="" /></a>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<div class="pull-left">
													<span>$195.00</span>
												</div>
												<div class="pull-right">
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
												</div>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Electronics</a></small>
												<h4><a href="#">iPATROL Riley V2 Bonus Bundle - WiFi</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="{{asset('user/assets/images/products/6.jpg')}}" alt="" /></a>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<div class="pull-left">
													<span>$195.00</span>
												</div>
												<div class="pull-right">
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
												</div>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-4">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Camera</a></small>
												<h4><a href="#">Blue Yeti USB Microphone Blackout Edition</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="{{asset('user/assets/images/products/shop/5.jpg')}}" alt="" /></a>
												<div class="downsale"><span>-</span>$35</div>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<span>$195.00</span>
												<del>$229.99</del>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Camera</a></small>
												<h4><a href="#">Blue Yeti USB Microphone Blackout Edition</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="{{asset('user/assets/images/products/shop/6.jpg')}}" alt="" /></a>
												<div class="downsale"><span>-</span>$35</div>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<span>$195.00</span>
												<del>$229.99</del>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-4">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Iphone</a></small>
												<h4><a href="#">Samsung CF591 Series Curved 27-Inch FHD Monitor</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="{{asset('user/assets/images/products/shop/7.jpg')}}" alt="" /></a>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<div class="pull-left">
													<span>$395.00</span>
												</div>
												<div class="pull-right">
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
												</div>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Iphone</a></small>
												<h4><a href="#">Samsung CF591 Series Curved 27-Inch FHD Monitor</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="{{asset('user/assets/images/products/shop/8.jpg')}}" alt="" /></a>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<div class="pull-left">
													<span>$395.00</span>
												</div>
												<div class="pull-right">
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
												</div>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-4">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Electronics</a></small>
												<h4><a href="#">iPATROL Riley V2 Bonus Bundle - WiFi</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="{{asset('user/assets/images/products/5.jpg')}}" alt="" /></a>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<div class="pull-left">
													<span>$195.00</span>
												</div>
												<div class="pull-right">
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
												</div>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Electronics</a></small>
												<h4><a href="#">iPATROL Riley V2 Bonus Bundle - WiFi</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="{{asset('user/assets/images/products/6.jpg')}}" alt="" /></a>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<div class="pull-left">
													<span>$195.00</span>
												</div>
												<div class="pull-right">
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
												</div>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 mt-sm-minus-100">
					<div class="sidebar">
						<!--product-deal-->
						<div class="sidebar-single">
							<div class="section-title">
								<h3>Deal off the week</h3>
							</div>
							<div class="row product-deals">
								<!--single-deal-->
								<div class="col-lg-12">
									<div class="product-single product-deal">
										<div class="product-title">
											<small><a href="#">Camera</a></small>
											<h4><a href="#">Blue Yeti USB Microphone Blackout Edition</a></h4>
										</div>
										<div class="product-thumb">
											<a href="#"><img src="{{asset('user/assets/images/products/deals/1.jpg')}}" alt="" /></a>
											<div class="downsale"><span>-</span>$25</div>
											<div class="product-quick-view">
												<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
											</div>
										</div>
										<div class="product-price-rating">
											<div class="pull-left">
												<span>$195.00</span>
											</div>
											<div class="pull-right">
												<i class="fa fa-star-o"></i>
												<i class="fa fa-star-o"></i>
												<i class="fa fa-star-o"></i>
												<i class="fa fa-star-o"></i>
												<i class="fa fa-star-o"></i>
											</div>
										</div>
										<div class="product-availability">
											<div class="progress">
											  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%;">
											  </div>
											</div>
											<span>Already Sold: <span>20</span></span>
											<span>Available: <span>35</span></span>
										</div>
										<div class="product-countdown">
											<div data-countdown="2010/08/01"></div>
										</div>
									</div>
								</div>
								<!--single-deal-->
								<div class="col-lg-12">
									<div class="product-single product-deal">
										<div class="product-title">
											<small><a href="#">Camera</a></small>
											<h4><a href="#">Blue Yeti USB Microphone Blackout Edition</a></h4>
										</div>
										<div class="product-thumb">
											<a href="#"><img src="{{asset('user/assets/images/products/1.jpg')}}" alt="" /></a>
											<div class="downsale"><span>-</span>$35</div>
											<div class="product-quick-view">
												<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
											</div>
										</div>
										<div class="product-price-rating">
											<div class="pull-left">
												<span>$195.00</span>
											</div>
											<div class="pull-right">
												<i class="fa fa-star-o"></i>
												<i class="fa fa-star-o"></i>
												<i class="fa fa-star-o"></i>
												<i class="fa fa-star-o"></i>
												<i class="fa fa-star-o"></i>
											</div>
										</div>
										<div class="product-availability">
											<div class="progress">
											  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%;">
											  </div>
											</div>
											<span>Already Sold: <span>20</span></span>
											<span>Available: <span>35</span></span>
										</div>
										<div class="product-countdown">
											<div data-countdown="2010/08/01"></div>
										</div>
									</div>
								</div>
								<!--single-deal-->
								<div class="col-lg-12">
									<div class="product-single product-deal">
										<div class="product-title">
											<small><a href="#">Camera</a></small>
											<h4><a href="#">Blue Yeti USB Microphone Blackout Edition</a></h4>
										</div>
										<div class="product-thumb">
											<a href="#"><img src="{{asset('user/assets/images/products/3.jpg')}}" alt="" /></a>
											<div class="downsale"><span>-</span>$25</div>
											<div class="product-quick-view">
												<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
											</div>
										</div>
										<div class="product-price-rating">
											<div class="pull-left">
												<span>$195.00</span>
											</div>
											<div class="pull-right">
												<i class="fa fa-star-o"></i>
												<i class="fa fa-star-o"></i>
												<i class="fa fa-star-o"></i>
												<i class="fa fa-star-o"></i>
												<i class="fa fa-star-o"></i>
											</div>
										</div>
										<div class="product-availability">
											<div class="progress">
											  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%;">
											  </div>
											</div>
											<span>Already Sold: <span>20</span></span>
											<span>Available: <span>35</span></span>
										</div>
										<div class="product-countdown">
											<div data-countdown="2010/08/01"></div>
										</div>
									</div>
								</div>
								<!--single-deal-->
								<div class="col-lg-12">
									<div class="product-single product-deal">
										<div class="product-title">
											<small><a href="#">Camera</a></small>
											<h4><a href="#">Blue Yeti USB Microphone Blackout Edition</a></h4>
										</div>
										<div class="product-thumb">
											<a href="#"><img src="{{asset('user/assets/images/products/4.jpg')}}" alt="" /></a>
											<div class="downsale"><span>-</span>$35</div>
											<div class="product-quick-view">
												<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
											</div>
										</div>
										<div class="product-price-rating">
											<div class="pull-left">
												<span>$195.00</span>
											</div>
											<div class="pull-right">
												<i class="fa fa-star-o"></i>
												<i class="fa fa-star-o"></i>
												<i class="fa fa-star-o"></i>
												<i class="fa fa-star-o"></i>
												<i class="fa fa-star-o"></i>
											</div>
										</div>
										<div class="product-availability">
											<div class="progress">
											  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%;">
											  </div>
											</div>
											<span>Already Sold: <span>20</span></span>
											<span>Available: <span>35</span></span>
										</div>
										<div class="product-countdown">
											<div data-countdown="2010/08/01"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--product-ad-->
						<div class="sidebar-single mt-30">
							<a href="#"><img src="{{asset('user/assets/images/ad/2.jpg')}}" alt="" /></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--products-area end-->
	
	<!--products-tab start-->
	<div class="products-tab-area mt-minus-90">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 pr-0">
					<div class="section-title">
						<h3>Best Seller</h3>
					</div>
				</div>
				<div class="col-lg-8 pl-0">
					<div class="product-nav-tabs style-3">
						<ul class="nav nav-tabs text-right">
							<li><a class="active" data-toggle="tab" href="#all-accessories">All Accessories</a></li>
							<li><a data-toggle="tab" href="#phone-tablet">Phone & Tablet</a></li>
							<li><a data-toggle="tab" href="#video-cemra">Video Cameras</a></li>
							<li><a data-toggle="tab" href="#laptop-computers">Laptops & Computers </a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="tab-content fix">
				<div id="all-accessories" class="tab-pane active">
					<div class="row product-carousel-fullwidth cv-visible">
						<div class="col-lg-3">
							<div class="product-single">
								<div class="product-title">
									<small><a href="#">Camera</a></small>
									<h4><a href="#">Blue Yeti USB Microphone </a></h4>
								</div>
								<div class="product-thumb">
									<a href="#"><img src="{{asset('user/assets/images/products/14.jpg')}}" alt="" /></a>
									<div class="downsale"><span>-</span>$35</div>
									<div class="product-quick-view">
										<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
									</div>
								</div>
								<div class="product-price-rating">
									<span>$195.00</span>
									<del>$229.99</del>
								</div>
								<div class="product-action">
									<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
									<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
									<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
								</div>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="product-single">
								<div class="product-title">
									<small><a href="#">Iphone</a></small>
									<h4><a href="#">Samsung CF591 Series Curved</a></h4>
								</div>
								<div class="product-thumb">
									<a href="#"><img src="{{asset('user/assets/images/products/3.jpg')}}" alt="" /></a>
									<div class="product-quick-view">
										<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
									</div>
								</div>
								<div class="product-price-rating">
									<div class="pull-left">
										<span>$395.00</span>
									</div>
									<div class="pull-right">
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
									</div>
								</div>
								<div class="product-action">
									<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
									<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
									<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
								</div>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="product-single">
								<div class="product-title">
									<small><a href="#">Electronics</a></small>
									<h4><a href="#">iPATROL Riley V2 Bonus Bundle</a></h4>
								</div>
								<div class="product-thumb">
									<a href="#"><img src="{{asset('user/assets/images/products/shop/6.jpg')}}" alt="" /></a>
									<div class="product-quick-view">
										<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
									</div>
								</div>
								<div class="product-price-rating">
									<div class="pull-left">
										<span>$195.00</span>
									</div>
									<div class="pull-right">
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
									</div>
								</div>
								<div class="product-action">
									<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
									<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
									<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
								</div>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="product-single">
								<div class="product-title">
									<small><a href="#">Macbook</a></small>
									<h4><a href="#">Swivl C Series RobotSW3322-C1 </a></h4>
								</div>
								<div class="product-thumb">
									<a href="#"><img src="{{asset('user/assets/images/products/shop/4.jpg')}}" alt="" /></a>
									<div class="product-quick-view">
										<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
									</div>
								</div>
								<div class="product-price-rating">
									<div class="pull-left">
										<span>$255.00</span>
										<del>329.99</del>
									</div>
								</div>
								<div class="product-action">
									<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
									<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
									<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
								</div>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="product-single">
								<div class="product-title">
									<small><a href="#">Camera</a></small>
									<h4><a href="#">Blue Yeti USB Microphone Blackout</a></h4>
								</div>
								<div class="product-thumb">
									<a href="#"><img src="{{asset('user/assets/images/products/shop/1.jpg')}}" alt="" /></a>
									<div class="downsale"><span>-</span>$35</div>
									<div class="product-quick-view">
										<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
									</div>
								</div>
								<div class="product-price-rating">
									<span>$195.00</span>
									<del>$229.99</del>
								</div>
								<div class="product-action">
									<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
									<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
									<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
								</div>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="product-single">
								<div class="product-title">
									<small><a href="#">Iphone</a></small>
									<h4><a href="#">Samsung CF591 Series Curved</a></h4>
								</div>
								<div class="product-thumb">
									<a href="#"><img src="{{asset('user/assets/images/products/shop/2.jpg')}}" alt="" /></a>
									<div class="product-quick-view">
										<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
									</div>
								</div>
								<div class="product-price-rating">
									<div class="pull-left">
										<span>$395.00</span>
									</div>
									<div class="pull-right">
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
									</div>
								</div>
								<div class="product-action">
									<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
									<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
									<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
								</div>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="product-single">
								<div class="product-title">
									<small><a href="#">Electronics</a></small>
									<h4><a href="#">iPATROL Riley V2 Bonus Bundle - WiFi</a></h4>
								</div>
								<div class="product-thumb">
									<a href="#"><img src="{{asset('user/assets/images/products/shop/3.jpg')}}" alt="" /></a>
									<div class="product-quick-view">
										<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
									</div>
								</div>
								<div class="product-price-rating">
									<div class="pull-left">
										<span>$195.00</span>
									</div>
									<div class="pull-right">
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
									</div>
								</div>
								<div class="product-action">
									<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
									<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
									<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
								</div>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="product-single">
								<div class="product-title">
									<small><a href="#">Macbook</a></small>
									<h4><a href="#">Swivl C Series RobotSW3322-C1 </a></h4>
								</div>
								<div class="product-thumb">
									<a href="#"><img src="{{asset('user/assets/images/products/shop/4.jpg')}}" alt="" /></a>
									<div class="product-quick-view">
										<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
									</div>
								</div>
								<div class="product-price-rating">
									<div class="pull-left">
										<span>$255.00</span>
										<del>329.99</del>
									</div>
								</div>
								<div class="product-action">
									<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
									<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
									<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="phone-tablet" class="tab-pane fade">
					<div class="row">
						<div class="col-lg-3">
							<div class="product-single">
								<div class="product-title">
									<small><a href="#">Camera</a></small>
									<h4><a href="#">Blue Yeti USB Microphone Blackout</a></h4>
								</div>
								<div class="product-thumb">
									<a href="#"><img src="{{asset('user/assets/images/products/shop/1.jpg')}}" alt="" /></a>
									<div class="downsale"><span>-</span>$35</div>
									<div class="product-quick-view">
										<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
									</div>
								</div>
								<div class="product-price-rating">
									<span>$195.00</span>
									<del>$229.99</del>
								</div>
								<div class="product-action">
									<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
									<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
									<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
								</div>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="product-single">
								<div class="product-title">
									<small><a href="#">Iphone</a></small>
									<h4><a href="#">Samsung CF591 Series Curved 27-Inch FHD Monitor</a></h4>
								</div>
								<div class="product-thumb">
									<a href="#"><img src="{{asset('user/assets/images/products/3.jpg')}}" alt="" /></a>
									<div class="product-quick-view">
										<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
									</div>
								</div>
								<div class="product-price-rating">
									<div class="pull-left">
										<span>$395.00</span>
									</div>
									<div class="pull-right">
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
									</div>
								</div>
								<div class="product-action">
									<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
									<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
									<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
								</div>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="product-single">
								<div class="product-title">
									<small><a href="#">Electronics</a></small>
									<h4><a href="#">iPATROL Riley V2 Bonus Bundle - WiFi</a></h4>
								</div>
								<div class="product-thumb">
									<a href="#"><img src="{{asset('user/assets/images/products/shop/6.jpg')}}" alt="" /></a>
									<div class="product-quick-view">
										<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
									</div>
								</div>
								<div class="product-price-rating">
									<div class="pull-left">
										<span>$195.00</span>
									</div>
									<div class="pull-right">
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
									</div>
								</div>
								<div class="product-action">
									<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
									<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
									<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
								</div>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="product-single">
								<div class="product-title">
									<small><a href="#">Macbook</a></small>
									<h4><a href="#">Swivl C Series RobotSW3322-C1 </a></h4>
								</div>
								<div class="product-thumb">
									<a href="#"><img src="{{asset('user/assets/images/products/shop/4.jpg')}}" alt="" /></a>
									<div class="product-quick-view">
										<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
									</div>
								</div>
								<div class="product-price-rating">
									<div class="pull-left">
										<span>$255.00</span>
										<del>329.99</del>
									</div>
								</div>
								<div class="product-action">
									<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
									<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
									<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="video-cemra" class="tab-pane fade">
					<div class="row">
						<div class="col-lg-3">
							<div class="product-single">
								<div class="product-title">
									<small><a href="#">Camera</a></small>
									<h4><a href="#">Blue Yeti USB Microphone Blackout Edition</a></h4>
								</div>
								<div class="product-thumb">
									<a href="#"><img src="{{asset('user/assets/images/products/shop/4.jpg')}}" alt="" /></a>
									<div class="downsale"><span>-</span>$35</div>
									<div class="product-quick-view">
										<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
									</div>
								</div>
								<div class="product-price-rating">
									<span>$195.00</span>
									<del>$229.99</del>
								</div>
								<div class="product-action">
									<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
									<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
									<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
								</div>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="product-single">
								<div class="product-title">
									<small><a href="#">Iphone</a></small>
									<h4><a href="#">Samsung CF591 Series Curved 27-Inch FHD Monitor</a></h4>
								</div>
								<div class="product-thumb">
									<a href="#"><img src="{{asset('user/assets/images/products/8.jpg')}}" alt="" /></a>
									<div class="product-quick-view">
										<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
									</div>
								</div>
								<div class="product-price-rating">
									<div class="pull-left">
										<span>$395.00</span>
									</div>
									<div class="pull-right">
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
									</div>
								</div>
								<div class="product-action">
									<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
									<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
									<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
								</div>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="product-single">
								<div class="product-title">
									<small><a href="#">Electronics</a></small>
									<h4><a href="#">iPATROL Riley V2 Bonus Bundle - WiFi</a></h4>
								</div>
								<div class="product-thumb">
									<a href="#"><img src="{{asset('user/assets/images/products/shop/6.jpg')}}" alt="" /></a>
									<div class="product-quick-view">
										<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
									</div>
								</div>
								<div class="product-price-rating">
									<div class="pull-left">
										<span>$195.00</span>
									</div>
									<div class="pull-right">
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
									</div>
								</div>
								<div class="product-action">
									<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
									<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
									<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
								</div>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="product-single">
								<div class="product-title">
									<small><a href="#">Macbook</a></small>
									<h4><a href="#">Swivl C Series RobotSW3322-C1 </a></h4>
								</div>
								<div class="product-thumb">
									<a href="#"><img src="{{asset('user/assets/images/products/shop/7.jpg')}}" alt="" /></a>
									<div class="product-quick-view">
										<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
									</div>
								</div>
								<div class="product-price-rating">
									<div class="pull-left">
										<span>$255.00</span>
										<del>329.99</del>
									</div>
								</div>
								<div class="product-action">
									<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
									<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
									<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="laptop-computers" class="tab-pane fade">
					<div class="row">
						<div class="col-lg-3">
							<div class="product-single">
								<div class="product-title">
									<small><a href="#">Camera</a></small>
									<h4><a href="#">Blue Yeti USB Microphone Blackout Edition</a></h4>
								</div>
								<div class="product-thumb">
									<a href="#"><img src="{{asset('user/assets/images/products/shop/8.jpg')}}" alt="" /></a>
									<div class="downsale"><span>-</span>$35</div>
									<div class="product-quick-view">
										<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
									</div>
								</div>
								<div class="product-price-rating">
									<span>$195.00</span>
									<del>$229.99</del>
								</div>
								<div class="product-action">
									<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
									<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
									<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
								</div>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="product-single">
								<div class="product-title">
									<small><a href="#">Iphone</a></small>
									<h4><a href="#">Samsung CF591 Series Curved 27-Inch FHD Monitor</a></h4>
								</div>
								<div class="product-thumb">
									<a href="#"><img src="{{asset('user/assets/images/products/9.jpg')}}" alt="" /></a>
									<div class="product-quick-view">
										<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
									</div>
								</div>
								<div class="product-price-rating">
									<div class="pull-left">
										<span>$395.00</span>
									</div>
									<div class="pull-right">
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
									</div>
								</div>
								<div class="product-action">
									<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
									<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
									<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
								</div>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="product-single">
								<div class="product-title">
									<small><a href="#">Electronics</a></small>
									<h4><a href="#">iPATROL Riley V2 Bonus Bundle - WiFi</a></h4>
								</div>
								<div class="product-thumb">
									<a href="#"><img src="{{asset('user/assets/images/products/shop/10.jpg')}}" alt="" /></a>
									<div class="product-quick-view">
										<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
									</div>
								</div>
								<div class="product-price-rating">
									<div class="pull-left">
										<span>$195.00</span>
									</div>
									<div class="pull-right">
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
									</div>
								</div>
								<div class="product-action">
									<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
									<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
									<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
								</div>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="product-single">
								<div class="product-title">
									<small><a href="#">Macbook</a></small>
									<h4><a href="#">Swivl C Series RobotSW3322-C1 </a></h4>
								</div>
								<div class="product-thumb">
									<a href="#"><img src="{{asset('user/assets/images/products/shop/11.jpg')}}" alt="" /></a>
									<div class="product-quick-view">
										<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
									</div>
								</div>
								<div class="product-price-rating">
									<div class="pull-left">
										<span>$255.00</span>
										<del>329.99</del>
									</div>
								</div>
								<div class="product-action">
									<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
									<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
									<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--products-tab end-->
	
	<!--banner-area-start-->
	<div class="banner-area mt-10">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="banner-md hover-effect">
						<img src="{{asset('user/assets/images/banners/md/4.jpg')}}" alt="" />
						<div class="banner-info">
							<div class="product-value">
								<span>$645.00</span>
								<del>$759.99</del> 
							</div>
							<p>Sale Up To <br/> <strong>25% Off</strong> iphone7s</p>
							<a href="#" class="btn-common width-115">buy now</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="banner-md hover-effect mt-sm-20">
						<img src="{{asset('user/assets/images/banners/md/5.jpg')}}" alt="" />
						<div class="banner-info">
							<div class="product-value">
								<span>$645.00</span>
								<del>$759.99</del> 
							</div>
							<p>Extra <strong>30% Off</strong> <br/> All Sale Style</p>
							<a href="#" class="btn-common width-115">buy now</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--banner-area-end-->
	
	<!--recently-viewed-products-start-->
	<div class="recent-viewed-products mt-40">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="row">
						<div class="col-lg-12">
							<div class="section-title">
								<h3>Recently Viewed Products</h3>
							</div>
						</div>
					</div>
					<div class="row recent-products mlr-minus-12">
						<div class="col-lg-4">
							<!--single-product-->
							<div class="product-single style-2">
								<div class="row align-items-center">
									<div class="col-lg-6 p-0">
										<div class="product-thumb">
											<a href="#"><img src="{{asset('user/assets/images/products/2.jpg')}}" alt="" /></a>
										</div>
									</div>
									<div class="col-lg-6 p-0">
										<div class="product-title">
											<small><a href="#">Electronics</a></small>
											<h4><a href="#">Vantech VP-153C Camera</a></h4>
										</div>
										<div class="product-price-rating">
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
										</div>
										<div class="product-price-rating">
											<span>$195.00</span>
											<del>$229.99</del>
										</div>
									</div>
								</div>
							</div>
							<!--single-product-->
							<div class="product-single style-2">
								<div class="row align-items-center">
									<div class="col-lg-6 p-0">
										<div class="product-thumb">
											<a href="#"><img src="{{asset('user/assets/images/products/4.jpg')}}" alt="" /></a>
										</div>
									</div>
									<div class="col-lg-6 p-0">
										<div class="product-title">
											<small><a href="#">Electronics</a></small>
											<h4><a href="#">Vantech VP-153C Camera</a></h4>
										</div>
										<div class="product-price-rating">
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
										</div>
										<div class="product-price-rating">
											<span>$195.00</span>
											<del>$229.99</del>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<!--single-product-->
							<div class="product-single style-2">
								<div class="row align-items-center">
									<div class="col-lg-6 p-0">
										<div class="product-thumb">
											<a href="#"><img src="{{asset('user/assets/images/products/21.jpg')}}" alt="" /></a>
										</div>
									</div>
									<div class="col-lg-6 p-0">
										<div class="product-title">
											<small><a href="#">Electronics</a></small>
											<h4><a href="#">Vantech VP-153C Camera</a></h4>
										</div>
										<div class="product-price-rating">
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
										</div>
										<div class="product-price-rating">
											<span>$195.00</span>
											<del>$229.99</del>
										</div>
									</div>
								</div>
							</div>
							<!--single-product-->
							<div class="product-single style-2">
								<div class="row align-items-center">
									<div class="col-lg-6 p-0">
										<div class="product-thumb">
											<a href="#"><img src="{{asset('user/assets/images/products/23.jpg')}}" alt="" /></a>
										</div>
									</div>
									<div class="col-lg-6 p-0">
										<div class="product-title">
											<small><a href="#">Electronics</a></small>
											<h4><a href="#">Vantech VP-153C Camera</a></h4>
										</div>
										<div class="product-price-rating">
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
										</div>
										<div class="product-price-rating">
											<span>$195.00</span>
											<del>$229.99</del>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<!--single-product-->
							<div class="product-single style-2">
								<div class="row align-items-center">
									<div class="col-lg-6 p-0">
										<div class="product-thumb">
											<a href="#"><img src="{{asset('user/assets/images/products/9.jpg')}}" alt="" /></a>
										</div>
									</div>
									<div class="col-lg-6 p-0">
										<div class="product-title">
											<small><a href="#">Electronics</a></small>
											<h4><a href="#">Vantech VP-153C Camera</a></h4>
										</div>
										<div class="product-price-rating">
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
										</div>
										<div class="product-price-rating">
											<span>$195.00</span>
											<del>$229.99</del>
										</div>
									</div>
								</div>
							</div>
							<!--single-product-->
							<div class="product-single style-2">
								<div class="row align-items-center">
									<div class="col-lg-6 p-0">
										<div class="product-thumb">
											<a href="#"><img src="{{asset('user/assets/images/products/12.jpg')}}" alt="" /></a>
										</div>
									</div>
									<div class="col-lg-6 p-0">
										<div class="product-title">
											<small><a href="#">Electronics</a></small>
											<h4><a href="#">Vantech VP-153C Camera</a></h4>
										</div>
										<div class="product-price-rating">
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
										</div>
										<div class="product-price-rating">
											<span>$195.00</span>
											<del>$229.99</del>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<!--single-product-->
							<div class="product-single style-2">
								<div class="row align-items-center">
									<div class="col-lg-6 p-0">
										<div class="product-thumb">
											<a href="#"><img src="{{asset('user/assets/images/products/4.jpg')}}" alt="" /></a>
										</div>
									</div>
									<div class="col-lg-6 p-0">
										<div class="product-title">
											<small><a href="#">Electronics</a></small>
											<h4><a href="#">Vantech VP-153C Camera</a></h4>
										</div>
										<div class="product-price-rating">
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
										</div>
										<div class="product-price-rating">
											<span>$195.00</span>
											<del>$229.99</del>
										</div>
									</div>
								</div>
							</div>
							<!--single-product-->
							<div class="product-single style-2">
								<div class="row align-items-center">
									<div class="col-lg-6 p-0">
										<div class="product-thumb">
											<a href="#"><img src="{{asset('user/assets/images/products/4.jpg')}}" alt="" /></a>
										</div>
									</div>
									<div class="col-lg-6 p-0">
										<div class="product-title">
											<small><a href="#">Electronics</a></small>
											<h4><a href="#">Vantech VP-153C Camera</a></h4>
										</div>
										<div class="product-price-rating">
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
										</div>
										<div class="product-price-rating">
											<span>$195.00</span>
											<del>$229.99</del>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<!--single-product-->
							<div class="product-single style-2">
								<div class="row align-items-center">
									<div class="col-lg-6 p-0">
										<div class="product-thumb">
											<a href="#"><img src="{{asset('user/assets/images/products/5.jpg')}}" alt="" /></a>
										</div>
									</div>
									<div class="col-lg-6 p-0">
										<div class="product-title">
											<small><a href="#">Electronics</a></small>
											<h4><a href="#">Vantech VP-153C Camera</a></h4>
										</div>
										<div class="product-price-rating">
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
										</div>
										<div class="product-price-rating">
											<span>$195.00</span>
											<del>$229.99</del>
										</div>
									</div>
								</div>
							</div>
							<!--single-product-->
							<div class="product-single style-2">
								<div class="row align-items-center">
									<div class="col-lg-6 p-0">
										<div class="product-thumb">
											<a href="#"><img src="{{asset('user/assets/images/products/5.jpg')}}" alt="" /></a>
										</div>
									</div>
									<div class="col-lg-6 p-0">
										<div class="product-title">
											<small><a href="#">Electronics</a></small>
											<h4><a href="#">Vantech VP-153C Camera</a></h4>
										</div>
										<div class="product-price-rating">
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
										</div>
										<div class="product-price-rating">
											<span>$195.00</span>
											<del>$229.99</del>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<!--single-product-->
							<div class="product-single style-2">
								<div class="row align-items-center">
									<div class="col-lg-6 p-0">
										<div class="product-thumb">
											<a href="#"><img src="{{asset('user/assets/images/products/6.jpg')}}" alt="" /></a>
										</div>
									</div>
									<div class="col-lg-6 p-0">
										<div class="product-title">
											<small><a href="#">Electronics</a></small>
											<h4><a href="#">Vantech VP-153C Camera</a></h4>
										</div>
										<div class="product-price-rating">
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
										</div>
										<div class="product-price-rating">
											<span>$195.00</span>
											<del>$229.99</del>
										</div>
									</div>
								</div>
							</div>
							<!--single-product-->
							<div class="product-single style-2">
								<div class="row align-items-center">
									<div class="col-lg-6 p-0">
										<div class="product-thumb">
											<a href="#"><img src="{{asset('user/assets/images/products/6.jpg')}}" alt="" /></a>
										</div>
									</div>
									<div class="col-lg-6 p-0">
										<div class="product-title">
											<small><a href="#">Electronics</a></small>
											<h4><a href="#">Vantech VP-153C Camera</a></h4>
										</div>
										<div class="product-price-rating">
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
										</div>
										<div class="product-price-rating">
											<span>$195.00</span>
											<del>$229.99</del>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--recently-viewed-products-end-->
	
	<!--brands-area start-->
	<div class="container">
		<div class="brands-area br-none">
			<div class="row">
				<div class="col-lg-12">
					<div class="brand-items">
						<div class="brand-item">
							<a href="#">
								<img class="brand-static" src="{{asset('user/assets/images/brands/1.jpg')}}" alt="" />
							</a>
						</div>
						<div class="brand-item">
							<a href="#">
								<img class="brand-static" src="{{asset('user/assets/images/brands/2.jpg')}}" alt="" />
							</a>
						</div>
						<div class="brand-item">
							<a href="#">
								<img class="brand-static" src="{{asset('user/assets/images/brands/3.jpg')}}" alt="" />
							</a>
						</div>
						<div class="brand-item">
							<a href="#">
								<img class="brand-static" src="{{asset('user/assets/images/brands/4.jpg')}}" alt="" />
							</a>
						</div>
						<div class="brand-item">
							<a href="#">
								<img class="brand-static" src="{{asset('user/assets/images/brands/5.jpg')}}" alt="" />
							</a>
						</div>
						<div class="brand-item">
							<a href="#">
								<img class="brand-static" src="{{asset('user/assets/images/brands/6.jpg')}}" alt="" />
							</a>
						</div>
						<div class="brand-item">
							<a href="#">
								<img class="brand-static" src="{{asset('user/assets/images/brands/7.jpg')}}" alt="" />
							</a>
						</div>
						<div class="brand-item">
							<a href="#">
								<img class="brand-static" src="{{asset('user/assets/images/brands/8.jpg')}}" alt="" />
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--brands-area end-->

	@endsection