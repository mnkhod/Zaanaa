@extends('base')

@section('content')
<!-- breadcrumb -->
<div class="bg-gray-13 bg-md-transparent">
	<div class="container">
		<!-- breadcrumb -->
		<div class="my-md-3">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb mb-3 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble">
					<li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="{{ route('home') }}">Home</a></li>
					<li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="{{ route('categories') }}">Playground</a></li>
					<li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">{{ $p->name }}</li>
				</ol>
			</nav>
		</div>
		<!-- End breadcrumb -->
	</div>
</div>
<!-- End breadcrumb -->

<div class="container">
	<!-- Single Product Body -->
	<div class="mb-14">
		<div class="row">
			<div class="col-md-6 col-lg-4 col-xl-5 mb-4 mb-md-0">
				<div id="sliderSyncingNav" class="js-slick-carousel u-slick mb-2" data-infinite="true" data-arrows-classes="d-none d-lg-inline-block u-slick__arrow-classic u-slick__arrow-centered--y rounded-circle"
				 data-arrow-left-classes="fas fa-arrow-left u-slick__arrow-classic-inner u-slick__arrow-classic-inner--left ml-lg-2 ml-xl-4"
				 data-arrow-right-classes="fas fa-arrow-right u-slick__arrow-classic-inner u-slick__arrow-classic-inner--right mr-lg-2 mr-xl-4" data-nav-for="#sliderSyncingThumb">
          @foreach(json_decode($p->picture) as $img)
					<div class="js-slide">
						<img class="img-fluid" src="{{ Voyager::image($img) }}" alt="Image Description">
					</div>
          @endforeach
				</div>

				<div id="sliderSyncingThumb" class="js-slick-carousel u-slick u-slick--slider-syncing u-slick--slider-syncing-size u-slick--gutters-1 u-slick--transform-off" data-infinite="true" data-slides-show="5" data-is-thumbs="true"
				 data-nav-for="#sliderSyncingNav">
          @foreach(json_decode($p->picture) as $img)
            <div class="js-slide" style="cursor: pointer;">
              <img class="img-fluid" src="{{ Voyager::image($img) }}" alt="Image Description">
            </div>
          @endforeach
				</div>
			</div>
			<div class="col-md-6 col-lg-4 col-xl-4 mb-md-6 mb-lg-0">
				<div class="mb-2">
					<a href="#" class="font-size-12 text-gray-5 mb-2 d-inline-block">Headphones</a>
					<h2 class="font-size-25 text-lh-1dot2">{{ $p->name }}</h2>
					<div class="mb-2">
						<a class="d-inline-flex align-items-center small font-size-15 text-lh-1" href="#">
							<div class="text-warning mr-2">
								<small class="fas fa-star"></small>
								<small class="fas fa-star"></small>
								<small class="fas fa-star"></small>
								<small class="fas fa-star"></small>
								<small class="far fa-star text-muted"></small>
							</div>
						</a>
					</div>
					<div class="mb-2">
						<ul class="font-size-14 pl-3 ml-1 text-gray-110">
							<li>Playground</li>
						</ul>
					</div>
					<p>{{ $p->description }}</p>
					<p>{{__('Size')}}: <strong>{{ $p->size }}</strong></p>
					<p><strong>SKU</strong>: FW511948218</p>
				</div>
			</div>
			<div class="mx-md-auto mx-lg-0 col-md-6 col-lg-4 col-xl-3">
				<div class="mb-2">
					<div class="card p-5 border-width-2 border-color-1 borders-radius-17">
						<div class="text-gray-9 font-size-14 pb-2 border-color-1 border-bottom mb-3">{{__('Availability')}}: <span class="text-green font-weight-bold">{{$p->unitsInStock}} {{__('in stock')}}</span></div>
						<div class="mb-3">
						<div class="font-size-36 text-center">ER: {{$p->unitPriceER}}¥</div>
						<div class="font-size-36 text-center">UB: {{$p->unitPriceUB}}¥</div>
						</div>
						<div class="mb-3">
							<h6 class="font-size-14">{{__('Quantity')}}</h6>
							<!-- Quantity -->
							<div class="border rounded-pill py-1 w-md-60 height-35 px-3 border-color-1">
								<div class="js-quantity row align-items-center">
									<div class="col">
										<input class="js-result form-control h-auto border-0 rounded p-0 shadow-none" type="text" value="1">
									</div>
									<div class="col-auto pr-1">
										<a class="js-minus btn btn-icon btn-xs btn-outline-secondary rounded-circle border-0" href="javascript:;">
											<small class="fas fa-minus btn-icon__inner"></small>
										</a>
										<a class="js-plus btn btn-icon btn-xs btn-outline-secondary rounded-circle border-0" href="javascript:;">
											<small class="fas fa-plus btn-icon__inner"></small>
										</a>
									</div>
								</div>
							</div>
							<!-- End Quantity -->
						</div>
						<div class="mb-2 pb-0dot5">
							<a href="{{ route('profileChart') }}" class="btn btn-block btn-primary-dark"><i class="ec ec-add-to-cart mr-2 font-size-20"></i>{{__('Add to Cart')}}</a>
						</div>
						<div class="mb-3">
							<a href="{{ route('profileCheckout') }}" class="btn btn-block btn-dark">{{__('Buy Now')}}</a>
						</div>
						<div class="flex-content-center flex-wrap">
							<a href="{{ route('profileWishlist') }}" class="text-gray-6 font-size-13 mr-2"><i class="ec ec-favorites mr-1 font-size-15"></i> {{__('Wishlist')}}</a>
							<a href="{{ route('productCompare') }}" class="text-gray-6 font-size-13 ml-2"><i class="ec ec-compare mr-1 font-size-15"></i> {{__('Compare')}}</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Single Product Body -->
