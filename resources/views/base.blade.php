<!DOCTYPE html>
<html lang="en">

	<head>
		<!-- Title -->
		<title>Zaanaa</title>

		<!-- Required Meta Tags Always Come First -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Favicon -->
		<link rel="shortcut icon" href="">

		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap" rel="stylesheet">

		<!-- CSS Implementing Plugins -->
		<link rel="stylesheet" href="/vendor/font-awesome/css/fontawesome-all.min.css">
		<link rel="stylesheet" href="/css/font-electro.css">

		<link rel="stylesheet" href="/vendor/animate.css/animate.min.css">
		<link rel="stylesheet" href="/vendor/hs-megamenu/src/hs.megamenu.css">
		<link rel="stylesheet" href="/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
		<link rel="stylesheet" href="/vendor/fancybox/jquery.fancybox.css">
		<link rel="stylesheet" href="/vendor/slick-carousel/slick/slick.css">
		<link rel="stylesheet" href="/vendor/bootstrap-select/dist/css/bootstrap-select.min.css">

		<!-- CSS Electro Template -->
		<link rel="stylesheet" href="/css/theme.css">
	</head>

	<body>

		<!-- ========== HEADER ========== -->
		<header id="header" class="u-header u-header-left-aligned-nav">
			<div class="u-header__section">
				<!-- Topbar -->
				<div class="u-header-topbar py-2 d-none d-xl-block">
					<div class="container">
						<div class="d-flex align-items-center">
							<div class="topbar-left">
								<a href="#" class="text-gray-110 font-size-13 u-header-topbar__nav-link">Zaanaa Ecommerce Website</a>
							</div>
							<div class="topbar-right ml-auto">
								<ul class="list-inline mb-0">
									<li class="list-inline-item mr-0 u-header-topbar__nav-item u-header-topbar__nav-item-border">
										<a href="#" class="u-header-topbar__nav-link"><i class="ec ec-map-pointer mr-1"></i> Store Locator</a>
									</li>
									<li class="list-inline-item mr-0 u-header-topbar__nav-item u-header-topbar__nav-item-border u-header-topbar__nav-item-no-border u-header-topbar__nav-item-border-single">
										<div class="d-flex align-items-center">
											<!-- Language -->
											<div class="position-relative">
												<a id="languageDropdownInvoker" class="dropdown-nav-link dropdown-toggle d-flex align-items-center u-header-topbar__nav-link font-weight-normal" href="javascript:;" role="button"
												 aria-controls="languageDropdown" aria-haspopup="true" aria-expanded="false" data-unfold-event="hover" data-unfold-target="#languageDropdown" data-unfold-type="css-animation" data-unfold-duration="300"
												 data-unfold-delay="300" data-unfold-hide-on-scroll="true" data-unfold-animation-in="slideInUp" data-unfold-animation-out="fadeOut">
													<span class="d-inline-block d-sm-none">US</span>
													<span class="d-none d-sm-inline-flex align-items-center"><i class="ec ec-dollar mr-1"></i> Dollar (US)</span>
												</a>

												<div id="languageDropdown" class="dropdown-menu dropdown-unfold" aria-labelledby="languageDropdownInvoker">
													<a class="dropdown-item active" href="#">English</a>
													<a class="dropdown-item" href="#">Deutsch</a>
													<a class="dropdown-item" href="#">Español‎</a>
												</div>
											</div>
											<!-- End Language -->
										</div>
									</li>
									<li class="list-inline-item mr-0 u-header-topbar__nav-item u-header-topbar__nav-item-border">
										<!-- Account Sidebar Toggle Button -->
										<a id="sidebarNavToggler" href="javascript:;" role="button" class="u-header-topbar__nav-link" aria-controls="sidebarContent" aria-haspopup="true" aria-expanded="false" data-unfold-event="click"
										 data-unfold-hide-on-scroll="false" data-unfold-target="#sidebarContent" data-unfold-type="css-animation" data-unfold-animation-in="fadeInRight" data-unfold-animation-out="fadeOutRight"
										 data-unfold-duration="500">
											<i class="ec ec-user mr-1"></i> Register <span class="text-gray-50">or</span> Sign in
										</a>
										<!-- End Account Sidebar Toggle Button -->
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- End Topbar -->

				<!-- Logo-Search-header-icons -->
				<div class="py-2 py-xl-5 bg-primary-down-lg">
					<div class="container my-0dot5 my-xl-0">
						<div class="row align-items-center">
							<!-- Logo-offcanvas-menu -->
							<div class="col-auto">
								<!-- Nav -->
								<nav class="navbar navbar-expand u-header__navbar py-0 justify-content-xl-between max-width-270 min-width-270">
									<!-- Logo -->
									<a class="order-1 order-xl-0 navbar-brand u-header__navbar-brand u-header__navbar-brand-center" href="{{ route('home') }}" aria-label="Electro">
										<img src="/img/logo5.png" alt="">
									</a>
									<!-- End Logo -->

									<!-- Fullscreen Toggle Button -->
									<button id="sidebarHeaderInvokerMenu" type="button" class="navbar-toggler d-block btn u-hamburger mr-3 mr-xl-0" aria-controls="sidebarHeader" aria-haspopup="true" aria-expanded="false" data-unfold-event="click"
									 data-unfold-hide-on-scroll="false" data-unfold-target="#sidebarHeader1" data-unfold-type="css-animation" data-unfold-animation-in="fadeInLeft" data-unfold-animation-out="fadeOutLeft" data-unfold-duration="500">
										<span id="hamburgerTriggerMenu" class="u-hamburger__box">
											<span class="u-hamburger__inner"></span>
										</span>
									</button>
									<!-- End Fullscreen Toggle Button -->
								</nav>
								<!-- End Nav -->

								<!-- ========== HEADER SIDEBAR ========== -->
								<aside id="sidebarHeader1" class="u-sidebar u-sidebar--left" aria-labelledby="sidebarHeaderInvokerMenu">
									<div class="u-sidebar__scroller">
										<div class="u-sidebar__container">
											<div class="u-header-sidebar__footer-offset pb-0">
												<!-- Toggle Button -->
												<div class="position-absolute top-0 right-0 z-index-2 pt-4 pr-7">
													<button type="button" class="close ml-auto" aria-controls="sidebarHeader" aria-haspopup="true" aria-expanded="false" data-unfold-event="click" data-unfold-hide-on-scroll="false"
													 data-unfold-target="#sidebarHeader1" data-unfold-type="css-animation" data-unfold-animation-in="fadeInLeft" data-unfold-animation-out="fadeOutLeft" data-unfold-duration="500">
														<span aria-hidden="true"><i class="ec ec-close-remove text-gray-90 font-size-20"></i></span>
													</button>
												</div>
												<!-- End Toggle Button -->

												<!-- Content -->
												<div class="js-scrollbar u-sidebar__body">
													<div id="headerSidebarContent" class="u-sidebar__content u-header-sidebar__content">
														<!-- Logo -->
														<a class="d-flex ml-0 navbar-brand u-header__navbar-brand u-header__navbar-brand-vertical" href="{{ route('home') }}" aria-label="Electro">
															<img src="/img/logo1.png" alt="Company Logo">
														</a>
														<!-- End Logo -->

														<!-- List -->
														<ul id="headerSidebarList" class="u-header-collapse__nav">
															<!-- Home Section -->
															<li class="u-has-submenu u-header-collapse__submenu">
																<a class="u-header-collapse__nav-link u-header-collapse__nav-pointer" href="javascript:;" role="button" data-toggle="collapse" aria-expanded="false"
																 aria-controls="headerSidebarHomeCollapse" data-target="#headerSidebarHomeCollapse">
																	About Zaanaa Store
																</a>

																<div id="headerSidebarHomeCollapse" class="collapse" data-parent="#headerSidebarContent">
																	<ul id="headerSidebarHomeMenu" class="u-header-collapse__nav-list">
																		<!-- Home - v1 -->
																		<li><a class="u-header-collapse__submenu-nav-link" href="{{ route('home') }}">Home</a></li>
																		<!-- End Home - v1 -->

																		<!-- About -->
																		<li><a class="u-header-collapse__submenu-nav-link" href="{{ route('about') }}">About</a></li>
																		<!-- End About -->
																		<!-- Contact -->
																		<li><a class="u-header-collapse__submenu-nav-link" href="{{ route('contact') }}">Contact</a></li>
																		<!-- End Contact -->
																		<!-- FAQ -->
																		<li><a class="u-header-collapse__submenu-nav-link" href="{{ route('faq') }}">FAQ</a></li>
																		<!-- End FAQ -->
																		<!-- Terms and Conditions -->
																		<li><a class="u-header-collapse__submenu-nav-link" href="{{ route('terms') }}">Terms and Conditions</a></li>
																		<!-- End Terms and Conditions -->
																	</ul>
																</div>
															</li>
															<!-- End Home Section -->

															<!-- Shop Pages -->
															<li class="u-has-submenu u-header-collapse__submenu">
																<a class="u-header-collapse__nav-link u-header-collapse__nav-pointer" href="javascript:;" data-target="#headerSidebarPagesCollapse" role="button" data-toggle="collapse"
																 aria-expanded="false" aria-controls="headerSidebarPagesCollapse">
																	Shop Pages
																</a>

																<div id="headerSidebarPagesCollapse" class="collapse" data-parent="#headerSidebarContent">
																	<ul id="headerSidebarPagesMenu" class="u-header-collapse__nav-list">
																		<!-- Shop Grid -->
																		<li><a class="u-header-collapse__submenu-nav-link" href="{{ route('productArchive') }}">Products</a></li>
																		<!-- End Shop Grid -->
																	</ul>
																</div>
															</li>
															<!-- End Shop Pages -->

															<!-- Product Categories -->
															<li class="u-has-submenu u-header-collapse__submenu">
																<a class="u-header-collapse__nav-link u-header-collapse__nav-pointer" href="javascript:;" data-target="#headerSidebarBlogCollapse" role="button" data-toggle="collapse"
																 aria-expanded="false" aria-controls="headerSidebarBlogCollapse">
																	Product Categories
																</a>

																<div id="headerSidebarBlogCollapse" class="collapse" data-parent="#headerSidebarContent">
																	<ul id="headerSidebarBlogMenu" class="u-header-collapse__nav-list">
																		<!-- 4 Column Sidebar -->
																		<li><a class="u-header-collapse__submenu-nav-link" href="{{ route('categories') }}">Product Categories</a></li>
																		<!-- End 4 Column Sidebar -->
																	</ul>
																</div>
															</li>
															<!-- End Product Categories -->

															<!-- Single Product Pages -->
															<li class="u-has-submenu u-header-collapse__submenu">
																<a class="u-header-collapse__nav-link u-header-collapse__nav-pointer" href="javascript:;" data-target="#headerSidebarShopCollapse" role="button" data-toggle="collapse"
																 aria-expanded="false" aria-controls="headerSidebarShopCollapse">
																	Single Product Pages
																</a>

																<div id="headerSidebarShopCollapse" class="collapse" data-parent="#headerSidebarContent">
																	<ul id="headerSidebarShopMenu" class="u-header-collapse__nav-list">
																		<!-- Single Product Extended -->
																		<li><a class="u-header-collapse__submenu-nav-link" href="{{ route('productSingle',2) }}">Single Product</a></li>
																		<!-- End Single Product Extended -->
																	</ul>
																</div>
															</li>
															<!-- End Single Product Pages -->

															<!-- Ecommerce Pages -->
															<li class="u-has-submenu u-header-collapse__submenu">
																<a class="u-header-collapse__nav-link u-header-collapse__nav-pointer" href="javascript:;" data-target="#headerSidebarDemosCollapse" role="button" data-toggle="collapse"
																 aria-expanded="false" aria-controls="headerSidebarDemosCollapse">
																	Shopping
																</a>

																<div id="headerSidebarDemosCollapse" class="collapse" data-parent="#headerSidebarContent">
																	<ul id="headerSidebarDemosMenu" class="u-header-collapse__nav-list">
																		<!-- Cart -->
																		<li><a class="u-header-collapse__submenu-nav-link" href="{{ route('profileCart') }}">Cart</a></li>
																		<!-- End Cart -->

																		<!-- Checkout -->
																		<li><a class="u-header-collapse__submenu-nav-link" href="{{ route('profileCheckout') }}">Checkout</a></li>
																		<!-- End Checkout -->

																		<!-- My Account -->
																		<li><a class="u-header-collapse__submenu-nav-link" href="{{ route('profileCart') }}">My Account</a></li>
																		<!-- End My Account -->

																		<!-- Compare -->
																		<li><a class="u-header-collapse__submenu-nav-link" href="{{ route('productCompare') }}">Compare</a></li>
																		<!-- End Compare -->

																		<!-- wishlist -->
																		<li><a class="u-header-collapse__submenu-nav-link" href="{{ route('profileWishlist') }}">Wishlist</a></li>
																		<!-- End wishlist -->
																	</ul>
																</div>
															</li>
															<!-- End Ecommerce Pages -->

															<!-- Blog Pages -->
															<li class="u-has-submenu u-header-collapse__submenu">
																<a class="u-header-collapse__nav-link u-header-collapse__nav-pointer" href="javascript:;" data-target="#headerSidebarblogsCollapse" role="button" data-toggle="collapse"
																 aria-expanded="false" aria-controls="headerSidebarblogsCollapse">
																	Blog Pages
																</a>

																<div id="headerSidebarblogsCollapse" class="collapse" data-parent="#headerSidebarContent">
																	<ul id="headerSidebarblogsMenu" class="u-header-collapse__nav-list">
																		<!-- Blog v1 -->
																		<li><a class="u-header-collapse__submenu-nav-link" href="{{ route('blogArchive') }}">Blogs</a></li>
																		<!-- End Blog v1 -->

																		<!-- Single Blog Post -->
																		<li><a class="u-header-collapse__submenu-nav-link" href="{{ route('blogSingle',2) }}">Single Blog</a></li>
																		<!-- End Single Blog Post -->
																	</ul>
																</div>
															</li>
															<!-- End Blog Pages -->
														</ul>
														<!-- End List -->
													</div>
												</div>
												<!-- End Content -->
											</div>
										</div>
									</div>
								</aside>
								<!-- ========== END HEADER SIDEBAR ========== -->
							</div>
							<!-- End Logo-offcanvas-menu -->
							<!-- Search Bar -->
							<div class="col d-none d-xl-block">
								<form class="js-focus-state">
									<label class="sr-only" for="searchproduct">Search</label>
									<div class="input-group">
										<input type="email" class="form-control py-2 pl-5 font-size-15 border-right-0 height-40 border-width-2 rounded-left-pill border-primary" name="email" id="searchproduct-item" placeholder="Search for Products"
										 aria-label="Search for Products" aria-describedby="searchProduct1" required>
										<div class="input-group-append">
											<!-- Select -->
											<select class="js-select selectpicker dropdown-select custom-search-categories-select"
											 data-style="btn height-40 text-gray-60 font-weight-normal border-top border-bottom border-left-0 rounded-0 border-primary border-width-2 pl-0 pr-5 py-2">
												<option value="one" selected>All Categories</option>
												<option value="two">Two</option>
												<option value="three">Three</option>
												<option value="four">Four</option>
											</select>
											<!-- End Select -->
											<button class="btn btn-primary height-40 py-2 px-3 rounded-right-pill" type="button" id="searchProduct1">
												<span class="ec ec-search font-size-24"></span>
											</button>
										</div>
									</div>
								</form>
							</div>
							<!-- End Search Bar -->
							<!-- Header Icons -->
							<div class="col col-xl-auto text-right text-xl-left pl-0 pl-xl-3 position-static">
								<div class="d-inline-flex">
									<ul class="d-flex list-unstyled mb-0 align-items-center">
										<!-- Search -->
										<li class="col d-xl-none px-2 px-sm-3 position-static">
											<a id="searchClassicInvoker" class="font-size-22 text-gray-90 text-lh-1 btn-text-secondary" href="javascript:;" role="button" data-toggle="tooltip" data-placement="top" title="Search"
											 aria-controls="searchClassic" aria-haspopup="true" aria-expanded="false" data-unfold-target="#searchClassic" data-unfold-type="css-animation" data-unfold-duration="300" data-unfold-delay="300"
											 data-unfold-hide-on-scroll="true" data-unfold-animation-in="slideInUp" data-unfold-animation-out="fadeOut">
												<span class="ec ec-search"></span>
											</a>

											<!-- Input -->
											<div id="searchClassic" class="dropdown-menu dropdown-unfold dropdown-menu-right left-0 mx-2" aria-labelledby="searchClassicInvoker">
												<form class="js-focus-state input-group px-3">
													<input class="form-control" type="search" placeholder="Search Product">
													<div class="input-group-append">
														<button class="btn btn-primary px-3" type="button"><i class="font-size-18 ec ec-search"></i></button>
													</div>
												</form>
											</div>
											<!-- End Input -->
										</li>
										<!-- End Search -->
										<li class="col d-none d-xl-block"><a href="../shop/compare.html" class="text-gray-90" data-toggle="tooltip" data-placement="top" title="Compare"><i class="font-size-22 ec ec-compare"></i></a></li>
										<li class="col d-none d-xl-block"><a href="../shop/wishlist.html" class="text-gray-90" data-toggle="tooltip" data-placement="top" title="Favorites"><i class="font-size-22 ec ec-favorites"></i></a></li>
										<li class="col d-xl-none px-2 px-sm-3"><a href="../shop/my-account.html" class="text-gray-90" data-toggle="tooltip" data-placement="top" title="My Account"><i class="font-size-22 ec ec-user"></i></a></li>
										<li class="col pr-xl-0 px-2 px-sm-3">
											<a href="../shop/cart.html" class="text-gray-90 position-relative d-flex " data-toggle="tooltip" data-placement="top" title="Cart">
												<i class="font-size-22 ec ec-shopping-bag"></i>
												<span class="bg-lg-down-black width-22 height-22 bg-primary position-absolute d-flex align-items-center justify-content-center rounded-circle left-12 top-8 font-weight-bold font-size-12">2</span>
												<span class="d-none d-xl-block font-weight-bold font-size-16 text-gray-90 ml-3">$1785.00</span>
											</a>
										</li>
									</ul>
								</div>
							</div>
							<!-- End Header Icons -->
						</div>
					</div>
				</div>
				<!-- End Logo-Search-header-icons -->

				<!-- Primary-menu-wide -->
				<div class="d-none d-xl-block bg-primary">
					<div class="container">
						<div class="min-height-45">
							<!-- Nav -->
							<nav class="js-mega-menu navbar navbar-expand-md u-header__navbar u-header__navbar--wide u-header__navbar--no-space">
								<!-- Navigation -->
								<div id="navBar" class="collapse navbar-collapse u-header__navbar-collapse">
									<ul class="navbar-nav u-header__navbar-nav d-flex justify-content-between">
										<!-- Home -->
										<li class="nav-item hs-has-mega-menu u-header__nav-item" data-event="hover" data-animation-in="slideInUp" data-animation-out="fadeOut" data-position="left">
											<a id="homeMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false">Home</a>

											<!-- Home - Mega Menu -->
											<div class="hs-mega-menu w-100 u-header__sub-menu" aria-labelledby="homeMegaMenu">
												<div class="row u-header__mega-menu-wrapper">
													<div class="col-md-3">
														<span class="u-header__sub-menu-title">About Zaanaa Store</span>
														<ul class="u-header__sub-menu-nav-group">
															<li><a href="{{ route('home') }}" class="nav-link u-header__sub-menu-nav-link">Home</a></li>
															<li><a href="{{ route('about') }}" class="nav-link u-header__sub-menu-nav-link">About</a></li>
															<li><a href="{{ route('contact') }}" class="nav-link u-header__sub-menu-nav-link">Contact</a></li>
															<li><a href="{{ route('faq') }}" class="nav-link u-header__sub-menu-nav-link">FAQ</a></li>
															<li><a href="{{ route('terms') }}" class="nav-link u-header__sub-menu-nav-link">Terms and Conditions</a></li>
														</ul>
													</div>
													<div class="col-md-3">
														<span class="u-header__sub-menu-title">Shop</span>
														<ul class="u-header__sub-menu-nav-group mb-3">
															<li><a href="{{ route('productArchive') }}" class="nav-link u-header__sub-menu-nav-link">Products</a></li>
														</ul>
														<span class="u-header__sub-menu-title">Product Categories</span>
														<ul class="u-header__sub-menu-nav-group mb-3">
															<li><a href="{{ route('categories') }}" class="nav-link u-header__sub-menu-nav-link">Product Categories</a></li>
														</ul>
														<span class="u-header__sub-menu-title">Single Product</span>
														<ul class="u-header__sub-menu-nav-group">
															<li><a href="{{ route('productSingle',2) }}" class="nav-link u-header__sub-menu-nav-link">Single Product</a></li>
														</ul>
													</div>
													<div class="col-md-3">
														<span class="u-header__sub-menu-title">Profile</span>
														<ul class="u-header__sub-menu-nav-group">
															<li><a href="{{ route('profileCart') }}" class="nav-link u-header__sub-menu-nav-link">Cart</a></li>
															<li><a href="{{ route('profileCheckout') }}" class="nav-link u-header__sub-menu-nav-link">Checkout</a></li>
															<li><a href="{{ route('profileWishlist') }}" class="nav-link u-header__sub-menu-nav-link">Wishlist</a></li>
															<li><a href="{{ route('productCompare') }}" class="nav-link u-header__sub-menu-nav-link">Compare</a></li>
														</ul>
													</div>
													<div class="col-md-3">
														<span class="u-header__sub-menu-title">Blog</span>
														<ul class="u-header__sub-menu-nav-group mb-3">
															<li><a href="{{ route('blogArchive') }}" class="nav-link u-header__sub-menu-nav-link">Blog</a></li>
															<li><a href="{{ route('blogSingle',2) }}" class="nav-link u-header__sub-menu-nav-link">Single Blog Post</a></li>
														</ul>
													</div>
												</div>
											</div>
											<!-- End Home - Mega Menu -->
										</li>
										<!-- End Home -->

										<!-- Categories -->
										<li class="nav-item hs-has-mega-menu u-header__nav-item" data-event="hover" data-animation-in="slideInUp" data-animation-out="fadeOut">
											<a id="MoviesGamesMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false">Movies & Games</a>

											<!-- Movies & Games - Mega Menu -->
											<div class="hs-mega-menu w-100 u-header__sub-menu" aria-labelledby="MoviesGamesMegaMenu">
												<div class="row u-header__mega-menu-wrapper">
													<div class="col-md-4">
														<div class="row">
															<div class="col">
																<a href="#" class="d-block">
																	<img class="img-fluid" src="/img/300X275/img9.jpg" alt="Image Description">
																</a>
															</div>
															<div class="col">
																<span class="u-header__sub-menu-title">Movies &amp; TV Shows</span>
																<ul class="u-header__sub-menu-nav-group">
																	<li><a href="#" class="nav-link u-header__sub-menu-nav-link">All Movies &amp; TV Shows</a></li>
																	<li><a href="#" class="nav-link u-header__sub-menu-nav-link">Blu-ray</a></li>
																	<li><a href="#" class="nav-link u-header__sub-menu-nav-link">Latest Movies</a></li>
																	<li><a href="#" class="nav-link u-header__sub-menu-nav-link">All English</a></li>
																	<li><a href="#" class="nav-link u-header__sub-menu-nav-link">All Hindi</a></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="col-md-4">
														<div class="row">
															<div class="col">
																<a href="#" class="d-block">
																	<img class="img-fluid" src="/img/300X275/img10.jpg" alt="Image Description">
																</a>
															</div>
															<div class="col">
																<span class="u-header__sub-menu-title">Video Games</span>
																<ul class="u-header__sub-menu-nav-group">
																	<li><a href="#" class="nav-link u-header__sub-menu-nav-link">Games &amp; Accessories</a></li>
																	<li><a href="#" class="nav-link u-header__sub-menu-nav-link">PC Games</a></li>
																	<li><a href="#" class="nav-link u-header__sub-menu-nav-link">New Releases</a></li>
																	<li><a href="#" class="nav-link u-header__sub-menu-nav-link">Consoles</a></li>
																	<li><a href="#" class="nav-link u-header__sub-menu-nav-link">Accessories</a></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="col-md-4">
														<div class="row">
															<div class="col">
																<a href="#" class="d-block">
																	<img class="img-fluid" src="/img/300X275/img11.jpg" alt="Image Description">
																</a>
															</div>
															<div class="col">
																<span class="u-header__sub-menu-title">Music</span>
																<ul class="u-header__sub-menu-nav-group">
																	<li><a href="#" class="nav-link u-header__sub-menu-nav-link">5.1 Speaker</a></li>
																	<li><a href="#" class="nav-link u-header__sub-menu-nav-link">Home Theatres</a></li>
																	<li><a href="#" class="nav-link u-header__sub-menu-nav-link">Soundbars</a></li>
																	<li><a href="#" class="nav-link u-header__sub-menu-nav-link">Accessories</a></li>
																	<li><a href="#" class="nav-link u-header__sub-menu-nav-link">Consoles</a></li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!-- End Categories - Mega Menu -->
										</li>
										<!-- End Category -->
									</ul>
								</div>
								<!-- End Navigation -->
							</nav>
							<!-- End Nav -->
						</div>
					</div>
				</div>
				<!-- End Primary-menu-wide -->
			</div>
		</header>
		<!-- ========== END HEADER ========== -->

		<!-- ========== MAIN CONTENT ========== -->
		<main id="content" role="main">
			@yield('content')
		</main>

		<!-- ========== END MAIN CONTENT ========== -->

		<!-- ========== FOOTER ========== -->
		<footer>
			<!-- Footer-top-widget -->
			<div class="container d-none d-lg-block mb-3">
				<div class="row">
					<div class="col-wd-3 col-lg-4">
						<div class="widget-column">
							<div class="border-bottom border-color-1 mb-5">
								<h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">Featured Products</h3>
							</div>
							<ul class="list-unstyled products-group">
                @foreach($featured as $p)
                  @for ($i = 0; $i < 3; $i++)
                    <li class="product-item product-item__list row no-gutters mb-6 remove-divider">
                      <div class="col-auto">
                        <a href="{{ route('productSingle',$p->id)}}" class="d-block width-75 text-center"><img class="img-fluid" src="{{ Voyager::image(json_decode($p->picture)[0]) }}" alt="Image Description"></a>
                      </div>
                      <div class="col pl-4 d-flex flex-column">
                        <h5 class="product-item__title mb-0"><a href="{{ route('productSingle',$p->id)}}" class="text-blue font-weight-bold">{{$p->name}}</a></h5>
                        <div class="prodcut-price d-flex justify-content-between w-100 pr-2">
                          <div class="h6 text-gray-100">{{$p->unitPriceER}}¥</div>
                          <div class="h6 text-gray-100">{{$p->unitPriceUB}}₮</div>
                        </div>
                      </div>
                    </li>
                  @endfor
                @endforeach
							</ul>
						</div>
					</div>
					<div class="col-wd-3 col-lg-4">
						<div class="border-bottom border-color-1 mb-5">
							<h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">Onsale Products</h3>
						</div>
						<ul class="list-unstyled products-group">
                @foreach($sale as $p)
                  @for ($i = 0; $i < 3; $i++)
                    <li class="product-item product-item__list row no-gutters mb-6 remove-divider">
                      <div class="col-auto">
                        <a href="{{ route('productSingle',$p->id)}}" class="d-block width-75 text-center"><img class="img-fluid" src="{{ Voyager::image(json_decode($p->picture)[0]) }}" alt="Image Description"></a>
                      </div>
                      <div class="col pl-4 d-flex flex-column">
                        <h5 class="product-item__title mb-0"><a href="{{ route('productSingle',$p->id)}}" class="text-blue font-weight-bold">{{$p->name}}</a></h5>
                        <div class="prodcut-price d-flex justify-content-between w-100 pr-2">
                          <div class="h6 text-gray-100">{{$p->unitPriceER}}¥</div>
                          <div class="h6 text-gray-100">{{$p->unitPriceUB}}₮</div>
                        </div>
                      </div>
                    </li>
                  @endfor
                @endforeach
						</ul>
					</div>
					<div class="col-wd-3 col-lg-4">
						<div class="border-bottom border-color-1 mb-5">
							<h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">Top Rated Products</h3>
						</div>
						<ul class="list-unstyled products-group">
                @foreach($top as $p)
                  @for ($i = 0; $i < 3; $i++)
                    <li class="product-item product-item__list row no-gutters mb-6 remove-divider">
                      <div class="col-auto">
                        <a href="{{ route('productSingle',$p->id)}}" class="d-block width-75 text-center"><img class="img-fluid" src="{{ Voyager::image(json_decode($p->picture)[0]) }}" alt="Image Description"></a>
                      </div>
                      <div class="col pl-4 d-flex flex-column">
                        <h5 class="product-item__title mb-0"><a href="{{ route('productSingle',$p->id)}}" class="text-blue font-weight-bold">{{$p->name}}</a></h5>
                        <div class="prodcut-price d-flex justify-content-between w-100 pr-2">
                          <div class="h6 text-gray-100">{{$p->unitPriceER}}¥</div>
                          <div class="h6 text-gray-100">{{$p->unitPriceUB}}₮</div>
                        </div>
                      </div>
                    </li>
                  @endfor
                @endforeach
						</ul>
					</div>
					<div class="col-wd-3 d-none d-wd-block">
						<a href="../shop/shop.html" class="d-block"><img class="img-fluid" src="/img/330X360/img1.jpg" alt="Image Description"></a>
					</div>
				</div>
			</div>
			<!-- End Footer-top-widget -->
			<!-- Footer-newsletter -->
			<div class="bg-primary py-3">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-7 mb-md-3 mb-lg-0">
							<div class="row align-items-center">
								<div class="col-auto flex-horizontal-center">
									<i class="ec ec-newsletter font-size-40"></i>
									<h2 class="font-size-20 mb-0 ml-3">Sign up to Newsletter</h2>
								</div>
							</div>
						</div>
						<div class="col-lg-5">
							<!-- Subscribe Form -->
							<form class="js-validate js-form-message">
								<label class="sr-only" for="subscribeSrEmail">Email address</label>
								<div class="input-group input-group-pill">
									<input type="email" class="form-control border-0 height-40" name="email" id="subscribeSrEmail" placeholder="Email address" aria-label="Email address" aria-describedby="subscribeButton" required
									 data-msg="Please enter a valid email address.">
									<div class="input-group-append">
										<button type="submit" class="btn btn-dark btn-sm-wide height-40 py-2" id="subscribeButton">Sign Up</button>
									</div>
								</div>
							</form>
							<!-- End Subscribe Form -->
						</div>
					</div>
				</div>
			</div>
			<!-- End Footer-newsletter -->
			<!-- Footer-bottom-widgets -->
			<div class="pt-8 pb-4 bg-gray-13">
				<div class="container mt-1">
					<div class="row">
						<div class="col-lg-5">
							<div class="mb-6">
								<a href="#" class="d-inline-block">
									<img src="/img/logo5.png" alt="Company Logo" style="max-width: 300px;">
								</a>
							</div>
							<div class="mb-4">
								<div class="row no-gutters">
									<div class="col-auto">
										<i class="ec ec-support text-primary font-size-56"></i>
									</div>
									<div class="col pl-3">
										<div class="font-size-13 font-weight-light">Got questions? Call us 24/7!</div>
										<a href="tel:+8618804798666" class="font-size-20 text-gray-90">(976) 95250211</a>
									</div>
								</div>
							</div>
							<div class="mb-4">
								<h6 class="mb-1 font-weight-bold">Contact info</h6>
								<address class="">
									17 Princess Road, London, Greater London NW1 8JR, UK
								</address>
							</div>
							<div class="my-4 my-md-4">
								<ul class="list-inline mb-0 opacity-7">
									<li class="list-inline-item mr-0">
										<a class="btn font-size-20 btn-icon btn-soft-dark btn-bg-transparent rounded-circle" href="#">
											<span class="fab fa-facebook-f btn-icon__inner"></span>
										</a>
									</li>
									<li class="list-inline-item mr-0">
										<a class="btn font-size-20 btn-icon btn-soft-dark btn-bg-transparent rounded-circle" href="#">
											<span class="fab fa-google btn-icon__inner"></span>
										</a>
									</li>
									<li class="list-inline-item mr-0">
										<a class="btn font-size-20 btn-icon btn-soft-dark btn-bg-transparent rounded-circle" href="#">
											<span class="fab fa-twitter btn-icon__inner"></span>
										</a>
									</li>
									<li class="list-inline-item mr-0">
										<a class="btn font-size-20 btn-icon btn-soft-dark btn-bg-transparent rounded-circle" href="#">
											<span class="fab fa-github btn-icon__inner"></span>
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-lg-7">
							<div class="row">
								<div class="col-12 col-md mb-4 mb-md-0">
									<h6 class="mb-3 font-weight-bold">Find it Fast</h6>
									<!-- List Group -->
									<ul class="list-group list-group-flush list-group-borderless mb-0 list-group-transparent">
										<li><a class="list-group-item list-group-item-action" href="{{ route('productArchive') }}">Product Categories</a></li>
										<li><a class="list-group-item list-group-item-action" href="{{ route('blogArchive') }}">Blog Categories</a></li>
									</ul>
									<!-- End List Group -->
								</div>

								<div class="col-12 col-md mb-4 mb-md-0">
									<h6 class="mb-3 font-weight-bold">Customer Care</h6>
									<!-- List Group -->
									<ul class="list-group list-group-flush list-group-borderless mb-0 list-group-transparent">
										<li><a class="list-group-item list-group-item-action" href="{{ route('home') }}">My Account</a></li>
										<li><a class="list-group-item list-group-item-action" href="{{ route('profileWishlist') }}">Wish List</a></li>
										<li><a class="list-group-item list-group-item-action" href="{{ route('contact') }}">Contact Us</a></li>
										<li><a class="list-group-item list-group-item-action" href="{{ route('faq') }}">FAQs</a></li>
										<li><a class="list-group-item list-group-item-action" href="{{ route('terms') }}">Terms and Conditions</a></li>
									</ul>
									<!-- End List Group -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Footer-bottom-widgets -->
		</footer>
		<!-- ========== END FOOTER ========== -->

		<!-- ========== SECONDARY CONTENTS ========== -->
		<!-- Account Sidebar Navigation -->
		<aside id="sidebarContent" class="u-sidebar u-sidebar__lg" aria-labelledby="sidebarNavToggler">
			<div class="u-sidebar__scroller">
				<div class="u-sidebar__container">
					<div class="js-scrollbar u-header-sidebar__footer-offset pb-3">
						<!-- Toggle Button -->
						<div class="d-flex align-items-center pt-4 px-7">
							<button type="button" class="close ml-auto" aria-controls="sidebarContent" aria-haspopup="true" aria-expanded="false" data-unfold-event="click" data-unfold-hide-on-scroll="false" data-unfold-target="#sidebarContent"
							 data-unfold-type="css-animation" data-unfold-animation-in="fadeInRight" data-unfold-animation-out="fadeOutRight" data-unfold-duration="500">
								<i class="ec ec-close-remove"></i>
							</button>
						</div>
						<!-- End Toggle Button -->

						<!-- Content -->
						<div class="js-scrollbar u-sidebar__body">
							<div class="u-sidebar__content u-header-sidebar__content">
								<!-- Login -->
								<form class="js-validate" method="POST" action="{{ route('login') }}">
									@csrf
									<div id="login" data-target-group="idForm">

										<!-- Title -->
										<header class="text-center mb-7">
											<h2 class="h4 mb-0">Welcome Back!</h2>
											<p>Login to manage your account.</p>
										</header>
										<!-- End Title -->

										<!-- Form Group -->
										<div class="form-group">
											<div class="js-form-message js-focus-state">
												<label class="sr-only" for="signinEmail">Email</label>
												<div class="input-group">
													<div class="input-group-prepend">
														<span class="input-group-text" id="signinEmailLabel">
															<span class="fas fa-user"></span>
														</span>
													</div>
													<input type="email" class="form-control" name="email" id="signinEmail" placeholder="Email" aria-label="Email" aria-describedby="signinEmailLabel" required
													 data-msg="Please enter a valid email address."
													 value="{{ old('email') }}"
													 data-error-class="u-has-error" data-success-class="u-has-success">
												</div>
												@error('email')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
												@enderror
											</div>
										</div>
										<!-- End Form Group -->

										<!-- Form Group -->
										<div class="form-group">
											<div class="js-form-message js-focus-state">
												<label class="sr-only" for="signinPassword">Password</label>
												<div class="input-group">
													<div class="input-group-prepend">
														<span class="input-group-text" id="signinPasswordLabel">
															<span class="fas fa-lock"></span>
														</span>
													</div>
													<input type="password" class="form-control" name="password" id="signinPassword" placeholder="Password" aria-label="Password" aria-describedby="signinPasswordLabel" required
													 data-msg="Your password is invalid. Please try again." data-error-class="u-has-error" data-success-class="u-has-success">
												</div>
												@error('password')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
												@enderror
											</div>
										</div>
										<!-- End Form Group -->

										<div class="d-flex justify-content-end mb-4">
											<a class="js-animation-link small link-muted" href="javascript:;" data-target="#forgotPassword" data-link-group="idForm" data-animation-in="slideInUp">Forgot Password?</a>
										</div>

										<div class="mb-2">
											<button type="submit" class="btn btn-block btn-sm btn-primary transition-3d-hover">Login</button>
										</div>

										<div class="text-center mb-4">
											<span class="small text-muted">Do not have an account?</span>
											<a class="js-animation-link small text-dark" href="javascript:;" data-target="#signup" data-link-group="idForm" data-animation-in="slideInUp">Signup
											</a>
										</div>

										<div class="text-center">
											<span class="u-divider u-divider--xs u-divider--text mb-4">OR</span>
										</div>

										<!-- Login Buttons -->
										<div class="d-flex">
											<a class="btn btn-block btn-sm btn-soft-facebook transition-3d-hover mr-1" href="#">
												<span class="fab fa-facebook-square mr-1"></span>
												Facebook
											</a>
											<a class="btn btn-block btn-sm btn-soft-google transition-3d-hover ml-1 mt-0" href="#">
												<span class="fab fa-google mr-1"></span>
												Google
											</a>
										</div>
										<!-- End Login Buttons -->
									</div>
								</form>
								<!-- End Login -->

								<!-- Signup -->
								<form class="js-validate" method="POST" action="{{ route('register') }}">
									@csrf
									<div id="signup" style="display: none; opacity: 0;" data-target-group="idForm">
										<!-- Title -->
										<header class="text-center mb-7">
											<h2 class="h4 mb-0">Welcome to Electro.</h2>
											<p>Fill out the form to get started.</p>
										</header>
										<!-- End Title -->

										<!-- Form Group -->
										<div class="form-group">
											<div class="js-form-message js-focus-state">
												<label class="sr-only" for="signupName">Name</label>
												<div class="input-group">
													<div class="input-group-prepend">
														<span class="input-group-text" id="signupNameLabel">
															<span class="fas fa-user"></span>
														</span>
													</div>
													<input type="text" class="form-control" name="name" id="signupName" placeholder="Name" aria-label="Name" aria-describedby="signupNameLabel" required
													 value="{{old('name')}}"
													 data-msg="Please enter a valid name." data-error-class="u-has-error" data-success-class="u-has-success">
												</div>
											</div>
										</div>
										<!-- End Input -->

										<!-- Form Group -->
										<div class="form-group">
											<div class="js-form-message js-focus-state">
												<label class="sr-only" for="signupEmail">Email</label>
												<div class="input-group">
													<div class="input-group-prepend">
														<span class="input-group-text" id="signupEmailLabel">
															<span class="fas fa-user"></span>
														</span>
													</div>
													<input type="email" class="form-control" name="email" id="signupEmail" placeholder="Email" aria-label="Email" aria-describedby="signupEmailLabel" required
													 value="{{old('email')}}"
													 data-msg="Please enter a valid email address." data-error-class="u-has-error" data-success-class="u-has-success">
												</div>
											</div>
										</div>
										<!-- End Input -->

										<!-- Form Group -->
										<div class="form-group">
											<div class="js-form-message js-focus-state">
												<label class="sr-only" for="signupPassword">Password</label>
												<div class="input-group">
													<div class="input-group-prepend">
														<span class="input-group-text" id="signupPasswordLabel">
															<span class="fas fa-lock"></span>
														</span>
													</div>
													<input type="password" class="form-control" name="password" id="signupPassword" placeholder="Password" aria-label="Password" aria-describedby="signupPasswordLabel" required
													 data-msg="Your password is invalid. Please try again." data-error-class="u-has-error" data-success-class="u-has-success">
												</div>
											</div>
										</div>
										<!-- End Input -->

										<!-- Form Group -->
										<div class="form-group">
											<div class="js-form-message js-focus-state">
												<label class="sr-only" for="signupConfirmPassword">Confirm Password</label>
												<div class="input-group">
													<div class="input-group-prepend">
														<span class="input-group-text" id="signupConfirmPasswordLabel">
															<span class="fas fa-key"></span>
														</span>
													</div>
													<input type="password" class="form-control" name="password_confirmation" id="signupConfirmPassword" placeholder="Confirm Password" aria-label="Confirm Password"
													 aria-describedby="signupConfirmPasswordLabel" required data-msg="Password does not match the confirm password." data-error-class="u-has-error" data-success-class="u-has-success">
												</div>
											</div>
										</div>
										<!-- End Input -->

										<div class="mb-2">
											<button type="submit" class="btn btn-block btn-sm btn-primary transition-3d-hover">Get Started</button>
										</div>

										<div class="text-center mb-4">
											<span class="small text-muted">Already have an account?</span>
											<a class="js-animation-link small text-dark" href="javascript:;" data-target="#login" data-link-group="idForm" data-animation-in="slideInUp">Login
											</a>
										</div>

										<div class="text-center">
											<span class="u-divider u-divider--xs u-divider--text mb-4">OR</span>
										</div>

										<!-- Login Buttons -->
										<div class="d-flex">
											<a class="btn btn-block btn-sm btn-soft-facebook transition-3d-hover mr-1" href="#">
												<span class="fab fa-facebook-square mr-1"></span>
												Facebook
											</a>
											<a class="btn btn-block btn-sm btn-soft-google transition-3d-hover ml-1 mt-0" href="#">
												<span class="fab fa-google mr-1"></span>
												Google
											</a>
										</div>
										<!-- End Login Buttons -->
									</div>
								</form>
								<!-- End Signup -->

								<!-- Forgot Password -->
								<form class="js-validate" method="POST" action="auth/forgotPassword">
									@csrf
									<div id="forgotPassword" style="display: none; opacity: 0;" data-target-group="idForm">
										<!-- Title -->
										<header class="text-center mb-7">
											<h2 class="h4 mb-0">Recover Password.</h2>
											<p>Enter your email address and an email with instructions will be sent to you.</p>
										</header>
										<!-- End Title -->

										<!-- Form Group -->
										<div class="form-group">
											<div class="js-form-message js-focus-state">
												<label class="sr-only" for="recoverEmail">Your email</label>
												<div class="input-group">
													<div class="input-group-prepend">
														<span class="input-group-text" id="recoverEmailLabel">
															<span class="fas fa-user"></span>
														</span>
													</div>
													<input type="email" class="form-control" name="email" id="recoverEmail" placeholder="Your email" aria-label="Your email" aria-describedby="recoverEmailLabel" required
													 data-msg="Please enter a valid email address." data-error-class="u-has-error" data-success-class="u-has-success">
												</div>
											</div>
										</div>
										<!-- End Form Group -->

										<div class="mb-2">
											<button type="submit" class="btn btn-block btn-sm btn-primary transition-3d-hover">Recover Password</button>
										</div>

										<div class="text-center mb-4">
											<span class="small text-muted">Remember your password?</span>
											<a class="js-animation-link small" href="javascript:;" data-target="#login" data-link-group="idForm" data-animation-in="slideInUp">Login
											</a>
										</div>
									</div>
								</form>
								<!-- End Forgot Password -->
							</div>
						</div>
						<!-- End Content -->
					</div>
				</div>
			</div>
		</aside>
		<!-- End Account Sidebar Navigation -->
		<!-- ========== END SECONDARY CONTENTS ========== -->

		<!-- Go to Top -->
		<a class="js-go-to u-go-to" href="#" data-position='{"bottom": 15, "right": 15 }' data-type="fixed" data-offset-top="400" data-compensation="#header" data-show-effect="slideInUp" data-hide-effect="slideOutDown">
			<span class="fas fa-arrow-up u-go-to__inner"></span>
		</a>
		<!-- End Go to Top -->

		<!-- JS Global Compulsory -->
		<script src="/vendor/jquery/dist/jquery.min.js"></script>
		<script src="/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
		<script src="/vendor/popper.js/dist/umd/popper.min.js"></script>
		<script src="/vendor/bootstrap/bootstrap.min.js"></script>

		<!-- JS Implementing Plugins -->
		<script src="/vendor/appear.js"></script>
		<script src="/vendor/jquery.countdown.min.js"></script>
		<script src="/vendor/hs-megamenu/src/hs.megamenu.js"></script>
		<script src="/vendor/svg-injector/dist/svg-injector.min.js"></script>
		<script src="/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
		<script src="/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
		<script src="/vendor/fancybox/jquery.fancybox.min.js"></script>
		<script src="/vendor/typed.js/lib/typed.min.js"></script>
		<script src="/vendor/slick-carousel/slick/slick.js"></script>
		<script src="/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>

		<!-- JS Electro -->
		<script src="/js/hs.core.js"></script>
		<script src="/js/components/hs.countdown.js"></script>
		<script src="/js/components/hs.header.js"></script>
		<script src="/js/components/hs.hamburgers.js"></script>
		<script src="/js/components/hs.unfold.js"></script>
		<script src="/js/components/hs.focus-state.js"></script>
		<script src="/js/components/hs.malihu-scrollbar.js"></script>
		<script src="/js/components/hs.validation.js"></script>
		<script src="/js/components/hs.fancybox.js"></script>
		<script src="/js/components/hs.onscroll-animation.js"></script>
		<script src="/js/components/hs.slick-carousel.js"></script>
		<script src="/js/components/hs.show-animation.js"></script>
		<script src="/js/components/hs.svg-injector.js"></script>
		<script src="/js/components/hs.go-to.js"></script>
		<script src="/js/components/hs.selectpicker.js"></script>

		<!-- JS Plugins Init. -->
		<script>
			$(window).on('load', function() {
				// initialization of HSMegaMenu component
				$('.js-mega-menu').HSMegaMenu({
					event: 'hover',
					direction: 'horizontal',
					pageContainer: $('.container'),
					breakpoint: 767.98,
					hideTimeOut: 0
				});
			});

			$(document).on('ready', function() {
				// initialization of header
				$.HSCore.components.HSHeader.init($('#header'));

				// initialization of animation
				$.HSCore.components.HSOnScrollAnimation.init('[data-animation]');

				// initialization of unfold component
				$.HSCore.components.HSUnfold.init($('[data-unfold-target]'), {
					afterOpen: function() {
						$(this).find('input[type="search"]').focus();
					}
				});

				// initialization of popups
				$.HSCore.components.HSFancyBox.init('.js-fancybox');

				// initialization of countdowns
				var countdowns = $.HSCore.components.HSCountdown.init('.js-countdown', {
					yearsElSelector: '.js-cd-years',
					monthsElSelector: '.js-cd-months',
					daysElSelector: '.js-cd-days',
					hoursElSelector: '.js-cd-hours',
					minutesElSelector: '.js-cd-minutes',
					secondsElSelector: '.js-cd-seconds'
				});

				// initialization of malihu scrollbar
				$.HSCore.components.HSMalihuScrollBar.init($('.js-scrollbar'));

				// initialization of forms
				$.HSCore.components.HSFocusState.init();

				// initialization of form validation
				$.HSCore.components.HSValidation.init('.js-validate', {
					rules: {
						confirmPassword: {
							equalTo: '#signupPassword'
						}
					}
				});

				// initialization of show animations
				$.HSCore.components.HSShowAnimation.init('.js-animation-link');

				// initialization of fancybox
				$.HSCore.components.HSFancyBox.init('.js-fancybox');

				// initialization of slick carousel
				$.HSCore.components.HSSlickCarousel.init('.js-slick-carousel');

				// initialization of go to
				$.HSCore.components.HSGoTo.init('.js-go-to');

				// initialization of hamburgers
				$.HSCore.components.HSHamburgers.init('#hamburgerTrigger');

				// initialization of unfold component
				$.HSCore.components.HSUnfold.init($('[data-unfold-target]'), {
					beforeClose: function() {
						$('#hamburgerTrigger').removeClass('is-active');
					},
					afterClose: function() {
						$('#headerSidebarList .collapse.show').collapse('hide');
					}
				});

				$('#headerSidebarList [data-toggle="collapse"]').on('click', function(e) {
					e.preventDefault();

					var target = $(this).data('target');

					if ($(this).attr('aria-expanded') === "true") {
						$(target).collapse('hide');
					} else {
						$(target).collapse('show');
					}
				});

				// initialization of unfold component
				$.HSCore.components.HSUnfold.init($('[data-unfold-target]'));

				// initialization of select picker
				$.HSCore.components.HSSelectPicker.init('.js-select');
			});
		</script>
	</body>

</html>
