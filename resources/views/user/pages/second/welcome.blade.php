@extends('user.layouts.user')
@section('title', "Home")
@section('content')

	@include('user.partials.widget.main_slider')


	<!--banner-area start-->
	<div class="banner-area mt-30">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-4 col-sm-6 hover-effect">
					<div class="banner-square">
						<a href="#"><img src="{{asset('user/assets/images/banners/md/6.jpg')}}" alt="" /></a>
						<div class="banner-caption">
							<h2>WOMEN'S</h2>
							<h3>Collection 2019</h3>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 d-none d-lg-block">
					<div class="banner-square hover-effect">
						<img src="{{asset('user/assets/images/banners/md/7.jpg')}}" alt="" />
						<div class="banner-caption style-2 pt-20">
							<h2><strong>Kid’s</strong> Collection</h2>
						</div>
					</div>
					<div class="banner-square hover-effect mt-30">
						<img src="{{asset('user/assets/images/banners/md/8.jpg')}}" alt="" />
						<div class="banner-caption style-2">
							<h2><strong>Acessories</strong> Collection</h2>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 mt-sm-20">
					<div class="banner-square hover-effect">
						<img src="{{asset('user/assets/images/banners/md/9.jpg')}}" alt="" />
						<div class="banner-caption">
							<h2>Men’s</h2>
							<h3>Collection 2019</h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--banner-area end-->

	<!--products-area start-->
	<div class="products-area mt-55">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-title text-center">
						<h2>New Arrivals</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<!--products-tab-->
					<div class="products-tab">
						<div class="product-nav-tabs style-2 text-center">
							<ul class="nav nav-tabs">
								<?php $newArrivalsTabItemList = App\Models\Settings\NewArrivalTab::where('is_published', true)->get(); ?>
								@foreach($newArrivalsTabItemList as $tab)
								<li><a data-toggle="tab" href="#arrivalTab{{$tab->id}}">{{$tab->category->category_name}}</a></li>
								@endforeach
							</ul>
						</div>
						<div class="tab-content">
							@include('user.partials.widget.products_tab', ['tabItemList' => $newArrivalsTabItemList, 'tabId' => "arrivalTab", 'filter_key' => 'is_new'])
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--products-area end-->

	<!--store-supports-area start-->
	<div class="store-supports-area bg-lightblue pd-20 mt-30 mt-sm-50">
		<div class="container">
			<div class="row">
				@php
					$ecomSupports = \App\Models\Settings\EcomSupport::where('is_published',1)->get();
				@endphp

				@foreach($ecomSupports as $ecomSupport)
					<div class="col-lg-3 col-sm-6">
						<div class="store-support style-3">
							<div class="support-icon">
								<img src="{{asset($ecomSupport->image_url)}}" alt="" />
							</div>
							<div class="support-text">
								<strong>{{$ecomSupport->name}}</strong>
								<p>{{$ecomSupport->description}}</p>
							</div>
						</div>
					</div>
				@endforeach

			</div>
		</div>
	</div>
	<!--store-supports-area end-->

	<!--products-area start-->
	<div class="products-area mt-55">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-title text-center">
						<h2>Features Products</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<!--products-tab-->
					<div class="products-tab">
						<div class="product-nav-tabs style-2 text-center">
							<ul class="nav nav-tabs">
                                <?php $featuredTabItemList = App\Models\Settings\ProductFeature::where('is_published', true)->get(); ?>
                                @foreach($featuredTabItemList as $tab)
                                    <li><a data-toggle="tab" href="#featuredTab{{$tab->id}}">{{$tab->category->category_name}}</a></li>
                                @endforeach
							</ul>
						</div>
						<div class="tab-content">
                            @include('user.partials.widget.products_tab', ['tabItemList' => $featuredTabItemList, 'tabId' => "featuredTab", 'filter_key' => 'is_feature'])
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--products-area end-->

	<!--product-offer-area start-->
	<div class="product-offer-area mt-30 mt-sm-50">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6 col-md-6">
					<div class="product-offer-left">
						<img src="{{asset('user/assets/images/offers/1.jpg')}}" alt="" />
					</div>
				</div>
				<div class="col-lg-6 col-md-6">
					<div class="text-block text-center">
						<h3>Shop Events & Save Up To 65% OFF!</h3>
						<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut <br/> aliquip ex ea commodo consequat.</p>
						<div class="product-countdown style-2 mt-30">
							<div data-countdown="2019/05/01"></div>
						</div>
						<a href="#" class="btn-common mt-50">Shop now</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--product-offer-area end-->

	<!--brands-area start-->
	<div class="container-fluid">
		<div class="brands-area br-none">
			<div class="row">
				<div class="col-lg-12">
					<div class="brand-items">
						<div class="brand-item">
							<a href="#">
								<img class="brand-static" src="assets/images/brands/1.jpg" alt="" />
							</a>
						</div>
						<div class="brand-item">
							<a href="#">
								<img class="brand-static" src="assets/images/brands/2.jpg" alt="" />
							</a>
						</div>
						<div class="brand-item">
							<a href="#">
								<img class="brand-static" src="assets/images/brands/3.jpg" alt="" />
							</a>
						</div>
						<div class="brand-item">
							<a href="#">
								<img class="brand-static" src="assets/images/brands/4.jpg" alt="" />
							</a>
						</div>
						<div class="brand-item">
							<a href="#">
								<img class="brand-static" src="assets/images/brands/5.jpg" alt="" />
							</a>
						</div>
						<div class="brand-item">
							<a href="#">
								<img class="brand-static" src="assets/images/brands/6.jpg" alt="" />
							</a>
						</div>
						<div class="brand-item">
							<a href="#">
								<img class="brand-static" src="assets/images/brands/7.jpg" alt="" />
							</a>
						</div>
						<div class="brand-item">
							<a href="#">
								<img class="brand-static" src="assets/images/brands/8.jpg" alt="" />
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--brands-area end-->

@endsection
