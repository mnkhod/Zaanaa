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
					<li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">Laptops & Computers</li>
				</ol>
			</nav>
		</div>
		<!-- End breadcrumb -->
	</div>
</div>
<!-- End breadcrumb -->

<div class="container">
	<div class="row">
		<div class="d-none d-xl-block col-xl-3 col-wd-2gdot5">
			<div class="mb-8 border border-width-2 border-color-3 borders-radius-6">
				<!-- List -->
				<ul id="sidebarNav" class="list-unstyled mb-0 sidebar-navbar">
					<li>
						<a class="dropdown-toggle dropdown-toggle-collapse dropdown-title" href="javascript:;" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="sidebarNav1Collapse" data-target="#sidebarNav1Collapse">
							Show All Categories
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
						<a class="dropdown-current active" href="#">Laptops & Computers</a>

						<ul class="list-unstyled dropdown-list">
							<!-- Menu List -->
							<li><a class="dropdown-item" href="#">Accessories<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a></li>
							<li><a class="dropdown-item" href="#">All in One<span class="text-gray-25 font-size-12 font-weight-normal"> (51)</span></a></li>
							<li><a class="dropdown-item" href="#">Gaming<span class="text-gray-25 font-size-12 font-weight-normal"> (44)</span></a></li>
							<li><a class="dropdown-item" href="#">Headphones<span class="text-gray-25 font-size-12 font-weight-normal"> (89)</span></a></li>
							<li><a class="dropdown-item" href="#">Headphone Accessories<span class="text-gray-25 font-size-12 font-weight-normal"> (4)</span></a></li>
							<li><a class="dropdown-item" href="#">Pendrives<span class="text-gray-25 font-size-12 font-weight-normal"> (14)</span></a></li>
							<li><a class="dropdown-item" href="#">Power Banks<span class="text-gray-25 font-size-12 font-weight-normal"> (61)</span></a></li>
							<!-- End Menu List -->
						</ul>
					</li>
				</ul>
				<!-- End List -->
			</div>
		</div>
		<div class="col-xl-9 col-wd-9gdot5">
			<div class="d-flex justify-content-between align-items-center border-bottom border-color-1 flex-lg-nowrap flex-wrap mb-4">
				<h3 class="section-title section-title__full mb-0 pb-2 font-size-22">Laptops &amp; Computers Categories</h3>
			</div>
			<ul class="row list-unstyled products-group no-gutters mb-6">
				<li class="col-6 col-md-3 product-item">
					<div class="product-item__outer h-100 w-100">
						<div class="product-item__inner px-xl-4 p-3">
							<div class="product-item__body pb-xl-2">
								<div class="mb-2">
									<a href="#" class="d-block text-center"><img class="img-fluid" src="/img/300X300/img8.jpg" alt="Image Description"></a>
								</div>
								<h5 class="text-center mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="font-size-15 text-gray-90">Accessories</a></h5>
							</div>
						</div>
					</div>
				</li>
				<li class="col-6 col-md-3 product-item">
					<div class="product-item__outer h-100 w-100">
						<div class="product-item__inner px-xl-4 p-3">
							<div class="product-item__body pb-xl-2">
								<div class="mb-2">
									<a href="#" class="d-block text-center"><img class="img-fluid" src="/img/300X300/img15.jpg" alt="Image Description"></a>
								</div>
								<h5 class="text-center mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="font-size-15 text-gray-90">All in One</a></h5>
							</div>
						</div>
					</div>
				</li>
				<li class="col-6 col-md-3 product-item">
					<div class="product-item__outer h-100 w-100">
						<div class="product-item__inner px-xl-4 p-3">
							<div class="product-item__body pb-xl-2">
								<div class="mb-2">
									<a href="#" class="d-block text-center"><img class="img-fluid" src="/img/300X300/img22.jpg" alt="Image Description"></a>
								</div>
								<h5 class="text-center mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="font-size-15 text-gray-90">Gaming</a></h5>
							</div>
						</div>
					</div>
				</li>
				<li class="col-6 col-md-3 product-item remove-divider">
					<div class="product-item__outer h-100 w-100">
						<div class="product-item__inner px-xl-4 p-3">
							<div class="product-item__body pb-xl-2">
								<div class="mb-2">
									<a href="#" class="d-block text-center"><img class="img-fluid" src="/img/300X300/img23.jpg" alt="Image Description"></a>
								</div>
								<h5 class="text-center mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="font-size-15 text-gray-90">Laptops</a></h5>
							</div>
						</div>
					</div>
				</li>
				<li class="col-6 col-md-3 product-item">
					<div class="product-item__outer h-100 w-100">
						<div class="product-item__inner px-xl-4 p-3">
							<div class="product-item__body pb-xl-2">
								<div class="mb-2">
									<a href="#" class="d-block text-center"><img class="img-fluid" src="/img/300X300/img24.jpg" alt="Image Description"></a>
								</div>
								<h5 class="text-center mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="font-size-15 text-gray-90">Mac Computers</a></h5>
							</div>
						</div>
					</div>
				</li>
				<li class="col-6 col-md-3 product-item">
					<div class="product-item__outer h-100 w-100">
						<div class="product-item__inner px-xl-4 p-3">
							<div class="product-item__body pb-xl-2">
								<div class="mb-2">
									<a href="#" class="d-block text-center"><img class="img-fluid" src="/img/300X300/img25.jpg" alt="Image Description"></a>
								</div>
								<h5 class="text-center mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="font-size-15 text-gray-90">Peripherals</a></h5>
							</div>
						</div>
					</div>
				</li>
				<li class="col-6 col-md-3 product-item">
					<div class="product-item__outer h-100 w-100">
						<div class="product-item__inner px-xl-4 p-3">
							<div class="product-item__body pb-xl-2">
								<div class="mb-2">
									<a href="#" class="d-block text-center"><img class="img-fluid" src="/img/300X300/img5.jpg" alt="Image Description"></a>
								</div>
								<h5 class="text-center mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="font-size-15 text-gray-90">Servers</a></h5>
							</div>
						</div>
					</div>
				</li>
				<li class="col-6 col-md-3 product-item remove-divider">
					<div class="product-item__outer h-100 w-100">
						<div class="product-item__inner px-xl-4 p-3">
							<div class="product-item__body pb-xl-2">
								<div class="mb-2">
									<a href="#" class="d-block text-center"><img class="img-fluid" src="/img/300X300/img26.jpg" alt="Image Description"></a>
								</div>
								<h5 class="text-center mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="font-size-15 text-gray-90">Ultrabooks</a></h5>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>
</div>

@endsection
