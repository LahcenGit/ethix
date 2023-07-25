@extends('layouts.front')
@section('content')

@include('flash-message')
@include('investor.header-investor')

    <!-- Dashboard area Starts -->
    <div class="body-overlay"></div>
    <div class="dashboard-area section-bg-2 dashboard-padding">
        <div class="container">
            <div class="shop-contents-wrapper mt-5">

                <div class="shop-grid-contents">


                    <div id="tab-grid" class="tab-content-item active mt-4">
                        <div class="row gy-4">
                            @foreach($properties as $property)
                            <div class="col-md-4">
                                <div class="hotel-view bg-white radius-20">
                                    <a href="#" class="hotel-view-thumb hotel-view-grid-thumb bg-image btnBien" ><img src="{{asset('storage/images/properties/'.$property->images[0]->link)}}" alt="properties">
                                    </a>
                                    <div class="hotel-view-contents">
                                        <div class="hotel-view-contents-header">
                                            <span class="hotel-view-contents-review"> {{number_format($property->valuation)}} <span class="hotel-view-contents-review-count">€</span> </span>
                                            <h3 class="hotel-view-contents-title"> <a href="#" class="btnBien"> {{$property->designation}} </a> </h3>
                                            <div class="hotel-view-contents-location mt-2">
                                                <span class="hotel-view-contents-location-icon"> <i class="las la-map-marker-alt"></i> </span>
                                                <span class="hotel-view-contents-location-para"> {{$property->addresse}}  </span>
                                            </div>
                                        </div>

                                        <div class="hotel-view-contents-bottom pt-2">
                                            <div class="hotel-view-contents-bottom-flex">
<<<<<<< Updated upstream
                                                <div class="hotel-view-contents-bottom-contents row">
                                                    <div class="col-6 p-2">
                                                        <h4  >{{$property->profitability}}%</h4> rentabilité
                                                    </div>

=======
                                                <div class="hotel-view-contents-bottom-contents row" style="width: 500px;">
                                                    <div class="col-6 p-2">
                                                        <h4  >{{$property->profitability}}%</h4> Revenus net estimés
                                                    </div>
                                                {{--<div class="col-3 p-2">
                                                        <h4 >{{$property->obj_revenu}}%</h4> Reversés
                                                    </div >--}}
>>>>>>> Stashed changes
                                                    <div class="col-6 text-center">
                                                        <div class="btn-wrapper">
                                                            <a href="#"  class="cmn-btn btn-bg-1  mt-2 btnBien" > Acheter  </a>
                                                       </div>
                                                    </div >

                                                </div>
                                            </div>

                                            <h6 class="mt-2 mb-1">{{$property->financing_percentage()}} % financé</h6>
                                            <div class="progress mb-2">
                                                <div class="progress-bar"  role="progressbar" style="width:{{$property->financing_percentage()}}%; background-color:#4daa7f" aria-valuenow="{{$property->financing_percentage()}}" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach


                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Dashboard area end -->

    <!-- popup start -->
    <div class="popup-overlay"></div>
    <div class="popup-fixed">
        <div class="popup-contents popup-cancell-modal">
            <h2 class="popup-contents-title"> Why do you want to cancel? </h2>
            <div class="popup-contents-select">
                <label class="popup-contents-select-label"> Choose a reason </label>
                <div class="js-select">
                    <select>
                        <option value="1">Don't want to Book</option>
                        <option value="2">Booked Accidentally</option>
                        <option value="3">Don't want to Book</option>
                    </select>
                </div>
            </div>
            <div class="popup-contents-btn flex-btn">
                <a href="javascript:void(0)" class="dash-btn popup-close"> <i class="las la-arrow-left"></i> Go Back </a>
                <a href="javascript:void(0)" class="dash-btn btn-cancelled popup-close"> Cancel </a>
            </div>
        </div>
    </div>
    <!-- popup ends  -->

@endsection


