@extends('base')

@section('content')
<!-- Slider Section -->
<div class="mb-4">
	<div class="bg-img-hero" style="background-image: url(/img/1920X422/silder4.jpg); background-size: cover; background-position: center">
		<div class="container overflow-hidden">
			<div class="js-slick-carousel u-slick" data-pagi-classes="text-center position-absolute right-0 bottom-0 left-0 u-slick__pagination u-slick__pagination--long justify-content-center mb-3 mb-md-4">
				<div class="js-slide">
					<div class="row pt-7 py-md-0">
						<div class="d-none d-wd-block offset-1"></div>
						<div class="col-xl col col-md-6 mt-md-8 mt-lg-10">
							<div class="ml-xl-4">
								<h6 class="font-size-15 font-weight-bold mb-2 text-cyan" data-scs-animation-in="fadeInUp">
									SHOP TO FIND WHAT YOU NEED
								</h6>
								<h1 class="font-size-46 text-lh-50 font-weight-light mb-8" data-scs-animation-in="fadeInUp" data-scs-animation-delay="200">
									BEST QUALITY ITEMS HERE AT ZAANAA STORE 
								</h1>
								<a href="/products" class="btn btn-primary transition-3d-hover rounded-lg font-weight-normal py-2 px-md-7 px-3 font-size-16" data-scs-animation-in="fadeInUp" data-scs-animation-delay="300">
									Start Buying
								</a>
							</div>
						</div>
						<div class="col-xl-7 col-6 d-flex align-items-end ml-auto ml-md-0" data-scs-animation-in="fadeInRight" data-scs-animation-delay="500">
							<img class="img-fluid ml-auto mr-10 mr-wd-auto p-5" src="{{ Voyager::image('/products/June2020/EaP3Xu30aLK63f5c7pgp.jpg') }}" alt="Image Description">
						</div>
					</div>
				</div>
				<div class="js-slide">
					<div class="row pt-7 py-md-0">
						<div class="d-none d-wd-block offset-1"></div>
					   	<div class="col-xl col col-md-6 mt-md-8 mt-lg-10">
							<div class="ml-xl-4">
								<h6 class="font-size-15 font-weight-bold mb-2 text-cyan" data-scs-animation-in="fadeInUp">
									SHOP TO FIND WHAT YOU NEED
								</h6>
								<h1 class="font-size-46 text-lh-50 font-weight-light mb-8" data-scs-animation-in="fadeInUp" data-scs-animation-delay="200">
									NEW ITEMS COMING SOON WITH A SALE UP TO <stong class="font-weight-bold">20% OFF</stong>
								</h1>
								<a href="/products" class="btn btn-primary transition-3d-hover rounded-lg font-weight-normal py-2 px-md-7 px-3 font-size-16" data-scs-animation-in="fadeInUp" data-scs-animation-delay="300">
									Start Buying
								</a>
							</div>
						</div>
						<div class="col-xl-7 col-6 flex-horizontal-center ml-auto ml-md-0" data-scs-animation-in="fadeInRight" data-scs-animation-delay="500">
							<img class="img-fluid ml-auto mr-10 mr-wd-auto h-100 p-5" src="{{ Voyager::image('products/June2020/G3NlnrU502Y6CB0VCCDc.jpg') }}" alt="Image Description">
						</div>
					</div>
				</div>
				<div class="js-slide">
					<div class="row pt-7 py-md-0">
						<div class="d-none d-wd-block offset-1"></div>
						<div class="col-xl col col-md-6 mt-md-8 mt-lg-10">
							<div class="ml-xl-4">
								<h6 class="font-size-15 font-weight-bold mb-2 text-cyan" data-scs-animation-in="fadeInUp">
									SHOP TO FIND WHAT YOU NEED
								</h6>
								<h1 class="font-size-46 text-lh-50 font-weight-light mb-8" data-scs-animation-in="fadeInUp" data-scs-animation-delay="200">
									OFFERS <stong class="font-weight-bold">100% GUARANTEED</stong> PRODUCTS
								</h1>
								<a href="/products" class="btn btn-primary transition-3d-hover rounded-lg font-weight-normal py-2 px-md-7 px-3 font-size-16" data-scs-animation-in="fadeInUp" data-scs-animation-delay="300">
									Start Buying
								</a>
							</div>
						</div>
						<div class="col-xl-7 col-6 flex-horizontal-center ml-auto ml-md-0" data-scs-animation-in="fadeInRight" data-scs-animation-delay="500">
							<img class="img-fluid ml-auto mr-10 mr-wd-auto h-100 p-5" src="{{ Voyager::image('products/June2020/w0GYujJDpXHKSo6ZnTBS.jpg') }}" alt="Image Description">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Slider Section -->
