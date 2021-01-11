<footer>
		<div class="footer-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-4">
						<div class="company-info">
							<img src="{{asset('user/assets/images/logos/logo-blue.png')}}" alt="logo" />
							<p>101 E 129th St, East Chicago, <br/> IN 46312, US</p>
							<p>Phone: 001-1234-88888</p>
							<p>Email: info.deercreative@gmail.com</p>
						</div>
						<div class="social-icons style-2 style-4">
							<strong>GET IN TOUCH !</strong>
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-instagram"></i></a>
							<a href="#"><i class="fa fa-youtube"></i></a>
						</div>
					</div>
					<div class="col-lg-8 mt-sm-45">
						<div class="row">
							<div class="col-lg-4 col-sm-6">
								<div class="fooer-widget">
									<h4>Find It Fast</h4>
									<div class="footer-menu">
										<ul>
											<li><a href="#">Laptop $ Computers</a></li>
											<li><a href="#">Smart Phone & Tablets</a></li>
											<li><a href="#">TV & Audio</a></li>
											<li><a href="#">Cameras & Photography</a></li>
											<li><a href="#">Gadgets</a></li>
											<li><a href="#">Car Electronic & GP5</a></li>
											<li><a href="#">Accesories</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-sm-6">
								<div class="fooer-widget">
									<h4>Information</h4>
									<div class="footer-menu">
										<ul>
											<li><a href="#">Find a Store</a></li>
											<li><a href="#">About Us</a></li>
											<li><a href="#">Contact Us</a></li>
											<li><a href="#">Delivery information</a></li>
											<li><a href="#">Privacy Policy</a></li>
											<li><a href="#">Terms & Conditions</a></li>
											<li><a href="#">Gift Cards</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-sm-6 mt-sm-35">
								<div class="fooer-widget">
									<h4>Customer Care</h4>
									<div class="footer-menu">
										<ul>
											<li><a href="#">My Account</a></li>
											<li><a href="#">Order History</a></li>
											<li><a href="#">Wish List</a></li>
											<li><a href="{{route('customer-supports.create')}}">Customer Service</a></li>
											<li><a href="#">Returns / Exchange</a></li>
											<li><a href="{{route('customer-supports.create')}}">FAQs</a></li>
											<li><a href="#">Product Support</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--subscribe-area-start-->
		<div class="subscribe-area pd-25">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-7">
						<div class="subscribe-text">
							<h3>Sign Up to <strong>Newsletter</strong></h3>
							<p>Subscribe our newsletter gor get notification about information discount.</p>
						</div>
					</div>
					<div class="col-lg-5">
						<div class="subscribe-form style-3">
							<input type="text" placeholder="Your email address" />
							<button>Subscribe</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--subscribe-area-end-->

		<!--copyright-area start-->
		<div class="copyright-area pd-20">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6 col-md-6">
						<div class="copyright style-2">
							<p>Copyright 2019 &copy; <a href="#">HakDuck</a>. All rights reserved.</p>
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<div class="payment-gateways pull-right">
							<img src="{{asset('user/assets/images/footer/p1.png')}}" alt="" />
							<img src="{{asset('user/assets/images/footer/p2.png')}}" alt="" />
							<img src="{{asset('user/assets/images/footer/p3.png')}}" alt="" />
							<img src="{{asset('user/assets/images/footer/p4.png')}}" alt="" />
							<img src="{{asset('user/assets/images/footer/p5.png')}}" alt="" />
							<img src="{{asset('user/assets/images/footer/p6.png')}}" alt="" />
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--copyright-area end-->
	</footer>
	<!--footer-area end-->

	<!-- modernizr js -->

	<!-- main js -->
	<script src="{{asset('user/assets/js/main.js')}}"></script>
	<!-- Modal -->
	<div class="modal fade" id="quick-view" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-lg-4">
							<div class="tab-content">
								<div id="product-1" class="tab-pane fade in show active">
									<div class="product-details-thumb">
										<img src="assets/images/products/product-details/1.jpg" alt="" />
									</div>
								</div>
								<div id="product-2" class="tab-pane fade">
									<div class="product-details-thumb">
										<img src="assets/images/products/product-details/2.jpg" alt="" />
									</div>
								</div>
								<div id="product-3" class="tab-pane fade">
									<div class="product-details-thumb">
										<img src="assets/images/products/product-details/3.jpg" alt="" />
									</div>
								</div>
							</div>
							<ul class="nav nav-tabs products-nav-tabs horizontal quick-view mt-10">
								<li><a class="active" data-toggle="tab" href="#product-1"><img src="assets/images/products/product-details/thumb-1.jpg" alt="" /></a></li>
								<li><a data-toggle="tab" href="#product-2"><img src="assets/images/products/product-details/thumb-2.jpg" alt="" /></a></li>
								<li><a data-toggle="tab" href="#product-3"><img src="assets/images/products/product-details/thumb-3.jpg" alt="" /></a></li>
							</ul>
						</div>
						<div class="col-lg-8">
							<div class="row">
								<div class="col-lg-8">
									<div class="product-details-desc">
										<h2>Apple The New MacBook Retina 2016 MLHA2 12 inches</h2>
										<ul>
											<li>1.6 GHz dual-core Intel Core i5 (Turbo Boost up to 2.7 GHz) with 3 MB shared L3 cache 8 GB of 1600 MHz LPDDR3 RAM; 128 GB PCIe-based flash storage</li>
											<li>13.3-Inch (diagonal) LED-backlit Glossy Widescreen Display, 1440 x 900 resolution Intel HD Graphics 6000</li>
											<li>OS X El Capitan, Up to 12 Hours of Battery Life Macbook Air does not have a Retina display on any model.</li>
										</ul>
										<div class="product-meta">
											<ul class="list-none">
												<li>SKU: 00012 <span>|</span></li>
												<li>Categories:
													<a href="#">Tech</a>
													<a href="#">Macbook</a>
													<a href="#">Laptop</a>
													<span>|</span>
												</li>
												<li>Tags:
													<a href="#">Tech,</a>
													<a href="#">Apple</a>
												</li>
											</ul>
										</div>
										<div class="social-icons style-5">
											<span>Share Link:</span>
											<a href="#"><i class="fa fa-facebook"></i></a>
											<a href="#"><i class="fa fa-twitter"></i></a>
											<a href="#"><i class="fa fa-google-plus"></i></a>
											<a href="#"><i class="fa fa-rss"></i></a>
										</div>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="product-action stuck text-left">
										<div class="free-delivery">
											<a href="#"><i class="ti-truck"></i> Free Delivery</a>
										</div>
										<div class="product-price-rating">
											<div>
												<del>629.99</del>
											</div>
											<span>$495.00</span>
											<div class="pull-right">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star-o"></i>
											</div>
										</div>
										<div class="product-colors mt-20">
											<label>Select Color:</label>
											<ul class="list-none">
												<li>Red</li>
												<li>Black</li>
												<li>Blue</li>
											</ul>

										</div>
										<div class="product-quantity mt-15">
											<label>Quatity:</label>
											<input type="number" value="1" />
										</div>
										<div class="add-to-get mt-50">
											<a href="#" class="add-to-cart">Add to Cart</a>
											<a href="#" class="add-to-cart compare">+ ADD to Compare</a>
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
