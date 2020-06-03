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
					<li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="{{ route('blogArchive') }}">News</a></li>
					<li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">Demo Article</li>
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
				<article class="card mb-8 border-0">
					<img class="img-fluid" src="{{ Voyager::image('products/June2020/GDqjyGiD1pPOjdam16lI.jpg') }}" alt="Image Description">
					<div class="card-body pt-5 pb-0 px-0">
						<div class="d-block d-md-flex flex-center-between mb-4 mb-md-0">
							<h4 class="mb-md-3 mb-1">Demo Article</h4>
							<a href="#" class="font-size-12 text-gray-5 ml-md-4"><i class="far fa-comment"></i> Leave a comment</a>
						</div>
						<div class="mb-3 pb-3 border-bottom">
							<div class="list-group list-group-horizontal flex-wrap list-group-borderless align-items-center mx-n0dot5">
								<a href="{{ route('blogArchive') }}" class="mx-0dot5 text-gray-5">Design,</a>
								<a href="{{ route('blogArchive') }}" class="mx-0dot5 text-gray-5"> Technology,</a>
								<a href="{{ route('blogArchive') }}" class="mx-0dot5 text-gray-5"> News,</a>
								<a href="{{ route('blogArchive') }}" class="mx-0dot5 text-gray-5"> Image</a>
								<span class="mx-2 font-size-n5 mt-1 text-gray-5"><i class="fas fa-circle"></i></span>
								<a href="#" class="mx-0dot5 text-gray-5">March 4, 2016</a>
							</div>
						</div>
						<p><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt, erat in malesuada aliquam, est erat faucibus purus, eget viverra nulla sem vitae neque. Quisque id sodales libero. In nec enim nisi, in
								ultricies quam. Sed lacinia feugiat velit, cursus molestie lectus mollis et.</strong></p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt, erat in malesuada aliquam, est erat faucibus purus, eget viverra nulla sem vitae neque. Quisque id sodales libero. In nec enim nisi, in ultricies quam.
							Sed lacinia feugiat velit, cursus molestie lectus.</p>
						<p>Mauris tempus erat laoreet turpis lobortis, eu tincidunt erat fermentum. Aliquam non tincidunt urna. Integer tincidunt nec nisl vitae ullamcorper. Proin sed ultrices erat. Praesent varius ultrices massa at faucibus. Aenean
							dignissim, orci sed faucibus pharetra, dui mi dignissim tortor, sit amet condimentum mi ligula sit amet augue. Pellentesque vitae eros eget enim mollis placerat.</p>
					</div>
				</article>
				<div class="bg-gray-1 px-3 py-5 mb-10">
					<!-- Review -->
					<div class="d-block d-md-flex media">
						<div class="u-xl-avatar mb-4 mb-md-0 mr-md-4">
							<img class="img-fluid" src="{{ Voyager::image('products/June2020/GDqjyGiD1pPOjdam16lI.jpg') }}" alt="Image Description">
						</div>
						<div class="media-body">
							<h3 class="font-size-18 mb-3"><a href="../blog/single-blog-post.html">Jane Smith</a></h3>
							<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis diam erat. Duis velit lectus, posuere a blandit sit amet, tempor at lorem. Donec ultricies, lorem sed ultrices interdum, leo metus luctus
								sem, vel vulputate diam ipsum sed lorem.</p>
						</div>
					</div>
					<!-- End Review -->
				</div>
				<ul class="nav justify-content-between mb-11">
				</ul>
				<div class="mb-10">
					<div class="border-bottom border-color-1 mb-10">
						<h4 class="section-title mb-0 pb-3 font-size-25">3 Comments</h4>
					</div>
					<ol class="nav">
						<li class="w-100 border-bottom pb-6 mb-6 border-color-1">
							<!-- Review -->
							<div class="d-block d-md-flex media">
								<div class="u-xl-avatar mr-md-4 mb-4 mb-md-0">
									<img class="img-fluid rounded-circle" src="{{ Voyager::image('products/June2020/GDqjyGiD1pPOjdam16lI.jpg') }}" alt="Image Description">
								</div>
								<div class="media-body">
									<p>Fusce vitae nibh mi. Integer posuere, libero et ullamcorper facilisis, enim eros tincidunt orci, eget vestibulum sapien nisi ut leo. Cras finibus vel est ut mollis. Donec luctus condimentum ante et euismod.</p>
									<div class="d-flex">
										<h4 class="font-size-14 font-weight-bold mr-2"><a href="../blog/single-blog-post.html" class="">John Doe</a></h4>
										<span><a href="../blog/single-blog-post.html" class="text-gray-23">March 16, 2016</a></span>
										<a href="#" class="text-blue ml-auto">Reply</a>
									</div>
								</div>
							</div>
							<!-- End Review -->
						</li>
						<li class="w-100 border-bottom pb-6 mb-6 border-color-1">
							<!-- Review -->
							<div class="d-block d-md-flex media">
								<div class="u-xl-avatar mr-md-4 mb-4 mb-md-0">
									<img class="img-fluid rounded-circle" src="{{ Voyager::image('products/June2020/GDqjyGiD1pPOjdam16lI.jpg') }}" alt="Image Description">
								</div>
								<div class="media-body">
									<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse eget facilisis odio. Duis sodales augue eu tincidunt faucibus.</p>
									<div class="d-flex">
										<h4 class="font-size-14 font-weight-bold mr-2"><a href="../blog/single-blog-post.html" class="">Anna Kowalsky</a></h4>
										<span><a href="../blog/single-blog-post.html" class="text-gray-23">March 16, 2016</a></span>
										<a href="#" class="text-blue ml-auto">Reply</a>
									</div>
								</div>
							</div>
							<!-- End Review -->
						</li>
						<li class="w-100">
							<!-- Review -->
							<div class="d-block d-md-flex media">
								<div class="u-xl-avatar mr-md-4 mb-4 mb-md-0">
									<img class="img-fluid rounded-circle" src="{{ Voyager::image('products/June2020/GDqjyGiD1pPOjdam16lI.jpg') }}" alt="Image Description">
								</div>
								<div class="media-body">
									<p>Sed id tincidunt sapien. Pellentesque cursus accumsan tellus, nec ultricies nulla sollicitudin eget. Donec feugiat orci vestibulum porttitor sagittis.</p>
									<div class="d-flex">
										<h4 class="font-size-14 font-weight-bold mr-2"><a href="../blog/single-blog-post.html" class="">Peter Wargner</a></h4>
										<span><a href="../blog/single-blog-post.html" class="text-gray-23">March 16, 2016</a></span>
										<a href="#" class="text-blue ml-auto">Reply</a>
									</div>
								</div>
							</div>
							<!-- End Review -->
						</li>
					</ol>
				</div>
				<div class="mb-10">
					<div class="border-bottom border-color-1 mb-6">
						<h4 class="section-title mb-0 pb-3 font-size-25">Leave a Reply</h4>
					</div>
					<p class="text-gray-90">Your email address will not be published. Required fields are marked <span class="text-dark">*</span></p>
					<form class="js-validate" novalidate="novalidate">
						<div class="js-form-message mb-4">
							<label class="form-label">
								Comment
							</label>

							<div class="input-group">
								<textarea class="form-control p-5" rows="4" name="text" placeholder=""></textarea>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<!-- Input -->
								<div class="js-form-message mb-4">
									<label class="form-label">
										Name
										<span class="text-danger">*</span>
									</label>
									<input type="text" class="form-control" name="Name" placeholder="" aria-label="" required="" data-msg="Please enter your name." data-error-class="u-has-error" data-success-class="u-has-success" autocomplete="off">
								</div>
								<!-- End Input -->
							</div>

							<div class="col-md-6">
								<!-- Input -->
								<div class="js-form-message mb-4">
									<label class="form-label">
										Email address
										<span class="text-danger">*</span>
									</label>
									<input type="email" class="form-control" name="emailAddress" placeholder="" aria-label="" required="" data-msg="Please enter a valid email address." data-error-class="u-has-error"
									 data-success-class="u-has-success">
								</div>
								<!-- End Input -->
							</div>
							<div class="col-md-12">
								<!-- Input -->
								<div class="js-form-message mb-4">
									<label class="form-label">
										Website
									</label>
									<input type="text" class="form-control" name="website" placeholder="" aria-label="" data-msg="Please enter website name." data-error-class="u-has-error" data-success-class="u-has-success">
								</div>
								<!-- End Input -->
							</div>
						</div>
						<div class="mb-3">
							<button type="submit" class="btn btn-primary-dark-w px-5">Post Comment</button>
						</div>
					</form>
				</div>
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
					<h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">Recent Posts</h3>
				</div>
        @for ($i = 0; $i < 3; $i++)
          <article class="mb-4">
            <div class="media">
              <div class="width-75 height-75 mr-3">
                <img class="img-fluid object-fit-cover" src="{{ Voyager::image('products/June2020/GDqjyGiD1pPOjdam16lI.jpg') }}" alt="Image Description">
              </div>
              <div class="media-body">
                <h4 class="font-size-14 mb-1"><a href="{{ route('blogSingle',2) }}" class="text-gray-39">Demo Article</a></h4>
                <span class="text-gray-5">March 3, 2020</span>
              </div>
            </div>
          </article>
        @endfor
			</aside>
		</div>
	</div>
</div>

@endsection