</div>
<div class="bg-gray-7 pt-6 pb-3 mb-6">
	<div class="container">
		<div class="js-scroll-nav">
			<div class="bg-white pt-4 pb-6 px-xl-11 px-md-5 px-4 mb-6 overflow-hidden">
				<div id="Description" class="mx-md-2">
					<div class="position-relative mb-6">
						<ul class="nav nav-classic nav-tab nav-tab-lg justify-content-xl-center mb-6 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble border-lg-down-bottom-0 pb-1 pb-xl-0 mb-n1 mb-xl-0">
							<li class="nav-item flex-shrink-0 flex-xl-shrink-1 z-index-2">
								<a class="nav-link active" href="#Description">
									<div class="d-md-flex justify-content-md-center align-items-md-center">
										{{__('Description')}}
									</div>
								</a>
							</li>
							<li class="nav-item flex-shrink-0 flex-xl-shrink-1 z-index-2">
								<a class="nav-link" href="#Specification">
									<div class="d-md-flex justify-content-md-center align-items-md-center">
										{{__('Specification')}}
									</div>
								</a>
							</li>
							<!-- <li class="nav-item flex-shrink-0 flex-xl-shrink-1 z-index-2">
								<a class="nav-link" href="#Reviews">
									<div class="d-md-flex justify-content-md-center align-items-md-center">
										Reviews
									</div>
								</a>
							</li> -->
						</ul>
					</div>
					<div class="mx-md-4 pt-1">
            			<p>{{$p->description}}</p>
					</div>
				</div>
			</div>
			<div class="bg-white py-4 px-xl-11 px-md-5 px-4 mb-6">
				<div id="Specification" class="mx-md-2">
					<div class="position-relative mb-6">
						<ul class="nav nav-classic nav-tab nav-tab-lg justify-content-xl-center mb-6 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble border-lg-down-bottom-0 pb-1 pb-xl-0 mb-n1 mb-xl-0">
							<li class="nav-item flex-shrink-0 flex-xl-shrink-1 z-index-2">
								<a class="nav-link" href="#Description">
									<div class="d-md-flex justify-content-md-center align-items-md-center">
										{{__('Description')}}
									</div>
								</a>
							</li>
							<li class="nav-item flex-shrink-0 flex-xl-shrink-1 z-index-2">
								<a class="nav-link active" href="#Specification">
									<div class="d-md-flex justify-content-md-center align-items-md-center">
										{{__('Specification')}}
									</div>
								</a>
							</li>
							<!-- <li class="nav-item flex-shrink-0 flex-xl-shrink-1 z-index-2">
								<a class="nav-link" href="#Reviews">
									<div class="d-md-flex justify-content-md-center align-items-md-center">
										Reviews
									</div>
								</a>
							</li> -->
						</ul>
					</div>
					<div class="mx-md-5 pt-1">
						<h3 class="font-size-18 mb-4">{{__('Technical Specifications')}}</h3>
						<div class="table-responsive">
							<table class="table table-hover">
								<tbody>
									<tr>
										<th class="px-4 px-xl-5">{{__('Item Size')}}</th>
										<td>{{$p->size}}</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<!-- <div class="bg-white py-4 px-xl-11 px-md-5 px-4 mb-6">
				<div id="Reviews" class="mx-md-2">
					<div class="position-relative mb-6">
						<ul class="nav nav-classic nav-tab nav-tab-lg justify-content-xl-center mb-6 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble border-lg-down-bottom-0 pb-1 pb-xl-0 mb-n1 mb-xl-0">
							<li class="nav-item flex-shrink-0 flex-xl-shrink-1 z-index-2">
								<a class="nav-link" href="#Description">
									<div class="d-md-flex justify-content-md-center align-items-md-center">
										Description
									</div>
								</a>
							</li>
							<li class="nav-item flex-shrink-0 flex-xl-shrink-1 z-index-2">
								<a class="nav-link" href="#Specification">
									<div class="d-md-flex justify-content-md-center align-items-md-center">
										Specification
									</div>
								</a>
							</li> -->
							<!-- <li class="nav-item flex-shrink-0 flex-xl-shrink-1 z-index-2">
								<a class="nav-link active" href="#Reviews">
									<div class="d-md-flex justify-content-md-center align-items-md-center">
										Reviews
									</div>
								</a>
							</li> -->
						<!-- </ul>
					</div> -->
					<!-- <div class="mb-4 px-lg-4">
						<div class="row mb-8">
							<div class="col-md-6">
								<div class="mb-3">
									<h3 class="font-size-18 mb-6">Based on 3 reviews</h3>
									<h2 class="font-size-30 font-weight-bold text-lh-1 mb-0">4.3</h2>
									<div class="text-lh-1">overall</div>
								</div> -->

								<!-- Ratings -->
								<!-- <ul class="list-unstyled">
									<li class="py-1">
										<a class="row align-items-center mx-gutters-2 font-size-1" href="javascript:;">
											<div class="col-auto mb-2 mb-md-0">
												<div class="text-warning text-ls-n2 font-size-16" style="width: 80px;">
													<small class="fas fa-star"></small>
													<small class="fas fa-star"></small>
													<small class="fas fa-star"></small>
													<small class="fas fa-star"></small>
													<small class="far fa-star text-muted"></small>
												</div>
											</div>
											<div class="col-auto mb-2 mb-md-0">
												<div class="progress ml-xl-5" style="height: 10px; width: 200px;">
													<div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
											<div class="col-auto text-right">
												<span class="text-gray-90">205</span>
											</div>
										</a>
									</li>
									<li class="py-1">
										<a class="row align-items-center mx-gutters-2 font-size-1" href="javascript:;">
											<div class="col-auto mb-2 mb-md-0">
												<div class="text-warning text-ls-n2 font-size-16" style="width: 80px;">
													<small class="fas fa-star"></small>
													<small class="fas fa-star"></small>
													<small class="fas fa-star"></small>
													<small class="far fa-star text-muted"></small>
													<small class="far fa-star text-muted"></small>
												</div>
											</div>
											<div class="col-auto mb-2 mb-md-0">
												<div class="progress ml-xl-5" style="height: 10px; width: 200px;">
													<div class="progress-bar" role="progressbar" style="width: 53%;" aria-valuenow="53" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
											<div class="col-auto text-right">
												<span class="text-gray-90">55</span>
											</div>
										</a>
									</li>
									<li class="py-1">
										<a class="row align-items-center mx-gutters-2 font-size-1" href="javascript:;">
											<div class="col-auto mb-2 mb-md-0">
												<div class="text-warning text-ls-n2 font-size-16" style="width: 80px;">
													<small class="fas fa-star"></small>
													<small class="fas fa-star"></small>
													<small class="far fa-star text-muted"></small>
													<small class="far fa-star text-muted"></small>
													<small class="far fa-star text-muted"></small>
												</div>
											</div>
											<div class="col-auto mb-2 mb-md-0">
												<div class="progress ml-xl-5" style="height: 10px; width: 200px;">
													<div class="progress-bar" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
											<div class="col-auto text-right">
												<span class="text-gray-90">23</span>
											</div>
										</a>
									</li>
									<li class="py-1">
										<a class="row align-items-center mx-gutters-2 font-size-1" href="javascript:;">
											<div class="col-auto mb-2 mb-md-0">
												<div class="text-warning text-ls-n2 font-size-16" style="width: 80px;">
													<small class="fas fa-star"></small>
													<small class="far fa-star text-muted"></small>
													<small class="far fa-star text-muted"></small>
													<small class="far fa-star text-muted"></small>
													<small class="far fa-star text-muted"></small>
												</div>
											</div>
											<div class="col-auto mb-2 mb-md-0">
												<div class="progress ml-xl-5" style="height: 10px; width: 200px;">
													<div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
											<div class="col-auto text-right">
												<span class="text-muted">0</span>
											</div>
										</a>
									</li>
									<li class="py-1">
										<a class="row align-items-center mx-gutters-2 font-size-1" href="javascript:;">
											<div class="col-auto mb-2 mb-md-0">
												<div class="text-warning text-ls-n2 font-size-16" style="width: 80px;">
													<small class="fas fa-star"></small>
													<small class="far fa-star text-muted"></small>
													<small class="far fa-star text-muted"></small>
													<small class="far fa-star text-muted"></small>
													<small class="far fa-star text-muted"></small>
												</div>
											</div>
											<div class="col-auto mb-2 mb-md-0">
												<div class="progress ml-xl-5" style="height: 10px; width: 200px;">
													<div class="progress-bar" role="progressbar" style="width: 1%;" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
											<div class="col-auto text-right">
												<span class="text-gray-90">4</span>
											</div>
										</a>
									</li>
								</ul> -->
								<!-- End Ratings -->
							<!-- </div>
							<div class="col-md-6">
								<h3 class="font-size-18 mb-5">Add a review</h3>
								Form
								<form class="js-validate">
									<div class="row align-items-center mb-4">
										<div class="col-md-4 col-lg-3">
											<label for="rating" class="form-label mb-0">Your Review</label>
										</div>
										<div class="col-md-8 col-lg-9">
											<a href="#" class="d-block">
												<div class="text-warning text-ls-n2 font-size-16">
													<small class="far fa-star text-muted"></small>
													<small class="far fa-star text-muted"></small>
													<small class="far fa-star text-muted"></small>
													<small class="far fa-star text-muted"></small>
													<small class="far fa-star text-muted"></small>
												</div>
											</a>
										</div>
									</div>
									<div class="js-form-message form-group mb-3 row">
										<div class="col-md-4 col-lg-3">
											<label for="descriptionTextarea" class="form-label">Your Review</label>
										</div>
										<div class="col-md-8 col-lg-9">
											<textarea class="form-control" rows="3" id="descriptionTextarea" data-msg="Please enter your message." data-error-class="u-has-error" data-success-class="u-has-success"></textarea>
										</div>
									</div>
									<div class="js-form-message form-group mb-3 row">
										<div class="col-md-4 col-lg-3">
											<label for="inputName" class="form-label">Name <span class="text-danger">*</span></label>
										</div>
										<div class="col-md-8 col-lg-9">
											<input type="text" class="form-control" name="name" id="inputName" aria-label="Alex Hecker" required data-msg="Please enter your name." data-error-class="u-has-error" data-success-class="u-has-success">
										</div>
									</div>
									<div class="js-form-message form-group mb-3 row">
										<div class="col-md-4 col-lg-3">
											<label for="emailAddress" class="form-label">Email <span class="text-danger">*</span></label>
										</div>
										<div class="col-md-8 col-lg-9">
											<input type="email" class="form-control" name="emailAddress" id="emailAddress" aria-label="alexhecker@pixeel.com" required
											data-msg="Please enter a valid email address."
											data-error-class="u-has-error"
											data-success-class="u-has-success">
										</div>
									</div>
									<div class="row">
										<div class="offset-md-4 offset-lg-3 col-auto">
											<button type="submit" class="btn btn-primary-dark btn-wide transition-3d-hover">Add Review</button>
										</div>
									</div>
								</form>
								<!-- End Form -->
							<!-- </div>
						</div> -->
						<!-- Review -->
						<!-- <div class="border-bottom border-color-1 pb-4 mb-4"> -->
							<!-- Review Rating -->
							<!-- <div class="d-flex justify-content-between align-items-center text-secondary font-size-1 mb-2">
								<div class="text-warning text-ls-n2 font-size-16" style="width: 80px;">
									<small class="fas fa-star"></small>
									<small class="fas fa-star"></small>
									<small class="fas fa-star"></small>
									<small class="far fa-star text-muted"></small>
									<small class="far fa-star text-muted"></small>
								</div>
							</div> -->
							<!-- End Review Rating -->
