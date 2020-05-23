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
					<li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">FAQ</li>
				</ol>
			</nav>
		</div>
		<!-- End breadcrumb -->
	</div>
</div>
<!-- End breadcrumb -->

<div class="container">
	<div class="mb-12 text-center">
		<h1>Frequently Asked Questions</h1>
		<p class="text-gray-44">This Agreement was last modified on 18th february 2019</p>
	</div>
	<div class="border-bottom border-color-1 mb-8 rounded-0">
		<h3 class="section-title mb-0 pb-2 font-size-25">Shipping Information</h3>
	</div>
	<div class="row mb-8">
		<div class="col-lg-6 mb-5 mb-lg-8">
			<h3 class="font-size-18 font-weight-semi-bold text-gray-39 mb-4">What Shipping Methods Are Available?</h3>
			<p class="text-gray-90">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sapien lorem, consectetur et turpis id, blandit interdum metus. Morbi sed ligula id elit mollis efficitur ut nec ligula. Proin erat magna,
				pellentesque at elementum at, eleifend a tortor.</p>
		</div>
		<div class="col-lg-6 mb-5 mb-lg-8">
			<h3 class="font-size-18 font-weight-semi-bold text-gray-39 mb-4">How Long Will it Take To Get My Package?</h3>
			<p class="text-gray-90">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sapien lorem, consectetur et turpis id, blandit interdum metus. Morbi sed ligula id elit mollis efficitur ut nec ligula. Proin erat magna,
				pellentesque at elementum at, eleifend a tortor.</p>
		</div>
		<div class="col-lg-6 mb-5 mb-lg-8">
			<h3 class="font-size-18 font-weight-semi-bold text-gray-39 mb-4">How Do I Track My Order?</h3>
			<p class="text-gray-90">Integer ex turpis, venenatis vitae nibh vel, vestibulum maximus quam. Ut pretium orci ac vestibulum porttitor. Fusce tempus diam quis justo porttitor gravida.</p>
		</div>
		<div class="col-lg-6 mb-5 mb-lg-8">
			<h3 class="font-size-18 font-weight-semi-bold text-gray-39 mb-4">Do I Need A Account To Place Order?</h3>
			<p class="text-gray-90">Integer ex turpis, venenatis vitae nibh vel, vestibulum maximus quam. Ut pretium orci ac vestibulum porttitor. Fusce tempus diam quis justo porttitor gravida.</p>
		</div>
	</div>
	<div class="mb-12 text-center">
		<h1>FAQ Second Version</h1>
	</div>
	<!-- Basics Accordion -->
	<div id="basicsAccordion" class="mb-12">
		<!-- Card -->
		<div class="card mb-3 border-top-0 border-left-0 border-right-0 border-color-1 rounded-0">
			<div class="card-header card-collapse bg-transparent-on-hover border-0" id="basicsHeadingOne">
				<h5 class="mb-0">
					<button type="button" class="px-0 btn btn-link btn-block d-flex justify-content-between card-btn py-3 font-size-25 border-0" data-toggle="collapse" data-target="#basicsCollapseOner" aria-expanded="true"
					 aria-controls="basicsCollapseOner">
						What Shipping Methods Are Available?

						<span class="card-btn-arrow">
							<i class="fas fa-chevron-down text-gray-90 font-size-18"></i>
						</span>
					</button>
				</h5>
			</div>
			<div id="basicsCollapseOner" class="collapse show" aria-labelledby="basicsHeadingOne" data-parent="#basicsAccordion">
				<div class="card-body pl-0 pb-8">
					<p class="mb-0">In egestas, libero vitae scelerisque tristique, turpis augue faucibus dolor, at aliquet ligula massa at justo. Donec viverra tortor quis tortor pretium, in pretium risus finibus. Integer viverra pretium auctor.
						Aliquam eget convallis eros, varius sagittis nulla. Suspendisse potenti. Aenean consequat ex sit amet metus ultrices tristique. Nam ac nunc augue. Suspendisse finibus in dolor eget volutpat.</p>
				</div>
			</div>
		</div>
		<!-- End Card -->

		<!-- Card -->
		<div class="card mb-3 border-top-0 border-left-0 border-right-0 border-color-1 rounded-0">
			<div class="card-header card-collapse bg-transparent-on-hover border-0" id="basicsHeadingTwo">
				<h5 class="mb-0">
					<button type="button" class="px-0 btn btn-link btn-block d-flex justify-content-between card-btn collapsed py-3 font-size-25 border-0" data-toggle="collapse" data-target="#basicsCollapseTwo" aria-expanded="false"
					 aria-controls="basicsCollapseTwo">
						How Long Will it Take To Get My Package?

						<span class="card-btn-arrow">
							<i class="fas fa-chevron-down text-gray-90 font-size-18"></i>
						</span>
					</button>
				</h5>
			</div>
			<div id="basicsCollapseTwo" class="collapse" aria-labelledby="basicsHeadingTwo" data-parent="#basicsAccordion">
				<div class="card-body pl-0 pb-8">
					<p class="mb-0">In egestas, libero vitae scelerisque tristique, turpis augue faucibus dolor, at aliquet ligula massa at justo. Donec viverra tortor quis tortor pretium, in pretium risus finibus. Integer viverra pretium auctor.
						Aliquam eget convallis eros, varius sagittis nulla. Suspendisse potenti. Aenean consequat ex sit amet metus ultrices tristique. Nam ac nunc augue. Suspendisse finibus in dolor eget volutpat.</p>
				</div>
			</div>
		</div>
		<!-- End Card -->

		<!-- Card -->
		<div class="card mb-3 border-top-0 border-left-0 border-right-0 border-color-1 rounded-0">
			<div class="card-header card-collapse bg-transparent-on-hover border-0" id="basicsHeadingThree">
				<h5 class="mb-0">
					<button type="button" class="px-0 btn btn-link btn-block d-flex justify-content-between card-btn collapsed py-3 font-size-25 border-0" data-toggle="collapse" data-target="#basicsCollapseThree" aria-expanded="false"
					 aria-controls="basicsCollapseThree">
						How Do I Track My Order?

						<span class="card-btn-arrow">
							<i class="fas fa-chevron-down text-gray-90 font-size-18"></i>
						</span>
					</button>
				</h5>
			</div>
			<div id="basicsCollapseThree" class="collapse" aria-labelledby="basicsHeadingThree" data-parent="#basicsAccordion">
				<div class="card-body pl-0 pb-8">
					<p class="mb-0">In egestas, libero vitae scelerisque tristique, turpis augue faucibus dolor, at aliquet ligula massa at justo. Donec viverra tortor quis tortor pretium, in pretium risus finibus. Integer viverra pretium auctor.
						Aliquam eget convallis eros, varius sagittis nulla. Suspendisse potenti. Aenean consequat ex sit amet metus ultrices tristique. Nam ac nunc augue. Suspendisse finibus in dolor eget volutpat.</p>
				</div>
			</div>
		</div>
		<!-- End Card -->

		<!-- Card -->
		<div class="card mb-3 border-top-0 border-left-0 border-right-0 border-color-1 rounded-0">
			<div class="card-header card-collapse bg-transparent-on-hover border-0" id="basicsHeadingFour">
				<h5 class="mb-0">
					<button type="button" class="px-0 btn btn-link btn-block d-flex justify-content-between card-btn collapsed py-3 font-size-25 border-0" data-toggle="collapse" data-target="#basicsCollapseFour" aria-expanded="false"
					 aria-controls="basicsCollapseFour">
						How Do I Place an Order?

						<span class="card-btn-arrow">
							<i class="fas fa-chevron-down text-gray-90 font-size-18"></i>
						</span>
					</button>
				</h5>
			</div>
			<div id="basicsCollapseFour" class="collapse" aria-labelledby="basicsHeadingFour" data-parent="#basicsAccordion">
				<div class="card-body pl-0 pb-8">
					<p class="mb-0">In egestas, libero vitae scelerisque tristique, turpis augue faucibus dolor, at aliquet ligula massa at justo. Donec viverra tortor quis tortor pretium, in pretium risus finibus. Integer viverra pretium auctor.
						Aliquam eget convallis eros, varius sagittis nulla. Suspendisse potenti. Aenean consequat ex sit amet metus ultrices tristique. Nam ac nunc augue. Suspendisse finibus in dolor eget volutpat.</p>
				</div>
			</div>
		</div>
		<!-- End Card -->

		<!-- Card -->
		<div class="card mb-3 border-top-0 border-left-0 border-right-0 border-color-1 rounded-0">
			<div class="card-header card-collapse bg-transparent-on-hover border-0" id="basicsHeadingFive">
				<h5 class="mb-0">
					<button type="button" class="px-0 btn btn-link btn-block d-flex justify-content-between card-btn collapsed py-3 font-size-25 border-0" data-toggle="collapse" data-target="#basicsCollapseFive" aria-expanded="false"
					 aria-controls="basicsCollapseFive">
						How Should I to Contact if I Have Any Queries?

						<span class="card-btn-arrow">
							<i class="fas fa-chevron-down text-gray-90 font-size-18"></i>
						</span>
					</button>
				</h5>
			</div>
			<div id="basicsCollapseFive" class="collapse" aria-labelledby="basicsHeadingFive" data-parent="#basicsAccordion">
				<div class="card-body pl-0 pb-8">
					<p class="mb-0">In egestas, libero vitae scelerisque tristique, turpis augue faucibus dolor, at aliquet ligula massa at justo. Donec viverra tortor quis tortor pretium, in pretium risus finibus. Integer viverra pretium auctor.
						Aliquam eget convallis eros, varius sagittis nulla. Suspendisse potenti. Aenean consequat ex sit amet metus ultrices tristique. Nam ac nunc augue. Suspendisse finibus in dolor eget volutpat.</p>
				</div>
			</div>
		</div>
		<!-- End Card -->

		<!-- Card -->
		<div class="card mb-3 border-top-0 border-left-0 border-right-0 border-color-1">
			<div class="card-header card-collapse bg-transparent-on-hover border-0" id="basicsHeadingSix">
				<h5 class="mb-0">
					<button type="button" class="px-0 btn btn-link btn-block d-flex justify-content-between card-btn collapsed py-3 font-size-25 border-0" data-toggle="collapse" data-target="#basicsCollapseSix" aria-expanded="false"
					 aria-controls="basicsCollapseSix">
						Do I Need an Account to Place an Order?

						<span class="card-btn-arrow">
							<i class="fas fa-chevron-down text-gray-90 font-size-18"></i>
						</span>
					</button>
				</h5>
			</div>
			<div id="basicsCollapseSix" class="collapse" aria-labelledby="basicsHeadingSix" data-parent="#basicsAccordion">
				<div class="card-body pl-0">
					<p class="mb-0">In egestas, libero vitae scelerisque tristique, turpis augue faucibus dolor, at aliquet ligula massa at justo. Donec viverra tortor quis tortor pretium, in pretium risus finibus. Integer viverra pretium auctor.
						Aliquam eget convallis eros, varius sagittis nulla. Suspendisse potenti. Aenean consequat ex sit amet metus ultrices tristique. Nam ac nunc augue. Suspendisse finibus in dolor eget volutpat.</p>
				</div>
			</div>
		</div>
		<!-- End Card -->
	</div>
	<!-- End Basics Accordion -->
	<!-- Brand Carousel -->
	<div class="mb-8">
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
						<img class="img-fluid m-auto max-height-50" src="img/200X60/img1.png" alt="Image Description">
					</a>
				</div>
				<div class="js-slide">
					<a href="#" class="link-hover__brand">
						<img class="img-fluid m-auto max-height-50" src="img/200X60/img2.png" alt="Image Description">
					</a>
				</div>
				<div class="js-slide">
					<a href="#" class="link-hover__brand">
						<img class="img-fluid m-auto max-height-50" src="img/200X60/img3.png" alt="Image Description">
					</a>
				</div>
				<div class="js-slide">
					<a href="#" class="link-hover__brand">
						<img class="img-fluid m-auto max-height-50" src="img/200X60/img4.png" alt="Image Description">
					</a>
				</div>
				<div class="js-slide">
					<a href="#" class="link-hover__brand">
						<img class="img-fluid m-auto max-height-50" src="img/200X60/img5.png" alt="Image Description">
					</a>
				</div>
				<div class="js-slide">
					<a href="#" class="link-hover__brand">
						<img class="img-fluid m-auto max-height-50" src="img/200X60/img6.png" alt="Image Description">
					</a>
				</div>
			</div>
		</div>
	</div>
	<!-- End Brand Carousel -->
</div>

@endsection