<div class="container">
	<!-- Feature List -->
	<div class="mb-6 row border rounded-lg mx-0 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble">
		<!-- Feature List -->
		<div class="media col px-6 px-xl-4 px-wd-8 flex-shrink-0 flex-xl-shrink-1 min-width-270-all py-3">
			<div class="u-avatar mr-2">
				<i class="text-primary ec ec-transport font-size-46"></i>
			</div>
			<div class="media-body text-center">
				<span class="d-block font-weight-bold text-dark">Fast Delivery</span>
				<div class=" text-secondary">4 days</div>
			</div>
		</div>
		<!-- End Feature List -->

		<!-- Feature List -->
		<div class="media col px-6 px-xl-4 px-wd-8 flex-shrink-0 flex-xl-shrink-1 min-width-270-all border-left py-3">
			<div class="u-avatar mr-2">
				<i class="text-primary ec ec-customers font-size-56"></i>
			</div>
			<div class="media-body text-center">
				<span class="d-block font-weight-bold text-dark">99 % Customer</span>
				<div class=" text-secondary">Feedbacks</div>
			</div>
		</div>
		<!-- End Feature List -->

		<!-- Feature List -->
		<div class="media col px-6 px-xl-4 px-wd-8 flex-shrink-0 flex-xl-shrink-1 min-width-270-all border-left py-3">
			<div class="u-avatar mr-2">
				<i class="text-primary ec ec-returning font-size-46"></i>
			</div>
			<div class="media-body text-center">
				<span class="d-block font-weight-bold text-dark">7 Days</span>
				<div class=" text-secondary">for free return</div>
			</div>
		</div>
		<!-- End Feature List -->

		<!-- Feature List -->
		<div class="media col px-6 px-xl-4 px-wd-8 flex-shrink-0 flex-xl-shrink-1 min-width-270-all border-left py-3">
			<div class="u-avatar mr-2">
				<i class="text-primary ec ec-payment font-size-46"></i>
			</div>
			<div class="media-body text-center">
				<span class="d-block font-weight-bold text-dark">Payment</span>
				<div class=" text-secondary">Secure and safe</div>
			</div>
		</div>
		<!-- End Feature List -->
	</div>
	<!-- End Feature List -->
	<!-- Tab Prodcut Section -->
	<div class="mb-6">
		<!-- Nav Classic -->
		<div class="position-relative bg-white text-center z-index-2">
			<ul class="nav nav-classic nav-tab justify-content-center" id="pills-tab" role="tablist">
				<li class="nav-item">
					<a class="nav-link active js-animation-link" id="pills-one-example1-tab" data-toggle="pill" href="#pills-one-example1" role="tab" aria-controls="pills-one-example1" aria-selected="true" data-target="#pills-one-example1" data-link-group="groups" data-animation-in="slideInUp">
						<div class="d-md-flex justify-content-md-center align-items-md-center">
							Playgrounds
						</div>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link js-animation-link" id="pills-two-example1-tab" data-toggle="pill" href="#pills-two-example1" role="tab" aria-controls="pills-two-example1" aria-selected="false" data-target="#pills-two-example1" data-link-group="groups" data-animation-in="slideInUp">
						<div class="d-md-flex justify-content-md-center align-items-md-center">
							On Sale
						</div>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link js-animation-link" id="pills-three-example1-tab" data-toggle="pill" href="#pills-three-example1" role="tab" aria-controls="pills-three-example1" aria-selected="false" data-target="#pills-three-example1" data-link-group="groups" data-animation-in="slideInUp">
						<div class="d-md-flex justify-content-md-center align-items-md-center">
							Top Rated
						</div>
					</a>
				</li>
			</ul>
		</div>
		<!-- End Nav Classic -->
		<!-- Tab Content -->
		<div class="tab-content" id="pills-tabContent">
			<div class="tab-pane fade pt-2 show active" id="pills-one-example1" role="tabpanel" aria-labelledby="pills-one-example1-tab" data-target-group="groups">
				<ul class="row list-unstyled products-group no-gutters">
					@foreach($featured as $p)
					<li class="col-6 col-md-4 col-xl product-item">
						<div class="product-item__outer h-100 w-100">
							<div class="product-item__inner px-xl-4 p-3">
								<div class="product-item__body pb-xl-2">
									<div class="mb-2"><a href="{{ route('productSingle',$p->id)}}" class="font-size-12 text-gray-5">Speakers</a></div>
									<h5 class="mb-1 product-item__title"><a href="{{ route('productSingle',$p->id)}}" class="text-blue font-weight-bold">{{$p->name}}</a></h5>
									<div class="mb-2">
										<a href="{{ route('productSingle',$p->id)}}" class="d-block text-center"><img class="img-fluid" src="{{ Voyager::image(json_decode($p->picture)[0]) }}" alt="Image Description"></a>
									</div>
									<div class="flex-center-between mb-1">
										<div class="prodcut-price d-flex justify-content-between w-100 pr-2">
											<div class="text-gray-100">ER: {{$p->unitPriceER}}¥</div>
											<div class="text-gray-100">UB: {{$p->unitPriceUB}}¥</div>
										</div>
										<div class="d-none d-xl-block prodcut-add-cart">
											<a href="{{ route('profileCart')}}" class="btn-add-cart text-dark btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
										</div>
									</div>
								</div>
								<div class="product-item__footer">
									<div class="border-top pt-2 flex-center-between flex-wrap">
										<a href="{{ route('profileCheckout')}}" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
										<a href="{{ route('profileWishlist')}}" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
									</div>
								</div>
							</div>
						</div>
						</li>
						@endforeach
						<!-- Need this later
					<li class="col-6 col-md-4 col-xl product-item">
						<div class="product-item__outer h-100 w-100">
							<div class="product-item__inner px-xl-4 p-3">
								<div class="product-item__body pb-xl-2">
									<div class="mb-2"><a href="../shop/product-categories.html" class="font-size-12 text-gray-5">Speakers</a></div>
									<h5 class="mb-1 product-item__title"><a href="../shop/single-product.html" class="text-blue font-weight-bold">Tablet White EliteBook Revolve 810 G2</a></h5>
									<div class="mb-2">
										<a href="../shop/single-product.html" class="d-block text-center"><img class="img-fluid" src="/img/212X200/img2.jpg" alt="Image Description"></a>
									</div>
									<div class="flex-center-between mb-1">
										<div class="prodcut-price d-flex align-items-center position-relative">
											<ins class="font-size-20 text-red text-decoration-none">$1999,00</ins>
											<del class="font-size-12 tex-gray-6 position-absolute bottom-100">$2 299,00</del>
										</div>
										<div class="d-none d-xl-block prodcut-add-cart">
											<a href="../shop/single-product.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
										</div>
									</div>
								</div>
								<div class="product-item__footer">
									<div class="border-top pt-2 flex-center-between flex-wrap">
										<a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
										<a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li class="col-6 col-md-4 col-xl product-item remove-divider-md-lg">
						<div class="product-item__outer h-100 w-100">
							<div class="product-item__inner px-xl-4 p-3">
								<div class="product-item__body pb-xl-2">
									<div class="mb-2"><a href="../shop/product-categories.html" class="font-size-12 text-gray-5">Speakers</a></div>
									<h5 class="mb-1 product-item__title"><a href="../shop/single-product.html" class="text-blue font-weight-bold">Purple Solo 2 Wireless</a></h5>
									<div class="mb-2">
										<a href="../shop/single-product.html" class="d-block text-center"><img class="img-fluid" src="/img/212X200/img3.jpg" alt="Image Description"></a>
									</div>
									<div class="flex-center-between mb-1">
										<div class="prodcut-price">
											<div class="text-gray-100">$685,00</div>
										</div>
										<div class="d-none d-xl-block prodcut-add-cart">
											<a href="../shop/single-product.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
										</div>
									</div>
								</div>
								<div class="product-item__footer">
									<div class="border-top pt-2 flex-center-between flex-wrap">
										<a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
										<a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li class="col-6 col-md-4 col-xl product-item remove-divider-xl">
						<div class="product-item__outer h-100 w-100">
							<div class="product-item__inner px-xl-4 p-3">
								<div class="product-item__body pb-xl-2">
									<div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
									<h5 class="mb-1 product-item__title"><a href="../shop/single-product.html" class="text-blue font-weight-bold">Smartphone 6S 32GB LTE</a></h5>
									<div class="mb-2">
										<a href="../shop/single-product.html" class="d-block text-center"><img class="img-fluid" src="/img/212X200/img4.jpg" alt="Image Description"></a>
									</div>
									<div class="flex-center-between mb-1">
										<div class="prodcut-price">
											<div class="text-gray-100">$685,00</div>
										</div>
										<div class="d-none d-xl-block prodcut-add-cart">
											<a href="../shop/single-product.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
										</div>
									</div>
								</div>
								<div class="product-item__footer">
									<div class="border-top pt-2 flex-center-between flex-wrap">
										<a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
										<a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li class="col-6 col-md-4 col-xl product-item d-xl-none d-wd-block">
						<div class="product-item__outer h-100 w-100">
							<div class="product-item__inner px-xl-4 p-3">
								<div class="product-item__body pb-xl-2">
									<div class="mb-2"><a href="../shop/product-categories.html" class="font-size-12 text-gray-5">Speakers</a></div>
									<h5 class="mb-1 product-item__title"><a href="../shop/single-product.html" class="text-blue font-weight-bold">Widescreen NX Mini F1 SMART NX</a></h5>
									<div class="mb-2">
										<a href="../shop/single-product.html" class="d-block text-center"><img class="img-fluid" src="/img/212X200/img5.jpg" alt="Image Description"></a>
									</div>
									<div class="flex-center-between mb-1">
										<div class="prodcut-price">
											<div class="text-gray-100">$685,00</div>
										</div>
										<div class="d-none d-xl-block prodcut-add-cart">
											<a href="../shop/single-product.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
										</div>
									</div>
								</div>
								<div class="product-item__footer">
									<div class="border-top pt-2 flex-center-between flex-wrap">
										<a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
										<a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li class="col-6 col-md-4 col-xl product-item d-xl-none d-wd-block remove-divider-wd remove-divider-md-lg">
						<div class="product-item__outer h-100 w-100">
							<div class="product-item__inner px-xl-4 p-3">
								<div class="product-item__body pb-xl-2">
									<div class="mb-2"><a href="../shop/product-categories.html" class="font-size-12 text-gray-5">Speakers</a></div>
									<h5 class="mb-1 product-item__title"><a href="../shop/single-product.html" class="text-blue font-weight-bold">Tablet White EliteBook Revolve 810 G2</a></h5>
									<div class="mb-2">
										<a href="../shop/single-product.html" class="d-block text-center"><img class="img-fluid" src="/img/212X200/img2.jpg" alt="Image Description"></a>
									</div>
									<div class="flex-center-between mb-1">
										<div class="prodcut-price d-flex align-items-center position-relative">
											<ins class="font-size-20 text-red text-decoration-none">$1999,00</ins>
											<del class="font-size-12 tex-gray-6 position-absolute bottom-100">$2 299,00</del>
										</div>
										<div class="d-none d-xl-block prodcut-add-cart">
											<a href="../shop/single-product.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
										</div>
									</div>
								</div>
								<div class="product-item__footer">
									<div class="border-top pt-2 flex-center-between flex-wrap">
										<a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
										<a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
									</div>
								</div>
							</div>
						</div>
					</li>
          !-->
				</ul>
			</div>
			<div class="tab-pane fade pt-2" id="pills-two-example1" role="tabpanel" aria-labelledby="pills-two-example1-tab" data-target-group="groups">
				<ul class="row list-unstyled products-group no-gutters">
					@foreach($sale as $p)
					<li class="col-6 col-md-4 col-xl product-item">
						<div class="product-item__outer h-100 w-100">
							<div class="product-item__inner px-xl-4 p-3">
								<div class="product-item__body pb-xl-2">
									<div class="mb-2"><a href="{{ route('productSingle',$p->id)}}" class="font-size-12 text-gray-5">Speakers</a></div>
									<h5 class="mb-1 product-item__title"><a href="{{ route('productSingle',$p->id)}}" class="text-blue font-weight-bold">{{$p->name}}</a></h5>
									<div class="mb-2">
										<a href="{{ route('productSingle',$p->id)}}" class="d-block text-center"><img class="img-fluid" src="{{ Voyager::image(json_decode($p->picture)[0]) }}" alt="Image Description"></a>
									</div>
									<div class="flex-center-between mb-1">
										<div class="prodcut-price d-flex justify-content-between w-100 pr-2">
											<div class="text-gray-100">ER: {{$p->unitPriceER}}¥</div>
											<div class="text-gray-100">UB: {{$p->unitPriceUB}}¥</div>
										</div>
										<div class="d-none d-xl-block prodcut-add-cart">
											<a href="{{ route('profileCart')}}" class="btn-add-cart text-dark btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
										</div>
									</div>
								</div>
								<div class="product-item__footer">
									<div class="border-top pt-2 flex-center-between flex-wrap">
										<a href="{{ route('profileCheckout')}}" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
										<a href="{{ route('profileWishlist')}}" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
									</div>
								</div>
							</div>
						</div>
						</li>
						@endforeach
				</ul>
			</div>
			<div class="tab-pane fade pt-2" id="pills-three-example1" role="tabpanel" aria-labelledby="pills-three-example1-tab" data-target-group="groups">
				<ul class="row list-unstyled products-group no-gutters">
					@foreach($top as $p)
				 	<li class="col-6 col-md-4 col-xl product-item">
						<div class="product-item__outer h-100 w-100">
							<div class="product-item__inner px-xl-4 p-3">
								<div class="product-item__body pb-xl-2">
									<div class="mb-2"><a href="{{ route('productSingle',$p->id)}}" class="font-size-12 text-gray-5">Speakers</a></div>
									<h5 class="mb-1 product-item__title"><a href="{{ route('productSingle',$p->id)}}" class="text-blue font-weight-bold">{{$p->name}}</a></h5>
									<div class="mb-2">
										<a href="{{ route('productSingle',$p->id)}}" class="d-block text-center"><img class="img-fluid" src="{{ Voyager::image(json_decode($p->picture)[0]) }}" alt="Image Description"></a>
									</div>
									<div class="flex-center-between mb-1">
										<div class="prodcut-price d-flex justify-content-between w-100 pr-2">
											<div class="text-gray-100">ER: {{$p->unitPriceER}}¥</div>
											<div class="text-gray-100">UB: {{$p->unitPriceUB}}¥</div>
										</div>
										<div class="d-none d-xl-block prodcut-add-cart">
											<a href="{{ route('profileCart')}}" class="btn-add-cart text-dark btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
										</div>
									</div>
								</div>
								<div class="product-item__footer">
									<div class="border-top pt-2 flex-center-between flex-wrap">
										<a href="{{ route('profileCheckout')}}" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
										<a href="{{ route('profileWishlist')}}" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
									</div>
								</div>
							</div>
						</div>
					</li>
					@endforeach
				</ul>
			</div>
		</div>
		<!-- End Tab Content -->
	</div>
	<!-- End Tab Prodcut Section -->
