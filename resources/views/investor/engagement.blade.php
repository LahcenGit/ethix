@extends('layouts.front')
@section('content')

<style>
    .engagement-input{
        width: 400px; /* Set the desired width */
        padding: 10px; /* Add padding for better appearance */
        border: 1px solid #4DAA7F;
    }

    p{
        color:#777!important;
    }
    .kbw-signature { width: 400px; height: 200px; }
</style>

@include('investor.header-investor')

   {{--@if($user->status == 0 || $user->status == 1)

    <div class="container d-flex justify-content-center " style="margin-top: 100px;margin-bottom: 100px;">
        <div class="login-wrapper login-shadow bg-white">
            <div class="login-wrapper-flex">
               <div class="login-wrapper-contents login-padding text-center">
                    <i style="color: #024670;" class="fas fa-frown-open fa-2xl" ></i>
                    <p style="color: #024670;" class="sigle-para mt-2">Désolé ! Votre compte n'est pas encore validé</p>
                </div>
            </div>
        </div>
    </div>--}} 

    <!-- Breadcrumb area end -->
        <div class="container d-flex justify-content-center " style="margin-top: 100px;margin-bottom: 100px;">
            <div class=" col-md-8 login-wrapper login-shadow bg-white">
                <div class="login-wrapper-flex">

                   <div class="login-padding">
                        <b style="color: #4DAA7F"> Merci de remplir et signer l'engagement.</b>
                        <h2 class="single-title mt-2"> <b> Engagement sous conditions de souscription à une émission d’obligations</b> </h2>
                         <form class="login-wrapper-contents-form custom-form" method="POST" action="{{url('app/engagement')}}">
                          @csrf
                          <p class="mt-4">Je soussigné,</p>
                          <div class=" single-input mt-2">
                             <input class="engagement-input" type="text"  value="{{Auth::user()->first_name}}" placeholder="Prénom" name="prenom"  required>
                          </div>
                          <div class=" single-input mt-2">
                             <input class="engagement-input" type="text" placeholder="Nom  "   value="{{Auth::user()->last_name}}" name="nom"  required>
                          </div>
                          <div class=" single-input mt-2">
                             <input class="engagement-input" type="text" placeholder="Adresse " name="adresse"  required>
                          </div>
                          <div class=" single-input mt-2">
                             <input class="engagement-input" type="date" placeholder="Date de naissance  " name="date_naissance"  required>
                          </div>
                          <div class=" single-input mt-2">
                             <input class="engagement-input" type="text" placeholder="Ville et département de naissance " name="ville"  required>
                          </div>
                          <p class="mt-3">
                            (a) du projet de termes et conditions reproduits en Annexe 1 (ci-après les « Termes et Conditions ») des Obligations de l’Opération à émettre par Ethix Invest, société par actions simplifiée au capital de 1 000 euros, dont le siège social est sis 35 bis Rue Léon Dauer 94350 Villiers-sur-Marne, immatriculée au registre du commerce et des sociétés de Créteil sous le numéro 921 209 284 dument représentée par son Président Monsieur Farid Benbedra ou toute autre entité ou société créée par cette-dernière (ci-après l’« Émetteur ») pour le financement de l’Opération envisagée par l’Émetteur,
                          </p>
                          <p>
                            M’engage à souscrire à l’émission de   <input style="width: 100px !important;" oninput="updateInputY(this.value)" class="engagement-input" type="number" placeholder="1" name="mtn"  required>
                            Obligations de l’Opération envisagée d’une valeur nominale d’un (1) euros chacune représentant une souscription d’un 
                            montant total de <input style="width: 100px !important;" id="inputY" class="engagement-input" type="text"  readonly> . Euros (la « Souscription »), sous réserves d’obtenir :
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
                            <div id="signaturePopup" style="display: none;">
                                <canvas id="signatureCanvas"></canvas>
                                <button id="saveSignatureBtn">Enregistrer la signature</button>
                            </div>

                            <button type="button" class="btn btn-warning  btn-lg mt-2" id="openSignatureBtn">Signez ici ! </button>
                            <div id="signature-section" style="display: none;">
                                <br/>
                                <div id="sig" ></div>
                                <br/>
                                <button id="clear" class="btn btn-danger btn-sm">Effacer la signature </button>
                                <textarea id="signature64" name="signed" style="display: none"></textarea>
                            </div>
                            
                            <input type = "hidden" value="{{$property->id}}" name = "property">
                            <button class="submit-btn w-100 mt-4" type="submit"> Envoyer l'engagement</button>
                         </form>

                    </div>


                </div>
            </div>
        </div>
@endsection

@push('script-signature')

<script>
    $('#openSignatureBtn').on('click', function() {
            $('#signature-section').toggle();
        });

        function updateInputY(value) {
            document.getElementById("inputY").value = value;
        }
</script>

<script>
        var sig = $('#sig').signature({syncField: '#signature64', syncFormat: 'PNG'});
        
    $('#clear').click(function(e) {
        e.preventDefault();
        sig.signature('clear');
        $("#signature64").val('');
    });


    </script>

@endpush

