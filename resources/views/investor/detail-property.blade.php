@extends('layouts.front')
@section('content')




@include('investor.header-investor')

<!-- Hotel Details area Starts -->
    <section class="hotel-details-area section-bg-2 pat-100 pab-100">
        <div class="container">
            <div class="row g-4">
                <div class="col-xl-8 col-lg-7">
                    <div class="details-left-wrapper">
                        <div class="details-contents bg-white radius-10">
                            <div class="details-contents-header">
                                <div class="owl-carousel owl-theme">
                                    @foreach ($property->images as $img)
                                        <div class="item" data-merge="{{$loop->iteration}}"><img src="{{asset('storage/images/properties/'.$img->link)}}"  width="50%" height="50%"  alt=""></div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="hotel-view-contents">
                                <div class="hotel-view-contents-header">
                                <span class="hotel-view-contents-review"> {{number_format($property->valuation),2}} € </span>
                                    <h3 class="hotel-view-contents-title"> {{$property->designation}} </h3>
                                    <div class="hotel-view-contents-location mt-2">
                                        <span class="hotel-view-contents-location-icon"> <i class="las la-map-marker-alt"></i> </span>
                                        <span class="hotel-view-contents-location-para"> {{$property->addresse}} </span>
                                    </div>
                                </div>
                                <div class="hotel-view-contents-middle">
                                    <div class="hotel-view-contents-flex">
                                        <div class="hotel-view-contents-icon d-flex gap-1">
                                            <span> <i class="las la-bed"></i> </span>
                                            <p class="hotel-view-contents-icon-title flex-fill"> {{$property->nbr_bedroom}} Chambres  </p>
                                        </div>
                                        <div class="hotel-view-contents-icon d-flex gap-1">
                                            <span> <i class="las la-toilet"></i> </span>
                                            <p class="hotel-view-contents-icon-title flex-fill">{{$property->nbr_bathroom}} Salles-de-bain </p>
                                        </div>
                                        <div class="hotel-view-contents-icon d-flex gap-1">
                                            <span> <i class="las la-arrows-alt-h"></i> </span>
                                            <p class="hotel-view-contents-icon-title flex-fill">{{$property->footage}} m2</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="details-contents-tab">
                                <ul class="tabs details-tab details-tab-border">
                                    <li class="active" data-tab="about"> Description </li>
                                    
                                </ul>
                                <div id="about" class="tab-content-item active">
                                    <div class="about-tab-contents">
                                       
                                        <p class="about-tab-contents-para mt-4"> {!! $property->description !!} </p>
                                        
                                    </div>
                                </div>
                                <div id="reviews" class="tab-content-item">
                                    <div class="review-tab-contents">
                                        <div class="review-tab-contents-single">
                                            <div class="rating-wrap">
                                                <div class="ratings">
                                                    <span class="hide-rating"></span>
                                                    <span class="show-rating"></span>
                                                </div>
                                                <p> <span class="total-ratings">(167)</span></p>
                                            </div>
                                            <p class="about-review-para mt-3"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a egestas leo. Aliquam ut ante lobortis tellus cursus pellentesque. Praesent feugiat tellus quis aliquet </p>
                                            <div class="review-tab-contents-author mt-4">
                                                <h4 class="review-tab-contents-author-name"> Sandra M. Hurt </h4>
                                                <p class="review-tab-contents-author-para mt-2"> TrustPilot </p>
                                            </div>
                                        </div>
                                        <div class="review-tab-contents-single">
                                            <div class="rating-wrap">
                                                <div class="ratings">
                                                    <span class="hide-rating"></span>
                                                    <span class="show-rating"></span>
                                                </div>
                                                <p> <span class="total-ratings">(236)</span></p>
                                            </div>
                                            <p class="about-review-para mt-3"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a egestas leo. Aliquam ut ante lobortis tellus cursus pellentesque. Praesent feugiat tellus quis aliquet </p>
                                            <div class="review-tab-contents-author mt-4">
                                                <h4 class="review-tab-contents-author-name"> Robert Fox </h4>
                                                <p class="review-tab-contents-author-para mt-2"> Designer </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="sticky-top">
                        <div class="hotel-details-widget hotel-details-widget-padding widget bg-white radius-10">
                            <div class="details-sidebar">
                                <div class="single-reservation-item">
                                    <div class="single-reservation-details">
                                        <div class="single-reservation-details-item">
                                            <span class="single-reservation-details-subtitle" > Valeur d'une Ethix</span>
                                            <h3 class="single-reservation-details-title" style="font-size: 25px;"> 10 €</h3>
                                        </div>
                                        <div class="single-reservation-details-item">
                                            <span class="single-reservation-details-subtitle"> Objectif de financement</span>
                                            <h5 class="single-reservation-details-title"> {{number_format($property->obj_financement)}} €</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-reservation-item">
                                    <div class="single-reservation-details">
                                        <div class="single-reservation-details-item">
                                            <span class="single-reservation-details-subtitle"> Rentabilité cible</span>
                                            <h5 class="single-reservation-details-title"> {{$property->profitability}}%</h5>
                                        </div>
                                        <div class="single-reservation-details-item">
                                            <span class="single-reservation-details-subtitle">Objectif de revenus</span>
                                            <h5 class="single-reservation-details-title"> {{$property->obj_revenu}}%</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-reservation-item">
                                    <div class="single-reservation-details">
                                        <div class="single-reservation-details-item">
                                            <span class="single-reservation-details-subtitle"> Valorisation du bien</span>
                                            <h5 class="single-reservation-details-title"> {{number_format($property->valuation)}} €</h5>
                                        </div>
                                       
                                    </div>
                                </div>
                              
                                <div class="btn-wrapper mt-4">
                                    <a href="{{url('app/achat-ethix/'.$property->id)}}" class="cmn-btn btn-bg-1"> Achat d'un Ethix</a>
                                </div>
                            </div>
                        </div>
                        <div class="hotel-details-widget widget bg-white radius-10">
                            <div class="hotel-view">
                                
                                <div class="hotel-view-contents">
                                    <div class="hotel-view-contents-header">
                                        <h3 class="hotel-view-contents-title"> Pourquoi vous devriez investir ? </h3>
                                        
                                    </div>
                                    <div class="hotel-view-contents-middle">
                                           <h5 class="mt-2 mb-2" style="color: #4DAA7F"><b>Situation idéale</b> </h5> 
                                           <p>
                                            L’actif est situé à 10 minutes à pied de l’ensemble des principaux lieux touristiques de Porto ainsi qu’à 600 mètres d’une station de métro. 
                                           </p>
                                           <h5 class="mt-2 mb-2" style="color: #4DAA7F"><b>Revenus locatifs</b> </h5> 
                                           <p>
                                            L’actif est situé à 10 minutes à pied de l’ensemble des principaux lieux touristiques de Porto ainsi qu’à 600 mètres d’une station de métro. 
                                           </p>
                                           <h5 class="mt-2 mb-2" style="color: #4DAA7F"><b>État du bien</b> </h5> 
                                           <p>
                                            L’actif est situé à 10 minutes à pied de l’ensemble des principaux lieux touristiques de Porto ainsi qu’à 600 mètres d’une station de métro. 
                                           </p>
                                           <h5 class="mt-2 mb-2" style="color: #4DAA7F"><b>Evolution du marché</b> </h5> 
                                           <p>
                                            L’actif est situé à 10 minutes à pied de l’ensemble des principaux lieux touristiques de Porto ainsi qu’à 600 mètres d’une station de métro. 
                                           </p>
        
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hotel Details area end -->
   

@endsection