</div>
<!-- Television Entertainment -->
	<div class="mb-6" style="background-image: url(/img/1920X422/silder3.jpg); background-size: contain">
		<div class="container">
			<div class="row min-height-564 align-items-center">
				<div class="col-12 col-lg-4 col-xl-5 col-wd-6 d-none d-md-block">
					<img class="img-fluid" src="{{ Voyager::image('products/June2020/slider.jpg') }}" alt="Image Description">
				</div>
				<div class="col-12 col-lg-8 col-xl-7 col-wd-6 pt-6 pt-md-0">
					<div class=" d-flex border-bottom border-color-1 mr-md-2">
						<h3 class="section-title section-title__full mb-0 pb-2 font-size-22">Environment Decoration</h3>
					</div>
					<div class="js-slick-carousel position-static u-slick u-slick--gutters-2 u-slick overflow-hidden u-slick-overflow-visble py-5" data-arrows-classes="position-absolute top-0 font-size-17 u-slick__arrow-normal top-10 pt-6 pt-md-0"
					data-arrow-left-classes="fa fa-angle-left right-2" data-arrow-right-classes="fa fa-angle-right right-1" data-pagi-classes="text-center right-0 bottom-1 left-0 u-slick__pagination u-slick__pagination--long mb-0 z-index-n1 mt-4">
						<div class="js-slide">
							<ul class="row list-unstyled products-group no-gutters mb-0 overflow-visible">
							@foreach($cheapest as $p)
							<li class="col-md-6 product-item product-item__card mb-2 remove-divider pr-md-2 border-bottom-0">
									<div class="product-item__outer h-100 w-100">
										<div class="product-item__inner p-md-3 row no-gutters bg-white max-width-334">
											<div class="col col-lg-auto product-media-left">
												<a href="{{ route('productSingle',$p->id)}}" class="max-width-120 d-block"><img class="img-fluid" src="{{ Voyager::image(json_decode($p->picture)[0]) }}" alt="Image Description"></a>
											</div>
											<div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1 pr-3 pr-md-0 pt-1 pt-md-0">
												<div class="mb-2">
													<div class="mb-2"><a href="{{ route('productSingle',$p->id)}}" class="font-size-12 text-gray-5">{{$p->categories_id}}</a></div>
													<h5 class="product-item__title"><a href="{{ route('productSingle',$p->id)}}" class="text-blue font-weight-bold">{{$p->name}}</a></h5>
												</div>
												<div class="flex-center-between mb-2">
													<div class="prodcut-price">
														<div class="text-gray-100" style="font-size: 0.9rem">ER: {{$p->unitPriceER}}¥</div>
														<div class="text-gray-100" style="font-size: 0.9rem">UB: {{$p->unitPriceUB}}¥</div>
													</div>
													<div class="d-none d-xl-block prodcut-add-cart">
														<a href="{{ route('productSingle',$p->id)}}" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
													</div>
												</div>
												<div class="product-item__footer bg-white">
													<div class="border-top pt-2 flex-center-between flex-wrap">
														<a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
														<a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</li>
							@endforeach
							</ul>
						</div>
						<div class="js-slide">
							<ul class="row list-unstyled products-group no-gutters mb-0 overflow-visible">
							@foreach($featured as $p)
							<li class="col-md-6 product-item product-item__card mb-2 remove-divider pr-md-2 border-bottom-0">
									<div class="product-item__outer h-100 w-100">
										<div class="product-item__inner p-md-3 row no-gutters bg-white max-width-334">
											<div class="col col-lg-auto product-media-left">
												<a href="{{ route('productSingle',$p->id)}}" class="max-width-120 d-block"><img class="img-fluid" src="{{ Voyager::image(json_decode($p->picture)[0]) }}" alt="Image Description"></a>
											</div>
											<div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1 pr-3 pr-md-0 pt-1 pt-md-0">
												<div class="mb-2">
													<div class="mb-2"><a href="{{ route('productSingle',$p->id)}}" class="font-size-12 text-gray-5">Tablets</a></div>
													<h5 class="product-item__title"><a href="{{ route('productSingle',$p->id)}}" class="text-blue font-weight-bold">{{$p->name}}</a></h5>
												</div>
												<div class="flex-center-between mb-2">
													<div class="prodcut-price">
														<div class="text-gray-100" style="font-size: 0.9rem">ER: {{$p->unitPriceER}}¥</div>
														<div class="text-gray-100" style="font-size: 0.9rem">UB: {{$p->unitPriceUB}}¥</div>
													</div>
													<div class="d-none d-xl-block prodcut-add-cart">
														<a href="{{ route('productSingle',$p->id)}}" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
													</div>
												</div>
												<div class="product-item__footer bg-white">
													<div class="border-top pt-2 flex-center-between flex-wrap">
														<a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
														<a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</li>
							@endforeach
							</ul>
						</div>
						<div class="js-slide">
							<ul class="row list-unstyled products-group no-gutters mb-0 overflow-visible">
							@foreach($top as $p)
							<li class="col-md-6 product-item product-item__card mb-2 remove-divider pr-md-2 border-bottom-0">
									<div class="product-item__outer h-100 w-100">
										<div class="product-item__inner p-md-3 row no-gutters bg-white max-width-334">
											<div class="col col-lg-auto product-media-left">
												<a href="{{ route('productSingle',$p->id)}}" class="max-width-120 d-block"><img class="img-fluid" src="{{ Voyager::image(json_decode($p->picture)[0]) }}" alt="Image Description"></a>
											</div>
											<div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1 pr-3 pr-md-0 pt-1 pt-md-0">
												<div class="mb-2">
													<div class="mb-2"><a href="{{ route('productSingle',$p->id)}}" class="font-size-12 text-gray-5">Tablets</a></div>
													<h5 class="product-item__title"><a href="{{ route('productSingle',$p->id)}}" class="text-blue font-weight-bold">{{$p->name}}</a></h5>
												</div>
												<div class="flex-center-between mb-2">
													<div class="prodcut-price">
														<div class="text-gray-100" style="font-size: 0.9rem">ER: {{$p->unitPriceER}}¥</div>
														<div class="text-gray-100" style="font-size: 0.9rem">UB: {{$p->unitPriceUB}}¥</div>
													</div>
													<div class="d-none d-xl-block prodcut-add-cart">
														<a href="{{ route('productSingle',$p->id)}}" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
													</div>
												</div>
												<div class="product-item__footer bg-white">
													<div class="border-top pt-2 flex-center-between flex-wrap">
														<a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
														<a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</li>
							@endforeach
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
 <!-- End Television Entertainment -->
 
