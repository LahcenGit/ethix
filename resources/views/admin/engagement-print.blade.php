@extends('layouts.dashboard-admin')
@section('content')

<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4 >Bonjour, Bienvenue!</h4>
                    <span>Engagements</span>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/dashboard-admin')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="#">Engagements</a></li>
                </ol>
            </div>
        </div>
     
        <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
            <div class="d-flex align-items-center flex-wrap text-nowrap">
              <button type="button" class="btn btn-outline-primary btn-icon-text me-2 mb-2 mb-md-0  printMe">
                <i class="btn-icon-prepend " data-feather="printer"></i>
                Imprimer
              </button>
            </div>
        </div>

       
        <!-- row -->
        <div class="row ">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Détail Engagement </h4>
                    </div>
                    <div class="card-body">
                        
                        <div class="container d-flex justify-content-center " style="margin-top: 100px;margin-bottom: 100px;">
                            <div class=" col-md-8 login-wrapper login-shadow bg-white" id="printable">
                                <div class="login-wrapper-flex">
                
                                   <div class="login-padding">
                                        <h2 class="single-title mt-2"> <b> Engagement sous conditions de souscription à une émission d’obligations</b> </h2>
                                          <p class="mt-4">Je soussigné,</p>
                                          <p>
                                            <b>  Nom : {{$engagement->user->first_name}}</b> <br>
                                            <b>Prenom : {{$engagement->user->last_name}} </b> <br>
                                             <b>Adresse : {{$engagement->adresse}} </b><br>
                                            <b> Date de naissance : {{$engagement->date_naissance}} </b><br>
                                            <b> Ville : {{$engagement->ville}}</b>
                                          </p>
                                          
                                          <p class="mt-3">
                                            (a) du projet de termes et conditions reproduits en Annexe 1 (ci-après les « Termes et Conditions ») des Obligations de l’Opération à émettre par Ethix Invest, société par actions simplifiée au capital de 1 000 euros, dont le siège social est sis 35 bis Rue Léon Dauer 94350 Villiers-sur-Marne, immatriculée au registre du commerce et des sociétés de Créteil sous le numéro 921 209 284 dument représentée par son Président Monsieur Farid Benbedra ou toute autre entité ou société créée par cette-dernière (ci-après l’« Émetteur ») pour le financement de l’Opération envisagée par l’Émetteur,
                                          </p>
                                          <p>
                                            M’engage à souscrire à l’émission de   <b> {{$engagement->montant}} euro</b>
                                            Obligations de l’Opération envisagée d’une valeur nominale d’un (1) euros chacune représentant une souscription d’un 
                                            montant total de <b> {{$engagement->montant}} </b> euros (la « Souscription »), sous réserves d’obtenir :
                                          </p>
                                         
                                          <div class="conntainer mt-3">
                                             <p>
                                                -	La mise à disposition du document d’information synthétique qui sera rédigé par l’Émetteur à l’occasion de l’émission des Obligations (ci-après, le « DIS ») ;<br>
                                                -	Un extrait de la décision prise par l’organe compétent de l’Émetteur approuvant l’émission des Obligations  <br>
                                                -	La version définitive du Contrat d’Émission 
                                             </p>
                                          </div>
                                          
                                          <p class="mt-2">Aux fins des présentes, je prends acte que la Souscription ne sera effective qu’à compter de la date d’envoi par l’Émetteur d’une notification électronique attestant de la complétude du dossier de Souscription et se fera au moyen de la signature d’un bulletin de souscription. </p>
                                          <p class="mt-2" >Je prends également acte qu’en cas d’incomplétude du dossier de Souscription ou en cas de sursouscription, l’Émetteur retournera les fonds reçus sur le compte bancaire dont la souscription est provenue, sans qu’aucun frais ne soit prélevé́. Tel sera également le cas si l’Émetteur n’a pas pu réaliser l’Opération au-delà d’une date qui sera définie lors de la remise du dossier complet.  </p>
                                          <p class="mt-2">Je prends acte que mon engagement est valable pour une <b style="color: #4DAA7F"> durée de 6 mois.</b> </p>
                                         
                                          
                                          <!-- Pop-up avec un canvas pour la signature -->
                                           <div class="signature mt-2 mb-2">
                                            <b>Signature : </b> <br>
                                            <img src="{{$engagement->signature}}" alt="Image from Base64">
                                           </div>
                
                                    </div>
                
                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
       
</div>
</div>
@endsection

