<header class="header-area">
    <div class="desktop-header">
        <!--header-top-->
        <div class="header-top">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6">

                    </div>
                    <div class="col-lg-6">
                        <div class="topbar-right float-right">
                            <div class="social-icons pull-right">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-youtube"></i></a>
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
                    <div class="col-lg-2 col-xl-2 col-md-3">
                        <div class="logo header-logo">
                            <a href="{{route('app.home')}}"><img
                                    src="{{$siteSetting != null ? asset($siteSetting->logo_url) : asset('user/assets/images/logos/logo-blue.png')}}"
                                    alt="logo"/></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-7 col-md-4">
                        <div class="mainmenu">
                            <div class="search-box style-3 style-4">
                                <form method="get" action="{{route('product.search')}}">
                                    <input type="text" placeholder="Search by name" name="s"
                                           value="{{request()->query('s') ?? request()->query('s')}}" required/>
                                    <button><i class="ti-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-xl-3 col-md-3">

                        <div class="register-login pull-right pt-1 pl-3">
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

                        <?php $myCartList = App\Models\User\CartItem::with('product')->where('user_id', Auth::id())->get();?>
                        <div class="mini-cart pull-right">
                            <ul>
                                @php
                                    $session_id = Session::get('session_id');

                                    if($session_id && !auth()->user()){
                                       $wishListCount =\App\Models\User\Wishlist::where('session_id',$session_id)->count();
                                    }else{
                                        $wishListCount = \App\Models\User\Wishlist::where('user_id',auth()->id())->count();
                                    }


                                @endphp
                                <li><a href="{{route('wish-lists.index')}}"><i class="icon_heart_alt"></i><span
                                            id="wishListCount">{{$wishListCount}}</span></a></li>
                                <li>
                                    <div class="cart-dropdown">
                                        <ul class="dummy_cart_list_binding">

                                            <?php $taotalPrice = 0; $itemCount = 0;?>
                                            @foreach($myCartList as $cart)
                                                @if($itemCount < 2)
                                                    <li>
                                                        <div class="mini-cart-thumb">
                                                            <a href="#"><img
                                                                    src="{{asset($cart->product->featured_image)}}"
                                                                    alt=""/></a>
                                                        </div>
                                                        <div class="mini-cart-heading">
                                                            <span>${{$cart->product->new_price}}x {{$cart->quantity}}</span>
                                                            <h5>
                                                                <a href="{{route('product.search.show', $cart->product->slug)}}">{{$cart->product->title}}</a>
                                                            </h5>
                                                        </div>
                                                        <div class="mini-cart-remove">
                                                            <a class="cart-removal" title="Remove Item"
                                                               href="{{route('cart.delete',$cart->id)}}"><i
                                                                    class="ti-close"></i></a>
                                                        </div>
                                                    </li>
                                                @endif
                                                <?php $taotalPrice = ($taotalPrice + ($cart->product->new_price * $cart->quantity)); $itemCount +=1;?>
                                            @endforeach
                                        </ul>
                                        <div class="minicart-total fix">
                                            <span class="pull-left">total:</span>
                                            <span
                                                class="pull-right">$ <span
                                                    class="dummy_total_price">{{ number_format($taotalPrice,2)}}</span>
                                        </div>
                                        <div class="mini-cart-checkout">
                                            <a href="{{route('cart.index')}}" class="btn-common view-cart">VIEW
                                                CART</a>
                                            <a href="{{route('checkouts.create')}}"
                                               class="btn-common checkout mt-10">CHECK OUT</a>
                                        </div>
                                    </div>
                                    <a href="javascript:void(0);" class="minicart-icon"><i
                                            class="icon_bag_alt"></i>
                                        <span class="dummy_total_cart">{{count($myCartList)}}</span></a>
                                </li>
                            </ul>
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
                <div class="col-sm-4 col-5">
                    <div class="logo">
                        <a href="{{route('app.home')}}"><img
                                src="{{$siteSetting != null ? asset($siteSetting->logo_url) : asset('user/assets/images/logos/logo-blue.png')}}"
                                alt="logo"/></a>
                    </div>
                </div>
                <div class="col-sm-8 col-6">
                    <div class="register-login pull-right pt-1">
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
                    <div class="mini-cart text-right">
                        <ul>
                            <li><a href="#"><i class="icon_heart_alt"></i><span>1</span></a></li>
                            <li class="minicart-icon"><a href="#"><i
                                        class="icon_bag_alt"></i><span
                                        class="dummy_total_cart">{{count($myCartList)}}</span></a>
                                <div class="cart-dropdown">
                                    <ul class="dummy_cart_list_binding">
                                        <?php $taotalPrice = 0;?>
                                        @foreach($myCartList as $cart)
                                            <li>
                                                <div class="mini-cart-thumb">
                                                    <a href="#"><img src="{{asset($cart->product->featured_image)}}"
                                                                     alt=""/></a>
                                                </div>
                                                <div class="mini-cart-heading">
                                                    <span>${{$cart->product->new_price}}x {{$cart->quantity}}</span>
                                                    <h5>
                                                        <a href="{{route('product.search.show', $cart->product->slug)}}">{{$cart->product->title}}</a>
                                                    </h5>
                                                </div>
                                                <div class="mini-cart-remove">
                                                    <a class="cart-removal" title="Remove Item"
                                                       href="{{route('cart.delete',$cart->id)}}"><i
                                                            class="ti-close"></i></a>
                                                </div>
                                            </li>
                                            <?php $taotalPrice = ($taotalPrice + ($cart->product->new_price * $cart->quantity));?>
                                        @endforeach
                                    </ul>
                                    <div class="minicart-total fix">
                                        <span class="pull-left">total:</span>
                                        <span class="pull-right">$<span
                                                class="dummy_total_price">{{ number_format($taotalPrice,2)}}
                                    </div>
                                    <div class="mini-cart-checkout">
                                        <a href="{{route('cart.index')}}" class="btn-common view-cart">VIEW CART</a>
                                        <a href="{{route('checkouts.create')}}" class="btn-common checkout mt-10">CHECK
                                            OUT</a>
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
                        <form method="get" action="{{route('product.search')}}">
                            <input type="text" placeholder="Search by name" name="s" required/>
                            <button><i class="ti-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
            <!--site-menu-->
            <div class="row mt-sm-10">
                <div class="col-lg-12">

                    <!--category-->
                    <div class="collapse-menu mt-0 pull-right">
                        <ul>
                            <li><a href="javascript:void(0);" class="vm-menu mobile-menu-toggler"><i
                                        class="fa fa-navicon"></i><span>All Departments</span></a>
                                <ul class="vm-dropdown">

                                    <?php $menuCats = App\Models\ProductCategory::where(['parent_id' => 0, 'is_top_menu' => true])->get();?>
                                    @foreach($menuCats as $menu)
                                        @if($menu->childrens->count() > 0)
                                            <li><a href="#">{{$menu->category_name}} <b
                                                        class="caret"></b></a>
                                                <ul class="mega-menu">
                                                    @foreach($menu->childrens as $childMenu)
                                                        <li class="megamenu-single">
                                                            @if($childMenu->childrens->count() > 0)
                                                                <span
                                                                    class="mega-menu-title"><a
                                                                        href="{{route('product.index', $childMenu->slug)}}">{{$childMenu->category_name}}</a></span>
                                                                <ul>
                                                                    @foreach($childMenu->childrens as $leaveMenu)
                                                                        <li>
                                                                            <a href="{{route('product.index', $leaveMenu->slug)}}">{{$leaveMenu->category_name}}</a>
                                                                        </li>
                                                                    @endforeach
                                                                </ul>
                                                            @else
                                                                <a href="{{route('product.index', $childMenu->slug)}}">{{$childMenu->category_name}}</a>
                                                            @endif
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                        @else
                                            <li>
                                                <a href="{{route('product.index', $menu->slug)}}">{{$menu->category_name}}</a>
                                            </li>
                                        @endif
                                    @endforeach

                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