<!-- Trending Products  -->
<div class="container">
	<div class="mb-8 position-relative">
		<dv class="d-flex justify-content-between border-bottom border-color-1 flex-md-nowrap flex-wrap border-sm-bottom-0">
			<h3 class="section-title section-title__full mb-0 pb-2 font-size-22">Trending Products</h3>
		</dv>
		<div class="js-slick-carousel position-static u-slick u-slick--gutters-1 overflow-hidden u-slick-overflow-visble pt-3 pb-3" data-arrows-classes="position-absolute top-0 font-size-17 u-slick__arrow-normal top-10"
		 data-arrow-left-classes="fa fa-angle-left right-1" data-arrow-right-classes="fa fa-angle-right right-0" data-pagi-classes="text-center right-0 bottom-1 left-0 u-slick__pagination u-slick__pagination--long mb-0 z-index-n1 mt-4">
			<div class="js-slide">
				<ul class="row list-unstyled products-group no-gutters mb-0 overflow-visible">
					@foreach($fea as $p)
					<li class="col-wd-3 col-md-4 product-item product-item__card pb-2 mb-2 pb-md-0 mb-md-0 border-bottom border-md-bottom-0">
						<div class="product-item__outer h-100 w-100">
							<div class="product-item__inner p-md-3 row no-gutters">
								<div class="col col-lg-auto product-media-left">
									<a href="{{ route('productSingle',$p->id)}}" class="max-width-150 d-block"><img class="img-fluid" src="{{ Voyager::image(json_decode($p->picture)[0]) }}" alt="Image Description"></a>
								</div>
								<div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1">
									<div class="mb-4">
										<div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Tablets</a></div>
										<h5 class="product-item__title"><a href="{{ route('productSingle',$p->id)}}" class="text-blue font-weight-bold">{{$p->name}}</a></h5>
									</div>
									<div class="flex-center-between mb-3">
										<div class="prodcut-price" style="font-size: 0.9rem !important">
											<div class="text-gray-100">ER: {{$p->unitPriceER}}¥</div>
											<div class="text-gray-100">UB: {{$p->unitPriceUB}}¥</div>
										</div>
										<div class="d-none d-xl-block prodcut-add-cart">
											<a href="{{ route('productSingle',$p->id)}}" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
										</div>
									</div>
									<div class="product-item__footer">
										<div class="border-top pt-2 flex-center-between flex-wrap">
											<a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
											<a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</li>
					@endforeach
				</ul>
			</div>
			<div class="js-slide">
				<ul class="row list-unstyled products-group no-gutters mb-0 overflow-visible">
					@foreach($fee as $p)
					<li class="col-wd-3 col-md-4 product-item product-item__card pb-2 mb-2 pb-md-0 mb-md-0 border-bottom border-md-bottom-0">
						<div class="product-item__outer h-100 w-100">
							<div class="product-item__inner p-md-3 row no-gutters">
								<div class="col col-lg-auto product-media-left">
									<a href="{{ route('productSingle',$p->id)}}" class="max-width-150 d-block"><img class="img-fluid" src="{{ Voyager::image(json_decode($p->picture)[0]) }}" alt="Image Description"></a>
								</div>
								<div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1">
									<div class="mb-4">
										<div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Tablets</a></div>
										<h5 class="product-item__title"><a href="{{ route('productSingle',$p->id)}}" class="text-blue font-weight-bold">{{$p->name}}</a></h5>
									</div>
									<div class="flex-center-between mb-3">
										<div class="prodcut-price" style="font-size: 0.9rem !important">
											<div class="text-gray-100">ER: {{$p->unitPriceER}}¥</div>
											<div class="text-gray-100">UB: {{$p->unitPriceUB}}¥</div>
										</div>
										<div class="d-none d-xl-block prodcut-add-cart">
											<a href="{{ route('productSingle',$p->id)}}" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
										</div>
									</div>
									<div class="product-item__footer">
										<div class="border-top pt-2 flex-center-between flex-wrap">
											<a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
											<a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</li>
					@endforeach
				</ul>
			</div>
			<div class="js-slide">
				<ul class="row list-unstyled products-group no-gutters mb-0 overflow-visible">
					@foreach($faa as $p)
					<li class="col-wd-3 col-md-4 product-item product-item__card pb-2 mb-2 pb-md-0 mb-md-0 border-bottom border-md-bottom-0">
						<div class="product-item__outer h-100 w-100">
							<div class="product-item__inner p-md-3 row no-gutters">
								<div class="col col-lg-auto product-media-left">
									<a href="{{ route('productSingle',$p->id)}}" class="max-width-150 d-block"><img class="img-fluid" src="{{ Voyager::image(json_decode($p->picture)[0]) }}" alt="Image Description"></a>
								</div>
								<div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1">
									<div class="mb-4">
										<div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Tablets</a></div>
										<h5 class="product-item__title"><a href="{{ route('productSingle',$p->id)}}" class="text-blue font-weight-bold">{{$p->name}}</a></h5>
									</div>
									<div class="flex-center-between mb-3">
										<div class="prodcut-price" style="font-size: 0.9rem !important">
											<div class="text-gray-100">ER: {{$p->unitPriceER}}¥</div>
											<div class="text-gray-100">UB: {{$p->unitPriceUB}}¥</div>
										</div>
										<div class="d-none d-xl-block prodcut-add-cart">
											<a href="{{ route('productSingle',$p->id)}}" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
										</div>
									</div>
									<div class="product-item__footer">
										<div class="border-top pt-2 flex-center-between flex-wrap">
											<a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
											<a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</li>
					@endforeach
				</ul>
			</div>
		</div>
	</div>
