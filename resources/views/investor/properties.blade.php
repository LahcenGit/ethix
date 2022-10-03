@extends('layouts.front')
@section('content')
<!-- Breadcrumb area Starts -->
<div class="breadcrumb-area section-bg-2 breadcrumb-padding">
        <div class="container custom-container-one">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-contents">
                        <h4 class="breadcrumb-contents-title"> Hotel List </h4>
                        <ul class="breadcrumb-contents-list list-style-none">
                            <li class="breadcrumb-contents-list-item"> <a href="index.html" class="breadcrumb-contents-list-item-link"> Home </a> </li>
                            <li class="breadcrumb-contents-list-item"> Hotels </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb area end -->
    <!-- Hotel List area start -->
    <div class="responsive-overlay"></div>
    <section class="hotel-list-area section-bg-2 pat-100 pab-100">
        <div class="container">
            <div class="banner-location bg-white radius-10">
                <div class="banner-location-flex">
                    <div class="banner-location-single">
                        <div class="banner-location-single-flex">
                            <div class="banner-location-single-icon">
                                <i class="las la-map-marker-alt"></i>
                            </div>
                            <div class="banner-location-single-contents">
                                <span class="banner-location-single-contents-subtitle"> Location </span>
                                <div class="banner-location-single-contents-dropdown">
                                    <select class="js-select select-style-two" name="state">
                                        <option value="1">Allentown, New Mexico</option>
                                        <option value="2">Allentown, New NewYork</option>
                                        <option value="3">Allentown, New Barcelona</option>
                                        <option value="4">Allentown, Paris</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="banner-location-single">
                        <div class="banner-location-single-flex">
                            <div class="banner-location-single-icon">
                                <i class="las la-calendar"></i>
                            </div>
                            <div class="banner-location-single-contents">
                                <span class="banner-location-single-contents-subtitle"> Check In </span>
                                <div class="banner-location-single-contents-dropdown custom-select">
                                    <select class="js-select select-style-two" name="state">
                                            <option value="1">20 Jun 2022</option>
                                            <option value="2">21 Jun 2022</option>
                                            <option value="3">22 Jun 2022</option>
                                            <option value="4">23 Jun 2022</option>
                                        </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="banner-location-single">
                        <div class="banner-location-single-flex">
                            <div class="banner-location-single-icon">
                                <i class="las la-calendar"></i>
                            </div>
                            <div class="banner-location-single-contents">
                                <span class="banner-location-single-contents-subtitle"> Check Out </span>
                                <div class="banner-location-single-contents-dropdown custom-select">
                                    <select class="js-select select-style-two" name="state">
                                        <option value="1">20 Jul 2022</option>
                                        <option value="2">21 Jul 2022</option>
                                        <option value="3">22 Jul 2022</option>
                                        <option value="4">23 Jul 2022</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="banner-location-single">
                        <div class="banner-location-single-flex">
                            <div class="banner-location-single-icon">
                                <i class="las la-user-friends"></i>
                            </div>
                            <div class="banner-location-single-contents">
                                <span class="banner-location-single-contents-subtitle"> Person </span>
                                <div class="banner-location-single-contents-dropdown custom-select">
                                    <select class="js-select select-style-two" name="state">
                                            <option value="1">2 People</option>
                                            <option value="2">3 People</option>
                                            <option value="3">4 People</option>
                                            <option value="4">5 People</option>
                                        </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="banner-location-single">
                        <div class="banner-location-single-flex">
                            <div class="banner-location-single-icon">
                                <i class="las la-user-friends"></i>
                            </div>
                            <div class="banner-location-single-contents">
                                <span class="banner-location-single-contents-subtitle"> Children </span>
                                <div class="banner-location-single-contents-dropdown custom-select">
                                    <select class="js-select select-style-two" name="state">
                                        <option value="1">2 Children</option>
                                        <option value="2">3 Children</option>
                                        <option value="3">4 Children</option>
                                        <option value="4">5 Children</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="banner-location-single-search">
                        <div class="search-suggestions-wrapper">
                            <div class="search-click-icon">
                                <i class="las la-search"></i>
                            </div>
                            <div class="search-show">
                                <div class="search-show-inner">
                                    <form action="#">
                                        <div class="search-show-form">
                                            <input autocomplete="off" class="form--control" id="search_form_input" type="text" placeholder="Search here....">
                                            <button type="submit"> <i class="las la-search"></i> </button>
                                            <span class="suggestions-icon-close"> <i class="las la-times"></i> </span>
                                        </div>
                                        <div class="search-product" id="search_suggestions_wrap">
                                            <div class="search-product-inner">
                                                <h6 class="search-product-title">Product Suggestions</h6>
                                                <ul class="search-product-list mt-4">
                                                    <li class="search-product-list-item">
                                                        <a href="javascript:void(0)" class="search-product-list-link">
                                                            <div class="search-product-list-image"><img src="assets/img/search_suggestion/s1.jpg" alt="img"></div>
                                                            <div class="search-product-list-info">
                                                                <div class="search-product-list-info-top">
                                                                    <h6 class="earch-product-list-info-title"> Apple Original Air pod Collection for most popular and best price item in market </h6>
                                                                </div>
                                                                <div class="search-product-list-info-price mt-2">
                                                                    <div class="search-product-list-info-price-through">
                                                                        <span class="flash-price"> $330.00 </span>
                                                                        <span class="old-price"> $300.00 </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="search-product-list-item">
                                                        <a href="javascript:void(0)" class="search-product-list-link">
                                                            <div class="search-product-list-image"><img src="assets/img/search_suggestion/s2.jpg" alt="img"></div>
                                                            <div class="search-product-list-info">
                                                                <div class="search-product-list-info-top">
                                                                    <h6 class="earch-product-list-info-title"> Apple Original Airpod Collection </h6>
                                                                </div>
                                                                <div class="search-product-list-info-price mt-2">
                                                                    <span class="main-price fw-500 color-light">$269.00</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="search-product-list-item">
                                                        <a href="javascript:void(0)" class="search-product-list-link">
                                                            <div class="search-product-list-image"><img src="assets/img/search_suggestion/s3.jpg" alt="img"></div>
                                                            <div class="search-product-list-info">
                                                                <div class="search-product-list-info-top">
                                                                    <h6 class="earch-product-list-info-title"> Apple Original Airpod Collection </h6>
                                                                </div>
                                                                <div class="search-product-list-info-price mt-2">
                                                                    <span class="main-price fw-500 color-light">$499.00</span>
                                                                    <span class="stock-out"> Stock Out </span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="search-product-list-item">
                                                        <a href="javascript:void(0)" class="search-product-list-link">
                                                            <div class="search-product-list-image"><img src="assets/img/search_suggestion/s4.jpg" alt="img"></div>
                                                            <div class="search-product-list-info">
                                                                <div class="search-product-list-info-top">
                                                                    <h6 class="earch-product-list-info-title"> Apple Original Airpod Collection </h6>
                                                                </div>
                                                                <div class="search-product-list-info-price mt-2">
                                                                    <span class="main-price fw-500 color-light">$499.00</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="search-product-list-item">
                                                        <a href="javascript:void(0)" class="search-product-list-link">
                                                            <div class="search-product-list-image"><img src="assets/img/search_suggestion/s5.jpg" alt="img"></div>
                                                            <div class="search-product-list-info">
                                                                <div class="search-product-list-info-top">
                                                                    <h6 class="earch-product-list-info-title"> Apple Original Airpod Collection </h6>
                                                                </div>
                                                                <div class="search-product-list-info-price mt-2">
                                                                    <span class="main-price fw-500 color-light">$499.00</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="search-suggestion-overlay"></div>
                    </div>
                </div>
            </div>
            <div class="shop-contents-wrapper mt-5">
                <div class="shop-icon">
                    <div class="shop-icon-sidebar">
                        <i class="las la-bars"></i>
                    </div>
                </div>
                <div class="shop-sidebar-content">
                    <div class="shop-close-content">
                        <div class="shop-close-content-icon"> <i class="las la-times"></i> </div>
                        <div class="single-shop-left bg-white radius-10">
                            <div class="single-shop-left-title open">
                                <h5 class="title"> Prices </h5>
                                <div class="single-shop-left-inner mt-4">
                                    <form class="price-range-slider" method="post" data-start-min="0" data-start-max="10000" data-min="0" data-max="10000" data-step="5">
                                        <div class="ui-range-slider"></div>
                                        <div class="ui-range-slider-footer">
                                            <div class="ui-range-values">
                                                <span class="ui-price-title"> Price: </span>
                                                <div class="ui-range-value-min">$<span class="min_price">100</span>
                                                    <input type="hidden" value="100">
                                                </div>-
                                                <div class="ui-range-value-max">$<span class="max_price">9950</span>
                                                    <input type="hidden" value="9950">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="single-shop-left bg-white radius-10 mt-4">
                            <div class="single-shop-left-title open">
                                <h5 class="title"> Amenities </h5>
                                <div class="single-shop-left-inner margin-top-15">
                                    <ul class="single-shop-left-list active-list list-style-none">
                                        <li class="item-search">
                                            <input type="text" class="form--control" placeholder="Search Amenities">
                                            <div class="item-search-icon"> <i class="las la-search"></i> </div>
                                        </li>
                                        <li class="item"> <a href="javascript:void(0)"> Parking </a> </li>
                                        <li class="item active"> <a href="javascript:void(0)"> Room Service </a> </li>
                                        <li class="item"> <a href="javascript:void(0)"> Free Wifi </a> </li>
                                        <li class="item"> <a href="javascript:void(0)"> Healthy Breakfast </a> </li>
                                        <li class="item"> <a href="javascript:void(0)"> Flexible Checkout </a> </li>
                                        <li class="item"> <a href="javascript:void(0)"> Swimming Pool </a> </li>
                                        <li class="item"> <a href="javascript:void(0)"> Mini Fridge </a> </li>
                                        <li class="item"> <a href="javascript:void(0)"> Garden View </a> </li>
                                        <li class="item"> <a href="javascript:void(0)"> Play Ground </a> </li>
                                        <li class="more-amenities"> <a href="javascript:void(0)"> 23 More Amenities </a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single-shop-left bg-white radius-10 mt-4">
                            <div class="single-shop-left-title open">
                                <h5 class="title"> Filter By Rating </h5>
                                <div class="single-shop-left-inner">
                                    <ul class="single-shop-left-filter-list active-list mt-3">
                                        <li class="item active">
                                            <a href="javascript:void(0)"> <i class="las la-star"></i> </a>
                                            <a href="javascript:void(0)"> <i class="las la-star"></i> </a>
                                            <a href="javascript:void(0)"> <i class="las la-star"></i> </a>
                                            <a href="javascript:void(0)"> <i class="las la-star"></i> </a>
                                            <a href="javascript:void(0)"> <i class="las la-star"></i> </a>
                                        </li>
                                        <li class="item">
                                            <a href="javascript:void(0)"> <i class="las la-star"></i> </a>
                                            <a href="javascript:void(0)"> <i class="las la-star"></i> </a>
                                            <a href="javascript:void(0)"> <i class="las la-star"></i> </a>
                                            <a href="javascript:void(0)"> <i class="las la-star"></i> </a>
                                            <a href="javascript:void(0)"> <i class="lar la-star"></i> </a>
                                        </li>
                                        <li class="item">
                                            <a href="javascript:void(0)"> <i class="las la-star"></i> </a>
                                            <a href="javascript:void(0)"> <i class="las la-star"></i> </a>
                                            <a href="javascript:void(0)"> <i class="las la-star"></i> </a>
                                            <a href="javascript:void(0)"> <i class="lar la-star"></i> </a>
                                            <a href="javascript:void(0)"> <i class="lar la-star"></i> </a>
                                        </li>
                                        <li class="item">
                                            <a href="javascript:void(0)"> <i class="las la-star"></i> </a>
                                            <a href="javascript:void(0)"> <i class="las la-star"></i> </a>
                                            <a href="javascript:void(0)"> <i class="lar la-star"></i> </a>
                                            <a href="javascript:void(0)"> <i class="lar la-star"></i> </a>
                                            <a href="javascript:void(0)"> <i class="lar la-star"></i> </a>
                                        </li>
                                        <li class="item">
                                            <a href="javascript:void(0)"> <i class="las la-star"></i> </a>
                                            <a href="javascript:void(0)"> <i class="lar la-star"></i> </a>
                                            <a href="javascript:void(0)"> <i class="lar la-star"></i> </a>
                                            <a href="javascript:void(0)"> <i class="lar la-star"></i> </a>
                                            <a href="javascript:void(0)"> <i class="lar la-star"></i> </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shop-grid-contents">
                    <div class="grid-list-contents">
                        <div class="grid-list-contents-flex">
                            <p class="grid-list-contents-para"> Showing 1-4 of 16 results </p>
                            <div class="grid-list-view">
                                <ul class="grid-list-view-flex d-flex tabs list-style-none">
                                    <li class="grid-list-view-icons active" data-tab="tab-grid">
                                        <a href="javascript:void(0)" class="icon"> <i class="las la-border-all"></i> </a>
                                    </li>
                                    <li class="grid-list-view-icons" data-tab="tab-list">
                                        <a href="javascript:void(0)" class="icon"> <i class="las la-bars"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div id="tab-grid" class="tab-content-item active mt-4">
                        <div class="row gy-4">
                            @foreach($properties as $property)
                            <div class="col-md-6">
                                <div class="hotel-view bg-white radius-20">
                                    <a href="hotel_details.html" class="hotel-view-thumb hotel-view-grid-thumb bg-image" ><img src="{{asset('storage/images/properties/'.$property->images[0]->link)}}" alt="properties">
                                    </a>
                                    <div class="hotel-view-contents">
                                        <div class="hotel-view-contents-header">
                                            <span class="hotel-view-contents-review"> <i class="las la-star"></i> 4.5 <span class="hotel-view-contents-review-count"> (380) </span> </span>
                                            <h3 class="hotel-view-contents-title"> <a href="hotel_details.html"> {{$property->designation}} </a> </h3>
                                            <div class="hotel-view-contents-location mt-2">
                                                <span class="hotel-view-contents-location-icon"> <i class="las la-map-marker-alt"></i> </span>
                                                <span class="hotel-view-contents-location-para"> {{$property->addresse}}  </span>
                                            </div>
                                        </div>
                                        <div class="hotel-view-contents-middle">
                                            <div class="hotel-view-contents-flex">
                                                <div class="hotel-view-contents-icon myTooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Car Parking">
                                                    <i class="las la-parking"></i>
                                                </div>
                                                <div class="hotel-view-contents-icon myTooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Free Wifi">
                                                    <i class="las la-wifi"></i>
                                                </div>
                                                <div class="hotel-view-contents-icon myTooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Free Breakfast">
                                                    <i class="las la-coffee"></i>
                                                </div>
                                                <div class="hotel-view-contents-icon myTooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Home Service">
                                                    <i class="las la-quidditch"></i>
                                                </div>
                                                <div class="hotel-view-contents-icon myTooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Swimming Pool">
                                                    <i class="las la-swimming-pool"></i>
                                                </div>
                                                <div class="hotel-view-contents-icon myTooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Reception">
                                                    <i class="las la-receipt"></i>
                                                </div>
                                                <div class="hotel-view-contents-icon myTooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Gym">
                                                    <i class="las la-dumbbell"></i>
                                                </div>
                                                <div class="hotel-view-contents-icon">
                                                    <a class="hotel-view-contents-icon-more" href="javascript:void(0)"> +8 More </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hotel-view-contents-bottom">
                                            <div class="hotel-view-contents-bottom-flex">
                                                <div class="hotel-view-contents-bottom-contents">
                                                    <h4 class="hotel-view-contents-bottom-title"> $230 <sub>/Night</sub> </h4>
                                                    <p class="hotel-view-contents-bottom-para"> (4 Nights, 2 Rooms, 4 Persons) </p>
                                                </div>
                                                <div class="btn-wrapper">
                                                    <a href="javascript:void(0)" class="cmn-btn btn-bg-1 btn-small"> Reserve Now </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            
                            
                        </div>
                        <div class="row mt-5">
                            <div class="col">
                                <div class="pagination-wrapper">
                                    <ul class="pagination-list list-style-none">
                                        <li class="pagination-list-item-prev">
                                            <a href="javascript:void(0)" class="pagination-list-item-button"> Prev </a>
                                        </li>
                                        <li class="pagination-list-item">
                                            <a href="javascript:void(0)" class="pagination-list-item-link"> 1 </a>
                                        </li>
                                        <li class="pagination-list-item active">
                                            <a href="javascript:void(0)" class="pagination-list-item-link"> 2 </a>
                                        </li>
                                        <li class="pagination-list-item">
                                            <a href="javascript:void(0)" class="pagination-list-item-link"> 3 </a>
                                        </li>
                                        <li class="pagination-list-item">
                                            <a href="javascript:void(0)" class="pagination-list-item-link"> 4 </a>
                                        </li>
                                        <li class="pagination-list-item">
                                            <a href="javascript:void(0)" class="pagination-list-item-link"> 5 </a>
                                        </li>
                                        <li class="pagination-list-item-next">
                                            <a href="javascript:void(0)" class="pagination-list-item-button"> Next </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-list" class="tab-content-item mt-4">
                        <div class="row gy-4">
                            <div class="col-12">
                                <div class="hotel-view bg-white radius-20">
                                    <div class="hotel-view-flex">
                                        <a href="hotel_details.html" class="hotel-view-thumb hotel-view-list-thumb bg-image" style="background-image: url(assets/img/single-page/hotel-list1.jpg);">
                                        </a>
                                        <div class="hotel-view-contents">
                                            <div class="hotel-view-contents-header">
                                                <div class="hotel-view-contents-header-flex d-flex flex-wrap gap-3 align-items-center justify-content-between">
                                                    <span class="hotel-view-contents-review"> <i class="las la-star"></i> 4.5 <span class="hotel-view-contents-review-count"> (380) </span> </span>
                                                    <div class="btn-wrapper">
                                                        <a href="javascript:void(0)" class="cmn-btn btn-bg-1 btn-small"> Reserve Now </a>
                                                    </div>
                                                </div>
                                                <h3 class="hotel-view-contents-title"> <a href="hotel_details.html"> King Suite Room </a> </h3>
                                                <div class="hotel-view-contents-location mt-2">
                                                    <span class="hotel-view-contents-location-icon"> <i class="las la-map-marker-alt"></i> </span>
                                                    <span class="hotel-view-contents-location-para"> 4140 Parker Rd. Allentown, New Mexico 31134  </span>
                                                </div>
                                            </div>
                                            <div class="hotel-view-contents-middle">
                                                <div class="hotel-view-contents-flex">
                                                    <div class="hotel-view-contents-icon d-flex gap-1">
                                                        <span> <i class="las la-parking"></i> </span>
                                                        <p class="hotel-view-contents-icon-title flex-fill"> Parking </p>
                                                    </div>
                                                    <div class="hotel-view-contents-icon d-flex gap-1">
                                                        <span> <i class="las la-wifi"></i> </span>
                                                        <p class="hotel-view-contents-icon-title flex-fill"> Wifi </p>
                                                    </div>
                                                    <div class="hotel-view-contents-icon d-flex gap-1">
                                                        <span> <i class="las la-coffee"></i> </span>
                                                        <p class="hotel-view-contents-icon-title flex-fill"> Breakfast </p>
                                                    </div>
                                                    <div class="hotel-view-contents-icon d-flex gap-1">
                                                        <span> <i class="las la-quidditch"></i> </span>
                                                        <p class="hotel-view-contents-icon-title flex-fill"> Room Service </p>
                                                    </div>
                                                    <div class="hotel-view-contents-icon d-flex gap-1">
                                                        <span> <i class="las la-swimming-pool"></i> </span>
                                                        <p class="hotel-view-contents-icon-title flex-fill"> Pool </p>
                                                    </div>
                                                    <div class="hotel-view-contents-icon d-flex gap-1">
                                                        <span> <i class="las la-receipt"></i> </span>
                                                        <p class="hotel-view-contents-icon-title flex-fill"> Reception </p>
                                                    </div>
                                                    <div class="hotel-view-contents-icon d-flex gap-1">
                                                        <span> <i class="las la-dumbbell"></i> </span>
                                                        <p class="hotel-view-contents-icon-title flex-fill"> Gym </p>
                                                    </div>
                                                    <div class="hotel-view-contents-icon d-flex gap-1">
                                                        <a class="hotel-view-contents-icon-more" href="javascript:void(0)"> +8 More </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="hotel-view-contents-bottom">
                                                <div class="hotel-view-contents-bottom-flex">
                                                    <div class="hotel-view-contents-bottom-contents d-flex flex-wrap gap-4 gap-sm-1">
                                                        <h4 class="hotel-view-contents-bottom-title"> $230 <sub>/Night</sub> </h4>
                                                        <p class="hotel-view-contents-bottom-para"> (4 Nights, 2 Rooms, 4 Persons) </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="hotel-view bg-white radius-20">
                                    <div class="hotel-view-flex">
                                        <a href="hotel_details.html" class="hotel-view-thumb hotel-view-list-thumb bg-image" style="background-image: url(assets/img/single-page/hotel-list2.jpg);">
                                        </a>
                                        <div class="hotel-view-contents">
                                            <div class="hotel-view-contents-header">
                                                <div class="hotel-view-contents-header-flex d-flex flex-wrap gap-3 align-items-center justify-content-between">
                                                    <span class="hotel-view-contents-review"> <i class="las la-star"></i> 4.9 <span class="hotel-view-contents-review-count"> (476) </span> </span>
                                                    <div class="btn-wrapper">
                                                        <a href="javascript:void(0)" class="cmn-btn btn-bg-1 btn-small"> Reserve Now </a>
                                                    </div>
                                                </div>
                                                <h3 class="hotel-view-contents-title"> <a href="hotel_details.html"> Queen Size Room </a> </h3>
                                                <div class="hotel-view-contents-location mt-2">
                                                    <span class="hotel-view-contents-location-icon"> <i class="las la-map-marker-alt"></i> </span>
                                                    <span class="hotel-view-contents-location-para"> 4140 Parker Rd. Allentown, New Mexico 31134  </span>
                                                </div>
                                            </div>
                                            <div class="hotel-view-contents-middle">
                                                <div class="hotel-view-contents-flex">
                                                    <div class="hotel-view-contents-icon d-flex gap-1">
                                                        <span> <i class="las la-parking"></i> </span>
                                                        <p class="hotel-view-contents-icon-title flex-fill"> Parking </p>
                                                    </div>
                                                    <div class="hotel-view-contents-icon d-flex gap-1">
                                                        <span> <i class="las la-wifi"></i> </span>
                                                        <p class="hotel-view-contents-icon-title flex-fill"> Wifi </p>
                                                    </div>
                                                    <div class="hotel-view-contents-icon d-flex gap-1">
                                                        <span> <i class="las la-coffee"></i> </span>
                                                        <p class="hotel-view-contents-icon-title flex-fill"> Breakfast </p>
                                                    </div>
                                                    <div class="hotel-view-contents-icon d-flex gap-1">
                                                        <span> <i class="las la-quidditch"></i> </span>
                                                        <p class="hotel-view-contents-icon-title flex-fill"> Room Service </p>
                                                    </div>
                                                    <div class="hotel-view-contents-icon d-flex gap-1">
                                                        <span> <i class="las la-swimming-pool"></i> </span>
                                                        <p class="hotel-view-contents-icon-title flex-fill"> Pool </p>
                                                    </div>
                                                    <div class="hotel-view-contents-icon d-flex gap-1">
                                                        <span> <i class="las la-receipt"></i> </span>
                                                        <p class="hotel-view-contents-icon-title flex-fill"> Reception </p>
                                                    </div>
                                                    <div class="hotel-view-contents-icon d-flex gap-1">
                                                        <span> <i class="las la-dumbbell"></i> </span>
                                                        <p class="hotel-view-contents-icon-title flex-fill"> Gym </p>
                                                    </div>
                                                    <div class="hotel-view-contents-icon d-flex gap-1">
                                                        <a class="hotel-view-contents-icon-more" href="javascript:void(0)"> +8 More </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="hotel-view-contents-bottom">
                                                <div class="hotel-view-contents-bottom-flex">
                                                    <div class="hotel-view-contents-bottom-contents d-flex flex-wrap gap-4 gap-sm-1">
                                                        <h4 class="hotel-view-contents-bottom-title"> $170 <sub>/Night</sub> </h4>
                                                        <p class="hotel-view-contents-bottom-para"> (3 Nights, 2 Rooms, 4 Persons) </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="hotel-view bg-white radius-20">
                                    <div class="hotel-view-flex">
                                        <a href="hotel_details.html" class="hotel-view-thumb hotel-view-list-thumb bg-image" style="background-image: url(assets/img/single-page/hotel-list3.jpg);">
                                        </a>
                                        <div class="hotel-view-contents">
                                            <div class="hotel-view-contents-header">
                                                <div class="hotel-view-contents-header-flex d-flex flex-wrap gap-3 align-items-center justify-content-between">
                                                    <span class="hotel-view-contents-review"> <i class="las la-star"></i> 4.6 <span class="hotel-view-contents-review-count"> (394) </span> </span>
                                                    <div class="btn-wrapper">
                                                        <a href="javascript:void(0)" class="cmn-btn btn-bg-1 btn-small"> Reserve Now </a>
                                                    </div>
                                                </div>
                                                <h3 class="hotel-view-contents-title"> <a href="hotel_details.html"> Big Size Room </a> </h3>
                                                <div class="hotel-view-contents-location mt-2">
                                                    <span class="hotel-view-contents-location-icon"> <i class="las la-map-marker-alt"></i> </span>
                                                    <span class="hotel-view-contents-location-para"> 4140 Parker Rd. Allentown, New Mexico 31134  </span>
                                                </div>
                                            </div>
                                            <div class="hotel-view-contents-middle">
                                                <div class="hotel-view-contents-flex">
                                                    <div class="hotel-view-contents-icon d-flex gap-1">
                                                        <span> <i class="las la-parking"></i> </span>
                                                        <p class="hotel-view-contents-icon-title flex-fill"> Parking </p>
                                                    </div>
                                                    <div class="hotel-view-contents-icon d-flex gap-1">
                                                        <span> <i class="las la-wifi"></i> </span>
                                                        <p class="hotel-view-contents-icon-title flex-fill"> Wifi </p>
                                                    </div>
                                                    <div class="hotel-view-contents-icon d-flex gap-1">
                                                        <span> <i class="las la-coffee"></i> </span>
                                                        <p class="hotel-view-contents-icon-title flex-fill"> Breakfast </p>
                                                    </div>
                                                    <div class="hotel-view-contents-icon d-flex gap-1">
                                                        <span> <i class="las la-quidditch"></i> </span>
                                                        <p class="hotel-view-contents-icon-title flex-fill"> Room Service </p>
                                                    </div>
                                                    <div class="hotel-view-contents-icon d-flex gap-1">
                                                        <span> <i class="las la-swimming-pool"></i> </span>
                                                        <p class="hotel-view-contents-icon-title flex-fill"> Pool </p>
                                                    </div>
                                                    <div class="hotel-view-contents-icon d-flex gap-1">
                                                        <span> <i class="las la-receipt"></i> </span>
                                                        <p class="hotel-view-contents-icon-title flex-fill"> Reception </p>
                                                    </div>
                                                    <div class="hotel-view-contents-icon d-flex gap-1">
                                                        <span> <i class="las la-dumbbell"></i> </span>
                                                        <p class="hotel-view-contents-icon-title flex-fill"> Gym </p>
                                                    </div>
                                                    <div class="hotel-view-contents-icon d-flex gap-1">
                                                        <a class="hotel-view-contents-icon-more" href="javascript:void(0)"> +8 More </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="hotel-view-contents-bottom">
                                                <div class="hotel-view-contents-bottom-flex">
                                                    <div class="hotel-view-contents-bottom-contents d-flex flex-wrap gap-4 gap-sm-1">
                                                        <h4 class="hotel-view-contents-bottom-title"> $200 <sub>/Night</sub> </h4>
                                                        <p class="hotel-view-contents-bottom-para"> (3 Nights, 3 Rooms, 3 Persons) </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col">
                                <div class="pagination-wrapper">
                                    <ul class="pagination-list list-style-none">
                                        <li class="pagination-list-item-prev">
                                            <a href="javascript:void(0)" class="pagination-list-item-button"> Prev </a>
                                        </li>
                                        <li class="pagination-list-item">
                                            <a href="javascript:void(0)" class="pagination-list-item-link"> 1 </a>
                                        </li>
                                        <li class="pagination-list-item active">
                                            <a href="javascript:void(0)" class="pagination-list-item-link"> 2 </a>
                                        </li>
                                        <li class="pagination-list-item">
                                            <a href="javascript:void(0)" class="pagination-list-item-link"> 3 </a>
                                        </li>
                                        <li class="pagination-list-item">
                                            <a href="javascript:void(0)" class="pagination-list-item-link"> 4 </a>
                                        </li>
                                        <li class="pagination-list-item">
                                            <a href="javascript:void(0)" class="pagination-list-item-link"> 5 </a>
                                        </li>
                                        <li class="pagination-list-item-next">
                                            <a href="javascript:void(0)" class="pagination-list-item-button"> Next </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hotel List area end -->


@endsection