<!-- 
							<p class="text-gray-90">Fusce vitae nibh mi. Integer posuere, libero et ullamcorper facilisis, enim eros tincidunt orci, eget vestibulum sapien nisi ut leo. Cras finibus vel est ut mollis. Donec luctus condimentum ante et
								euismod.</p> -->

							<!-- Reviewer -->
							<!-- <div class="mb-2">
								<strong>John Doe</strong>
								<span class="font-size-13 text-gray-23">- April 3, 2019</span>
							</div> -->
							<!-- End Reviewer -->
						<!-- </div> -->
						<!-- End Review -->
						<!-- Review -->
						<!-- <div class="border-bottom border-color-1 pb-4 mb-4"> -->
							<!-- Review Rating -->
							<!-- <div class="d-flex justify-content-between align-items-center text-secondary font-size-1 mb-2">
								<div class="text-warning text-ls-n2 font-size-16" style="width: 80px;">
									<small class="fas fa-star"></small>
									<small class="fas fa-star"></small>
									<small class="fas fa-star"></small>
									<small class="fas fa-star"></small>
									<small class="fas fa-star"></small>
								</div>
							</div> -->
							<!-- End Review Rating -->

							<!-- <p class="text-gray-90">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse eget facilisis odio. Duis sodales augue eu tincidunt faucibus. Etiam justo ligula, placerat
								ac augue id, volutpat porta dui.</p> -->

							<!-- Reviewer -->
							<!-- <div class="mb-2">
								<strong>Anna Kowalsky</strong>
								<span class="font-size-13 text-gray-23">- April 3, 2019</span>
							</div> -->
							<!-- End Reviewer -->
						<!-- </div> -->
						<!-- End Review -->
						<!-- Review -->
						<!-- <div class="pb-4 mb-4"> -->
							<!-- Review Rating -->
							<!-- <div class="d-flex justify-content-between align-items-center text-secondary font-size-1 mb-2">
								<div class="text-warning text-ls-n2 font-size-16" style="width: 80px;">
									<small class="fas fa-star"></small>
									<small class="fas fa-star"></small>
									<small class="fas fa-star"></small>
									<small class="fas fa-star"></small>
									<small class="far fa-star text-muted"></small>
								</div>
							</div> -->
							<!-- End Review Rating -->

							<!-- <p class="text-gray-90">Sed id tincidunt sapien. Pellentesque cursus accumsan tellus, nec ultricies nulla sollicitudin eget. Donec feugiat orci vestibulum porttitor sagittis.</p> -->

							<!-- Reviewer -->
							<!-- <div class="mb-2">
								<strong>Peter Wargner</strong>
								<span class="font-size-13 text-gray-23">- April 3, 2019</span>
							</div> -->
							<!-- End Reviewer -->
						<!-- </div>
						End Review
					</div> -->
				<!-- </div>
			</div> -->
		</div>
	</div>
