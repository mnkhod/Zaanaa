@extends('base')

@section('content')
<!-- breadcrumb -->
<div class="bg-gray-13 bg-md-transparent">
	<div class="container">
		<!-- breadcrumb -->
		<div class="my-md-3">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb mb-3 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble">
					<li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="../home/index.html">Home</a></li>
					<li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">Error 404</li>
				</ol>
			</nav>
		</div>
		<!-- End breadcrumb -->
	</div>
</div>
<!-- End breadcrumb -->

<div class="container">
	<div class="mb-5 text-center pb-3 border-bottom border-color-1">
		<h1 class="font-size-sl-72 font-weight-light mb-3">404!</h1>
		<p class="text-gray-90 font-size-20 mb-0 font-weight-light">Nothing was found at this location. Try searching, or check out the links below.</p>
	</div>
	<div class="d-flex mb-6">
		<!-- Search Jobs Form -->
		<form class="d-block d-md-flex flex-horizontal-center w-100 w-lg-80 w-xl-50 mx-md-auto">
			<div class="mb-3 mb-md-0 col px-md-2 px-0">
				<!-- Input -->
				<div class="js-focus-state">
					<input type="text" class="form-control" placeholder="Search products…" aria-label="Search products…" aria-describedby="keywordInputAddon">
				</div>
				<!-- End Input -->
			</div>
			<div class="">
				<button type="submit" class="btn btn-block btn-primary-dark-w px-5">Search</button>
			</div>
			<!-- End Checkbox -->
		</form>
		<!-- End Search Jobs Form -->
	</div>
	<div class="row">
		<div class="col-lg-8 col-xl-9">
			<div class=" d-flex border-bottom border-color-1 mr-md-2 mb-4">
				<h3 class="section-title section-title__full mb-0 pb-2 font-size-22">Featured Products</h3>
			</div>
			<ul class="row list-unstyled products-group no-gutters">
				<li class="col-6 col-md-4 col-xl product-item">
					<div class="product-item__outer h-100">
						<div class="product-item__inner px-xl-4 p-3">
							<div class="product-item__body pb-xl-2">
								<div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
								<h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
								<div class="mb-2">
									<a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="/img/212X200/img1.jpg" alt="Image Description"></a>
								</div>
								<div class="flex-center-between mb-1">
									<div class="prodcut-price">
										<div class="text-gray-100">$685,00</div>
									</div>
									<div class="d-none d-xl-block prodcut-add-cart">
										<a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
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
				<li class="col-6 col-md-4 col-xl product-item">
					<div class="product-item__outer h-100">
						<div class="product-item__inner px-xl-4 p-3">
							<div class="product-item__body pb-xl-2">
								<div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
								<h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Tablet White EliteBook Revolve 810 G2</a></h5>
								<div class="mb-2">
									<a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="/img/212X200/img2.jpg" alt="Image Description"></a>
								</div>
								<div class="flex-center-between mb-1">
									<div class="prodcut-price d-flex align-items-center position-relative">
										<ins class="font-size-20 text-red text-decoration-none">$1999,00</ins>
										<del class="font-size-12 tex-gray-6 position-absolute bottom-100">$2 299,00</del>
									</div>
									<div class="d-none d-xl-block prodcut-add-cart">
										<a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
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
				<li class="col-6 col-md-4 col-xl product-item remove-divider-md-lg remove-divider-xl">
					<div class="product-item__outer h-100">
						<div class="product-item__inner px-xl-4 p-3">
							<div class="product-item__body pb-xl-2">
								<div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
								<h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Purple Solo 2 Wireless</a></h5>
								<div class="mb-2">
									<a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="/img/212X200/img3.jpg" alt="Image Description"></a>
								</div>
								<div class="flex-center-between mb-1">
									<div class="prodcut-price">
										<div class="text-gray-100">$685,00</div>
									</div>
									<div class="d-none d-xl-block prodcut-add-cart">
										<a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
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
					<div class="product-item__outer h-100">
						<div class="product-item__inner px-xl-4 p-3">
							<div class="product-item__body pb-xl-2">
								<div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
								<h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Smartphone 6S 32GB LTE</a></h5>
								<div class="mb-2">
									<a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="/img/212X200/img4.jpg" alt="Image Description"></a>
								</div>
								<div class="flex-center-between mb-1">
									<div class="prodcut-price">
										<div class="text-gray-100">$685,00</div>
									</div>
									<div class="d-none d-xl-block prodcut-add-cart">
										<a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
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
				<li class="col-6 col-md-4 col-xl product-item d-xl-none d-wd-block remove-divider-md-lg remove-divider-wd">
					<div class="product-item__outer h-100">
						<div class="product-item__inner px-xl-4 p-3">
							<div class="product-item__body pb-xl-2">
								<div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
								<h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Widescreen NX Mini F1 SMART NX</a></h5>
								<div class="mb-2">
									<a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="/img/212X200/img5.jpg" alt="Image Description"></a>
								</div>
								<div class="flex-center-between mb-1">
									<div class="prodcut-price">
										<div class="text-gray-100">$685,00</div>
									</div>
									<div class="d-none d-xl-block prodcut-add-cart">
										<a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
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
			</ul>
		</div>
		<div class="col-lg-4 col-xl-3">
			<div class=" d-flex border-bottom border-color-1 mr-md-2 mb-4">
				<h3 class="section-title section-title__full mb-0 pb-2 font-size-22">Product Categories</h3>
			</div>
			<div class="mb-6 border border-width-2 border-color-3 borders-radius-6">
				<!-- List -->
				<ul id="sidebarNav" class="list-unstyled mb-0 sidebar-navbar view-all">
					<li>
						<div class="dropdown-title">Browse Categories</div>
					</li>
					<li>
						<a class="dropdown-toggle dropdown-toggle-collapse" href="javascript:;" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="sidebarNav1Collapse" data-target="#sidebarNav1Collapse">
							Accessories<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
						</a>

						<div id="sidebarNav1Collapse" class="collapse" data-parent="#sidebarNav">
							<ul id="sidebarNav1" class="list-unstyled dropdown-list">
								<!-- Menu List -->
								<li><a class="dropdown-item" href="#">Accessories<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a></li>
								<li><a class="dropdown-item" href="#">Cameras & Photography<span class="text-gray-25 font-size-12 font-weight-normal"> (11)</span></a></li>
								<li><a class="dropdown-item" href="#">Computer Components<span class="text-gray-25 font-size-12 font-weight-normal"> (22)</span></a></li>
								<li><a class="dropdown-item" href="#">Gadgets<span class="text-gray-25 font-size-12 font-weight-normal"> (5)</span></a></li>
								<li><a class="dropdown-item" href="#">Home Entertainment<span class="text-gray-25 font-size-12 font-weight-normal"> (7)</span></a></li>
								<li><a class="dropdown-item" href="#">Laptops & Computers<span class="text-gray-25 font-size-12 font-weight-normal"> (42)</span></a></li>
								<li><a class="dropdown-item" href="#">Printers & Ink<span class="text-gray-25 font-size-12 font-weight-normal"> (63)</span></a></li>
								<li><a class="dropdown-item" href="#">Smart Phones & Tablets<span class="text-gray-25 font-size-12 font-weight-normal"> (11)</span></a></li>
								<li><a class="dropdown-item" href="#">TV & Audio<span class="text-gray-25 font-size-12 font-weight-normal"> (66)</span></a></li>
								<li><a class="dropdown-item" href="#">Video Games & Consoles<span class="text-gray-25 font-size-12 font-weight-normal"> (31)</span></a></li>
								<!-- End Menu List -->
							</ul>
						</div>
					</li>
					<li>
						<a class="dropdown-toggle dropdown-toggle-collapse" href="javascript:;" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="sidebarNav2Collapse" data-target="#sidebarNav2Collapse">
							Cameras & Photography<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
						</a>

						<div id="sidebarNav2Collapse" class="collapse" data-parent="#sidebarNav">
							<ul id="sidebarNav2" class="list-unstyled dropdown-list">
								<!-- Menu List -->
								<li><a class="dropdown-item" href="#">Cameras<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a></li>
								<!-- End Menu List -->
							</ul>
						</div>
					</li>
					<li>
						<a class="dropdown-toggle dropdown-toggle-collapse" href="javascript:;" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="sidebarNav3Collapse" data-target="#sidebarNav3Collapse">
							Computer Components<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
						</a>

						<div id="sidebarNav3Collapse" class="collapse" data-parent="#sidebarNav">
							<ul id="sidebarNav3" class="list-unstyled dropdown-list">
								<!-- Menu List -->
								<li><a class="dropdown-item" href="#">Computer Cases<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a></li>
								<!-- End Menu List -->
							</ul>
						</div>
					</li>
					<li>
						<a class="dropdown-toggle dropdown-toggle-collapse" href="javascript:;" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="sidebarNav4Collapse" data-target="#sidebarNav4Collapse">
							Gadgets<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
						</a>

						<div id="sidebarNav4Collapse" class="collapse" data-parent="#sidebarNav">
							<ul id="sidebarNav4" class="list-unstyled dropdown-list">
								<!-- Menu List -->
								<li><a class="dropdown-item" href="#">Smartwatches<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a></li>
								<li><a class="dropdown-item" href="#">Wearables<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a></li>
								<!-- End Menu List -->
							</ul>
						</div>
					</li>
					<li>
						<a class="dropdown-toggle dropdown-toggle-collapse" href="javascript:;" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="sidebarNav5Collapse" data-target="#sidebarNav5Collapse">
							Home Entertainment<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
						</a>

						<div id="sidebarNav5Collapse" class="collapse" data-parent="#sidebarNav">
							<ul id="sidebarNav5" class="list-unstyled dropdown-list">
								<!-- Menu List -->
								<li><a class="dropdown-item" href="#">Tvs<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a></li>
								<!-- End Menu List -->
							</ul>
						</div>
					</li>
					<li>
						<a class="dropdown-toggle dropdown-toggle-collapse" href="javascript:;" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="sidebarNav6Collapse" data-target="#sidebarNav6Collapse">
							Laptops & Computers<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
						</a>

						<div id="sidebarNav6Collapse" class="collapse" data-parent="#sidebarNav">
							<ul id="sidebarNav6" class="list-unstyled dropdown-list">
								<!-- Menu List -->
								<li><a class="dropdown-item" href="#">Accessories<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a></li>
								<li><a class="dropdown-item" href="#">Cameras & Photography<span class="text-gray-25 font-size-12 font-weight-normal"> (11)</span></a></li>
								<li><a class="dropdown-item" href="#">Computer Components<span class="text-gray-25 font-size-12 font-weight-normal"> (22)</span></a></li>
								<li><a class="dropdown-item" href="#">Gadgets<span class="text-gray-25 font-size-12 font-weight-normal"> (5)</span></a></li>
								<li><a class="dropdown-item" href="#">Home Entertainment<span class="text-gray-25 font-size-12 font-weight-normal"> (7)</span></a></li>
								<li><a class="dropdown-item" href="#">Laptops & Computers<span class="text-gray-25 font-size-12 font-weight-normal"> (42)</span></a></li>
								<li><a class="dropdown-item" href="#">Printers & Ink<span class="text-gray-25 font-size-12 font-weight-normal"> (63)</span></a></li>
								<li><a class="dropdown-item" href="#">Smart Phones & Tablets<span class="text-gray-25 font-size-12 font-weight-normal"> (11)</span></a></li>
								<li><a class="dropdown-item" href="#">TV & Audio<span class="text-gray-25 font-size-12 font-weight-normal"> (66)</span></a></li>
								<li><a class="dropdown-item" href="#">Video Games & Consoles<span class="text-gray-25 font-size-12 font-weight-normal"> (31)</span></a></li>
								<!-- End Menu List -->
							</ul>
						</div>
					</li>
					<li>
						<a class="dropdown-toggle dropdown-toggle-collapse" href="javascript:;" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="sidebarNav7Collapse" data-target="#sidebarNav7Collapse">
							Printers & Ink<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
						</a>

						<div id="sidebarNav7Collapse" class="collapse" data-parent="#sidebarNav">
							<ul id="sidebarNav7" class="list-unstyled dropdown-list">
								<!-- Menu List -->
								<li><a class="dropdown-item" href="#">Printers<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a></li>
								<!-- End Menu List -->
							</ul>
						</div>
					</li>
					<li>
						<a class="dropdown-toggle dropdown-toggle-collapse" href="javascript:;" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="sidebarNav8Collapse" data-target="#sidebarNav8Collapse">
							Smart Phones & Tablets<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
						</a>

						<div id="sidebarNav8Collapse" class="collapse" data-parent="#sidebarNav">
							<ul id="sidebarNav8" class="list-unstyled dropdown-list">
								<!-- Menu List -->
								<li><a class="dropdown-item" href="#">Smartphones<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a></li>
								<li><a class="dropdown-item" href="#">Tablets<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a></li>
								<!-- End Menu List -->
							</ul>
						</div>
					</li>
				</ul>
				<!-- End List -->
			</div>
		</div>
	</div>
</div>

@endsection
