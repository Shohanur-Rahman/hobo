<!--header-area start-->
	<header class="header-area">
		<div class="desktop-header">
			<!--header-top-->
			<div class="header-top style-2">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-lg-6">
							<div class="topbar-left">
								<ul class="list-none">
									<li>SHOP EVENTS & SAVE UP TO <span>65% OFF!</span></li>
									<li>Call Us: <span>001-1234-88888</span></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="topbar-right">
								<div class="social-icons pull-right">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-instagram"></i></a>
									<a href="#"><i class="fa fa-youtube"></i></a>
								</div>
								<div class="currency-bar lang-bar pull-right pt-2">
									@guest
								<a href="{{route('register')}}">Register</a>
								<span>/</span>
								<a href="{{route('login')}}">Sign in</a>
								@else
								<a href="{{route('profiles.index')}}">Dashboard</a>
								<span>/</span>
								<a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
								@endif
								</div>
								<div class="currency-bar pull-right">
									<ul>
										<li><a href="#">USD <i class="fa fa-angle-down"></i></a>
											<ul>
												<li><a href="#">EUR</a></li>
												<li><a href="#">AUD</a></li>
											</ul>
										</li>
										<li><span>|</span></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--header-bottom-->
			<div class="sticker header-bottom">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-xl-2 col-lg-2">
							<div class="logo">
								<a href="/"><img src="{{asset('user/assets/images/logos/logo-green.png')}}" alt="logo" /></a>
							</div>
						</div>
						<div class="col-xl-7 col-lg-6">
							<div class="mainmenu text-center">
								<nav>
									<ul>
										<?php $menuCats = App\Models\ProductCategory::where(['parent_id' => 0, 'is_top_menu' => true])->get();?>
										@foreach($menuCats as $menu)
											@if($menu->childrens->count() > 0)
												<li>
													<a href="#">
														{{$menu->category_name}}
														<b class="caret"></b>
													</a>
													<ul class="mega-menu">
														@foreach($menu->childrens as $childMenu)
														<li class="megamenu-single">
															<span class="mega-menu-title">{{$childMenu->category_name}}</span>

															@if($childMenu->childrens->count() > 0)
															<ul>
																@foreach($childMenu->childrens as $leaveMenu)
																<li><a href="{{route('product.index', $leaveMenu->slug)}}">{{$leaveMenu->category_name}}</a></li>
																@endforeach
															</ul>
															@endif
														</li>
														@endforeach
													</ul>
												</li>
											@else
											<li><a href="{{route('product.index', $menu->slug)}}">{{$menu->category_name}}</a></li>
											@endif

										@endforeach

									</ul>
								</nav>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4">
							<?php $myCartList = App\Models\User\CartItem::with('product')->where('user_id', Auth::id())->get();?>
							<div class="row align-items-center">
								<div class="col-lg-4 p-0">
									<div class="mini-cart">
										<ul>
											<li><a href="#"><i class="icon_heart_alt"></i><span>1</span></a></li>
											<li><a href="javascript:void(0);" class="minicart-icon"><i class="icon_bag_alt"></i><span>{{count($myCartList)}}</span></a>
												<div class="cart-dropdown">
													<ul>
														<?php $taotalPrice = 0;?>
														@foreach($myCartList as $cart)
														<li>
															<div class="mini-cart-thumb">
																<a href="#"><img src="{{asset($cart->product->featured_image)}}" alt="" /></a>
															</div>
															<div class="mini-cart-heading">
																<span>${{$cart->product->new_price}}x {{$cart->quantity}}</span>
																<h5><a href="{{route('product.search.show', $cart->product->slug)}}">{{$cart->product->title}}</a></h5>
															</div>
															<div class="mini-cart-remove">
																<button><i class="ti-close"></i></button>
															</div>
														</li>
														<?php $taotalPrice = ($taotalPrice+($cart->product->new_price*$cart->quantity));?>
														@endforeach
														
													</ul>
													<div class="minicart-total fix">
														<span class="pull-left">total:</span>
														<span class="pull-right">${{ number_format($taotalPrice,2)}}</span>
													</div>
													<div class="mini-cart-checkout">
														<a href="{{route('cart.index')}}" class="btn-common view-cart">VIEW CART</a>
														<a href="checkout.html" class="btn-common checkout mt-10">CHECK OUT</a>
													</div>
												</div>
											</li>
										</ul>
									</div>
								</div>
								<div class="col-lg-8">
									<div class="search-box style-3 style-4">
										<form method="get" action="{{route('product.search')}}">
										<input type="text" placeholder="Search by name" name="s" />
										<button><i class="ti-search"></i></button>
									</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--mobile-header-->
		<div class="sticker mobile-header">
			<div class="container-fluid">
				<!--logo and cart-->
				<div class="row align-items-center">
					<div class="col-sm-4 col-6">
						<div class="logo">
							<a href="index.html"><img src="{{asset('user/assets/images/logos/logo-green.png')}}" alt="logo" /></a>
						</div>
					</div>
					<div class="col-sm-8 col-6">
						<div class="mini-cart text-right">
							<ul>
								<li><a href="#"><i class="icon_heart_alt"></i><span>1</span></a></li>
								<li class="minicart-icon"><a href="#"><i class="icon_bag_alt"></i><span>2</span></a>
									<div class="cart-dropdown">
										<ul>
											<li>
												<div class="mini-cart-thumb">
													<a href="#"><img src="{{asset('user
														/assets/images/products/cart/thumb-1.jpg')}}" alt="" /></a>
												</div>
												<div class="mini-cart-heading">
													<span>$460.00 x 1</span>
													<h5><a href="#">Kabino Bedside Table</a></h5>
												</div>
												<div class="mini-cart-remove">
													<button><i class="ti-close"></i></button>
												</div>
											</li>
											<li>
												<div class="mini-cart-thumb">
													<a href="#"><img src="{{asset('user
														/assets/images/products/cart/thumb-2.jpg')}}" alt="" /></a>
												</div>
												<div class="mini-cart-heading">
													<span>$460.00 x 1</span>
													<h5><a href="#">Kabino Bedside Table</a></h5>
												</div>
												<div class="mini-cart-remove">
													<button><i class="ti-close"></i></button>
												</div>
											</li>
										</ul>
										<div class="minicart-total fix">
											<span class="pull-left">total:</span>
											<span class="pull-right">$460.00</span>
										</div>
										<div class="mini-cart-checkout">
											<a href="shopping-cart.html" class="btn-common view-cart">VIEW CARD</a>
											<a href="checkout.html" class="btn-common checkout mt-10">CHECK OUT</a>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!--search-box-->
				<div class="row align-items-center">
					<div class="col-sm-12">
						<div class="search-box mt-sm-15">
							<select>
								<option>All Categories</option>
								<option>Computer</option>
								<option>TV & Smart box</option>
								<option>Camera & Photography</option>
								<option>Headphones</option>
							</select>
							<input type="text" placeholder="What do you need?" />
							<button>Search</button>
						</div>
					</div>
				</div>
				<!--site-menu-->
				<div class="row mt-sm-10">
					<div class="col-lg-12">
						<a href="#my-menu" class="mmenu-icon pull-left"><i class="fa fa-bars"></i></a>

						<div class="mainmenu">
							<nav id="my-menu">
								<ul>
									<li><a href="index.html">Home <b class="caret"></b></a>
										<ul class="submenu">
											<li><a href="index.html">Home Version 1</a></li>
											<li><a href="index-2.html">Home Version 2</a></li>
											<li><a href="index-3.html">Home Version 3</a></li>
											<li><a href="index-4.html">Home Version 4</a></li>
											<li><a href="index-5.html">Home Version 5</a></li>
											<li><a href="index-6.html">Home Version 6</a></li>
										</ul>
									</li>
									<li>
										<a href="#">
											<span class="text-label label-featured">Featured</span>
											Shop
											<b class="caret"></b>
										</a>
										<ul>
											<li>
												<span class="mega-menu-title">Shop Page</span>
												<ul>
													<li><a href="shop.html">Shop Grid</a></li>
													<li><a href="shop-list.html">Shop List</a></li>
													<li><a href="shop-list-col-3.html">Shop Column 3</a></li>
													<li><a href="product-details.html">Product Details</a></li>
													<li><a href="poduct-details-sidebar.html">Product Details Sidebar</a></li>
												</ul>
											</li>
											<li>
												<span class="mega-menu-title">Features</span>
												<ul>
													<li><a href="wishlist.html">Wishlist</a></li>
													<li><a href="shopping-cart.html">Shopping Cart</a></li>
													<li><a href="shop-compare.html">Shop Compare</a></li>
													<li><a href="checkout.html">Checkout</a></li>
												</ul>
											</li>
											<li>
												<span class="mega-menu-title">Pages</span>
												<ul>
													<li><a href="about.html">About </a></li>
													<li><a href="faq.html">FAQ</a></li>
													<li><a href="coming-soon.html">Coming Soon</a></li>
													<li><a href="404.html">404 Error</a></li>
												</ul>
											</li>
											<li>
												<span class="mega-menu-title">Blog</span>
												<ul>
													<li><a href="blog.html">Blog List</a></li>
													<li><a href="blog-grid.html">Blog Grid</a></li>
													<li><a href="blog-fullwidth.html">Blog Fullwidth</a></li>
													<li><a href="blog-details.html">Blog Details</a></li>
												</ul>
											</li>
										</ul>
									</li>
									<li>
										<a href="#">
											<span class="text-label label-hot">Hot</span>
											Pages
											<b class="caret"></b>
										</a>
										<ul class="submenu">
											<li><a href="about.html">About Us</a></li>
											<li><a href="faq.html">FAQ</a></li>
											<li><a href="coming-soon.html">Coming Soon</a></li>
											<li><a href="404.html">404 Eror</a></li>
										</ul>
									</li>
									<li><a href="#">Blog <b class="caret"></b></a>
										<ul class="submenu">
											<li><a href="blog.html">Blog</a></li>
											<li><a href="blog-grid.html">Blog Grid</a></li>
											<li><a href="blog-fullwidth.html">Blog Full Width</a></li>
											<li><a href="blog-details.html">Blog Details</a></li>
										</ul>
									</li>
									<li><a href="contact.html">Contact</a></li>
									<li><a href="#">Purchase Theme</a></li>
								</ul>
							</nav>
						</div>

						<!--category-->
						<div class="collapse-menu mt-0 pull-right">
							<ul>
								<li><a href="javascript:void(0);" class="vm-menu"><i class="fa fa-navicon"></i><span>All Departments</span></a>
									<ul class="vm-dropdown d-hidden">
										<li><a href="#"><i class="fa fa-laptop"></i>Computer <b class="caret"></b></a>
											<ul class="mega-menu">
												<li class="megamenu-single">
													<span class="mega-menu-title">Shop Page</span>
													<ul>
														<li><a href="#">Products Block Top</a></li>
														<li><a href="#">Products Block Bottom</a></li>
														<li><a href="#">Shop Grid 5 Column</a></li>
														<li><a href="#">Shop List</a></li>
														<li><a href="#">Shop width Normal</a></li>
														<li><a href="#">Shop List Normal</a></li>
													</ul>
												</li>
												<li class="megamenu-single">
													<span class="mega-menu-title">Featured</span>
													<ul>
														<li><a href="#">Thumbnails Left</a></li>
														<li><a href="#">Thumbnails Right</a></li>
														<li><a href="#">Thumbnails Bottom</a></li>
														<li><a href="#">Thumbnails Full</a></li>
														<li><a href="#">Single 2 Colums</a></li>
														<li><a href="#">Tabs Content</a></li>
													</ul>
												</li>
												<li class="megamenu-single">
													<span class="mega-menu-title">Shop Page</span>
													<ul>
														<li><a href="#">Simple Product</a></li>
														<li><a href="#">Grouped Product</a></li>
														<li><a href="#">Variable Product</a></li>
														<li><a href="#">External Product</a></li>
														<li><a href="#">My account</a></li>
														<li><a href="#">Checkout</a></li>
													</ul>
												</li>
												<li class="megamenu-single">
													<span class="mega-menu-title">Features</span>
													<ul>
														<li><a href="#">Detail with Video</a></li>
														<li><a href="#">Variations Swatches</a></li>
														<li><a href="#">With Countdown Timer</a></li>
														<li><a href="#">Catalog Mode</a></li>
													</ul>
												</li>
											</ul>
										</li>
										<li><a href="#"><i class="fa fa-desktop"></i>TV & Smart box <b class="caret"></b></a>
											<ul class="mega-menu">
												<li class="megamenu-single">
													<span class="mega-menu-title">Shop Page</span>
													<ul>
														<li><a href="#">Products Block Top</a></li>
														<li><a href="#">Products Block Bottom</a></li>
														<li><a href="#">Shop Grid 5 Column</a></li>
														<li><a href="#">Shop List</a></li>
														<li><a href="#">Shop width Normal</a></li>
														<li><a href="#">Shop List Normal</a></li>
													</ul>
												</li>
												<li class="megamenu-single">
													<span class="mega-menu-title">Featured</span>
													<ul>
														<li><a href="#">Thumbnails Left</a></li>
														<li><a href="#">Thumbnails Right</a></li>
														<li><a href="#">Thumbnails Bottom</a></li>
														<li><a href="#">Thumbnails Full</a></li>
														<li><a href="#">Single 2 Colums</a></li>
														<li><a href="#">Detail with Accessories</a></li>
														<li><a href="#">Tabs Content</a></li>
														<li><a href="#">Accordion Tabs</a></li>
													</ul>
												</li>
											</ul>
										</li>
										<li><a href="#"><i class="fa fa-camera"></i>Camera & Photography</a></li>
										<li><a href="#"><i class="fa fa-headphones"></i>Headphones</a></li>
										<li><a href="#"><i class="fa fa-music"></i>Musical Instruments</a></li>
										<li><a href="#"><i class="fa fa-mobile"></i>Smart phone & Tablets</a></li>
										<li><a href="#"><i class="fa fa-flash"></i>Accessories</a></li>
										<li><a href="#"><i class="fa fa-microphone"></i>Home Audio & Theater</a></li>
										<li><a href="#"><i class="fa fa-print"></i>Printer</a></li>
										<li><a href="#"><i class="fa fa-fax"></i>Fax machine</a></li>
										<li><a href="#"><i class="fa fa-spoon"></i>Household goods</a></li>
										<li><a href="#"><i class="fa fa-clock-o"></i>Watch</a></li>
										<li><a href="#"><i class="fa fa-random"></i>Other</a></li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!--header-area end-->