</div>
 <!-- End Trending Products -->

<div class="container">

	<!-- Recommendation for you -->
	<div class="position-relative">
		<div class="border-bottom border-color-1 mb-2">
			<h3 class="section-title section-title__full d-inline-block mb-0 pb-2 font-size-22">Recommendation for you</h3>
		</div>
		<div class="js-slick-carousel u-slick position-static overflow-hidden u-slick-overflow-visble pb-7 pt-2 px-1" data-pagi-classes="text-center right-0 bottom-1 left-0 u-slick__pagination u-slick__pagination--long mb-0 z-index-n1 mt-3 mt-md-0" data-slides-show="7" data-slides-scroll="1" data-arrows-classes="position-absolute top-0 font-size-17 u-slick__arrow-normal top-10" data-arrow-left-classes="fa fa-angle-left right-1" data-arrow-right-classes="fa fa-angle-right right-0" data-responsive='[{
                          "breakpoint": 1400,
                          "settings": {
                            "slidesToShow": 6
                          }
                        }, {
                            "breakpoint": 1200,
                            "settings": {
                              "slidesToShow": 3
                            }
                        }, {
                          "breakpoint": 992,
                          "settings": {
                            "slidesToShow": 3
                          }
                        }, {
                          "breakpoint": 768,
                          "settings": {
                            "slidesToShow": 2
                          }
                        }, {
                          "breakpoint": 554,
                          "settings": {
                            "slidesToShow": 2
                          }
                        }]'>
			@foreach($fb as $p)
			<div class="js-slide products-group">
				<div class="product-item">
					<div class="product-item__outer h-100 w-100">
						<div class="product-item__inner px-wd-4 p-2 p-md-3">
							<div class="product-item__body pb-xl-2">
								<div class="mb-2"><a href="{{ route('productSingle',$p->id)}}" class="font-size-12 text-gray-5">Speakers</a></div>
								<h5 class="mb-1 product-item__title"><a href="{{ route('productSingle',$p->id)}}" class="text-blue font-weight-bold">{{$p->name}}</a></h5>
								<div class="mb-2">
									<a href="{{ route('productSingle',$p->id)}}" class="d-block text-center"><img class="img-fluid" src="{{ Voyager::image(json_decode($p->picture)[0]) }}" alt="Image Description"></a>
								</div>
								<div class="flex-center-between mb-1">
									<div class="prodcut-price">
										<div class="h6 text-gray-100">ER: {{$p->unitPriceER}}¥</div>
										<div class="h6 text-gray-100">UB: {{$p->unitPriceUB}}¥</div>
									</div>
									<div class="d-none d-xl-block prodcut-add-cart">
										<a href="{{ route('productSingle',$p->id)}}" class="text-dark btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
									</div>
								</div>
							</div>
							<div class="product-item__footer">
								<div class="border-top pt-2 flex-center-between flex-wrap">
									<a href="{{ route('profileCheckout')}}" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
									<a href="{{ route('profileWishlist')}}" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
								</div>
							</div>
						</div>
					</div>
				</div>
		</div>
		@endforeach
	</div>
