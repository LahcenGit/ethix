@extends('layouts.front')
@section('content')


    <!-- Breadcrumb area Starts -->
    <div class="breadcrumb-area breadcrumb-padding ">
            <div class="container d-flex justify-content-center " >
                <div class="col-1 text-center">
                    <a href="http://"> <i class="fa-solid fa-house-fire fa-2x" style="color:#4DAA7F; " > </i> <br> propriétés </a>
                </div>
                <div class="col-1 text-center">
                    <a href="http://"> <i class="fa-solid fa-money-bill-trend-up fa-2x" style="color:#4DAA7F; " > </i> <br> Investissements </a>
                </div>
                <div class="col-1 text-center">
                    <a href="{{url('app/profil')}}"> <i class="fa-solid fa-user fa-2x" style="color:#4DAA7F; " > </i> <br> Profil </a>
                </div>

                <div class="col-1 text-center">
                    <a href="{{route('logout')}}"> <i class="fa-solid fa-right-from-bracket fa-2x" style="color:#818181; " onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" > </i> <br> Déconnexion 
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </a>
                </div>
                
                
            </div>
            @if($user->status == 0)
            <div class="container mt-4 ">
            <div class="alert alert-warning" role="alert">
             <span style="font-size: 17px;">@if($test_document == 0) Veuillez compléter les étapes restantes pour activer votre compte ,<a href="{{url('/add-file')}}" class="alert-link">Vas-y ! </a>
             @else
             La validation de votre compte est en cours de traitement...
             @endif
            </span>
            </div>
            </div>
            @endif
    </div>
    <!-- Breadcrumb area end -->


    <!-- Dashboard area Starts -->
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
                            <div class="col-md-4">
                                <div class="hotel-view bg-white radius-20">
                                    <a href="{{asset('/app/detail-property/'.$property->id)}}" class="hotel-view-thumb hotel-view-grid-thumb bg-image" ><img src="{{asset('storage/images/properties/'.$property->images[0]->link)}}" alt="properties">
                                    </a>
                                    <div class="hotel-view-contents">
                                        <div class="hotel-view-contents-header">
                                            <span class="hotel-view-contents-review"> {{number_format($property->valuation)}} <span class="hotel-view-contents-review-count">€</span> </span>
                                            <h3 class="hotel-view-contents-title"> <a href="{{asset('/app/detail-property/'.$property->id)}}"> {{$property->designation}} </a> </h3>
                                            <div class="hotel-view-contents-location mt-2">
                                                <span class="hotel-view-contents-location-icon"> <i class="las la-map-marker-alt"></i> </span>
                                                <span class="hotel-view-contents-location-para"> {{$property->addresse}}  </span>
                                            </div>
                                        </div>
                                        
                                        <div class="hotel-view-contents-bottom pt-2">
                                            <div class="hotel-view-contents-bottom-flex">
                                                <div class="hotel-view-contents-bottom-contents row">
                                                    <div class="col-4">
                                                        <h4 style="color:#0b9e9a ;" >{{$property->profitability}}%</h4> rentabilité 
                                                    </div>
                                                    <div class="col-4">
                                                        <h4 style="color:#0b9e9a ;">{{$property->obj_revenu}}%</h4> Reverséss 
                                                    </div >
                                                    <div class="col-4">
                                                        <div class="btn-wrapper">
                                                            <a href="{{asset('/app/detail-property/'.$property->id)}}" class="cmn-btn btn-bg-1  mt-2" style="background-color: #0b9e9a;"> Acheter  </a>
                                                       </div>
                                                    </div >
                                                    
                                                </div>
                                            </div>
                                            
                                            <h6 class="mt-2 mb-1">21.84% financé</h6>
                                            <div class="progress mb-2">
                                                <div class="progress-bar"  role="progressbar" style="width: 25%; background-color:#0b9e9a" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
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