</div>
<div class="container">
	<!-- Related products -->
	<div class="mb-6">
		<div class="d-flex justify-content-between align-items-center border-bottom border-color-1 flex-lg-nowrap flex-wrap mb-4">
			<h3 class="section-title mb-0 pb-2 font-size-22">{{__('Related products')}}</h3>
		</div>
		<ul class="row list-unstyled products-group no-gutters">
      @foreach($related as $x)
          <li class="col-6 col-md-3 col-xl-2gdot4-only col-wd-2 product-item">
            <div class="product-item__outer h-100">
              <div class="product-item__inner px-xl-4 p-3">
                <div class="product-item__body pb-xl-2">
                  <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                  <h5 class="mb-1 product-item__title"><a href="{{ route('productSingle',$p->id)}}" class="text-blue font-weight-bold">{{$x->name}}</a></h5>
                  <div class="mb-2">
                    <a href="{{ route('productSingle',$x->id)}}" class="d-block text-center"><img class="img-fluid" src="{{ Voyager::image(json_decode($x->picture)[0]) }}" alt="Image Description"></a>
                  </div>
                  <div class="flex-center-between mb-1">
                    <div class="prodcut-price">
                      <div class="h6 text-gray-100">ER: {{$x->unitPriceER}}¥</div>
                      <div class="h6 text-gray-100">UB: {{$x->unitPriceUB}}¥</div>
                    </div>
                    <div class="d-none d-xl-block prodcut-add-cart">
                      <a href="{{ route('productSingle',$x->id)}}" class="text-dark btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
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
	<!-- End Related products -->
</div>


@endsection