</div>
<!-- End Recommendation for you -->
<!-- Banner 2 columns>
	<div class="mb-8">
		<div class="row">
			<div class="col-md-6 mb-3 mb-md-0">
				<a href="../shop/shop.html">
					<img class="img-fluid" src="/img/690X150/img1.jpg" alt="Image Description">
				</a>
			</div>
			<div class="col-md-6">
				<a href="../shop/shop.html">
					<img class="img-fluid" src="/img/690X150/img2.jpg" alt="Image Description">
				</a>
			</div>
		</div>
	</div>
	End Banner 2 columns -->
</div>
<!-- Brand Carousel 
<div class="container mb-8">
	<div class="py-2 border-top border-bottom">
		<div class="js-slick-carousel u-slick my-1" data-slides-show="5" data-slides-scroll="1" data-arrows-classes="d-none d-lg-inline-block u-slick__arrow-normal u-slick__arrow-centered--y"
		 data-arrow-left-classes="fa fa-angle-left u-slick__arrow-classic-inner--left z-index-9" data-arrow-right-classes="fa fa-angle-right u-slick__arrow-classic-inner--right" data-responsive='[{
                            "breakpoint": 992,
                            "settings": {
                                "slidesToShow": 2
                            }
                        }, {
                            "breakpoint": 768,
                            "settings": {
                                "slidesToShow": 1
                            }
                        }, {
                            "breakpoint": 554,
                            "settings": {
                                "slidesToShow": 1
                            }
                        }]'>
			<div class="js-slide">
				<a href="#" class="link-hover__brand">
					<img class="img-fluid m-auto max-height-50" src="{{ Voyager::image('products/June2020/FXsEXEhDLCQW2leWXe9e.jpg') }}" alt="Image Description">
				</a>
			</div>
			<div class="js-slide">
				<a href="#" class="link-hover__brand">
					<img class="img-fluid m-auto max-height-50" src="{{ Voyager::image('products/June2020/ZokdU2hQOLILy09ZRrPP.jpg') }}" alt="Image Description">
				</a>
			</div>
			<div class="js-slide">
				<a href="#" class="link-hover__brand">
					<img class="img-fluid m-auto max-height-50" src="{{ Voyager::image('products/June2020/GDqjyGiD1pPOjdam16lI.jpg') }}" alt="Image Description">
				</a>
			</div>
			<div class="js-slide">
				<a href="#" class="link-hover__brand">
					<img class="img-fluid m-auto max-height-50" src="{{ Voyager::image('products/June2020/ZokdU2hQOLILy09ZRrPP.jpg') }}" alt="Image Description">
				</a>
			</div>
			<div class="js-slide">
				<a href="#" class="link-hover__brand">
					<img class="img-fluid m-auto max-height-50" src="{{ Voyager::image('products/June2020/ZokdU2hQOLILy09ZRrPP.jpg') }}" alt="Image Description">
				</a>
			</div>
			<div class="js-slide">
				<a href="#" class="link-hover__brand">
					<img class="img-fluid m-auto max-height-50" src="{{ Voyager::image('products/June2020/FXsEXEhDLCQW2leWXe9e.jpg') }}" alt="Image Description">
				</a>
			</div>
		</div>
<!--
	</div>
</div>
 End Brand Carousel -->
@endsection