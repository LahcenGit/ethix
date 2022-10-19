@extends('layouts.front')
@section('content')



@include('investor.header-investor')

<div class="body-overlay"></div>
    <div class="dashboard-area section-bg-2 dashboard-padding">
        <div class="container">
            <div class="shop-contents-wrapper mt-5">
                <div class="shop-icon">
                    <div class="shop-icon-sidebar">
                        <i class="las la-bars"></i>
                    </div>
                </div>
                <div class="shop-grid-contents">
                    <div id="tab-grid" class="tab-content-item active mt-4">
                        <div class="row gy-4">
                            @foreach($investissements as $investissement)
                            <div class="col-md-6">
                                <div class="hotel-view bg-white radius-20">
                                    <a href="#" class="hotel-view-thumb hotel-view-grid-thumb bg-image" ><img src="{{asset('storage/images/properties/'.$investissement->property->images[0]->link)}}" alt="properties">
                                    </a>
                                    <div class="hotel-view-contents">
                                        <div class="hotel-view-contents-header">
                                          
                                            <h3 class="hotel-view-contents-title"> <a href="#"> {{$investissement->property->designation}} </a> </h3>
                                            <div class="hotel-view-contents-location mt-2">
                                                <span class="hotel-view-contents-location-icon"> <i class="las la-map-marker-alt"></i> </span>
                                                <span class="hotel-view-contents-location-para"> {{$investissement->property->addresse}}  </span>
                                            </div>
                                        </div>
                                        
                                        <div class="hotel-view-contents-bottom pt-2">
                                            <div class="hotel-view-contents-bottom-flex">
                                                <div class="hotel-view-contents-bottom-contents row">
                                                    <div class="col-4">
                                                        <h4  >{{$investissement->nbr_ethix}} Ethixs </h4> Achtés
                                                    </div>
                                                  </div>
                                            </div>
                                            
                                            <h6 class="mt-2 mb-1">{{$investissement->property->financing_percentage()}} % financé</h6>
                                            <div class="progress mb-2">
                                                <div class="progress-bar"  role="progressbar" style="width: {{$investissement->property->financing_percentage()}}%; background-color:#4daa7f" aria-valuenow="{{$investissement->property->financing_percentage()}}" aria-valuemin="0" aria-valuemax="100"></div>
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

@endsection