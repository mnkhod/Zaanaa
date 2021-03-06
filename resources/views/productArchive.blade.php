@extends('base')

@section('content')
            <!-- breadcrumb -->
            <div class="bg-gray-13 bg-md-transparent">
                <div class="container">
                    <!-- breadcrumb -->
                    <div class="my-md-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-3 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble">
                                <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="{{ route('home') }}">{{__('Home')}}</a></li>
                                <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">{{__('Shop')}}</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- End breadcrumb -->
                </div>
            </div>
            <!-- End breadcrumb -->

            <div class="container">
                <div class="row mb-8">
                    <div class="d-none d-xl-block col-xl-3 col-wd-2gdot5">
                        <div class="mb-6">
                            <div class="border-bottom border-color-1 mb-5">
                                <h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">{{__('Filters')}}</h3>
                            </div>
                            <div class="border-bottom pb-4 mb-4">
                                <h4 class="font-size-14 mb-3 font-weight-bold">{{__('Categories')}}</h4>

                                <!-- Checkboxes -->
                                <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="brandAdidas">
                                        <label class="custom-control-label" for="brandAdidas">Playground
                                            <span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="brandNewBalance">
                                        <label class="custom-control-label" for="brandNewBalance">New
                                            <span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="brandNike">
                                        <label class="custom-control-label" for="brandNike">Lorem
                                            <span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="brandFredPerry">
                                        <label class="custom-control-label" for="brandFredPerry">Fred Perry
                                            <span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="brandTnf">
                                        <label class="custom-control-label" for="brandTnf">Decorations
                                            <span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                                        </label>
                                    </div>
                                </div>
                                <!-- End Checkboxes -->

                                <!-- View More - Collapse -->
                                <div class="collapse" id="collapseBrand">
                                    <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="brandGucci">
                                            <label class="custom-control-label" for="brandGucci">Outside
                                                <span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="brandMango">
                                            <label class="custom-control-label" for="brandMango">Equipments
                                                <span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <!-- End View More - Collapse -->

                                <!-- Link -->
                                <a class="link link-collapse small font-size-13 text-gray-27 d-inline-flex mt-2" data-toggle="collapse" href="#collapseBrand" role="button" aria-expanded="false" aria-controls="collapseBrand">
                                    <span class="link__icon text-gray-27 bg-white">
                                        <span class="link__icon-inner">+</span>
                                    </span>
                                    <span class="link-collapse__default">{{__('Show more')}}</span>
                                    <span class="link-collapse__active">{{__('Show less')}}</span>
                                </a>
                                <!-- End Link -->
                            </div>

                            <div class="range-slider">
                                <h4 class="font-size-14 mb-3 font-weight-bold">{{__('Price')}}</h4>
                                <!-- Range Slider -->
                                <input class="js-range-slider" type="text"
                                data-extra-classes="u-range-slider u-range-slider-indicator u-range-slider-grid"
                                data-type="double"
                                data-grid="false"
                                data-hide-from-to="true"
                                data-prefix="$"
                                data-min="0"
                                data-max="3456"
                                data-from="0"
                                data-to="3456"
                                data-result-min="#rangeSliderExample3MinResult"
                                data-result-max="#rangeSliderExample3MaxResult">
                                <!-- End Range Slider -->
                                <div class="mt-1 text-gray-111 d-flex mb-4">
                                    <span class="mr-0dot5">{{__('Price')}}: </span>
                                    <span>¥</span>
                                    <span id="rangeSliderExample3MinResult" class=""></span>
                                    <span class="mx-0dot5"> — </span>
                                    <span>¥</span>
                                    <span id="rangeSliderExample3MaxResult" class=""></span>
                                </div>
                                <button type="submit" class="btn px-4 btn-primary-dark-w py-2 rounded-lg">{{__('Filter')}}</button>
                            </div>
                        </div>
                        <div class="mb-8">
                            <div class="border-bottom border-color-1 mb-5">
                                <h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">{{__('Latest Products')}}</h3>
                            </div>
                            <ul class="list-unstyled">
                                @foreach($latest as $item)
                                    <li class="mb-4">
                                        <div class="row">
                                            <div class="col-auto">
                                                <a href="{{ route('productSingle',$item->id)}}" class="d-block width-75">
                                                    <img class="img-fluid" src="{{ Voyager::image(json_decode($item->picture)[0]) }}" alt="Image Description">
                                                </a>
                                            </div>
                                            <div class="col">
                                                <h3 class="text-lh-1dot2 font-size-14 mb-0"><a href="{{ route('productSingle',$item->id)}}">{{$item->name}}</a></h3>
                                                <div class="text-warning text-ls-n2 font-size-16 mb-1" style="width: 80px;">
                                                    <small class="fas fa-star"></small>
                                                    <small class="fas fa-star"></small>
                                                    <small class="fas fa-star"></small>
                                                    <small class="fas fa-star"></small>
                                                    <small class="far fa-star"></small>
                                                </div>
                                                <div class="font-weight-bold font-size-15 d-flex justify-content-between">
                                                  <div class="h6 text-gray-100" style="font-size: 0.8rem !important">ER: {{$item->unitPriceER}}¥</div>
                                                  <div class="h6 text-gray-100" style="font-size: 0.8rem !important">UB: {{$item->unitPriceUB}}¥</div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-9 col-wd-9gdot5">
                        <!-- Recommended Products -->
                        <!-- Shop-control-bar Title -->
                        <div class="flex-center-between mb-3">
                            <h3 class="font-size-25 mb-0">{{__('Shop')}}</h3>
                            <p class="font-size-14 text-gray-90 mb-0"> {{__('All')}} <span id="allcount"> 56 </span> {{__('results')}}</p>
                        </div>
                        <!-- End shop-control-bar Title -->
                        <!-- Shop-control-bar -->
                        <div class="bg-gray-1 flex-center-between borders-radius-9 py-1">
                            <div class="d-xl-none">
                                <!-- Account Sidebar Toggle Button -->
                                <a id="sidebarNavToggler1" class="btn btn-sm py-1 font-weight-normal" href="javascript:;" role="button"
                                    aria-controls="sidebarContent1"
                                    aria-haspopup="true"
                                    aria-expanded="false"
                                    data-unfold-event="click"
                                    data-unfold-hide-on-scroll="false"
                                    data-unfold-target="#sidebarContent1"
                                    data-unfold-type="css-animation"
                                    data-unfold-animation-in="fadeInLeft"
                                    data-unfold-animation-out="fadeOutLeft"
                                    data-unfold-duration="500">
                                    <i class="fas fa-sliders-h"></i> <span class="ml-1">{{__('Filters')}}</span>
                                </a>
                                <!-- End Account Sidebar Toggle Button -->
                            </div>
                            <div class="px-3 d-none d-xl-block">
                                <ul class="nav nav-tab-shop" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="pills-three-one-tab" data-toggle="pill" href="#pills-one-example1" role="tab" aria-controls="pills-one-example1" aria-selected="true">
                                            <div class="d-md-flex justify-content-md-center align-items-md-center">
                                                <i class="fa fa-list"></i>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="d-flex">
                                <form method="get">
                                    <!-- Select -->
                                    <select class="js-select selectpicker dropdown-select max-width-200 max-width-160-sm right-dropdown-0 px-2 px-xl-0"
                                        data-style="btn-sm bg-white font-weight-normal py-2 border text-gray-20 bg-lg-down-transparent border-lg-down-0">
                                        <option value="one" selected>Default sorting</option>
                                        <option value="two">Sort by popularity</option>
                                        <option value="three">Sort by average rating</option>
                                        <option value="four">Sort by latest</option>
                                        <option value="five">Sort by price: low to high</option>
                                        <option value="six">Sort by price: high to low</option>
                                    </select>
                                    <!-- End Select -->
                                </form>
                                <form method="POST" class="ml-2 d-none d-xl-block">
                                    <!-- Select -->
                                    <select class="js-select selectpicker dropdown-select max-width-120"
                                        data-style="btn-sm bg-white font-weight-normal py-2 border text-gray-20 bg-lg-down-transparent border-lg-down-0">
                                        <option value="one" selected>Show 20</option>
                                        <option value="two">Show 40</option>
                                        <option value="three">Show All</option>
                                    </select>
                                    <!-- End Select -->
                                </form>
                            </div>
                            <nav class="px-3 flex-horizontal-center text-gray-20 d-none d-xl-flex">
                                <form method="post" class="min-width-50 mr-1">
                                    <input size="2" min="1" max="3" step="1" type="number" class="form-control text-center px-2 height-35" value="1">
                                </form> of 3
                                <a class="text-gray-30 font-size-20 ml-2" href="#">→</a>
                            </nav>
                        </div>
                        <!-- End Shop-control-bar -->
                        <!-- Shop Body -->
                        <!-- Tab Content -->
                        <div class="tab-content" id="pills-tabContent">
                                <ul id="item-list" class="d-block list-unstyled products-group prodcut-list-view">
                                    @foreach($p as $p)
                                    <li class="product-item remove-divider archive-item">
                                        <div class="product-item__outer w-100">
                                            <div class="product-item__inner remove-prodcut-hover py-4 row">
                                                <div class="product-item__header col-6 col-md-4">
                                                    <div class="mb-2">
                                                        <a href="{{ route('productSingle',$p->id)}}" class="d-block text-center"><img class="img-fluid" src="{{ Voyager::image(json_decode($p->picture)[0]) }}" alt="Image Description"></a>
                                                    </div>
                                                </div>
                                                <div class="product-item__body col-6 col-md-5">
                                                    <div class="pr-lg-10">
                                                        <div class="mb-2"><a href="{{ route('productSingle',$p->id)}}" class="font-size-12 text-gray-5">Speakers</a></div> <h5 class="mb-2 product-item__title"><a href="{{ route('productSingle',$p->id)}}" class="text-blue font-weight-bold">{{$p->name}}</a></h5>
                                                        <div class="prodcut-price mb-2 d-md-none">
                                                            <div class="text-gray-100">ER: {{$p->unitPriceER}}¥</div>
                                                            <div class="text-gray-100">UB: {{$p->unitPriceUB}}¥</div>
                                                        </div>
                                                        <div class="mb-3 d-none d-md-block">
                                                            <a class="d-inline-flex align-items-center small font-size-14" href="#">
                                                                <div class="text-warning mr-2">
                                                                    <small class="fas fa-star"></small>
                                                                    <small class="fas fa-star"></small>
                                                                    <small class="fas fa-star"></small>
                                                                    <small class="fas fa-star"></small>
                                                                    <small class="far fa-star"></small>
                                                                </div>
                                                                <span class="text-secondary">(0)</span>
                                                            </a>
                                                        </div>
                                                        <ul class="font-size-12 p-0 text-gray-110 mb-4 d-none d-md-block">
                                                            <li class="line-clamp-1 mb-1 list-bullet">{{$p->description}}</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer col-md-3 d-md-block">
                                                    <div class="mb-3">
                                                        <div class="prodcut-price mb-2 d-flex justify-content-between">
                                                            <div class="h6 text-gray-100">ER: {{$p->unitPriceER}}¥</div>
                                                            <div class="h6 text-gray-100">UB: {{$p->unitPriceUB}}¥</div>
                                                        </div>
                                                        <div class="prodcut-add-cart">
                                                            <a href="{{ route('profileChart')}}" class="btn btn-sm btn-block btn-primary-dark btn-wide transition-3d-hover">{{__('Add to cart')}}</a>
                                                        </div>
                                                    </div>
                                                    <div class="flex-horizontal-center justify-content-between justify-content-wd-center flex-wrap">
                                                        <a href="{{ route('profileCheckout')}}" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> {{__('Compare')}}</a>
                                                        <a href="{{ route('profileWishlist')}}" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> {{__('Wishlist')}}</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                        </div>
                        <!-- End Tab Content -->
                        <!-- End Shop Body -->
                        <!-- Shop Pagination -->
                        <nav class="d-md-flex justify-content-between align-items-center border-top pt-3" aria-label="Page navigation example">
                            <div class="text-center text-md-left mb-3 mb-md-0">
                                {{__('All')}}
                                <span id="allcount2"> 56 </span>
                                {{__('results')}}
                            </div>
                            <ul class="pagination mb-0 pagination-shop justify-content-center justify-content-md-start">
                            </ul>
                        </nav>
                        <!-- End Shop Pagination -->
                    </div>
                </div>
            </div>

            <script>

                // Pagination for product archive
                var itemList = document.querySelectorAll('.archive-item'); // Single items
                var rows = 20;
                let current_page = 1;
                var list_element = document.getElementById('item-list'); // Items container
                var paginationElement = document.querySelector('.pagination'); //Pagination container
                var paginationButton = document.querySelector('.pagination').innerHTML; // Button HTML for loop
                document.querySelector('.pagination').innerHTML = "";

                // Setup Pagination
                var page_count = Math.ceil(itemList.length / rows);

                // Button loop
                for(i = 0; i < page_count; i++) {
                    paginationElement.innerHTML = paginationElement.innerHTML + '<li class="page-item"><a class="page-link">' + (i + 1) + '</a></li>';
                }


                // Set Product Information based on pagination

                document.getElementById('allcount').innerHTML = itemList.length;
                document.getElementById('allcount2').innerHTML = itemList.length;

                function displayList(items, wrapper, rows_per_page, pages) {
                    wrapper.innerHTML = "";
                    pages--;

                    let start = rows_per_page * pages;
                    let end = start + rows_per_page;

                    var paginatedItems = [];
                    for (i = start; i < end; i++) {
                        paginatedItems.push(items[i]);
                    }

                    for (let i = 0; i < rows_per_page; i++) {
                        var itemCount = paginatedItems[i];
                        wrapper.innerHTML = wrapper.innerHTML + itemCount.innerHTML;
                    }   
                }

                displayList(itemList, list_element, rows, current_page);

                // Pagination Button Action
                var allButtons = document.querySelectorAll('.page-link');
                allButtons[0].classList.add('current');
                for(let i = 0; i < allButtons.length; i++) {
                    let btn = allButtons[i];

                    btn.addEventListener('click', function(){
                        current_page = i + 1;
                        displayList(itemList, list_element, rows, current_page);
                        $('.page-link').removeClass("current");
                        btn.classList.add('current');
                        $('html, body').animate({ scrollTop: $('#fromto').offset().top }, 'fast');
                    });
                }
                
            </script>

@endsection
