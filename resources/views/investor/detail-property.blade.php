@extends('layouts.front')
@section('content')


<style>
.analyse td{
       color: rgb(61, 74, 87);
}
.analyse-result{
    background-color: #4DAA7F;
}
.analyse-result td{
    color:#ffff!important;
    font-weight: 600;
}
</style>



@include('investor.header-investor')

<!-- Hotel Details area Starts -->
    <section class="hotel-details-area section-bg-2 pat-100 pab-100">
        <div class="container">
            <div class="row g-4">
                <div class="col-xl-8 col-lg-7">
                    <div class="details-left-wrapper">
                        <div class="details-contents bg-white radius-10">
                            <div class="details-contents-header ">
                                <div id="owl-demo" class="owl-carousel owl-theme ">
                                    @foreach ($property->images as $img)
                                    <div class="item"><img src="{{asset('storage/images/properties/'.$img->link)}}" alt="Owl Image"></div>
                                        @endforeach

                                </div>
                            </div>

                            <div class="hotel-view-contents">
                                <div class="hotel-view-contents-header">
                                <span class="hotel-view-contents-review"> {{number_format($property->obj_financement + $property->reserve),2}} € </span>
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

                            </div>


                        </div>

                        <div class="hotel-details-widget widget bg-white radius-10 mt-4">
                            <div class="hotel-view">

                                <div class="hotel-view-contents">
                                    <div class="hotel-view-contents-header">
                                        <h3 class="hotel-view-contents-title"> Stratégie d’investissement : </h3>
                                    </div>
                                    <div style="padding: 20px; padding-top:0px!important;">
                                      <p style="color: rgb(61, 74, 87);">{!! $property->stratégie_investissement !!}</p>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="card" style=" margin-bottom: 10px; margin-top:10px;background-color: #4daa7f;">
                            <div class="card-body">

                              <p class="card-text text-white">Tout investissement comporte des risques de perte en capital. Les performances présentées ne peuvent être garanties. Nous sommes à votre écoute pour répondre à toutes vos questions au <b>06 13 43 13 81</b>  ou par email à <b>contact@ethix-invest.com</b></p>

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
                                            <span class="single-reservation-details-subtitle" > Valeur d'Ethix</span>
                                            <h3 class="single-reservation-details-title" style="font-size: 25px; color:#4DAA7F"> {{$property->ethix_value}} €</h3>
                                        </div>
                                        <div class="single-reservation-details-item">
                                            <span class="single-reservation-details-subtitle">Valorisation</span>
                                            <h5 class="single-reservation-details-title" style="font-size: 25px; color:#4DAA7F"> {{ number_format($property->total_valorisation, 0, ',', ' ') }} €</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-reservation-item">
                                    <div class="single-reservation-details">
                                        <div class="single-reservation-details-item">
                                            <span class="single-reservation-details-subtitle"> Rentabilité cible</span>
                                            <h5 class="single-reservation-details-title" style="font-size: 25px;"> {{$property->profitability}}%</h5>
                                        </div>
                                        <div class="single-reservation-details-item">
                                            <span class="single-reservation-details-subtitle">Reste </span>
                                            <h5 class="single-reservation-details-title" style="font-size: 25px; color:#4DAA7F;" > {{$ethix_total}} <span style="font-size: 12px;">éthix</span> </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-reservation-item">
                                    <div class="single-reservation-details">
                                        <div class="single-reservation-details-item">
                                              <h6 class="mt-2 mb-1">{{$property->financing_percentage()}} % financé</h6>
                                            <div class="progress mb-2">
                                                <div class="progress-bar"  role="progressbar" style="width:{{$property->financing_percentage()}}%; background-color:#4daa7f" aria-valuenow="{{$property->financing_percentage()}}" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class=" col-6 btn-wrapper mt-4 ">
                                        <a href="{{url('app/achat-ethix/'.$property->id)}}" class="cmn-btn btn-bg-1 "> Achat d'un Ethix</a>
                                    </div>
                                    <div class=" col-6 btn-wrapper mt-4 ">
                                        <a href="{{url('app/engagement-ethix/'.$property->id)}}" class="cmn-btn btn-bg-1 red"> Je m'engage</a>
                                    </div>

                                </div>

                            </div>
                        </div>
                       {{--<div class="hotel-details-widget widget bg-white radius-10">
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
                        </div>--}}

                        <div class="hotel-details-widget widget bg-white radius-10">
                            <div class="hotel-view">
                                <div class="hotel-view-contents">
                                    <div class="hotel-view-contents-header">
                                        <h3 class="hotel-view-contents-title"> Diagnostic Technique </h3>
                                    </div>
                                    <div class="hotel-view-contents-middle">
                                        <p class="hotel-view-contents-title text-center"><b> Note Globale du DPE </b></p>
                                        @if($property->diagnostic == "A")
                                          <img src="{{asset('/dpe/a.jpg')}}" alt="">
                                        @elseif($property->diagnostic == "B")
                                          <img src="{{asset('/dpe/b.jpg')}}" alt="">
                                        @elseif($property->diagnostic == "C")
                                          <img src="{{asset('/dpe/c.jpg')}}" alt="">
                                        @elseif($property->diagnostic == "D")
                                          <img src="{{asset('/dpe/d.jpg')}}" alt="">
                                        @elseif($property->diagnostic == "E")
                                          <img src="{{asset('/dpe/e.jpg')}}" alt="">
                                        @endif
                                        <p class="hotel-view-contents-title text-center"><b> 328 </b> kwhEP/m2.an</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="hotel-details-widget widget bg-white radius-10">
                            <div class="hotel-view">

                                <div class="hotel-view-contents">
                                    <div class="hotel-view-contents-header">
                                        <h3 class="hotel-view-contents-title"> L’analyse Financière </h3>

                                    </div>
                                    <div class="hotel-view-contents-middle">
                                        <div>
                                            <h5 class="mt-2 mb-2" style="color: #4DAA7F"><b>Valorisation</b> </h5>
                                            <table class="table analyse">
                                                <tbody>
                                                  <tr>
                                                    <td>Objectif de financement</td>
                                                    <td>{{ number_format($property->obj_financement, 0, ',', ' ') }} €</td>
                                                  </tr>
                                                  <tr>
                                                    <td>Réserve Travaux</td>
                                                    <td>{{ number_format($property->reserve, 0, ',', ' ') }} €</td>
                                                  </tr>
                                                  <tr class="analyse-result">
                                                    <td style="height: 50px;">Valeur totale <br> <span style="font-size: 14px; font-weight:200">Nombre d'ethix :</span>  {{ $property->nbr_ethix }} </td>
                                                    <td>{{ number_format($property->total_valorisation, 0, ',', ' ') }}  €</td>
                                                  </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div>
                                            <h5 class="mt-2 mb-2" style="color: #4DAA7F"><b>Acquisition</b> </h5>
                                            <table class="table analyse">
                                                <tbody>
                                                  <tr>
                                                    <td>Prix d’acquisition</td>
                                                    <td >{{ number_format($property->acquisition_price, 0, ',', ' ') }} €</td>
                                                  </tr>
                                                  <tr>
                                                    <td>Rémunération Ethix</td>
                                                    <td>{{ number_format($property->remuneration_ethix, 0, ',', ' ') }} €</td>
                                                  </tr>
                                                  <tr>
                                                    <td>Frais de notaire</td>
                                                    <td>{{ number_format($property->notary_fees, 0, ',', ' ') }} €</td>
                                                  </tr>
                                                  <tr>
                                                    <td>Réserve Entretien (travaux)</td>
                                                    <td>{{ number_format($property->money_reserve_acquisition, 0, ',', ' ') }} €</td>
                                                  </tr>
                                                  <tr class="analyse-result">
                                                    <td>Cout d'acquisition total</td>
                                                    <td>{{ number_format($property->total_acquisition, 0, ',', ' ') }} €</td>
                                                  </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div>
                                            <h5 class="mt-2 mb-2" style="color: #4DAA7F"><b>Rendement locatif cible</b> </h5>
                                            <table class="table analyse">
                                                <tbody>
                                                  <tr>
                                                    <td>Loyers collectés /an</td>
                                                    <td >{{ number_format($property->rent_collected, 0, ',', ' ') }} €</td>
                                                  </tr>
                                                  <tr>
                                                    <td>Charges (frais copro, etc.)</td>
                                                    <td>{{ number_format($property->charge, 0, ',', ' ') }} €</td>
                                                  </tr>
                                                  <tr>
                                                    <td>Taxe foncière</td>
                                                    <td>{{ number_format($property->property_tax, 0, ',', ' ') }} €</td>
                                                  </tr>
                                                  <tr>
                                                    <td>Réserve argent (travaux)</td>
                                                    <td>{{ number_format($property->money_reserve_rendement, 0, ',', ' ') }} €</td>
                                                  </tr>
                                                  <tr class="analyse-result">
                                                    <td>Revenus reversés </td>
                                                    <td>{{ $property->rent_collected - ($property->charge + $property->property_tax + $property->money_reserve_rendement) }} €/an {{ number_format((($property->rent_collected - ($property->charge + $property->property_tax + $property->money_reserve_rendement)) / ($property->obj_financement + $property->reserve)) * 100, 2) }}(%)</td>
                                                  </tr>
                                                </tbody>
                                            </table>
                                        </div>
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



