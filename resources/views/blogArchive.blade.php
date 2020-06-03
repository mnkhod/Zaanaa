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
					<li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">Blog</li>
				</ol>
			</nav>
		</div>
		<!-- End breadcrumb -->
	</div>
</div>
<!-- End breadcrumb -->

<div class="container">
	<div class="row">
		<div class="col-xl-9 col-wd">
			<div class="min-width-1100-wd">
				<article class="card mb-13 border-0">
					<div class="row">
						<div class="col-lg-4 mb-5 mb-lg-0">
							<a href="../blog/single-blog-post.html" class="d-block"><img class="img-fluid min-height-250 object-fit-cover" src="/img/1500X730/img1.jpg" alt="Image Description"></a>
						</div>
						<div class="col-lg-8">
							<div class="card-body p-0">
								<h4 class="mb-3"><a href="../blog/single-blog-post.html">Robot Wars – Post with Gallery</a></h4>
								<div class="mb-3 pb-3 border-bottom">
									<div class="list-group list-group-horizontal flex-wrap list-group-borderless align-items-center mx-n0dot5">
										<a href="../blog/single-blog-post.html" class="mx-0dot5 text-gray-5">Design,</a>
										<a href="../blog/single-blog-post.html" class="mx-0dot5 text-gray-5"> Technology,</a>
										<a href="../blog/single-blog-post.html" class="mx-0dot5 text-gray-5"> News,</a>
										<a href="../blog/single-blog-post.html" class="mx-0dot5 text-gray-5"> Videos</a>
										<span class="mx-2 font-size-n5 mt-1 text-gray-5"><i class="fas fa-circle"></i></span>
										<a href="../blog/single-blog-post.html" class="mx-0dot5 text-gray-5">March 4, 2016</a>
									</div>
								</div>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt, erat in malesuada aliquam, est erat faucibus purus, eget viverra nulla sem vitae neque. Quisque id sodales libero. In nec enim nisi, in
									ultricies quam. Sed lacinia feugiat velit, cursus molestie lectus.</p>
								<div class="flex-horizontal-center">
									<a href="../blog/single-blog-post.html" class="btn btn-soft-secondary-w mb-md-0 font-weight-normal px-5 px-md-4 px-lg-5">Read More</a>
									<a href="../blog/single-blog-post.html" class="font-size-12 text-gray-5 ml-4"><i class="far fa-comment"></i> 3</a>
								</div>
							</div>
						</div>
					</div>
				</article>
				<article class="card mb-13 border-0">
					<div class="row">
						<div class="col-lg-4 mb-5 mb-lg-0">
							<a href="../blog/single-blog-post.html" class="d-block"><img class="img-fluid min-height-250 object-fit-cover" src="/img/1500X730/img3.jpg" alt="Image Description"></a>
						</div>
						<div class="col-lg-8">
							<div class="card-body p-0">
								<h4 class="mb-3"><a href="../blog/single-blog-post.html">Robot Wars – Now Closed – Post with Audio</a></h4>
								<div class="mb-3 pb-3 border-bottom">
									<div class="list-group list-group-horizontal flex-wrap list-group-borderless align-items-center mx-n0dot5">
										<a href="../blog/single-blog-post.html" class="mx-0dot5 text-gray-5">Design,</a>
										<a href="../blog/single-blog-post.html" class="mx-0dot5 text-gray-5"> Technology,</a>
										<a href="../blog/single-blog-post.html" class="mx-0dot5 text-gray-5"> News,</a>
										<a href="../blog/single-blog-post.html" class="mx-0dot5 text-gray-5"> Audio</a>
										<span class="mx-2 font-size-n5 mt-1 text-gray-5"><i class="fas fa-circle"></i></span>
										<a href="../blog/single-blog-post.html" class="mx-0dot5 text-gray-5">March 4, 2016</a>
									</div>
								</div>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt, erat in malesuada aliquam, est erat faucibus purus, eget viverra nulla sem vitae neque. Quisque id sodales libero. In nec enim nisi, in
									ultricies quam. Sed lacinia feugiat velit, cursus molestie lectus.</p>
								<div class="flex-horizontal-center">
									<a href="../blog/single-blog-post.html" class="btn btn-soft-secondary-w mb-md-0 font-weight-normal px-5 px-md-4 px-lg-5">Read More</a>
									<a href="../blog/single-blog-post.html" class="font-size-12 text-gray-5 ml-4"><i class="far fa-comment"></i> Leave a comment</a>
								</div>
							</div>
						</div>
					</div>
				</article>
				<article class="card mb-13 border-0">
					<div class="row">
						<div class="col-lg-4 mb-5 mb-lg-0">
							<a href="../blog/single-blog-post.html" class="d-block"><img class="img-fluid min-height-250 object-fit-cover" src="/img/1500X730/img5.jpg" alt="Image Description"></a>
						</div>
						<div class="col-lg-8">
							<div class="card-body p-0">
								<h4 class="mb-3"><a href="../blog/single-blog-post.html">Robot Wars – Now Closed – Post with Video</a></h4>
								<div class="mb-3 pb-3 border-bottom">
									<div class="list-group list-group-horizontal flex-wrap list-group-borderless align-items-center mx-n0dot5">
										<a href="../blog/single-blog-post.html" class="mx-0dot5 text-gray-5">Design,</a>
										<a href="../blog/single-blog-post.html" class="mx-0dot5 text-gray-5"> Technology,</a>
										<a href="../blog/single-blog-post.html" class="mx-0dot5 text-gray-5"> News,</a>
										<a href="../blog/single-blog-post.html" class="mx-0dot5 text-gray-5"> Video</a>
										<span class="mx-2 font-size-n5 mt-1 text-gray-5"><i class="fas fa-circle"></i></span>
										<a href="../blog/single-blog-post.html" class="mx-0dot5 text-gray-5">March 4, 2016</a>
									</div>
								</div>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt, erat in malesuada aliquam, est erat faucibus purus, eget viverra nulla sem vitae neque. Quisque id sodales libero. In nec enim nisi, in
									ultricies quam. Sed lacinia feugiat velit, cursus molestie lectus.</p>
								<div class="flex-horizontal-center">
									<a href="../blog/single-blog-post.html" class="btn btn-soft-secondary-w mb-md-0 font-weight-normal px-5 px-md-4 px-lg-5">Read More</a>
									<a href="../blog/single-blog-post.html" class="font-size-12 text-gray-5 ml-4"><i class="far fa-comment"></i> Leave a comment</a>
								</div>
							</div>
						</div>
					</div>
				</article>
				<article class="card mb-13 border-0">
					<div class="row">
						<div class="col-lg-4 d-none d-lg-block">
							<a href="../blog/single-blog-post.html" class="d-block position-relative">
								<img class="img-fluid" src="https://placehold.it/340x250/DDD/DDD/" alt="Image Description">
								<i class="fa fa-paragraph font-size-24 position-absolute-center text-white"></i>
							</a>
						</div>
						<div class="col-lg-8">
							<div class="card-body p-0">
								<h4 class="mb-3"><a href="../blog/single-blog-post.html">Announcement – Post without Image</a></h4>
								<div class="mb-3 pb-3 border-bottom">
									<div class="list-group list-group-horizontal flex-wrap list-group-borderless align-items-center mx-n0dot5">
										<a href="../blog/single-blog-post.html" class="mx-0dot5 text-gray-5">Design,</a>
										<a href="../blog/single-blog-post.html" class="mx-0dot5 text-gray-5"> Technology,</a>
										<a href="../blog/single-blog-post.html" class="mx-0dot5 text-gray-5"> News,</a>
										<a href="../blog/single-blog-post.html" class="mx-0dot5 text-gray-5"> Image</a>
										<span class="mx-2 font-size-n5 mt-1 text-gray-5"><i class="fas fa-circle"></i></span>
										<a href="../blog/single-blog-post.html" class="mx-0dot5 text-gray-5">March 4, 2016</a>
									</div>
								</div>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt, erat in malesuada aliquam, est erat faucibus purus, eget viverra nulla sem vitae neque. Quisque id sodales libero. In nec enim nisi, in
									ultricies quam. Sed lacinia feugiat velit, cursus molestie lectus.</p>
								<div class="flex-horizontal-center">
									<a href="../blog/single-blog-post.html" class="btn btn-soft-secondary-w mb-md-0 font-weight-normal px-5 px-md-4 px-lg-5">Read More</a>
									<a href="../blog/single-blog-post.html" class="font-size-12 text-gray-5 ml-4"><i class="far fa-comment"></i> Leave a comment</a>
								</div>
							</div>
						</div>
					</div>
				</article>
				<article class="card mb-13 border-0">
					<div class="row">
						<div class="col-lg-4 mb-5 mb-lg-0">
							<a href="../blog/single-blog-post.html" class="d-block"><img class="img-fluid min-height-250 object-fit-cover" src="/img/1500X730/img6.jpg" alt="Image Description"></a>
						</div>
						<div class="col-lg-8">
							<div class="card-body p-0">
								<h4 class="mb-3"><a href="../blog/single-blog-post.html">Robot Wars – Now Closed</a></h4>
								<div class="mb-3 pb-3 border-bottom">
									<div class="list-group list-group-horizontal flex-wrap list-group-borderless align-items-center mx-n0dot5">
										<a href="../blog/single-blog-post.html" class="mx-0dot5 text-gray-5">Design,</a>
										<a href="../blog/single-blog-post.html" class="mx-0dot5 text-gray-5"> Technology,</a>
										<a href="../blog/single-blog-post.html" class="mx-0dot5 text-gray-5"> News,</a>
										<a href="../blog/single-blog-post.html" class="mx-0dot5 text-gray-5"> Image</a>
										<span class="mx-2 font-size-n5 mt-1 text-gray-5"><i class="fas fa-circle"></i></span>
										<a href="../blog/single-blog-post.html" class="mx-0dot5 text-gray-5">March 4, 2016</a>
									</div>
								</div>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt, erat in malesuada aliquam, est erat faucibus purus, eget viverra nulla sem vitae neque. Quisque id sodales libero. In nec enim nisi, in
									ultricies quam. Sed lacinia feugiat velit, cursus molestie lectus.</p>
								<div class="flex-horizontal-center">
									<a href="../blog/single-blog-post.html" class="btn btn-soft-secondary-w mb-md-0 font-weight-normal px-5 px-md-4 px-lg-5">Read More</a>
									<a href="../blog/single-blog-post.html" class="font-size-12 text-gray-5 ml-4"><i class="far fa-comment"></i> Leave a comment</a>
								</div>
							</div>
						</div>
					</div>
				</article>
				<article class="card mb-13 border-0">
					<div class="row">
						<div class="col-lg-4 mb-5 mb-lg-0">
							<a href="../blog/single-blog-post.html" class="d-block"><img class="img-fluid min-height-250 object-fit-cover" src="/img/1500X730/img7.jpg" alt="Image Description"></a>
						</div>
						<div class="col-lg-8">
							<div class="card-body p-0">
								<h4 class="mb-3"><a href="../blog/single-blog-post.html">SpaceX Falcon explodes after Landing</a></h4>
								<div class="mb-3 pb-3 border-bottom">
									<div class="list-group list-group-horizontal flex-wrap list-group-borderless align-items-center mx-n0dot5">
										<a href="../blog/single-blog-post.html" class="mx-0dot5 text-gray-5">Design,</a>
										<a href="../blog/single-blog-post.html" class="mx-0dot5 text-gray-5"> Technology,</a>
										<a href="../blog/single-blog-post.html" class="mx-0dot5 text-gray-5"> News,</a>
										<a href="../blog/single-blog-post.html" class="mx-0dot5 text-gray-5"> Image</a>
										<span class="mx-2 font-size-n5 mt-1 text-gray-5"><i class="fas fa-circle"></i></span>
										<a href="../blog/single-blog-post.html" class="mx-0dot5 text-gray-5">March 4, 2016</a>
									</div>
								</div>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt, erat in malesuada aliquam, est erat faucibus purus, eget viverra nulla sem vitae neque. Quisque id sodales libero. In nec enim nisi, in
									ultricies quam. Sed lacinia feugiat velit, cursus molestie lectus.</p>
								<div class="flex-horizontal-center">
									<a href="../blog/single-blog-post.html" class="btn btn-soft-secondary-w mb-md-0 font-weight-normal px-5 px-md-4 px-lg-5">Read More</a>
									<a href="../blog/single-blog-post.html" class="font-size-12 text-gray-5 ml-4"><i class="far fa-comment"></i> Leave a comment</a>
								</div>
							</div>
						</div>
					</div>
				</article>
				<article class="card mb-13 border-0">
					<div class="row">
						<div class="col-lg-4 mb-5 mb-lg-0">
							<a href="../blog/single-blog-post.html" class="d-block"><img class="img-fluid min-height-250 object-fit-cover" src="/img/1500X730/img4.jpg" alt="Image Description"></a>
						</div>
						<div class="col-lg-8">
							<div class="card-body p-0">
								<h4 class="mb-3"><a href="../blog/single-blog-post.html">The first flowers in space</a></h4>
								<div class="mb-3 pb-3 border-bottom">
									<div class="list-group list-group-horizontal flex-wrap list-group-borderless align-items-center mx-n0dot5">
										<a href="../blog/single-blog-post.html" class="mx-0dot5 text-gray-5">Design,</a>
										<a href="../blog/single-blog-post.html" class="mx-0dot5 text-gray-5"> Technology,</a>
										<a href="../blog/single-blog-post.html" class="mx-0dot5 text-gray-5"> News,</a>
										<a href="../blog/single-blog-post.html" class="mx-0dot5 text-gray-5"> Image</a>
										<span class="mx-2 font-size-n5 mt-1 text-gray-5"><i class="fas fa-circle"></i></span>
										<a href="../blog/single-blog-post.html" class="mx-0dot5 text-gray-5">March 4, 2016</a>
									</div>
								</div>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt, erat in malesuada aliquam, est erat faucibus purus, eget viverra nulla sem vitae neque. Quisque id sodales libero. In nec enim nisi, in
									ultricies quam. Sed lacinia feugiat velit, cursus molestie lectus.</p>
								<div class="flex-horizontal-center">
									<a href="../blog/single-blog-post.html" class="btn btn-soft-secondary-w mb-md-0 font-weight-normal px-5 px-md-4 px-lg-5">Read More</a>
									<a href="../blog/single-blog-post.html" class="font-size-12 text-gray-5 ml-4"><i class="far fa-comment"></i> Leave a comment</a>
								</div>
							</div>
						</div>
					</div>
				</article>
				<article class="card mb-13 border-0">
					<div class="row">
						<div class="col-lg-4 mb-5 mb-lg-0">
							<a href="../blog/single-blog-post.html" class="d-block"><img class="img-fluid min-height-250 object-fit-cover" src="/img/1500X730/img8.jpg" alt="Image Description"></a>
						</div>
						<div class="col-lg-8">
							<div class="card-body p-0">
								<h4 class="mb-3"><a href="../blog/single-blog-post.html">HoloLens technical details emerge</a></h4>
								<div class="mb-3 pb-3 border-bottom">
									<div class="list-group list-group-horizontal flex-wrap list-group-borderless align-items-center mx-n0dot5">
										<a href="../blog/single-blog-post.html" class="mx-0dot5 text-gray-5">Design,</a>
										<a href="../blog/single-blog-post.html" class="mx-0dot5 text-gray-5"> Technology,</a>
										<a href="../blog/single-blog-post.html" class="mx-0dot5 text-gray-5"> News,</a>
										<a href="../blog/single-blog-post.html" class="mx-0dot5 text-gray-5"> Image</a>
										<span class="mx-2 font-size-n5 mt-1 text-gray-5"><i class="fas fa-circle"></i></span>
										<a href="../blog/single-blog-post.html" class="mx-0dot5 text-gray-5">March 4, 2016</a>
									</div>
								</div>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt, erat in malesuada aliquam, est erat faucibus purus, eget viverra nulla sem vitae neque. Quisque id sodales libero. In nec enim nisi, in
									ultricies quam. Sed lacinia feugiat velit, cursus molestie lectus.</p>
								<div class="flex-horizontal-center">
									<a href="../blog/single-blog-post.html" class="btn btn-soft-secondary-w mb-md-0 font-weight-normal px-5 px-md-4 px-lg-5">Read More</a>
									<a href="../blog/single-blog-post.html" class="font-size-12 text-gray-5 ml-4"><i class="far fa-comment"></i> Leave a comment</a>
								</div>
							</div>
						</div>
					</div>
				</article>
			</div>
		</div>
		<div class="col-xl-3 col-wd">
			<aside class="mb-7">
				<form class="">
					<div class="d-flex align-items-center">
						<label class="sr-only" for="signupSrEmail">Search Electro blog</label>
						<div class="input-group">
							<input type="text" class="form-control px-4" name="search" id="signupSrEmail" placeholder="Search..." aria-label="Search Electro blog">
						</div>
						<button type="submit" class="btn btn-primary text-nowrap ml-3 d-none">
							<span class="fas fa-search font-size-1 mr-2"></span> Search
						</button>
					</div>
				</form>
			</aside>
			<aside class="mb-7">
				<div class="border-bottom border-color-1 mb-5">
					<h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">Categories</h3>
				</div>
				<div class="list-group">
					<a href="../blog/single-blog-post.html" class="font-bold-on-hover px-3 py-2 list-group-item list-group-item-action border-0"><i class="mr-2 fas fa-angle-right"></i> Design</a>
					<a href="../blog/single-blog-post.html" class="font-bold-on-hover px-3 py-2 list-group-item list-group-item-action border-right-0 border-left-0 border-bottom-0"><i class="mr-2 fas fa-angle-right"></i> Events</a>
					<a href="../blog/single-blog-post.html" class="font-bold-on-hover px-3 py-2 list-group-item list-group-item-action border-right-0 border-left-0 border-bottom-0"><i class="mr-2 fas fa-angle-right"></i> Links & Quotes</a>
					<a href="../blog/single-blog-post.html" class="font-bold-on-hover px-3 py-2 list-group-item list-group-item-action border-right-0 border-left-0 border-bottom-0"><i class="mr-2 fas fa-angle-right"></i> News</a>
					<a href="../blog/single-blog-post.html" class="font-bold-on-hover px-3 py-2 list-group-item list-group-item-action border-right-0 border-left-0 border-bottom-0"><i class="mr-2 fas fa-angle-right"></i> Social</a>
					<a href="../blog/single-blog-post.html" class="font-bold-on-hover px-3 py-2 list-group-item list-group-item-action border-right-0 border-left-0 border-bottom-0"><i class="mr-2 fas fa-angle-right"></i> Technology</a>
					<a href="../blog/single-blog-post.html" class="font-bold-on-hover px-3 py-2 list-group-item list-group-item-action border-right-0 border-left-0 border-bottom-0"><i class="mr-2 fas fa-angle-right"></i> Audios</a>
					<a href="../blog/single-blog-post.html" class="font-bold-on-hover px-3 py-2 list-group-item list-group-item-action border-right-0 border-left-0 border-bottom-0"><i class="mr-2 fas fa-angle-right"></i> Videos</a>
				</div>
			</aside>
			<aside class="mb-7">
				<div class="border-bottom border-color-1 mb-5">
					<h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">Recent Posts</h3>
				</div>
				<article class="mb-4">
					<div class="media">
						<div class="width-75 height-75 mr-3">
							<img class="img-fluid object-fit-cover" src="/img/1500X730/img1.jpg" alt="Image Description">
						</div>
						<div class="media-body">
							<h4 class="font-size-14 mb-1"><a href="../blog/single-blog-post.html" class="text-gray-39">Robot Wars – Post with Gallery</a></h4>
							<span class="text-gray-5">March 3, 2020</span>
						</div>
					</div>
				</article>
				<article class="mb-4">
					<div class="media">
						<div class="width-75 height-75 mr-3">
							<img class="img-fluid object-fit-cover" src="/img/1500X730/img4.jpg" alt="Image Description">
						</div>
						<div class="media-body">
							<h4 class="font-size-14 mb-1"><a href="../blog/single-blog-post.html" class="text-gray-39">Robot Wars – Now Closed – Post with Audio</a></h4>
							<span class="text-gray-5">March 3, 2020</span>
						</div>
					</div>
				</article>
				<article class="mb-4">
					<div class="media">
						<div class="width-75 height-75 mr-3">
							<img class="img-fluid object-fit-cover" src="/img/1500X730/img5.jpg" alt="Image Description">
						</div>
						<div class="media-body">
							<h4 class="font-size-14 mb-1"><a href="../blog/single-blog-post.html" class="text-gray-39">Robot Wars – Now Closed – Post with Video</a></h4>
							<span class="text-gray-5">March 3, 2020</span>
						</div>
					</div>
				</article>
				<article class="mb-4">
					<div class="media">
						<div class="width-75 height-75 mr-3 position-relative">
							<img class="img-fluid object-fit-cover" src="https://placehold.it/150x150/DDD/DDD/" alt="Image Description">
							<i class="fa fa-paragraph position-absolute-center text-white"></i>
						</div>
						<div class="media-body">
							<h4 class="font-size-14 mb-1"><a href="../blog/single-blog-post.html" class="text-gray-39">Announcement – Post without Image</a></h4>
							<span class="text-gray-5">March 3, 2020</span>
						</div>
					</div>
				</article>
				<article class="mb-4">
					<div class="media">
						<div class="width-75 height-75 mr-3">
							<img class="img-fluid object-fit-cover" src="/img/1500X730/img6.jpg" alt="Image Description">
						</div>
						<div class="media-body">
							<h4 class="font-size-14 mb-1"><a href="../blog/single-blog-post.html" class="text-gray-39">Robot Wars – Now Closed</a></h4>
							<span class="text-gray-5">March 3, 2020</span>
						</div>
					</div>
				</article>
			</aside>
		</div>
	</div>
</div>

@endsection
