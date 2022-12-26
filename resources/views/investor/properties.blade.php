@extends('layouts.front')
@section('content')
<!-- Breadcrumb area Starts -->
<style>
    .btn-wrapper .cmn-btn.btn-bg-1{
        background:#0b9e9a !important;
        color: #fff;
        border: #0b9e9a;
    }
    .pagination-list-item.active .pagination-list-item-link {
        background-color:#0b9e9a !important;
    }
    .price-range-slider .ui-range-slider.noUi-target .noUi-base .noUi-connect {
        background-color:#0b9e9a !important;

    }
    .price-range-slider .ui-range-slider.noUi-target .noUi-handle {
        background: #0b9e9a !important;
    }
    .a{
        color: #0b9e9a !important;
    }
    .back-to-top {
        background-color: #0b9e9a !important;
    }
</style>
<div class="breadcrumb-area section-bg-2 breadcrumb-padding">
        <div class="container custom-container-one">
            <div class="row">
                <div class="col-lg-12 ">
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
            <div class="banner-location bg-white radius-12 d-flex justify-content-center">
                <div class="banner-location-flex">
                    <div class="banner-location-single">
                        <div class="banner-location-single-flex">
                            <div class="banner-location-single-contents">
                            <span class="banner-location-single-contents-subtitle mr-5">les biens</span>
                            </div>
                        </div>
                    </div>
                    <div class="banner-location-single">
                        <div class="banner-location-single-flex">
                            <div class="banner-location-single-contents">
                                <span class="banner-location-single-contents-subtitle mr-5"> Mes biens </span>
                            </div>
                        </div>
                    </div>
                    <div class="banner-location-single">
                        <div class="banner-location-single-flex">

                            <div class="banner-location-single-contents">
                                <span class="banner-location-single-contents-subtitle mr-5">Mes ventes </span>

                            </div>
                        </div>
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
                                                <div class="ui-range-value-min" style="color:#0b9e9a !important;">$<span class="min_price">100</span>
                                                    <input type="hidden"class="price" value="100">
                                                </div>-
                                                <div class="ui-range-value-max"style="color:#0b9e9a !important;">$<span class="max_price">9950</span>
                                                    <input type="hidden" value="9950">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="shop-grid-contents">
                    <div class="grid-list-contents">
                        <div class="grid-list-contents-flex">
                            <p class="grid-list-contents-para"> Affichage 1-4 de 16 résultats </p>
                            <div class="grid-list-view">
                                <ul class="grid-list-view-flex d-flex tabs list-style-none">
                                    <li class="grid-list-view-icons active" data-tab="tab-grid">
                                        <a href="javascript:void(0)" class="icon" style="color: #0b9e9a"> <i class="las la-border-all"></i> </a>
                                    </li>
                                    <li class="grid-list-view-icons" data-tab="tab-list">
                                        <a href="javascript:void(0)" class="icon" > <i class="las la-bars"></i> </a>
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
                                            <span class="hotel-view-contents-review"> {{$property->valuation}} <span class="hotel-view-contents-review-count">€</span> </span>
                                            <h3 class="hotel-view-contents-title"> <a href="hotel_details.html"> {{$property->designation}} </a> </h3>
                                            <div class="hotel-view-contents-location mt-2">
                                                <span class="hotel-view-contents-location-icon"> <i class="las la-map-marker-alt"></i> </span>
                                                <span class="hotel-view-contents-location-para"> {{$property->addresse}}  </span>
                                            </div>
                                        </div>

                                        <div class="hotel-view-contents-bottom">
                                            <div class="hotel-view-contents-bottom-flex">
                                                <div class="hotel-view-contents-bottom-contents">
                                                    <h4 class="hotel-view-contents-bottom-title" style="color:#0b9e9a ;"> {{$property->profitability}} <sub> Rentabilité </sub> | {{$property->obj_revenu}}<sub> Reversés </sub></h4>
                                                    <p class="hotel-view-contents-bottom-para"> ({{$property->nbr_bedroom}} Chambres, {{$property->nbr_bathroom}} Salles-de-bain) </p>
                                                </div>

                                            </div>
                                            <div class="btn-wrapper">
                                                    <a href="javascript:void(0)" class="cmn-btn btn-bg-1 btn-small" style="background-color: #0b9e9a;"> Acheter </a>
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

@endpush
